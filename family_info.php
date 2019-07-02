<?php 
    $family_info = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'family_info');
    $family_info_data = json_decode($family_info, true);
?>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_family_info">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('family_information')?>
            </h3>
            <div class="pull-right">
                <button type="button" id="unhide_family_info" <?php if ($privacy_status_data[0]['family_info'] == 'yes') {?> style="display: none" <?php }?> class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('family_info')">
                <i class="fa fa-unlock"></i> <?=translate('show')?>
                </button>
                <button type="button" id="hide_family_info" <?php if ($privacy_status_data[0]['family_info'] == 'no') {?> style="display: none" <?php }?> class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('family_info')">
                <i class="fa fa-lock"></i> <?=translate('hide')?>
                </button>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('family_info')">
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
                                <span><?php echo translate('father name')?></span>
                            </td>
                            <td>
                                <?=$family_info_data[0]['father']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('mother name')?></span>
                            </td>
                            <td>
                                <?=$family_info_data[0]['mother']?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('number of sisters')?></span>
                            </td>
							<?php 
							if (isset($family_info_data[0]['no_sister']) && 
							$family_info_data[0]['no_sister'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['no_sister']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							<td class="td-label">
                                <span><?php echo translate('number of brothers')?></span>
                            </td>
							<?php 
							if (isset($family_info_data[0]['no_brother']) && 
							$family_info_data[0]['no_brother'] != '') {
							?>
							<td>
                                <?=$family_info_data[0]['no_brother']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('name of sisters')?></span>
                            </td>
							<?php 
							if (isset($family_info_data[0]['name_sister']) && 
							$family_info_data[0]['name_sister'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['name_sister']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                            <td class="td-label">
                                <span><?php echo translate('name of brothers')?></span>
                            </td>
							<?php 
							if (isset($family_info_data[0]['name_brother']) && 
							$family_info_data[0]['name_brother'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['name_brother']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        </tr>
				    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="edit_family_info" style="display: none;">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('family_information')?>
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('family_info')"><i class="ion-checkmark"></i></button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('family_info')"><i class="ion-close"></i></button>
            </div>
        </div>
        
        <div class='clearfix'></div>
        <form id="form_family_info" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="father" class="text-uppercase c-gray-light"><?php echo translate('father name')?></label>
                        <input type="text" class="form-control no-resize" name="father" value="<?=$family_info_data[0]['father']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="mother" class="text-uppercase c-gray-light"><?php echo translate('mother name')?></label>
                        <input type="text" class="form-control no-resize" name="mother" value="<?=$family_info_data[0]['mother']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="no_sister" class="text-uppercase c-gray-light"><?php echo translate('Number of sisters')?></label>
                        <input type="text" class="form-control no-resize" name="no_sister" value="<?=isset($family_info_data[0]['no_sister'])?$family_info_data[0]['no_sister']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="no_brother" class="text-uppercase c-gray-light"><?php echo translate('Number of brothers')?></label>
                        <input type="text" class="form-control no-resize" name="no_brother" value="<?=isset($family_info_data[0]['no_brother'])?$family_info_data[0]['no_brother']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="name_sister" class="text-uppercase c-gray-light"><?php echo translate('Name of sisters')?></label>
                        <input type="text" class="form-control no-resize" name="name_sister" value="<?=isset($family_info_data[0]['name_sister'])?$family_info_data[0]['name_sister']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="name_brother" class="text-uppercase c-gray-light"><?php echo translate('Name of brothers')?></label>
                        <input type="text" class="form-control no-resize" name="name_brother" value="<?=isset($family_info_data[0]['name_brother'])?$family_info_data[0]['name_brother']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
		</form>
    </div>
</div>