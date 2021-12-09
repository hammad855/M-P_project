

// Job Post Form
// Clone Data
var num = 3;
$('[data-skillquestionclone]').on('click', function(e) {
    num++;
    $(this).toggleClass('btn-outline');
    var target = $(this).data('skillquestionclone');
    console.log(target);
    // $("."+target + " .panel").clone().appendTo('<input type=');
    $("."+target + " .panel").clone().appendTo('.question-plan');

    // var newquestion = '<div class="panel panel-info customQuestion"><div class="panel-heading">Write a custom screening question.<div class="pull-right"><a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div></div><div class="panel-wrapper collapse in" aria-expanded="true"><div class="panel-body"><div class="row"><div class="col-md-12"><div class="form-group"><label>Text area</label><div><textarea class="form-control" rows="1" placeholder="Try asking a question like, “Will you be able to bring your own device?”" style="resize:none;"></textarea></div></div></div><div class="col-md-4"><label>Response type: </label><div id="bloodhound"><select class="form-control"><option>Yes / No</option><option>Numeric</option></select></div></div><div class="col-md-5"><label class="control-label">Ideal Answer: </label><div class="row align-items-center"><div class="col-xs-6"><div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default btn-outline bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3" type="text" value="1" min="1" max="100" class="text-center form-control" name="tch3" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default btn-outline bootstrap-touchspin-up" type="button">+</button></span></div></div><div class="col-xs-6  my-pt-3"><span>minimum</span></div></div></div><div class="col-md-3"><div class="checkbox checkbox-inverse my-pt-4"><input id="checkbox6c" type="checkbox"><label for="checkbox6c"> Must-have qualification </label></div></div></div></div></div></div>';

    // var newquestion = '<div class="panel panel-info customQuestion"><div class="panel-heading">Write a custom screening question.<div class="pull-right"><a href="#" data-perform="panel-dismiss"><i class="ti-close"></i></a></div></div><div class="panel-wrapper collapse in" aria-expanded="true"><div class="panel-body"><div class="row"><div class="col-md-12"><div class="form-group"><label>Text area</label><div><textarea class="form-control" rows="1" name="customQuestions['+num+'].question" placeholder="Try asking a question like, “Will you be able to bring your own device?”" style="resize:none;"></textarea></div></div></div><div class="col-md-4"><label>Response type: </label><div id="bloodhound"><select class="form-control"><option>Yes / No</option><option>Numeric</option></select></div></div><div class="col-md-5"><label class="control-label">Ideal Answer: </label><div class="row align-items-center"><div class="col-xs-6"><div class="input-group bootstrap-touchspin"><span class="input-group-btn"><button class="btn btn-default btn-outline bootstrap-touchspin-down" type="button">-</button></span><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input id="tch3" type="text" value="1" min="1" max="100" class="text-center form-control" name="tch3" data-bts-button-down-class="btn btn-default btn-outline" data-bts-button-up-class="btn btn-default btn-outline" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn"><button class="btn btn-default btn-outline bootstrap-touchspin-up" type="button">+</button></span></div></div><div class="col-xs-6  my-pt-3"><span>minimum</span></div></div></div><div class="col-md-3"><div class="checkbox checkbox-inverse my-pt-4"><input id="checkbox6c" type="checkbox"><label for="checkbox6c"> Must-have qualification </label></div></div></div></div></div></div>';


});

// Tabbing JS
$('[data-skillquestion]').on('click', function(e) {
    $(this).removeClass('btn-outline');
    $(this).find('.fa').addClass('fa-check');
    $(this).find('.fa').removeClass('fa-plus');

    var target = $(this).data('skillquestion');
    // $('.' + target + ' .panel').clone().appendTo('.question-plan');
    // $('.' + target).removeClass(target);

    // $('.' + target).css('display', 'block');
    $('.' + target).fadeIn();

});


$('[data-skillbtn]').on('click', function(e) {
    var target = $(this).data('skillbtn');
    
    $('.' + target).addClass('btn-outline');
    $('.' + target).find('.fa').removeClass('fa-check');
    $('.' + target).find('.fa').addClass('fa-plus');

    var htar = $('.' + target).data('skillquestion');

    // $('.' + htar).css('display', 'none');
    $('.' + htar).fadeOut();

});

