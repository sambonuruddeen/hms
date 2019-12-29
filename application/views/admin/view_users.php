<div class="box">

<div class="box-header">
      <!------CONTROL TABS START------->
</div>

    <div class="tab-pane box active" id="edit" style="padding: 5px">
        <div class="box-content">

         <div class="padded">
              <table cellpadding="0" cellspacing="0" border="0" width="50%" class="dTable responsive">

                                            <tr>

                            
        <th><div><?php echo get_phrase('doctors');?></div></th>
        <td><div><?php echo $this->db->count_all_results('doctor');?></div></td>
    </tr>
    <tr>
        
        <th><div><?php echo get_phrase('nurses');?></div></th>
        <td><div><?php echo $this->db->count_all_results('nurse');?></div></td>
    </tr>
    <tr>
        <th><div><?php echo get_phrase('pharmacists');?></div></th>
        <td><div><?php echo $this->db->count_all_results('pharmacist');?></div></td>
    </tr>
    <tr>
        <th><div><?php echo get_phrase('accountants');?></div></th>
        <td><div><?php echo $this->db->count_all_results('accountant');?></div></td>
    </tr>
    <tr>
        <th><div><?php echo get_phrase('laboratorists');?></div></th>
        <td><div><?php echo $this->db->count_all_results('laboratorist');?></div></td>
    </tr>
    <tr>
        <th><div><?php echo get_phrase('patients');?></div></th>
        <td><div><?php echo $this->db->count_all_results('patient');?></div></td>
    </tr>
    <tr>        
        <th><div><?php echo get_phrase('admin');?></div></th>
        <td><div><?php echo $this->db->count_all_results('admin');?></div></td>

    </tr>

                    
                </table>
         </div>

        </div>

    </div>

</div>


