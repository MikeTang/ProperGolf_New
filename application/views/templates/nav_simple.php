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

      <?php if ($current != 'Customize') :?>
        <ul class="nav navbar-nav navbar-normal">
          <li <?php if ($current == "course") echo "class='active'" ;?>><a href="<?php echo site_url('path')?>"><i class="fa fa-road" aria-hidden="true"></i>My Path</a></li>
          <li <?php if ($current == "view all") echo "class='active'" ;?>><a href="<?php echo site_url('path')?>"><i class="fa fa-video-camera" aria-hidden="true"></i>All Courses</a></li>
        </ul>
      <?php endif; ?>

      <ul class="nav navbar-nav navbar-right clr-dark">

        <?php if (isset($_SESSION["user"])) :?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle user-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
          <?php echo $_SESSION["user"]->name; ?></span>
          <span class="caret">
          </a>
          <ul class="dropdown-menu">
            <li><a href="#" class="transition">My Profile</a></li>
            <li><a href="#" class="transition">Course Settings</a></li>
            <li><a href="<?php echo site_url('login/logout');?>" class="transition">Log out</a></li>
          </ul>
        </li>
        <?php else :?>
          <li>
            <a href="<?php echo site_url('login/index') ?>">
              Log In
            </a>
          </li>
        <?php endif; ?>



      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>