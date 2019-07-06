<?php
/* @var $this yii\web\View */

$this->title = yii::t('app', '911 Restaurants');
?>
<?php if ($lang == 1) { ?>
    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <br /><br />
                <div class="jumbotron text-center">
                    <h1><?= yii::t('app', '911 Restaurants') ?></h1>
                    <p><?= yii::t('app', 'Please select a branch to start feedback system') ?></p> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <select class="browser-default custom-select custom-select-lg mb-3 form-control " id="branchSelector">
                    <option value="0" selected>Please Select Branch</option>
                    <?php foreach ($branches as $branch => $data) { ?>
                        <option value="<?php echo $data['id'] ?>"><?php echo $data['name'] ?></option>
                    <?php } ?>
                </select>
            </div>


            <div class="modal fade" id="branchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100" id="myModalLabel">Select Branch</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p classclass="pt-3 pr-2">
                                You have selected this branch as : <b id="modalBranchNameHere"></b>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" id="SaveBranchIP">Are you sure ?</button>
                            <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="branchModalSubmit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog cascading-modal" role="document">
                    <div class="modal-content" style="background-color: transparent !important;box-shadow: none;">
                        <div class="modal-body">
                            <center>
                                <br /><br />
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="branchModalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100" id="myModalLabel">Error Branch</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger"> Something went wrong! Please try again later. </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">OK</button>
                            <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
<?php } else { ?>

    <div class="container" dir="rtl">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <br /><br />
                <div class="jumbotron text-center">
                    <h1><?= yii::t('app', '911 Restaurants') ?></h1>
                    <p><?= yii::t('app', 'Please select a branch to start feedback system') ?></p> 
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <select class="browser-default custom-select custom-select-lg mb-3 form-control " id="branchSelector">
                    <option value="0" selected><?= yii::t('app', 'Please Select Branch') ?></option>
                    <?php foreach ($branches as $branch => $data) { ?>
                        <option value="<?php echo $data['id'] ?>"><?php echo $data['ar_name'] ?></option>
                    <?php } ?>
                </select>
            </div>


            <div class="modal fade" id="branchModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100" id="myModalLabel">Select Branch</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p classclass="pt-3 pr-2">
                                You have selected this branch as : <b id="modalBranchNameHere"></b>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" id="SaveBranchIP">Are you sure ?</button>
                            <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="branchModalSubmit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog cascading-modal" role="document">
                    <div class="modal-content" style="background-color: transparent !important;box-shadow: none;">
                        <div class="modal-body">
                            <center>
                                <br /><br />
                                <div class="spinner-border text-primary" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="branchModalError" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title w-100" id="myModalLabel">Error Branch</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-danger"> Something went wrong! Please try again later. </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success btn-sm" data-dismiss="modal">OK</button>
                            <button type="button" class="btn btn-link btn-sm" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
<?php } ?>