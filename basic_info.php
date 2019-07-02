<div id="info_basic_info">
    <div class="card-inner-title-wrapper pt-0">
        <h3 class="card-inner-title pull-left">
            <?php echo translate('basic_information')?>
        </h3>
    </div>
    <div class="table-full-width">
        <div class="table-full-width">
            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                <tbody>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('first_name')?></span>
                        </td>
						<td>
                            <?=$get_member[0]->first_name?>
                        </td>
						<td class="td-label">
                            <span><?php echo translate('last_name')?></span>
                        </td>
						<td>
                            <?=$get_member[0]->last_name?>
                        </td>
						
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('gender')?></span>
                        </td>
						
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('gender', $get_member[0]->gender)?>
                        </td>
					    <td class="td-label">
                            <span><?php echo translate('age')?></span>
                        </td>
						<td>
                           <?php
                                    $calculated_age = (date('Y') - date('Y', strtotime($get_member[0]->date_of_birth)));
                                    echo $calculated_age;
                                ?>
                        </td>
						
                    </tr>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('marital_status')?></span>
                        </td>
						
                        <td>
                            <?=$this->Crud_model->get_type_name_by_id('marital_status', $basic_info_data[0]['marital_status'])?>
                        </td>
						
						<td class="td-label">
                            <span><?php echo translate('date_of_birth')?></span>
                        </td>
						
                        <td>
                            <?=date('d/m/Y', strtotime($get_member[0]->date_of_birth))?>
                        </td>
						
                       <!-- <td class="td-label">
                            <span><?php echo translate('number_of_children')?></span>
                        </td>
                        <td>
                            <?=$basic_info_data[0]['number_of_children']?>
                        </td>-->
                    </tr>
                    <tr>
					<td class="td-label">
                                <span><?php echo translate('on_behalf')?></span>
                            </td>
							<?php 
							if (isset($basic_info_data[0]['on_behalf']) && 
							$basic_info_data[0]['on_behalf'] != '') {
							
							?>
                            <td>
                                 <?=$this->Crud_model->get_type_name_by_id('on_behalf', $basic_info_data[0]['on_behalf']);?>
                            </td>
							<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        <td class="td-label">
                            <span><?php echo translate('area')?></span>
                        </td>
						<td>
                            <?=$basic_info_data[0]['area']?>
						</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
