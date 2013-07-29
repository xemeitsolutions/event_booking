<? $this->load->view('includes/header'); ?>
<?php $this->load->helper('html'); ?>
<div id="content" class="container">
    	<div class="loginblk">
            <div class="block clearfix">
                <div class="title">
                    <div class="shadow"></div>
                     <h6><span class="span-1"><?php echo img('assets/images/lock_icon1.png'); ?></span><?php echo lang('login_heading');?></h6>
                     
<div class="settings_box dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <li><?php echo anchor('auth/forgot_password', lang('login_forgot_password'));?></li>
                            <li class="second"><?php echo anchor('auth/create_user',lang('login_create_account'));?></li>
                        </ul>
                    </div>
                </div>


<div id="infoMessage"><?php echo $message;?></div>
<div class="inblock">
<?php echo form_open("auth/login");?>
<ul>
   <li>
       <?php $identity = 'placeholder="Username*"';?>
        <div class="input-1"> <?php echo form_input('identity','',$identity);?></div>
  </li>
	 <li>
       <?php $password = 'placeholder="Password*"';?>
        <div class="input-2"> <?php echo form_password('password','',$password);?></div>
  </li>
   <li>
  <div class="checkbox"><?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?></div>
    <label class="label-1"><?php echo lang('login_remember_label', 'remember');?></label>
   <?php echo form_submit('submit',lang('login_submit_btn'),'class = "submit"');?>
</li></ul>
<?php echo form_close();?>
</div>
                <div class="botbg"></div>
            </div>
        </div>
    </div>
