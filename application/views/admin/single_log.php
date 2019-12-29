<div class="box">
	<div class="box-header">

    

    	<!------CONTROL TABS START------->

		<ul class="nav nav-tabs nav-tabs-left">

			<li class="active">

            	<a href="#list"><i class="icon-align-justify"></i> 

					<?php echo $patient[0]['name'];?>

                    	</a></li>

		</ul>

    	<!------CONTROL TABS END------->

        

	</div>

	<div class="box-content padded">

		<div class="tab-content"> 


		
            	

			<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered responsive">
				<tbody>

				<tr>
					<td>Gender: <?php echo $patient[0]['sex'];?></td>
					<td>Age: <?php echo $patient[0]['age'];?></td>
					<td>Blood Group: <?php echo $patient[0]['blood_group'];?></td>
					<td><strong>Last Visit: <?php echo date('d M,Y', $records[0]['creation_timestamp']);?></strong></td>
				</tr>

				<tr>
					<td>E-mail: <?php echo $patient[0]['email'];?></td>
					<td>Phone No: <?php echo $patient[0]['phone'];?></td>
					<td>Address: <?php echo $patient[0]['address'];?></td>
					<td><strong>No. of Visits: <?php echo count($records);?></strong></td>
				
				</tr>

				</tbody>
			</table>


			
			<h4>History</h4>

			<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered responsive">
				<tbody>
					<?php foreach($records as $row): ?>
				<tr>
					<td><strong>Sickness: <?php echo $row['sickness'];?></strong></td>
					<td><strong>Day of Visit: <?php echo date('d M,Y', $row['creation_timestamp']);?></strong></td>
					<td><strong>Doctor: <?php echo $this->crud_model->get_type_name_by_id('doctor',$row['doctor_id'], 'name');?></strong></td>
					
				</tr>

				<tr>
					<td><strong>Case History:</strong> <?php echo $row['case_history'];?></td>
					<td><strong>Description:</strong> <?php echo $row['description'];?></td>
					<td><strong>Medication:</strong> <?php echo $row['medication'];?></td>
					
				
				</tr>
			<?php endforeach;?>

				</tbody>
			</table>

		

		</div>

	</div>

</div>