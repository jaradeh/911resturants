<?php

namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\Branches;

/**
 * Site controller
 */
class SiteController extends Controller {

    public function init() {
        parent::init();
        $session = Yii::$app->session;

//        $session['firstOpenModal'] = 1;
        if (isset($_GET['language'])) {
            $lang = $_GET['language'];
            $action = $_GET['action'];
            $session['language'] = $lang;
            if ($lang == "en-US") {
                $lang_id = "1";
            }
            if ($lang == "fr-FR") {
                $lang_id = "2";
            }
            if ($lang == "ar-AR") {
                $lang_id = "3";
            }
            $session['language_id'] = $lang_id;

            if ($action == "index") {
                $this->goHome();
            } else {
                $this->redirect($action);
            }
        }
        if ($session['language'] == "" || empty($session['language'])) {
            $session['language'] = "en-US";
            $session['language_id'] = "1";
        }
        Yii::$app->language = $session['language'];

        if ($session['firstOpenModal'] == "" || empty($session['firstOpenModal'])) {
            $session['firstOpenModal'] = 1;
        }

        if ($session['firstOpenModal'] == "" || empty($session['firstOpenModal']) || $session['firstOpenModal'] == 1) {
            $session['firstOpenModal'] == 1;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function beforeAction($action) {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function getUserIpAddr() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    public function actionLangandfirstopen() {

        $session = Yii::$app->session;
        $session['firstOpenModal'] = 2;
        if (isset($_GET['language'])) {
            $lang = $_GET['language'];
            $action = $_GET['action'];
            $session['language'] = $lang;
            if ($lang == "en-US") {
                $lang_id = "1";
                Yii::$app->language = "en-US";
            }
            if ($lang == "ar-AR") {
                $lang_id = "2";
                Yii::$app->language = "ar-AR";
            }
            $session['language_id'] = $lang_id;

            $this->goHome();
        }
        if ($session['language'] == "" || empty($session['language'])) {
            $session['language'] = "en-US";
            $session['language_id'] = "1";
        }
        Yii::$app->language = $session['language'];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        $modalSession = $session['firstOpenModal'];
        return $this->render('index', [
                    'modal' => $modalSession,
                    'lang' => $lang_id,
        ]);
    }

    public function actionSelectFeedback() {
        $session = Yii::$app->session;
        $lang_id = $session['language_id'];
        if (Yii::$app->user->isGuest) {
            return $this->redirect('/login');
        }
        $getIp = $this->getUserIpAddr();
        $checkIfIP = Branches::find()->where(['ip_address' => $getIp])->one();
        if ($checkIfIP) {
            if ($checkIfIP) {
                if ($checkIfIP['expire'] > time()) {
//                die("Expire Date : " . date('Y-m-d',$checkIfIP['expire'])." <br />Today Date : ".date('Y-m-d',time()));
                    return $this->render('feedback', [
                                'branche' => $checkIfIP,
                                'lang' => $lang_id,
                    ]);
                } else {
                    return $this->redirect('/');
                }
            } else {
                return $this->redirect('/');
            }
        } else {
            $getBranches = Branches::find()->all();
            return $this->render('select-feedback', [
                        'branches' => $getBranches,
                        'lang' => $lang_id,
            ]);
        }
    }

    public function actionFeedback() {
        return $this->render('feedback');
    }

    public function actionSetbranchip() {
        if (isset($_POST['id'])) {
            $getIp = $this->getUserIpAddr();
            $id = $_POST['id'];
            $expire = strtotime('+1 years');
            $date = date('Y-m-d', $expire);

            $branchModel = $this->findModel($id);
            $branchModel->ip_address = $getIp;
            $branchModel->expire = $expire . "";
            if ($branchModel->save()) {
                sleep(2);
                return true;
            } else {
                sleep(2);
                return false;
            }
        } else {
            return $this->redirect(['/']);
        }
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout() {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup() {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->goHome();
        }

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset() {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
                    'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token) {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
                    'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token) {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail() {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
                    'model' => $model
        ]);
    }

    protected function findModel($id) {
        if (($model = Branches::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
