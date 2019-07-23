<?php 
    $spiritual_and_social_background = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'spiritual_and_social_background');
    $spiritual_and_social_background_data = json_decode($spiritual_and_social_background, true);
?>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_spiritual_and_social_background">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('spiritual_and_social_background')?>
            </h3>
            <div class="pull-right">
                <button type="button" id="unhide_spiritual_and_social_background" <?php if ($privacy_status_data[0]['spiritual_and_social_background'] == 'yes') {?> style="display: none" <?php }?> class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('spiritual_and_social_background')">
                <i class="fa fa-unlock"></i> <?=translate('show')?>
                </button>
                <button type="button" id="hide_spiritual_and_social_background" <?php if ($privacy_status_data[0]['spiritual_and_social_background'] == 'no') {?> style="display: none" <?php }?> class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('spiritual_and_social_background')">
                <i class="fa fa-lock"></i> <?=translate('hide')?>
                </button>
				<?php if($get_member[0]->is_submit==0){ ?>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('spiritual_and_social_background')">
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
                                <span><?php echo translate('religion')?></span>
                            </td>
                            <td>
                                <?php echo translate('hinduism') ?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('caste_/_sect')?></span>
                            </td>
							<td>
                                <?php echo translate('kamma') ?>
                            </td>
							</tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('native place')?></span>
                            </td>
                            <td>
                                <?=$spiritual_and_social_background_data[0]['ethnicity']?>
                            </td>
							 <td class="td-label"><?php echo translate('family_type')?></td>
                            <td>
							<?=isset($spiritual_and_social_background_data[0]['family_type'])?$this->Crud_model->get_type_name_by_id('family_type', $spiritual_and_social_background_data[0]['family_type']):"";?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('personal_value')?></span>
                            </td>
                            <td>
                                <?=$spiritual_and_social_background_data[0]['personal_value']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('family_value')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('family_value', $spiritual_and_social_background_data[0]['family_value']);?>
                                
                            </td>
                        </tr>
                        <tr>                                               
                            <td class="td-label">
                                <span><?php echo translate('community_value')?></span>
                            </td>
                            <td>
                                <?=$spiritual_and_social_background_data[0]['community_value']?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('financial_status')?></span>
                            </td>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('family_status', $spiritual_and_social_background_data[0]['family_status']);?>
                            </td>
                        </tr>
                        <tr>
                            <td class="td-label"><?php echo translate('dosham')?></td>
                            <td>
							<?=isset($spiritual_and_social_background_data[0]['u_manglik'])?$this->Crud_model->get_type_name_by_id('dosham', $spiritual_and_social_background_data[0]['u_manglik']):"";?>
							</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="edit_spiritual_and_social_background" style="display: none;">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('spiritual_and_social_background')?>
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('spiritual_and_social_background')"><i class="ion-checkmark"></i></button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('spiritual_and_social_background')"><i class="ion-close"></i></button>
            </div>
        </div>
        
        <div class='clearfix'></div>
        <form id="form_spiritual_and_social_background" class="form-default" role="form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="religion" class="text-uppercase c-gray-light"><?php echo translate('religion')?></label>
                        <input type="text" class="form-control no-resize" name="religion" value="<?php echo translate('hinduism')?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="caste" class="text-uppercase c-gray-light"><?php echo translate('caste')?></label>
                        <input type="text" class="form-control no-resize" name="religion" value="<?php echo translate('kamma')?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="ethnicity" class="text-uppercase c-gray-light"><?php echo translate('native place')?></label>
                        <input type="text" class="form-control no-resize" name="ethnicity" value="<?=$spiritual_and_social_background_data[0]['ethnicity']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="family_type" class="text-uppercase c-gray-light"><?php echo translate('family_type')?></label>
                       <?php 
                            echo $this->Crud_model->select_html('family_type', 'family_type', 'name', 'edit', 'form-control form-control-sm selectpicker family_type_edit', isset($spiritual_and_social_background_data[0]['family_type'])?$spiritual_and_social_background_data[0]['family_type']:"", '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="personal_value" class="text-uppercase c-gray-light"><?php echo translate('personal_value')?></label>
                        <input type="text" class="form-control no-resize" name="personal_value" value="<?=$spiritual_and_social_background_data[0]['personal_value']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="family_value" class="text-uppercase c-gray-light"><?php echo translate('family_value')?></label>
                       <?php 
                            echo $this->Crud_model->select_html('family_value', 'family_value', 'name', 'edit', 'form-control form-control-sm selectpicker family_value_edit', $spiritual_and_social_background_data[0]['family_value'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="community_value" class="text-uppercase c-gray-light"><?php echo translate('community_value')?></label>
                        <input type="text" class="form-control no-resize" name="community_value" value="<?=$spiritual_and_social_background_data[0]['community_value']?>">
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="family_value" class="text-uppercase c-gray-light"><?php echo translate('financial_status')?></label>
                        <?php 
                            echo $this->Crud_model->select_html('family_status', 'family_status', 'name', 'edit', 'form-control form-control-sm selectpicker family_status_edit', $spiritual_and_social_background_data[0]['family_status'], '', '', '');
                        ?>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-6">
                    <div class="form-group has-feedback">
                        <label for="u_manglik" class="text-uppercase c-gray-light"><?php echo translate('dosham')?></label>

                        <!--<select name="u_manglik" class="form-control form-control-sm selectpicker" data-placeholder="Choose a manglik" tabindex="2" data-hide-disabled="true">
                            <option value="">Choose one</option>
                            <option value="1" <?php if($u_manglik==1){ echo 'selected';} ?>>Kuja Dosham</option>
                            <option value="2" <?php if($u_manglik==2){ echo 'selected';} ?>>No Dosham</option>
							<option value="3" <?php if($u_manglik==3){ echo 'selected';} ?>>Kala Sarpa</option>
							<option value="4" <?php if($u_manglik==4){ echo 'selected';} ?>>Rahu Dosham</option>
                            <option value="5" <?php if($u_manglik==5){ echo 'selected';} ?>>I don't know</option>
                        </select>-->
                         <?php 
                            echo $this->Crud_model->select_html('dosham', 'u_manglik', 'name', 'edit', 'form-control form-control-sm selectpicker dosham_edit', isset($spiritual_and_social_background_data[0]['u_manglik'])?$spiritual_and_social_background_data[0]['u_manglik']:"", '', '', '');
                        ?> 
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    $(".present_religion_edit").change(function(){
        var religion_id = $(".present_religion_edit").val();
        if (religion_id == "") {
            $(".present_caste_edit").html("<option value=''><?php echo translate('choose_a_religion_first')?></option>");
            $(".present_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/caste/religion_id/"+religion_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".present_caste_edit").html(data);
                    $(".present_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
    $(".present_caste_edit").change(function(){
        var caste_id = $(".present_caste_edit").val();
        if (caste_id == "") {
            $(".present_sub_caste_edit").html("<option value=''><?php echo translate('choose_a_caste_first')?></option>");
        } else {  
            $.ajax({
                url: "<?=base_url()?>home/get_dropdown_by_id_caste/sub_caste/caste_id/"+caste_id, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                cache       : false,
                contentType : false,
                processData : false,
                success: function(data) {
                    $(".present_sub_caste_edit").html(data);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    });
</script>