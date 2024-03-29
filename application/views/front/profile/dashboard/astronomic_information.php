<?php 
    $astronomic_information = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'astronomic_information');
    $astronomic_information_data = json_decode($astronomic_information, true);
?>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_astronomic_information">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('astrology')?>
            </h3>
            <div class="pull-right">
                <button type="button" id="unhide_astronomic_information" <?php if ($privacy_status_data[0]['astronomic_information'] == 'yes') {?> style="display: none" <?php }?> class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('astronomic_information')">
                <i class="fa fa-unlock"></i> <?=translate('show')?>
                </button>
                <button type="button" id="hide_astronomic_information" <?php if ($privacy_status_data[0]['astronomic_information'] == 'no') {?> style="display: none" <?php }?> class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('astronomic_information')">
                <i class="fa fa-lock"></i> <?=translate('hide')?>
                </button>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('astronomic_information')">
                <i class="ion-edit"></i>
                </button>  
            </div>
        </div>
        <div class="table-full-width">
            <div class="table-full-width">
                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                    <tbody>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('sun_sign')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['sun_sign']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('rasi')?></span>
                            </td>
                            <td>
							<?=$this->Crud_model->get_type_name_by_id('rasi', $astronomic_information_data[0]['moon_sign']);?>
                            </td>
                        </tr>
                        <tr>
                           <td class="td-label">
                                <span><?php echo translate('city_of_birth')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['city_of_birth']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('time_of_birth')?></span>
                            </td>
                            <td>
                                <?=$astronomic_information_data[0]['time_of_birth']?>
                            </td>
                        </tr>
						 <tr>
                           <td class="td-label">
                                <span><?php echo translate('nakshatram')?></span>
                            </td>
                            <td>
							<?=isset($astronomic_information_data[0]['nakshatram'])?$this->Crud_model->get_type_name_by_id('nakshatram', $astronomic_information_data[0]['nakshatram']):"";?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('gothram')?></span>
                            </td>
                            <td>
                                <?=isset($astronomic_information_data[0]['gothram'])?$astronomic_information_data[0]['gothram']:""?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="edit_astronomic_information" style="display: none;">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('astrology')?>
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('astronomic_information')"><i class="ion-checkmark"></i></button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('astronomic_information')"><i class="ion-close"></i></button>
            </div>
        </div>
        
        <div class='clearfix'></div>
        <form id="form_astronomic_information" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="sun_sign" class="text-uppercase c-gray-light"><?php echo translate('sun_sign')?></label>
                        <input type="text" class="form-control no-resize" name="sun_sign" value="<?=$astronomic_information_data[0]['sun_sign']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="moon_sign" class="text-uppercase c-gray-light"><?php echo translate('rasi')?></label><span style="color:red;font-size:18px;">*</span>
						<?php 
                            echo $this->Crud_model->select_html('rasi', 'moon_sign', 'name', 'edit', 'form-control form-control-sm selectpicker moon_sign_edit', $astronomic_information_data[0]['moon_sign'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="time_of_birth" class="text-uppercase c-gray-light"><?php echo translate('time_of_birth')?></label><span style="color:red;font-size:18px;">*</span>
                        <input type="text" class="form-control no-resize" name="time_of_birth" value="<?=$astronomic_information_data[0]['time_of_birth']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="city_of_birth" class="text-uppercase c-gray-light"><?php echo translate('city_of_birth')?></label><span style="color:red;font-size:18px;">*</span>
                        <input type="text" class="form-control no-resize" name="city_of_birth" value="<?=$astronomic_information_data[0]['city_of_birth']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="nakshatram" class="text-uppercase c-gray-light"><?php echo translate('nakshatram')?></label><span style="color:red;font-size:18px;">*</span>
                       <?php 
                            echo $this->Crud_model->select_html('nakshatram', 'nakshatram', 'name', 'edit', 'form-control form-control-sm selectpicker nakshatram_edit', isset($astronomic_information_data[0]['nakshatram'])?$astronomic_information_data[0]['nakshatram']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="gothram" class="text-uppercase c-gray-light"><?php echo translate('gothram')?></label><span style="color:red;font-size:18px;">*</span>
                        <input type="text" class="form-control no-resize" name="gothram" value="<?=isset($astronomic_information_data[0]['gothram'])?$astronomic_information_data[0]['gothram']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>