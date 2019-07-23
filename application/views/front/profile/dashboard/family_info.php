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
				<?php if($get_member[0]->is_submit==0){ ?>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('family_info')">
                <i class="ion-edit"></i>
                </button> 
				<?php } ?>
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
                                <span><?php echo translate('fathers phoneNumber')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['fathernumber']) && 
							$family_info_data[0]['fathernumber'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['fathernumber']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							<td class="td-label">
                                <span><?php echo translate('mothers phoneNumber')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['mothernumber']) && 
							$family_info_data[0]['mothernumber'] != '') {
							?>
							<td>
                                <?=$family_info_data[0]['mothernumber']?><!--added this change newly-->
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
                                <span><?php echo translate('fathers fatherName')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['ffatherName']) && 
							$family_info_data[0]['ffatherName'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['ffatherName']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							<td class="td-label">
                                <span><?php echo translate('fathers motherName')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['fmotherName']) && 
							$family_info_data[0]['fmotherName'] != '') {
							?>
							<td>
                                <?=$family_info_data[0]['fmotherName']?><!--added this change newly-->
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
                                <span><?php echo translate('mothers fatherName')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['mfatherName']) && 
							$family_info_data[0]['mfatherName'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['mfatherName']?><!--added this change newly-->
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							<td class="td-label">
                                <span><?php echo translate('mothers motherName')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['mmotherName']) && 
							$family_info_data[0]['mmotherName'] != '') {
							?>
							<td>
                                <?=$family_info_data[0]['mmotherName']?><!--added this change newly-->
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
                                <span><?php echo translate('number of sisters')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['no_sister']) && 
							$family_info_data[0]['no_sister'] != '') {
							?>
                            <td>
                                <?=$family_info_data[0]['no_sister']?><!--added this change newly-->
                            </td>
							<?php 
							if (!empty($family_info_data[0]['name_sister1']) && 
							$family_info_data[0]['name_sister1'] != '') {
							?>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('name of sisters1')?></span>
                            </td>
                            <td>
                                <?=$family_info_data[0]['name_sister1']?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('sister1 married?Y/N')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['sister1married'])?$family_info_data[0]['sister1married']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('Husbandname of sister1')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['name_sister1husband'])?$family_info_data[0]['name_sister1husband']:""?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('address of sister1')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['address_sister1'])?$family_info_data[0]['address_sister1']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('phoneNumber of sister1')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['number_sister1'])?$family_info_data[0]['number_sister1']:""?><!--added this change newly-->
                            </td>
							</tr>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							<?php 
							if (!empty($family_info_data[0]['name_sister2']) && 
							$family_info_data[0]['name_sister2'] != '') {
							?>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('name of sisters2')?></span>
                            </td>
                            <td>
                                <?=$family_info_data[0]['name_sister2']?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('sister2 married?Y/N')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['sister2married'])?$family_info_data[0]['sister2married']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('Husbandname of sister2')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['name_sister2husband'])?$family_info_data[0]['name_sister2husband']:""?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('address of sister2')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['address_sister2'])?$family_info_data[0]['address_sister2']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('phoneNumber of sister2')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['number_sister2'])?$family_info_data[0]['number_sister2']:""?><!--added this change newly-->
                            </td>
							</tr>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
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
                                <span><?php echo translate('number of brothers')?></span>
                            </td>
							<?php 
							if (!empty($family_info_data[0]['no_brother']) && 
							$family_info_data[0]['no_brother'] != '') {
							?>
							<td>
                                <?=$family_info_data[0]['no_brother']?><!--added this change newly-->
                            </td>
							<?php 
							if (!empty($family_info_data[0]['name_brother1']) && 
							$family_info_data[0]['name_brother1'] != '') {
							?>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('name of brother1')?></span>
                            </td>
                            <td>
                                <?=$family_info_data[0]['name_brother1']?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('brother1 married?Y/N')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['brother1married'])?$family_info_data[0]['brother1married']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('wifeName of brother1')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['name_brother1wife'])?$family_info_data[0]['name_brother1wife']:""?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('address of brother1')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['address_brother1'])?$family_info_data[0]['address_brother1']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('workplace of brother1')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['brother1working'])?$family_info_data[0]['brother1working']:""?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('phoneNumber of brother1')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['number_brother1'])?$family_info_data[0]['number_brother1']:""?><!--added this change newly-->
                            </td>
							</tr>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
							<?php 
							if (!empty($family_info_data[0]['name_brother2']) && 
							$family_info_data[0]['name_brother2'] != '') {
							?>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('name of brother2')?></span>
                            </td>
                            <td>
                                <?=$family_info_data[0]['name_brother2']?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('brother2 married?Y/N')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['brother2married'])?$family_info_data[0]['brother2married']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('wifename of brother2')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['name_brother2wife'])?$family_info_data[0]['name_brother2wife']:""?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('address of brother2')?></span>
                            </td>
							<td>
							<?=!empty($family_info_data[0]['address_brother2'])?$family_info_data[0]['address_brother2']:""?>
							</td>
							</tr>
							<tr>
							<td class="td-label">
                                <span><?php echo translate('workplace of brother2')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['brother2working'])?$family_info_data[0]['brother2working']:""?><!--added this change newly-->
                            </td>
							<td class="td-label">
                                <span><?php echo translate('phoneNumber of brother2')?></span>
                            </td>
                            <td>
                                <?=!empty($family_info_data[0]['number_brother2'])?$family_info_data[0]['number_brother2']:""?><!--added this change newly-->
                            </td>
							</tr>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
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
                        <label for="fathernumber" class="text-uppercase c-gray-light"><?php echo translate('father phoneNumber')?></label>
                        <input type="text" class="form-control no-resize" name="fathernumber" value="<?=!empty($family_info_data[0]['fathernumber'])?$family_info_data[0]['fathernumber']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="mothernumber" class="text-uppercase c-gray-light"><?php echo translate('mother phoneNumber')?></label>
                        <input type="text" class="form-control no-resize" name="mothernumber" value="<?=!empty($family_info_data[0]['mothernumber'])?$family_info_data[0]['mothernumber']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="ffather" class="text-uppercase c-gray-light"><?php echo translate('fathers fatherName')?></label>
                        <input type="text" class="form-control no-resize" name="ffather" value="<?=!empty($family_info_data[0]['ffather'])?$family_info_data[0]['ffather']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="fmother" class="text-uppercase c-gray-light"><?php echo translate('fathers motherName')?></label>
                        <input type="text" class="form-control no-resize" name="fmother" value="<?=!empty($family_info_data[0]['fmother'])?$family_info_data[0]['fmother']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="mfather" class="text-uppercase c-gray-light"><?php echo translate('mothers fatherName')?></label>
                        <input type="text" class="form-control no-resize" name="mfather" value="<?=!empty($family_info_data[0]['mfather'])?$family_info_data[0]['mfather']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="mmother" class="text-uppercase c-gray-light"><?php echo translate('mothers motherName')?></label>
                        <input type="text" class="form-control no-resize" name="mmother" value="<?=!empty($family_info_data[0]['mmother'])?$family_info_data[0]['mmother']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="no_sister" class="text-uppercase c-gray-light"><?php echo translate('number of sisters')?></label>
                        <input type="text" class="form-control no-resize" name="no_sister" value="<?=!empty($family_info_data[0]['no_sister'])?$family_info_data[0]['no_sister']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="name_sister1" class="text-uppercase c-gray-light"><?php echo translate('name of sister1')?></label>
                        <input type="text" class="form-control no-resize" name="name_sister1" value="<?=!empty($family_info_data[0]['name_sister1'])?$family_info_data[0]['name_sister1']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="name_sister2" class="text-uppercase c-gray-light"><?php echo translate('name of sister2')?></label>
                        <input type="text" class="form-control no-resize" name="name_sister2" value="<?=!empty($family_info_data[0]['name_sister2'])?$family_info_data[0]['name_sister2']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="sister1married" class="text-uppercase c-gray-light"><?php echo translate('sister1 married')?></label>
                        <input type="text" class="form-control no-resize" name="sister1married" value="<?=!empty($family_info_data[0]['sister1married'])?$family_info_data[0]['sister1married']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="sister2married" class="text-uppercase c-gray-light"><?php echo translate('sister2 married')?></label>
                        <input type="text" class="form-control no-resize" name="sister2married" value="<?=!empty($family_info_data[0]['sister2married'])?$family_info_data[0]['sister2married']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="name_sister1husband" class="text-uppercase c-gray-light"><?php echo translate('husbandName of sister1')?></label>
                        <input type="text" class="form-control no-resize" name="name_sister1husband" value="<?=!empty($family_info_data[0]['name_sister1husband'])?$family_info_data[0]['name_sister1husband']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="name_sister2husband" class="text-uppercase c-gray-light"><?php echo translate('husbandName of sister2')?></label>
                        <input type="text" class="form-control no-resize" name="name_sister2husband" value="<?=!empty($family_info_data[0]['name_sister2husband'])?$family_info_data[0]['name_sister2husband']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="number_sister1" class="text-uppercase c-gray-light"><?php echo translate('phoneNumber of sister1')?></label>
                        <input type="text" class="form-control no-resize" name="number_sister1" value="<?=!empty($family_info_data[0]['number_sister1'])?$family_info_data[0]['number_sister1']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="number_sister2" class="text-uppercase c-gray-light"><?php echo translate('phoneNumber of sister2')?></label>
                        <input type="text" class="form-control no-resize" name="number_sister2" value="<?=!empty($family_info_data[0]['number_sister2'])?$family_info_data[0]['number_sister2']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="address_sister1" class="text-uppercase c-gray-light"><?php echo translate('address of sister1')?></label>
                        <input type="text" class="form-control no-resize" name="address_sister1" value="<?=!empty($family_info_data[0]['address_sister1'])?$family_info_data[0]['address_sister1']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="address_sister2" class="text-uppercase c-gray-light"><?php echo translate('address of sister2')?></label>
                        <input type="text" class="form-control no-resize" name="address_sister2" value="<?=!empty($family_info_data[0]['address_sister2'])?$family_info_data[0]['address_sister2']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="no_brother" class="text-uppercase c-gray-light"><?php echo translate('number of brothers')?></label>
                        <input type="text" class="form-control no-resize" name="no_brother" value="<?=!empty($family_info_data[0]['no_brother'])?$family_info_data[0]['no_brother']:""?>">  <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				</div>
				<div class="row">
					 <div class="col-md-6">
						<div class="form-group has-feedback">
							<label for="name_brother1" class="text-uppercase c-gray-light"><?php echo translate('Name of brother1')?></label>
							<input type="text" class="form-control no-resize" name="name_brother1" value="<?=!empty($family_info_data[0]['name_brother1'])?$family_info_data[0]['name_brother1']:""?>"> <!--added this change newly-->
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group has-feedback">
                        <label for="name_brother2" class="text-uppercase c-gray-light"><?php echo translate('Name of brother2')?></label>
                        <input type="text" class="form-control no-resize" name="name_brother2" value="<?=!empty($family_info_data[0]['name_brother2'])?$family_info_data[0]['name_brother2']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
					</div>
					</div>
					<div class="row">
					 <div class="col-md-6">
						<div class="form-group has-feedback">
							<label for="brother1married" class="text-uppercase c-gray-light"><?php echo translate('brother1 married')?></label>
							<input type="text" class="form-control no-resize" name="brother1married" value="<?=!empty($family_info_data[0]['brother1married'])?$family_info_data[0]['brother1married']:""?>"> <!--added this change newly-->
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group has-feedback">
                        <label for="brother2married" class="text-uppercase c-gray-light"><?php echo translate('brother2 married')?></label>
                        <input type="text" class="form-control no-resize" name="brother2married" value="<?=!empty($family_info_data[0]['brother2married'])?$family_info_data[0]['brother2married']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
					</div>
				</div>
				<div class="row">
					 <div class="col-md-6">
						<div class="form-group has-feedback">
							<label for="name_brother1wife" class="text-uppercase c-gray-light"><?php echo translate('wifeName of brother1')?></label>
							<input type="text" class="form-control no-resize" name="name_brother1wife" value="<?=!empty($family_info_data[0]['name_brother1wife'])?$family_info_data[0]['name_brother1wife']:""?>"> <!--added this change newly-->
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group has-feedback">
                        <label for="name_brother2wife" class="text-uppercase c-gray-light"><?php echo translate('wifeName of brother2')?></label>
                        <input type="text" class="form-control no-resize" name="name_brother2wife" value="<?=!empty($family_info_data[0]['name_brother2wife'])?$family_info_data[0]['name_brother2wife']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
					</div>
					</div>
					<div class="row">
					 <div class="col-md-6">
						<div class="form-group has-feedback">
							<label for="number_brother1" class="text-uppercase c-gray-light"><?php echo translate('phoneNumber of brother1')?></label>
							<input type="text" class="form-control no-resize" name="number_brother1" value="<?=!empty($family_info_data[0]['number_brother1'])?$family_info_data[0]['number_brother1']:""?>"> <!--added this change newly-->
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group has-feedback">
                        <label for="number_brother2" class="text-uppercase c-gray-light"><?php echo translate('phoneNumber of brother2')?></label>
                        <input type="text" class="form-control no-resize" name="number_brother2" value="<?=!empty($family_info_data[0]['number_brother2'])?$family_info_data[0]['number_brother2']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
					</div>
					</div>
					<div class="row">
					 <div class="col-md-6">
						<div class="form-group has-feedback">
							<label for="brother1working" class="text-uppercase c-gray-light"><?php echo translate('workplace of brother1')?></label>
							<input type="text" class="form-control no-resize" name="brother1working" value="<?=!empty($family_info_data[0]['brother1working'])?$family_info_data[0]['brother1working']:""?>"> <!--added this change newly-->
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group has-feedback">
                        <label for="brother2working" class="text-uppercase c-gray-light"><?php echo translate('workplace of brother2')?></label>
                        <input type="text" class="form-control no-resize" name="brother2working" value="<?=!empty($family_info_data[0]['brother2working'])?$family_info_data[0]['brother2working']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
					</div>
					</div>
					<div class="row">
					 <div class="col-md-6">
						<div class="form-group has-feedback">
							<label for="address_brother1" class="text-uppercase c-gray-light"><?php echo translate('address of brother1')?></label>
							<input type="text" class="form-control no-resize" name="address_brother1" value="<?=!empty($family_info_data[0]['address_brother1'])?$family_info_data[0]['address_brother1']:""?>"> <!--added this change newly-->
							<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
							<div class="help-block with-errors"></div>
						</div>
					</div>
					<div class="col-md-6">
					<div class="form-group has-feedback">
                        <label for="address_brother2" class="text-uppercase c-gray-light"><?php echo translate('address of brother2')?></label>
                        <input type="text" class="form-control no-resize" name="address_brother2" value="<?=!empty($family_info_data[0]['address_brother2'])?$family_info_data[0]['address_brother2']:""?>"> <!--added this change newly-->
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
					</div>
					</div>
		</form>
    </div>
</div>