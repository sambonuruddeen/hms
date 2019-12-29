<div class="box">

	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#list" data-toggle="tab"><i class="icon-align-justify"></i> 

					<?php echo get_phrase('patients_log');?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content"> 
		            <!----TABLE LISTING STARTS--->

            <div class="tab-pane box active" id="list">
            	

			<table cellpadding="0" cellspacing="0" border="0" class="dTable responsive">

                	<thead>

                		<tr>

                    		<th><div>#</div></th>

                    		<th><div><?php echo get_phrase('patient');?></div></th>

                            <th><div><?php echo get_phrase('date');?></div></th>
                 		
                    		<th><div><?php echo get_phrase('sickness');?></div></th>

                    		<th><div><?php echo get_phrase('doctor');?></div></th>
                   		
                    		<th><div><?php echo get_phrase('*');?></div></th>

                    	</tr>
                    </thead>


                    <tbody>

                    	<?php 
//print_r($list[0]['patient_id']);
$result = array();
foreach ($list as $element) {
    $result[$element['patient_id']][] = $element;
}
#print_r($result[946][0]['sickness']);
//print_r($result);

						$count = 1;

						foreach($p_log as $row):?>

                        <tr>

                            <td><?php echo $count++;?></td>
                            <td><?php echo $this->crud_model->get_type_name_by_id('patient',$row['patient_id'],'name');?></td>
                            <td><?php 
                            for ($i=0;$i<=2;$i++) {
                            echo date('d M,Y', $result[$row['patient_id']][$i]['creation_timestamp'])."<br/>";
                                }
                            ?></td>

							<td><?php 
                            for ($i=0;$i<=2;$i++) {
                            echo $result[$row['patient_id']][$i]['sickness']."<br/>";
                                }
                            ?></td>
							
							<td><?php 
                            for ($i=0;$i<=2;$i++) {
                            echo $this->crud_model->get_type_name_by_id('doctor',$result[$row['patient_id']][$i]['doctor_id'],'name')."<br/>";
                                }
                            ?></td>
							
							<td align="center"><a href="<?php echo base_url();?>index.php?admin/single_patient_log/<?php echo $row['patient_id'];?>" target="_blank" class="btn btn-red">Patient History</a></td>
						</tr>

					<?php endforeach;?>

					</tbody>

					

                </table>

            </div>

		</div>

	</div>

</div>