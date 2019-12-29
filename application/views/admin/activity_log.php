<div class="box">

  <div class="box-header">
      <!------CONTROL TABS START------->
</div>

	<div class="box-content padded">
    <div class="tab-content">
    <div class="tab-pane box active" id="edit" style="padding: 5px">
    <div class="box-content">
    

    <table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo get_phrase('Date & Time');?></div></th>

                    		<th><div><?php echo get_phrase('session_id');?></div></th>

                    		<th><div><?php echo get_phrase('Name');?></div></th>

                    		<th><div><?php echo get_phrase('access_level');?></div></th>

                    		<th><div><?php echo get_phrase('pages_visted');?></div></th>

                            <th><div><?php echo get_phrase('email');?></div></th>



						</tr>

					</thead>

                     <tbody>

                    	<?php $count = 1;foreach($activity as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>

                            <td><?php echo date('r', $row['timestamp']);?></td>

                            <td><?php echo $row['session_id']; ?></td>

                            <td><?php echo $this->crud_model->get_type_name_by_id($row['login_type'],$row['user_identifier'],'name');?></td>

                            <td><?php echo ucfirst($row['login_type']); ?></td>

                            <td><?php echo $row['request_uri']; ?></td>

                            <td><?php echo $row['email']; ?></td>

						</tr>
						<?php endforeach;?>
					</tbody>
    </table>


    </div>
	</div>
	</div>
	</div>

</div>
