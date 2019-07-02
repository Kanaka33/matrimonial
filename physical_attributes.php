<div id="info_physical_attributes">
    <div class="card-inner-title-wrapper pt-0">
        <h3 class="card-inner-title pull-left">
            <?php echo translate('physical_attributes');?>
        </h3>
    </div>
    <div class="table-full-width">
        <div class="table-full-width">
            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                <tbody>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('height');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['height']) && 
							$physical_attributes_data[0]['height'] != '') {
							
							?>
                        <td>
                            <?=$get_member[0]->height." ".translate('feet')?>
                        </td>
						<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        <td class="td-label">
                            <span><?php echo translate('weight');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['weight']) && 
							$physical_attributes_data[0]['weight'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['weight']?>
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
                            <span><?php echo translate('eye_color');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['eye_color']) && 
							$physical_attributes_data[0]['eye_color'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['eye_color']?>
                        </td>
						<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        <td class="td-label">
                            <span><?php echo translate('hair_color');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['hair_color']) && 
							$physical_attributes_data[0]['hair_color'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['hair_color']?>
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
                            <span><?php echo translate('complexion');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['complexion']) && 
							$physical_attributes_data[0]['complexion'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['complexion']?>
                        </td>
						<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                        <td class="td-label">
                            <span><?php echo translate('blood_group');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['blood_group']) && 
							$physical_attributes_data[0]['blood_group'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['blood_group']?>
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
                            <span><?php echo translate('body_type');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['body_type']) && 
							$physical_attributes_data[0]['body_type'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['body_type']?>
                        </td>
						<?php
							}else{
							?>
							<td class="td-label"></td>
							<?php
							}
							?>
                         <td class="td-label">
                            <span><?php echo translate('any_disability');?></span>
                        </td>
						<?php 
							if (isset($physical_attributes_data[0]['any_disability']) && 
							$physical_attributes_data[0]['any_disability'] != '') {
							
							?>
                        <td>
                            <?=$physical_attributes_data[0]['any_disability']?>
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