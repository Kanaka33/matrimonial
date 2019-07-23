<?php 
    $partner_expectation = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'partner_expectation');
    $partner_expectation_data = json_decode($partner_expectation, true);
?>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_partner_expectation">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('partner_expectation')?>
            </h3>
            <div class="pull-right">
                <button type="button" id="unhide_partner_expectation" <?php if ($privacy_status_data[0]['partner_expectation'] == 'yes') {?> style="display: none" <?php }?> class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('partner_expectation')">
                <i class="fa fa-unlock"></i> <?=translate('show')?>
                </button>
                <button type="button" id="hide_partner_expectation" <?php if ($privacy_status_data[0]['partner_expectation'] == 'no') {?> style="display: none" <?php }?> class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('partner_expectation')">
                <i class="fa fa-lock"></i> <?=translate('hide')?>
                </button>
				<?php if($get_member[0]->is_submit==0){ ?>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('partner_expectation')">
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
                                <span><?php echo translate('age_from')?></span>
                            </td>
							<?php 
							if (isset($partner_expectation_data[0]['partner_age_from']) && 
							$partner_expectation_data[0]['partner_age_from'] != '') {
							?>
                            <td>
                                <?=$partner_expectation_data[0]['partner_age_from']?>
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                            <td class="td-label">
                                <span><?php echo translate('age_to')?></span>
                            </td>
                           <?php 
							if (isset($partner_expectation_data[0]['partner_age_to']) && 
							$partner_expectation_data[0]['partner_age_to'] != '') {
							?>
                            <td>
                                <?=$partner_expectation_data[0]['partner_age_to']?>
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
                                <span><?php echo translate('height')?></span>
                            </td>
                            <td>
                                <?=$partner_expectation_data[0]['partner_height']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('weight')?></span>
                            </td>
                            <td>
                                <?=$partner_expectation_data[0]['partner_weight']?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('marital_status')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('marital_status', $partner_expectation_data[0]['partner_marital_status'])?>
                            </td>
							<td class="td-label">
                                <span><?php echo translate('annual_income')?></span>
                            </td>
                            <td>
                                <?=isset($partner_expectation_data[0]['prefered_annual_income'])?$partner_expectation_data[0]['prefered_annual_income']:""?>
                            </td>
							<!-- <td class="td-label">
                                <span><?php echo translate('with_children_acceptables')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('decision', $partner_expectation_data[0]['with_children_acceptables'])?>
                            </td>-->
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('country_of_residence')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('country', $partner_expectation_data[0]['partner_country_of_residence'])?>
                            </td>
							<td class="td-label">
                                <span><?php echo translate('citizenship')?></span>
                            </td>
                            <td>
							<?=isset($partner_expectation_data[0]['partner_citizenship'])?$partner_expectation_data[0]['partner_citizenship']:""?>
                               <!-- <?=$partner_expectation_data[0]['partner_citizenship']?>-->
                            </td>
                           <!-- <td class="td-label">
                                <span><?php echo translate('religion')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('religion', $partner_expectation_data[0]['partner_religion'])?>
                            </td>-->
                        </tr>
                      <!--  <tr>
						
                            <td class="td-label">
                                <span><?php echo translate('caste_/_sect')?></span>
                            </td>
							<?php 
							if (isset($partner_expectation_data[0]['partner_caste']) && 
							$partner_expectation_data[0]['partner_caste'] != '') {
							
							?>
                            <td>
                                <?=$this->db->get_where('caste', array('caste_id'=>$partner_expectation_data[0]['partner_caste']))->row()->caste_name;?>
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                            <td class="td-label">
                                <span><?php echo translate('sub_caste')?></span>
                            </td>
							<?php 
							if (isset($partner_expectation_data[0]['partner_sub_caste']) && 
							$partner_expectation_data[0]['partner_sub_caste'] != '') {
							
							?>
                            <td>
                                <?=$this->db->get_where('sub_caste', array('sub_caste_id'=>$partner_expectation_data[0]['partner_sub_caste']))->row()->sub_caste_name;?>
                            </td>
                            <?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        </tr>-->
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('education')?></span>
                            </td>
                            <td>
                                <?=$partner_expectation_data[0]['partner_education']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('profession')?></span>
                            </td>
                            <td>
                                <?=$partner_expectation_data[0]['partner_profession']?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('drinking_habits')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('decision', $partner_expectation_data[0]['partner_drinking_habits'])?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('smoking_habits')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('decision', $partner_expectation_data[0]['partner_smoking_habits'])?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('eating_habits')?></span>
                            </td>
                            <td>
                                <?=isset($partner_expectation_data[0]['partner_diet'])?$this->Crud_model->get_type_name_by_id('diet', $partner_expectation_data[0]['partner_diet']):"";?>
                            	</td>
                            <td class="td-label">
                                <span><?php echo translate('body_type')?></span>
                            </td>
                          <!--  <td>
                                <?=$partner_expectation_data[0]['partner_body_type']?>
                            </td>-->
							 <td>
							<?=isset($partner_expectation_data[0]['partner_body_type'])?$this->Crud_model->get_type_name_by_id('body_type', $partner_expectation_data[0]['partner_body_type']):"";?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('personal_value')?></span>
                            </td>
                            <td>
                                <?=$partner_expectation_data[0]['partner_personal_value']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('dosham')?></span>
                            </td>
                            <td>
                              <?=isset($partner_expectation_data[0]['manglik'])?$this->Crud_model->get_type_name_by_id('dosham', $partner_expectation_data[0]['manglik']):"";?>
                               
                            </td>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('any_disability')?></span>
                            </td>
                            <td>
                                <?=$partner_expectation_data[0]['partner_any_disability']?>
                            </td>
                           <!-- <td class="td-label">
                                <span><?php echo translate('mother_tongue')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('language', $partner_expectation_data[0]['partner_mother_tongue'])?>
                            </td>-->
							 <td class="td-label">
                                <span><?php echo translate('complexion')?></span>
                            </td>
							 <td>
							<?=isset($partner_expectation_data[0]['partner_complexion'])?$this->Crud_model->get_type_name_by_id('complexion', $partner_expectation_data[0]['partner_complexion']):"";?>
                            </td>
                           <!-- <td>
                                <?=$partner_expectation_data[0]['partner_complexion']?>
                            </td>-->
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('family_value')?></span>
                            </td>
							 <td>
							<?=isset($partner_expectation_data[0]['partner_family_value'])?$this->Crud_model->get_type_name_by_id('family_value', $partner_expectation_data[0]['partner_family_value']):"";?>
                            </td>
                           <!-- <td>
                                <?=$partner_expectation_data[0]['partner_family_value']?>
                            </td>-->
                            <td class="td-label">
                                <span><?php echo translate('prefered_country')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('country', $partner_expectation_data[0]['prefered_country'])?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('prefered_state')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('state', $partner_expectation_data[0]['prefered_state'])?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('prefered_financial_status')?></span>
                            </td>
							 <td>
                                <?=$this->Crud_model->get_type_name_by_id('family_status', $partner_expectation_data[0]['prefered_status']);?> 
                            </td>
                        </tr>
						<tr>
						 <td class="td-label">
                                <span><?php echo translate('rasi')?></span>
                            </td>
                            <td>
							<?=isset($partner_expectation_data[0]['prefered_moon_sign'])?$this->Crud_model->get_type_name_by_id('rasi', $partner_expectation_data[0]['prefered_moon_sign']):"";?>
                            </td>
						 <td class="td-label">
                                <span><?php echo translate('nakshatram')?></span>
                            </td>
                            <td>
							<?=isset($partner_expectation_data[0]['prefered_nakshatram'])?$this->Crud_model->get_type_name_by_id('nakshatram', $partner_expectation_data[0]['prefered_nakshatram']):"";?>
                            </td>
						
						</tr>
                    <tr>
					<td class="td-label">
                                <span><?php echo translate('about_partner')?></span>
                            </td>
							<?php 
							if (isset($partner_expectation_data[0]['about_partner']) && 
							$partner_expectation_data[0]['about_partner'] != '') {
							
							?>
                            <td>
                                 <?=$partner_expectation_data[0]['about_partner']?>
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

    <div id="edit_partner_expectation" style="display: none;">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('partner_expectation')?>
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('partner_expectation')"><i class="ion-checkmark"></i></button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('partner_expectation')"><i class="ion-close"></i></button>
            </div>
        </div>
        
        <div class='clearfix'></div>
        <form id="form_partner_expectation" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_age_from" class="text-uppercase c-gray-light"><?php echo translate('age_from')?></label>
                        <input type="text" class="form-control no-resize" name="partner_age_from" value="<?=isset($partner_expectation_data[0]['partner_age_from'])?$partner_expectation_data[0]['partner_age_from']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_age_to" class="text-uppercase c-gray-light"><?php echo translate('age_to')?></label>
                        <input type="text" class="form-control no-resize" name="partner_age_to" value="<?=isset($partner_expectation_data[0]['partner_age_to'])?$partner_expectation_data[0]['partner_age_to']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_height" class="text-uppercase c-gray-light"><?php echo translate('height')?></label>
                        <input type="text" class="form-control no-resize" name="partner_height" value="<?=$partner_expectation_data[0]['partner_height']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_weight" class="text-uppercase c-gray-light"><?php echo translate('weight')?></label>
                        <input type="text" class="form-control no-resize" name="partner_weight" value="<?=$partner_expectation_data[0]['partner_weight']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_marital_status" class="text-uppercase c-gray-light"><?php echo translate('marital_status')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('marital_status', 'partner_marital_status', 'name', 'edit', 'form-control form-control-sm selectpicker', $partner_expectation_data[0]['partner_marital_status'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="prefered_annual_income" class="text-uppercase c-gray-light"><?php echo translate('annual_income')?></label>
                        <input type="text" class="form-control no-resize" name="prefered_annual_income" value="<?=isset($partner_expectation_data[0]['prefered_annual_income'])?$partner_expectation_data[0]['prefered_annual_income']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_country_of_residence" class="text-uppercase c-gray-light"><?php echo translate('country_of_residence')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('country', 'partner_country_of_residence', 'name', 'edit', 'form-control form-control-sm selectpicker', $partner_expectation_data[0]['partner_country_of_residence'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_citizenship" class="text-uppercase c-gray-light"><?php echo translate('citizenship')?></label>
                          <input type="text" class="form-control no-resize" name="partner_citizenship" value="<?=isset($partner_expectation_data[0]['partner_citizenship'])?$partner_expectation_data[0]['partner_citizenship']:""?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
              <!--   <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="religion" class="text-uppercase c-gray-light"><?php echo translate('religion')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('religion', 'partner_religion', 'name', 'edit', 'form-control form-control-sm selectpicker prefered_religion_edit', $partner_expectation_data[0]['partner_religion'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div> -->
            </div>
           <!-- <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="caste" class="text-uppercase c-gray-light"><?php echo translate('caste')?></label>
                        <?php
                            if (!empty($partner_expectation_data[0]['partner_religion'])) {
                                echo $this->Crud_model->select_html('caste', 'partner_caste', 'caste_name', 'edit', 'form-control form-control-sm selectpicker prefered_caste_edit', $partner_expectation_data[0]['partner_caste'], 'religion_id', $partner_expectation_data[0]['partner_religion'], '');   
                            } else {
                            ?>
                                <select class="form-control form-control-sm selectpicker prefered_caste_edit" name="partner_caste">
                                    <option value=""><?php echo translate('choose_a_religion_first')?></option>
                                </select>
                            <?php
                            }
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="sub_caste" class="text-uppercase c-gray-light"><?php echo translate('sub_caste')?></label>
                        <?php
                            if (!empty($partner_expectation_data[0]['partner_caste'])) {
                                echo $this->Crud_model->select_html('sub_caste', 'partner_sub_caste', 'sub_caste_name', 'edit', 'form-control form-control-sm selectpicker prefered_sub_caste_edit', $partner_expectation_data[0]['partner_sub_caste'], 'caste_id', $partner_expectation_data[0]['partner_caste'], '');  
                            } else {
                            ?>
                                <select class="form-control form-control-sm selectpicker prefered_sub_caste_edit" name="partner_sub_caste">
                                    <option value=""><?php echo translate('choose_a_caste_first')?></option>
                                </select>
                            <?php
                            }
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_education" class="text-uppercase c-gray-light"><?php echo translate('education')?></label>
                        <input type="text" class="form-control no-resize" name="partner_education" value="<?=$partner_expectation_data[0]['partner_education']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_profession" class="text-uppercase c-gray-light"><?php echo translate('profession')?></label>
                        <input type="text" class="form-control no-resize" name="partner_profession" value="<?=$partner_expectation_data[0]['partner_profession']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_drinking_habits" class="text-uppercase c-gray-light"><?php echo translate('drinking_habits')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('decision', 'partner_drinking_habits', 'name', 'edit', 'form-control form-control-sm selectpicker', $partner_expectation_data[0]['partner_drinking_habits'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_smoking_habits" class="text-uppercase c-gray-light"><?php echo translate('smoking_habits')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('decision', 'partner_smoking_habits', 'name', 'edit', 'form-control form-control-sm selectpicker', $partner_expectation_data[0]['partner_smoking_habits'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_diet" class="text-uppercase c-gray-light"><?php echo translate('eating_habits')?></label>
                        <!--<input type="text" class="form-control no-resize" name="partner_diet" value="<?=$partner_expectation_data[0]['partner_diet']?>">-->
						<?php 
                            echo $this->Crud_model->select_html('diet', 'partner_diet', 'name', 'edit', 'form-control form-control-sm selectpicker diet_edit', isset($partner_expectation_data[0]['partner_diet'])?$partner_expectation_data[0]['partner_diet']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_body_type" class="text-uppercase c-gray-light"><?php echo translate('body_type')?></label>
                         <?php 
                            echo $this->Crud_model->select_html('body_type', 'partner_body_type', 'name', 'edit', 'form-control form-control-sm selectpicker body_type_edit', isset($partner_expectation_data[0]['partner_body_type'])?$partner_expectation_data[0]['partner_body_type']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_personal_value" class="text-uppercase c-gray-light"><?php echo translate('personal_value')?></label>
                        <input type="text" class="form-control no-resize" name="partner_personal_value" value="<?=$partner_expectation_data[0]['partner_personal_value']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="manglik" class="text-uppercase c-gray-light"><?php echo translate('dosham')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('dosham', 'manglik', 'name', 'edit', 'form-control form-control-sm selectpicker dosham_edit', isset($partner_expectation_data[0]['manglik'])?$partner_expectation_data[0]['manglik']:"", '', '', '');
                        ?> 
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_any_disability" class="text-uppercase c-gray-light"><?php echo translate('any_disability')?></label>
                        <input type="text" class="form-control no-resize" name="partner_any_disability" value="<?=$partner_expectation_data[0]['partner_any_disability']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_complexion" class="text-uppercase c-gray-light"><?php echo translate('complexion')?></label>
                         <?php 
                            echo $this->Crud_model->select_html('complexion', 'partner_complexion', 'name', 'edit', 'form-control form-control-sm selectpicker complexion_edit', isset($partner_expectation_data[0]['partner_complexion'])?$partner_expectation_data[0]['partner_complexion']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
              <!--  <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_mother_tongue" class="text-uppercase c-gray-light"><?php echo translate('mother_tongue')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('language', 'partner_mother_tongue', 'name', 'edit', 'form-control form-control-sm selectpicker', $partner_expectation_data[0]['partner_mother_tongue'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>-->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="partner_family_value" class="text-uppercase c-gray-light"><?php echo translate('family_value')?></label>
                         <?php 
                            echo $this->Crud_model->select_html('family_value', 'partner_family_value', 'name', 'edit', 'form-control form-control-sm selectpicker family_value_edit', isset($partner_expectation_data[0]['partner_family_value'])?$partner_expectation_data[0]['partner_family_value']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="prefered_country" class="text-uppercase c-gray-light"><?php echo translate('prefered_country')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('country', 'prefered_country', 'name', 'edit', 'form-control form-control-sm selectpicker prefered_country_edit', $partner_expectation_data[0]['prefered_country'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="prefered_state" class="text-uppercase c-gray-light"><?php echo translate('prefered_state')?></label>
                        <?php
                            if (!empty($partner_expectation_data[0]['prefered_country'])) {
                                echo $this->Crud_model->select_html('state', 'prefered_state', 'name', 'edit', 'form-control form-control-sm selectpicker prefered_state_edit', $partner_expectation_data[0]['prefered_state'], 'country_id', $partner_expectation_data[0]['prefered_country'], '');  
                            } 
                            else {
                            ?>
                                <select class="form-control form-control-sm selectpicker permanent_state_edit" name="prefered_state">
                                    <option value=""><?php echo translate('choose_a_country_first')?></option>
                                </select>
                            <?php
                            }
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="prefered_status" class="text-uppercase c-gray-light"><?php echo translate('prefered_financial_status')?></label>
                        <?php 
									echo $this->Crud_model->select_html('family_status', 'prefered_status', 'name', 'edit', 'form-control form-control-sm selectpicker family_status_edit', $partner_expectation_data[0]['prefered_status'], '', '', '');
						?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
			 <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="prefered_moon_sign" class="text-uppercase c-gray-light"><?php echo translate('rasi')?></label>
						<?php 
                            echo $this->Crud_model->select_html('rasi', 'prefered_moon_sign', 'name', 'edit', 'form-control form-control-sm selectpicker moon_sign_edit', $partner_expectation_data[0]['prefered_moon_sign'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				<div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="prefered_nakshatram" class="text-uppercase c-gray-light"><?php echo translate('nakshatram')?></label>
                       <?php 
                            echo $this->Crud_model->select_html('nakshatram', 'prefered_nakshatram', 'name', 'edit', 'form-control form-control-sm selectpicker prefered_nakshatram_edit', isset($partner_expectation_data[0]['prefered_nakshatram'])?$partner_expectation_data[0]['prefered_nakshatram']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="about_partner" class="text-uppercase c-gray-light"><?php echo translate('about_partner')?></label>
                        <textarea rows="5" cols="20" maxlength="1000" class="form-control no-resize" name="about_partner" value="<?=isset($partner_expectation_data[0]['about_partner'])?$partner_expectation_data[0]['about_partner']:""?>"?></textarea>
                       <!-- <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>-->
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(".prefered_country_edit").change(function(){
        var country_id = $(".prefered_country_edit").val();
        if (country_id == "") {
            $(".prefered_state_edit").html("<option value=''><?php echo translate('choose_a_country_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id/state/country_id/"+country_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".prefered_state_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".prefered_religion_edit").change(function(){
        var religion_id = $(".prefered_religion_edit").val();
        if (religion_id == "") {
            $(".prefered_caste_edit").html("<option value=''><?php echo translate('choose_a_religion_first')?></option>");
            $(".prefered_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".prefered_caste_edit").html(data);
                    $(".prefered_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".prefered_caste_edit").change(function(){
        var caste_id = $(".prefered_caste_edit").val();
        if (caste_id == "") {
            $(".prefered_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {  
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/sub_caste/caste_id/"+caste_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".prefered_sub_caste_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
</script>