
<?php if ($modal == 1) { ?>
    <div id="modalLanguage"  class="modal fade product_view in" role="dialog">
        <div class="modal-dialog modal-full-height modal-top" role="document">
            <div class="modal-content model_content_modal_login">
                <div class="modal-body m-login-body">
                    <div id="video_text_container">
                        <section class="m-openfirst">
                            <div class="container">
                                <div class="row">


                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="ModalContent">
                                        <p class="m-openFirstTime-choose-language-text-p">Please choose a language </p>
                                        <p class="m-openFirstTime-choose-language-text-p">يرجى اختيار اللغة</p>
                                        <br />
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <center>
                                                <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                                                    <a class="selectLanguage" href="/langandfirstopen?language=en-US&amp;action=index">
                                                        <div class='m-firstOpen-flag-title-container' id='m-firstOpen-flag-en'>
                                                            <span class='flag-en'></span>
                                                            <span class='flag-title'>English</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class='col-xs-12 col-sm-12 col-md-6 col-lg-6'>
                                                    <a class="selectLanguage"  href="/langandfirstopen?language=ar-AR&amp;action=index">
                                                        <div class='m-firstOpen-flag-title-container' id='m-firstOpen-flag-ar'>
                                                            <span class='flag-ar'></span>
                                                            <span class='flag-title' style='font-family: helvetica_arabic;'>العربية</span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </center>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>

    <?php if($lang == 1) { ?>
        <div class="container">
        <?php } else { ?>
            <div class="container" dir="rtl">
            <?php } ?>

            <!-- Projects section v.4 -->
            <section class="text-center my-5">

                <!-- Section heading -->
                <h2 class="h1-responsive font-weight-bold text-center my-5"><?= yii::t('app', '911 Restaurants') ?></h2>
                <!-- Section description -->
                <p class="grey-text text-center w-responsive mx-auto mb-5"><?= yii::t('app', 'Select What Do you want to do') ?></p>

                <!-- Grid row -->
                <div class="row">


                    <!-- Grid column -->
                    <div class="col-md-6 mb-md-0 mb-4">
                        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20%2873%29.jpg);">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h6 class="pink-text">
                                        <i class="fas fa-chart-pie"></i>
                                        <strong> Marketing</strong>
                                    </h6>
                                    <h3 class="py-3 font-weight-bold">
                                        <strong>This is card title</strong>
                                    </h3>
                                    <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fugiat,
                                        laboriosam, voluptatem, optio vero odio nam sit officia
                                    </p>
                                    <a class="btn btn-pink btn-rounded btn-md"><i class="fas fa-clone left"></i> View project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6">
                        <div class="card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20%2847%29.jpg);">
                            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4 rounded">
                                <div>
                                    <h6 class="green-text">
                                        <i class="fas fa-eye"></i>
                                        <strong> <?= yii::t('app', 'Softwares') ?></strong>
                                    </h6>
                                    <h3 class="py-3 font-weight-bold">
                                        <strong><?= yii::t('app', 'Feedback System') ?></strong>
                                    </h3>
                                    <p class="pb-3">
                                        <?= yii::t('app', 'feedback details') ?>
                                    </p>
                                    <a class="btn btn-success btn-rounded btn-md" href="/select-feedback"><i class="fas fa-clone left"></i> <?= yii::t('app', 'Start Software') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Projects section v.4 -->
        </div>

    <?php } ?>

