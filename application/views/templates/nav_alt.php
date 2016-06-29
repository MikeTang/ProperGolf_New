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
      
 

      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      
      <ul class="nav navbar-nav navbar-right">
        
        <li>
          <a href="<?php echo site_url('study/search'); ?>"><?php echo $_SESSION['TITLE_GRAMMAR_DICT']; ?></a>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-globe"></i> 
          <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('lang/set/en');?>">English</a></li>
            <li><a href="<?php echo site_url('lang/set/cn');?>">中文</a></li>
          </ul>
        </li>

        <li class="dropdown">
            
            <li><a href="<?php echo site_url('signup/index');?>"><?php echo $_SESSION['BTN_SIGNUP']; ?></a></li>
            <li><a href="<?php echo site_url('login/index');?>"><?php echo $_SESSION['BTN_LOGIN']; ?></a></li>
         
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>