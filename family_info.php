<div id="info_family_info">
    <div class="card-inner-title-wrapper pt-0">
        <h3 class="card-inner-title pull-left">
            <?php echo translate('family_information')?>
        </h3>
    </div>
    <div class="table-full-width">
        <div class="table-full-width">
            <table class="table table-profile table-responsive table-striped table-bordered table-slick">
                <tbody>
                    <tr>
                        <td class="td-label">
                            <span><?php echo translate('father')?></span>
                        </td>
                        <td>
                            <?=$family_info_data[0]['father']?>
                        </td>
                        <td class="td-label">
                            <span><?php echo translate('mother')?></span>
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