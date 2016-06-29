<div class="content2">
     <div class="row mt40">
          <div class="col-xs-12 t_c ">
               <h1 class="main_title"><?php echo $_SESSION['TITLE_WELCOME'];?></h1>
          </div>
          <!-- <div class="col-xs-12">
               
               <ul class="nav nav-pills">
                    <li class="active"><a href="#">Login</a></li>
                    <li><a href="#">Signup</a></li>
               </ul>
               
          </div> -->
     </div>

     <div class="row mt40">
          <div class="col-xs-12">
          <?php 
          $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
          echo form_open("login/index", $attributes);?>

          <fieldset>
               <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1"><?php echo $_SESSION['LABEL_PHONENUMBER'] ?></span>
                    <input class="form-control" id="txt_phone" name="txt_phone" placeholder="<?php echo $_SESSION['LABEL_PHONENUMBER'] ?>" type="text" value="<?php echo set_value('txt_phone'); ?>" aria-describedby="basic-addon1">
                    <span class="text-danger"><?php echo form_error('txt_phone'); ?></span>
               </div>

               <div class="input-group mt10">
                    <span class="input-group-addon" id="basic-addon1"><?php echo $_SESSION['LABEL_PASSWORD'] ?></span>
                    <input class="form-control" id="txt_password" name="txt_password" placeholder="<?php echo $_SESSION['LABEL_PASSWORD'] ?>" type="password" value="<?php echo set_value('txt_password'); ?>" aria-describedby="basic-addon1">
                    <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
               </div>

               <!-- Show validation code -->
               <div class="input-group mt10">
                    <span class="input-group-addon" id="basic-addon1">
                      <img id="imgCaptcha" src="<?php echo base_url()?>index.php/login/create_image" />
                    </span>
                    <input class="form-control" id="txt_code" name="txt_code" placeholder="<?php echo $_SESSION['TEXT_ENTERCODE']; ?>" type="text" value="" aria-describedby="basic-addon1">
                    <span class="text-danger"><?php echo form_error('txt_code'); ?></span>
               </div>
              
              

               <div class="form-group mt20">
                    <div class="col-lg-12 col-sm-12 text-center">
                         <input id="btn_login" name="btn_login" type="submit" class="btn btn-light" value="<?php echo $_SESSION['BTN_LOGIN']; ?>" />
                    </div>
               </div>
          </fieldset>

          <?php echo form_close(); ?>
          <?php echo $this->session->flashdata('msg'); ?>
          </div>
     </div>
     
</div>
