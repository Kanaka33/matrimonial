<div id="info_partner_expectation">
    <div class="card-inner-title-wrapper pt-0">
        <h3 class="card-inner-title pull-left">
            <?php echo translate('partner_expectation');?>
        </h3>
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
							if (isset($partner_expectation_data[0]['age_from']) && 
							$partner_expectation_data[0]['age_from'] != '') {
							?>
                            <td>
                                <?=$partner_expectation_data[0]['age_from']?>
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        <td class="td-label">
                            <span><?php echo translate('age to');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_age']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('height');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_height']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('weight');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_weight']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('marital_status');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('marital_status', $partner_expectation_data[0]['partner_marital_status'])?>
                        </td>
                      <!--  <td class="td-label">
                            <span><?php echo translate('with_children_acceptables');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('decision', $partner_expectation_data[0]['with_children_acceptables'])?>
                        </td>-->
						<td class="td-label">
                                <span><?php echo translate('annual_income')?></span>
                            </td>
                            <?php 
							if (isset($partner_expectation_data[0]['prefered_annual_income']) && 
							$partner_expectation_data[0]['prefered_annual_income'] != '') {
							?>
                            <td>
                                <?=$partner_expectation_data[0]['prefered_annual_income']?>
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
                            <span><?php echo translate('country_of_residence');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('country', $partner_expectation_data[0]['partner_country_of_residence'])?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('religion');?></span>
                        </td>
						<td>
                            <?php echo translate('hinduism');?>
                        </td>
						
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('caste');?></span>
                        </td>
						<td>
                           <?php echo translate('kamma');?>
                        </td>
						<td class="td-label">
                            <span><?php echo translate('complexion');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_complexion']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('education');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_education']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('profession');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_profession']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('drinking_habits');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('decision', $partner_expectation_data[0]['partner_drinking_habits'])?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('smoking_habits');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('decision', $partner_expectation_data[0]['partner_smoking_habits'])?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('eating habits');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_diet']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('body_type');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_body_type']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('personal_value');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_personal_value']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('dosham');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['manglik']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('any_disability');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_any_disability']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('mother_tongue');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('language', $partner_expectation_data[0]['partner_mother_tongue'])?>
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
                            <span><?php echo translate('family_value');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['partner_family_value']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('prefered_country');?></span>
                        </td>
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('country', $partner_expectation_data[0]['prefered_country'])?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('prefered_state');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['prefered_state']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('prefered_status');?></span>
                        </td>
                        <td>
                            <?=$partner_expectation_data[0]['prefered_status']?>
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