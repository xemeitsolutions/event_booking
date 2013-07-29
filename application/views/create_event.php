<h1><?php echo lang('create_event_heading');?></h1>
<p><?php echo lang('create_event_subheading');?></p>
<?php //$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));?>

<div id="infoMessage"><?php //echo $message;?></div>

<?php echo form_open("event/create_event");?>

      <p>
            <?php echo lang('create_event_name_label', 'event_name');?> <br />
            <?php echo form_input('event_name');?>
      </p>

      <p>
            <?php echo lang('create_event_discription_label', 'description');?> <br />
            <?php echo form_input('description');?>
      </p>

      <p>
            <?php echo lang('create_event_date_label', 'date');?> <br />
            <?php echo form_input('date');?>
      </p>

      <p>
            <?php echo lang('create_event_time_label', 'time');?> <br />
            <?php echo form_input('time');?>
      </p>

      <p>
            <?php echo lang('create_event_place_label', 'place');?> <br />
            <?php echo form_input('place');?>
      </p>

      <p>
            <?php echo lang('create_event_address_label', 'address');?> <br />
            <?php echo form_input('address');?>
      </p>

      <p>
            <?php echo lang('create_event_city_label', 'city');?> <br />
            <?php echo form_input('city');?>
      </p>
      <p>
            <?php echo lang('create_event_state_label', 'state');?> <br />
            <?php echo form_input('state');?>
      </p>
      <p>
            <?php echo lang('create_event_zip_label', 'zip');?> <br />
            <?php echo form_input('zip');?>
      </p>
      <p>
            <?php echo lang('create_event_status_label', 'status');?> <br />
            <?php echo form_input('status');?>
      </p>
       <p>
            <?php echo lang('create_event_image_label', 'image_path');?> <br />
            <?php echo form_input('image_path');?>
      </p>


      <p><?php echo form_submit('submit', lang('create_event_submit_btn'));?></p>

<?php echo form_close();?>
