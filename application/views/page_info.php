        <div class="container-fluid" >

            <div class="row-fluid">

                <div class="area-top clearfix">

                    <div class="pull-left header">

                        <h3 class="title">

                        <i class="icon-info-sign"></i>

                        <?php echo $page_title;?> </h3>

                    </div>

                    <ul class="inline pull-right sparkline-box">

                        <li class="sparkline-row">

                            <h4 class="green">

                                <span>
            <a href="<?php echo base_url();?>index.php?admin/view_users" ><?php echo get_phrase('total_users');?></a></span> 

                                
            <?php 

            $query = $this->db->query("SELECT accountant_id, name FROM accountant UNION ALL
SELECT admin_id, name FROM admin UNION ALL
SELECT doctor_id, name FROM doctor UNION
SELECT laboratorist_id, name FROM laboratorist UNION ALL
SELECT nurse_id, name FROM nurse UNION ALL
SELECT patient_id, name FROM patient UNION ALL
SELECT pharmacist_id, name FROM pharmacist
");

            echo $query->num_rows();
            ?>
    

                            </h4>

                        </li>

                        <!---<li class="sparkline-row">

                            <h4 class="red">

                                <span><?php echo get_phrase('patient');?></span> 

                                <?php echo $this->db->count_all_results('patient');?>

                            </h4>

                        </li>-->

                        <!--<li class="sparkline-row">

                            <h4 class="blue">

                                <span><?php echo get_phrase('appointment');?></span> 

                                <?php echo $this->db->count_all_results('appointment');?>

                            </h4>

                        </li>-->

                        <!--<li class="sparkline-row">

                            <h4 class="green">

                                <span><?php echo get_phrase('nurse');?></span> 

                                <?php echo $this->db->count_all_results('nurse');?>

                            </h4>

                        </li>-->

                    </ul>

                </div>

            </div>

        </div>

        

        <!--------FLASH MESSAGES--->

        

		<!--<?php if($this->session->flashdata('flash_message') != ""):?>

        <div class="container-fluid padded">

        	<div class="alert alert-info">

              <button type="button" class="close" data-dismiss="alert">×</button>

              <?php echo $this->session->flashdata('flash_message');?>

            </div>

        </div>

        <?php endif;?>-->

        

        

        <?php if($this->session->flashdata('flash_message') != ""):?>

 		<script>

			$(document).ready(function() {

				Growl.info({title:"<?php echo $this->session->flashdata('flash_message');?>",text:""})

			});

		</script>

        <?php endif;?>