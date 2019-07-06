<div id="main-ctr"  class="standard" dir="rtl">




    <div id="rateSmileDiv" >
        <svg xmlns="http://www.w3.org/2000/svg" width="251" height="210" viewBox="0 0 151 110">
            <g id="Page-1" fill="none" fill-rule="evenodd">
                <circle id="face" cx="75" cy="55" r="50" fill="#FFEB97"/>
                <g id="face-components">
                    <path id="wk-l-eye" stroke="#000" stroke-width="3" d="M55 59.12C55 54.7 51.418 51 47 51s-8 3.7-8 8.12" stroke-linecap="round"/>
                    <path id="wk-r-eye" stroke="#000" stroke-width="3" d="M110 59c0-4.418-3.582-8.12-8-8.12s-8 3.702-8 8.12" stroke-linecap="round"/>
                    <path id="sm-mouth-3" stroke="#000" stroke-width="3" d="M47.34 72.117s6.627 11.526 26.77 11.526 28.482-12.926 28.482-12.926" stroke-linecap="round"/>
                    <path id="hp-love" fill="#F9767E" d="M32.72 45.607h.003L31.42 56.22l-10.612-1.303c-1.4-.167-2.735-.87-3.67-2.07-1.864-2.383-1.44-5.827.944-7.69 1.122-.878 2.48-1.248 3.797-1.146.2-1.34.893-2.608 2.045-3.508 2.384-1.863 5.828-1.44 7.69.945.96 1.226 1.313 2.733 1.106 4.16z"/>
                    <path id="sm-mouth-2" stroke="#000" stroke-width="3" d="M57.786 79.82s12.038 6.573 26.507.926c14.47-5.647 17.3-18.03 17.3-18.03" stroke-linecap="round"/>
                    <path id="sm-mouth-1" stroke="#000" stroke-width="3" d="M63.5 81.903s2.91 2.202 11.502 2.202c8.59 0 11.502-2.202 11.502-2.202" stroke-linecap="round"/>
                    <path id="st-mouth" stroke="#000" stroke-width="3" d="M61.5 76.903h27.003" stroke-linecap="round"/>
                    <path id="st-l-eye" stroke="#000" stroke-width="5" d="M47 63.5c1.38 0 2.5-1.12 2.5-2.503S48.38 58.5 47 58.5s-2.5 1.114-2.5 2.497c0 1.382 1.12 2.503 2.5 2.503z" stroke-linecap="round"/>
                    <path id="st-r-eye" stroke="#000" stroke-width="5" d="M101.5 64c1.38 0 2.5-1.12 2.5-2.503S102.88 59 101.5 59 99 60.114 99 61.497C99 62.88 100.12 64 101.5 64z" stroke-linecap="round"/>
                    <path id="hg-l-eye" stroke="#000" stroke-width="5" d="M47 53.5c1.38 0 2.5-1.12 2.5-2.503S48.38 48.5 47 48.5s-2.5 1.114-2.5 2.497c0 1.382 1.12 2.503 2.5 2.503z" stroke-linecap="round"/>
                    <path id="hg-r-eye" stroke="#000" stroke-width="5" d="M101.5 54c1.38 0 2.5-1.12 2.5-2.503S102.88 49 101.5 49 99 50.114 99 51.497C99 52.88 100.12 54 101.5 54z" stroke-linecap="round"/>
                    <path id="rg-mouth" stroke="#000" stroke-width="3" d="M60.9 79.478s4.24-3.546 13.496-3.546c9.255 0 14.503 3.546 14.503 3.546" stroke-linecap="round"/>
                    <path id="rg-l-eye" stroke="#000" stroke-width="3" d="M39.5 57.5s4.85 1.294 8.11 2.665c3.26 1.372 6.89 3.335 6.89 3.335" stroke-linecap="round"/>
                    <path id="rg-r-eye" stroke="#000" stroke-width="3" d="M108.5 57.5s-4.85 1.294-8.11 2.665C97.13 61.537 93.5 63.5 93.5 63.5" stroke-linecap="round"/>
                    <path id="mouth" stroke="#000" stroke-width="3" d="M61.5 76.903h27.003" stroke-linecap="round"/>
                    <path id="l-eye" stroke="#000" stroke-width="5" d="M47 63.5c1.38 0 2.5-1.12 2.5-2.503S48.38 58.5 47 58.5s-2.5 1.114-2.5 2.497c0 1.382 1.12 2.503 2.5 2.503z" stroke-linecap="round"/>
                    <path id="r-eye" stroke="#000" stroke-width="5" d="M101.5 64c1.38 0 2.5-1.12 2.5-2.503S102.88 59 101.5 59 99 60.114 99 61.497C99 62.88 100.12 64 101.5 64z" stroke-linecap="round"/>
                </g>
            </g>
        </svg>
        <p><?= yii::t('app', 'How do you rate our services ?') ?></p>
        <div class="buttons-ctr">
            <button class="wink slide" id="rage"><?= yii::t('app', 'POOR') ?></button>
            <button class="standard slide" id="average"><?= yii::t('app', 'AVERAGE') ?></button>
            <button class="wink slide" id="wink"><?= yii::t('app', 'GOOD') ?></button>
            <button class="wink slide" id="happy"><?= yii::t('app', 'EXCELLENT') ?></button>
        </div>
    </div>






    <div class="container" id="fillFrom" style="display: none;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <!--Section: Contact v.2-->
                <section class="">


                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-12 mb-md-0 ">
                            <form id="contact-form" name="contact-form" action="" method="POST" onsubmit="return(false)">

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="text" id="name" name="name" class="form-control textChange" required="">
                                                <label for="name" class=""><?= yii::t('app', 'Full Name') ?></label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <input type="email" id="email" name="email" class="form-control textChange" required="">
                                                <label for="email" class=""><?= yii::t('app', 'Email') ?></label>
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <input type="number" id="number" name="number" class="form-control textChange" required="">
                                                <label for="number" class=""><?= yii::t('app', 'Phone Number') ?></label>
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                            <label for="message"><?= yii::t('app', 'Note\Message') ?></label>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->

                            </form>

                            <div class="langDirection">
                                <button class="btn btn-primary btn-sm" type="submit"><?= yii::t('app', 'Submit form') ?></button>
                            </div>
                            <div class="status"></div>
                        </div>
                        <!--Grid column-->


                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </div>
    </div>












</div>

<div id="smileRotate" style="display: none;">
    <div id="main-ctr">
        <svg xmlns="http://www.w3.org/2000/svg" width="294" height="241" viewBox="0 0 294 241">
            <g id="group" fill="none" fill-rule="evenodd">
                <g id="smile">
                    <path id="smile-up" stroke="rgb(255, 235, 151)" stroke-width="30" d="M238.797 75.04C222.935 40.772 188.243 17 148 17c-39.62 0-73.857 23.04-90.046 56.453" stroke-linecap="round"/>
                    <path id="smile-down" stroke="rgb(255, 235, 151)" stroke-width="30" d="M238.843 166c-15.863 34.268-50.554 58.04-90.797 58.04-39.62 0-73.857-23.04-90.046-56.453" stroke-linecap="round"/>
                    <path id="bg" fill="rgb(255, 235, 151)" d="M43 2h211v237H43z" opacity=".1"/>
                </g>
                <path id="eye-left" fill="rgb(255, 235, 151)" d="M148 173c29.27 0 53-23.73 53-53s-23.73-53-53-53c-4.956 0-9.753.68-14.303 1.952C111.374 75.194 95 95.685 95 120c0 29.27 23.73 53 53 53z"/>
                <path id="eye-right" fill="rgb(255, 235, 151)" d="M148 173c29.27 0 53-23.73 53-53s-23.73-53-53-53c-4.016 0-7.927.447-11.687 1.293C112.665 73.615 95 94.745 95 120c0 29.27 23.73 53 53 53z"/>
                <path id="eye-to-left" fill="rgb(255, 235, 151)" d="M106 143c12.15 0 22-9.85 22-22s-9.85-22-22-22c-2.028 0-3.992.274-5.857.788C90.836 102.352 84 110.878 84 121c0 12.15 9.85 22 22 22z"/>
                <path id="eye-to-right" fill="rgb(255, 235, 151)" d="M187 143c12.15 0 22-9.85 22-22s-9.85-22-22-22c-3.286 0-6.404.72-9.204 2.012C170.242 104.496 165 112.136 165 121c0 12.15 9.85 22 22 22z"/>
            </g>
        </svg>
        <h1 class="hello"  id="rotateName">Thank you, Alaa Jaradeh!</h1>
    </div>
</div>