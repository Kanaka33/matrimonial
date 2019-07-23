<?php 
    $mother_family_details = $this->Crud_model->get_type_name_by_id('member', $this->session->userdata['member_id'], 'mother_family_details');
    $mother_family_details_data_arr = json_decode($mother_family_details, true);
?>
<div class="feature feature--boxed-border feature--bg-1 pt-3 pb-0 pl-3 pr-3 mb-3 border_top2x">
    <div id="info_mother_family_details">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('mother_family_details')?>
            </h3>
            <div class="pull-right">
                <button type="button" id="unhide_mother_family_details" <?php if (isset($privacy_status_data[0]['mother_family_details']) && $privacy_status_data[0]['mother_family_details'] == 'yes') {?> style="display: none" <?php }?> class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="unhide_section('mother_family_details')">
                <i class="fa fa-unlock"></i> <?=translate('show')?>
                </button>
                <button type="button" id="hide_mother_family_details" <?php if (!isset($privacy_status_data[0]['mother_family_details']) || $privacy_status_data[0]['mother_family_details'] == 'no') {?> style="display: none" <?php }?> class="btn btn-dark btn-sm btn-icon-only btn-shadow mb-1" onclick="hide_section('mother_family_details')">
                <i class="fa fa-lock"></i> <?=translate('hide')?>
                </button>
				<?php if($get_member[0]->is_submit==0){ ?>
                <button type="button" class="btn btn-base-1 btn-sm btn-icon-only btn-shadow mb-1" onclick="edit_section('mother_family_details')">
                <i class="ion-edit"></i>
                </button>
				<?php } ?>
            </div>
        </div>
        <div class="table-full-width">
            <div class="table-full-width">
                <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                    <tbody>
					<?php if(!empty($mother_family_details_data_arr)){
						foreach($mother_family_details_data_arr as $mother_family_details_data){ ?>
                        <tr>
                            <td class="td-label">
                                <span><?php echo translate('relationship_type')?></span>
                            </td>
							<?php 
							if (!empty($mother_family_details_data['mother_relationship_type'])) {
							?>
                            <td>
                                <?=$this->Crud_model->get_type_name_by_id('relationship_type', $mother_family_details_data['mother_relationship_type'])?>
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                            <td class="td-label">
                                <span><?php echo translate('name')?></span>
                            </td>
                           <?php 
							if (!empty($mother_family_details_data['mother_rel_name'])) {
							?>
                            <td>
                                <?=$mother_family_details_data['mother_rel_name']?>
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
                                <span><?php echo translate('occupation')?></span>
                            </td>
                            <td>
                                <?=!empty($mother_family_details_data['mother_rel_occupation'])?$mother_family_details_data['mother_rel_occupation']:""?>
                            </td>
                            <td class="td-label">
                                <span><?php echo translate('address')?></span>
                            </td>
                            <td>
                                <?=!empty($mother_family_details_data['mother_rel_address'])?$mother_family_details_data['mother_rel_address']:""?>
                            </td>
                        </tr>
					<?php }} ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="edit_mother_family_details" style="display:none;">
        <div class="card-inner-title-wrapper pt-0">
            <h3 class="card-inner-title pull-left">
                <?php echo translate('mother_family_details')?>
            </h3>
            <div class="pull-right">
                <button type="button" class="btn btn-success btn-sm btn-icon-only btn-shadow" onclick="save_section('mother_family_details')"><i class="ion-checkmark"></i></button>
                <button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="load_section('mother_family_details')"><i class="ion-close"></i></button>
            </div>
        </div>
        <div class='clearfix'></div>
		
        <form id="form_mother_family_details" class="form-default" role="form">
			<div class="form-group row">
				<div class="col-md-12">
					<button type="button" class="btn btn-primary btn-sm btn-icon-only btn-shadow" onclick="add_mother_relation()"><?php echo translate('add_relation')?></button>
					<button type="button" class="btn btn-danger btn-sm btn-icon-only btn-shadow" onclick="remove_mother_relation()"><?php echo translate('remove_relation')?></button>
				</div>
			</div>
			<input type="hidden" id="mother_relCount" name="mother_relCount" value="<?php echo !empty($mother_family_details_data_arr)?count($mother_family_details_data_arr):0;?>"/>
				<?php if(!empty($mother_family_details_data_arr)){
					$index=0;
					foreach($mother_family_details_data_arr as $mother_family_details_data){
						?>
						<div class="border border-primary rounded mb-3 p-3" name="mother_rel_<?php echo $index;?>">
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label for="relationship_type_<?php echo $index;?>" class="text-uppercase c-gray-light"><?php echo translate('relationship_type')?></label>
											<?php
											echo $this->Crud_model->select_html('relationship_type', 'mother_relationship_type_'.$index, 'name', 'edit', 'form-control form-control-sm selectpicker', !empty($mother_family_details_data['mother_relationship_type'])?$mother_family_details_data['mother_relationship_type']:'', '', '', '');
											?>
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label for="rel_name_<?php echo $index;?>" class="text-uppercase c-gray-light"><?php echo translate('name')?></label><span style="color:red;font-size:18px;">*</span>
											<input type="text" class="form-control no-resize" name="mother_rel_name_<?php echo $index;?>" value="<?=!empty($mother_family_details_data['mother_rel_name'])?$mother_family_details_data['mother_rel_name']:""?>">
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label for="rel_occupation_<?php echo $index;?>" class="text-uppercase c-gray-light"><?php echo translate('occupation')?></label>
											<input type="text" class="form-control no-resize" name="mother_rel_occupation_<?php echo $index;?>" value="<?=!empty($mother_family_details_data['mother_rel_occupation'])?$mother_family_details_data['mother_rel_occupation']:""?>">
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group has-feedback">
											<label for="mother_rel_address_<?php echo $index;?>" class="text-uppercase c-gray-light"><?php echo translate('address')?></label>
											<textarea rows="5" cols="20" maxlength="1000" class="form-control no-resize" name="rel_address_<?php echo $index;?>" value="<?=!empty($mother_family_details_data['mother_rel_address'])?$mother_family_details_data['mother_rel_address']:""?>"?></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php $index++;} 
					}?>
        </form>
    </div>
</div>
<script>
	function remove_mother_relation(){
		var currentRels = Number($("#mother_relCount").val())-1;
		if(currentRels>=0){
			$("div[name='mother_rel_"+currentRels+"']").remove();
			$('#mother_relCount').val(currentRels);
		}
	}
	function add_mother_relation(){
		var currentRels = Number($("#mother_relCount").val());
		var relationHTML = '<div class="border border-primary rounded mb-3 p-3" name="rel_'+currentRels+'"><div class="form-group"><div class="row"><div class="col-md-6"><div class="form-group has-feedback"><label for="mother_relationship_type_'+currentRels+'" class="text-uppercase c-gray-light"><?php echo translate('relationship_type')?></label><span style="color:red;font-size:18px;">*</span><?php echo $this->Crud_model->select_html("relationship_type", "mother_relationship_type_'+currentRels+'", "name", "edit", "form-control form-control-sm selectpicker","", "", "", "");?><span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div></div></div><div class="col-md-6"><div class="form-group has-feedback"><label for="mother_rel_name_'+currentRels+'" class="text-uppercase c-gray-light"><?php echo translate('name')?></label><span style="color:red;font-size:18px;">*</span><input type="text" class="form-control no-resize" name="mother_rel_name_'+currentRels+'" value="" required><span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div></div></div></div><div class="row"><div class="col-md-6"><div class="form-group has-feedback"><label for="mother_rel_occupation_'+currentRels+'" class="text-uppercase c-gray-light"><?php echo translate('occupation')?></label><input type="text" class="form-control no-resize" name="mother_rel_occupation_'+currentRels+'" value=""><span class="glyphicon form-control-feedback" aria-hidden="true"></span><div class="help-block with-errors"></div></div></div><div class="col-md-6"><div class="form-group has-feedback"><label for="mother_rel_address_'+currentRels+'" class="text-uppercase c-gray-light"><?php echo translate('address')?></label><textarea rows="5" cols="20" maxlength="1000" class="form-control no-resize" name="mother_rel_address_'+currentRels+'" value=""></textarea></div></div></div></div></div></div>';
		$('#form_mother_family_details').append(relationHTML);
		$('#mother_relCount').val(currentRels+1);
    }
</script>