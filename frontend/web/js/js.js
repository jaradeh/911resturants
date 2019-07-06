$('#branchSelector').on('change', function () {
    var branchID = $("#branchSelector option:selected").text();
    $('#modalBranchNameHere').text(branchID);
    $('#branchModal').modal();
});
$('#SaveBranchIP').on('click', function () {
    var branchID = $("#branchSelector option:selected").val();

    if (branchID < 1) {
        $('#branchModal').modal('toggle');
        $('#branchModalError').modal();
    } else {
        $('#branchModal').modal('toggle');
        $('#branchModalSubmit').modal({backdrop: 'static', keyboard: false});
        $.ajax({
            type: "POST",
            url: "/setbranchip",
            data: {id: branchID},
            success: function (data) {
                if (data == 1) {
                    window.location = "/select-feedback";
                } else {
                    $('#branchModalSubmit').modal('toggle');
                    $('#branchModalError').modal();
                }
            }
        });
    }
});

$('.clickOnFace').on('click', function () {
    var id = this.id;
    $('#faceValue').val(id);

    //Remove Start
    $('#faceContainer_1').removeClass('faceContainerActive');
    $('#faceContainer_2').removeClass('faceContainerActive');
    $('#faceContainer_3').removeClass('faceContainerActive');
    $('#faceContainer_4').removeClass('faceContainerActive');
    $('#faces_1').removeClass('facesActive');
    $('#faces_2').removeClass('facesActive');
    $('#faces_3').removeClass('facesActive');
    $('#faces_4').removeClass('facesActive');
    $('#smallFaceText_1').removeClass('smallFaceTextActive');
    $('#smallFaceText_2').removeClass('smallFaceTextActive');
    $('#smallFaceText_3').removeClass('smallFaceTextActive');
    $('#smallFaceText_4').removeClass('smallFaceTextActive');
    //Remove End

    //Add Start
    $('#faceContainer_1').addClass('faceContainer');
    $('#faceContainer_2').addClass('faceContainer');
    $('#faceContainer_3').addClass('faceContainer');
    $('#faceContainer_4').addClass('faceContainer');
    $('#faces_1').addClass('faces');
    $('#faces_2').addClass('faces');
    $('#faces_3').addClass('faces');
    $('#faces_4').addClass('faces');
    $('#smallFaceText_1').addClass('smallFaceText');
    $('#smallFaceText_2').addClass('smallFaceText');
    $('#smallFaceText_3').addClass('smallFaceText');
    $('#smallFaceText_4').addClass('smallFaceText');
    //Add End

    $('#faceContainer_' + id).removeClass('faceContainer');
    $('#faces_' + id).removeClass('faces');
    $('#smallFaceText_' + id).removeClass('smallFaceText');





    $('#faceContainer_' + id).addClass('faceContainerActive');
    $('#faces_' + id).addClass('facesActive');
    $('#smallFaceText_' + id).addClass('smallFaceTextActive');
});

$('.slide').on('click', function () {
//   $('#rateSmileDiv').hide();
    $("#main-ctr").animate({
        'margin-top': 0,
    }, "slow");
    $('#fillFrom').slideDown(600);
});






$('#modalLanguage').modal();