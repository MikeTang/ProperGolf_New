<div class="container-fluid mtop50">
    
    <div class="container customize-sect">
      <div class="row">
        <div class="col-xs-12 t_c">
              <h2 class="main_title">Log In</h2>
         </div>
      </div>
    </div>

    <div class="container customize-sect-signup">
     <div class="row">
          <div class="col-xs-12">
          
                    <div class="row mt40">
                         <div class="col-xs-12">
                         <?php 
                         $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
                         echo form_open("login/index", $attributes);?>

                         <fieldset>
                             
                              <div class="input-group mt10">
                                   <span class="input-group-addon input_label" id="basic-addon1">Email</span>
                                   <input class="form-control" id="txt_email" name="txt_email" placeholder="" type="text" value="" aria-describedby="basic-addon1">
                                   <span class="text-danger"><?php echo form_error('txt_email'); ?></span>
                              </div>

                              <div class="input-group mt10">
                                   <span class="input-group-addon input_label" id="basic-addon1">Password</span>
                                   <input class="form-control" id="txt_password" name="txt_password" placeholder="" type="password" value="" aria-describedby="basic-addon1">
                                   <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                              </div>

                              <div class="form-group mt20 signup-bottom">
                                   <div class="col-lg-12 col-sm-12 t_c">
                                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary green_button" value="Log In" />
                                   </div>
                              </div>
                         </fieldset>

                         <?php echo form_close(); ?>
                         <?php echo $this->session->flashdata('msg'); ?>
                         </div>
                    </div>
               </div>
          </div>
      </div>
</div>
