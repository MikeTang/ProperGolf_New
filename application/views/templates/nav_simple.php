<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand clr-dark" href="<?php echo site_url('home') ?>">ProperGolf</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
   
      <ul class="nav navbar-nav navbar-right clr-dark">
        
        <?php if (isset($_SESSION["user_id"])) :?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> 
          <?php echo $_SESSION["user"]->name; ?></span>
          <span class="caret">
          </a>
          <ul class="dropdown-menu">
            <!-- <li><a href="#">My Account</a></li> -->
            <!-- <li role="separator" class="divider"></li> -->
            <li><a href="<?php echo site_url('login/logout');?>">Log out</a></li>
          </ul>
        </li>
        <?php else :?>
          <li>
            <a href="">
              Log In
            </a>
          </li>
        <?php endif; ?>
        
        
  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>