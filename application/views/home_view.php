<nav class="navbar navbar-default navbar-clear navbar-home transition">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ProperGolf</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-left">

        <li>
          <p class="slogan">Learn Properly, Play Better!</p>
        </li>
        <li>

      </ul>
      <ul class="nav navbar-nav navbar-right">

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

<div class="container-bg">
  <div class="container-bg-overlay"></div>
  <video autoplay loop muted id="video-bg">
    <source src="<?php echo asset_url(); ?>vid/video.mp4" type="video/mp4">
  </video>
</div>

<div class="container-fluid hero">
  <div class="container">
      <div class="row title">
          <div class="col-md-12 t_c"><h1>Finally, a site that teaches Golf Properly!</h1></div>
          <div class="col-md-12 t_c"><h2>Proven techniques in easy to learn bite-sized lessons.</h2></div>

      </div>

      <!-- <div class="row play_button">
          <div class="col-md-12 t_c">
              <a href="" class="play_button_wrapper">
                  <i class="fa fa-play-circle" aria-hidden="true"></i>
                  <span>Watch the Video</span>
              </a>

          </div>
      </div> -->

      <div class="row">
            <div class="col-md-12 t_c">
                <a href="<?php echo site_url('customize') ?>" class="hero_button transition">Get Started For Free</a>
            </div>
      </div>

      <div class="row">
            <div class="col-md-12 t_c">
                <div class="box-square">

                </div>

            </div>
      </div>
  </div>
</div>

<div class="container-fluid section-top">
    <div class="container usps-sect">
        <div class="row">
            <div class="col-md-12 t_c">
                <h2>Why ProperGolf?</h2>
                <h3>100% proven to work for players of all levels.</h3>
            </div>
        </div>
        <div class="row usps">
            <div class="col-md-4 t_c">
                <div class="t_c">
                  <div class="usp_image clr-1 b-clr-1"><i class="fa fa-list-ol" aria-hidden="true"></i></div>
                </div>

                <h3>Simple</h3>
                <p >Complex made simple in easy to understand bite-sized lessons.</p>
            </div>
            <div class="col-md-4 t_c">
                <div class="t_c">
                  <div class="usp_image clr-2 b-clr-2"><i class="fa fa-sitemap" aria-hidden="true"></i></div>
                </div>
                <h3>Organized</h3>
                <p>Information is organized and taught in the proper sequence.</p>
            </div>
            <div class="col-md-4 t_c">
                <div class="t_c">
                  <div class="usp_image clr-4 b-clr-4"><i class="fa fa-line-chart" aria-hidden="true"></i></div>
                </div>
                <h3>Proper Practice</h3>
                <p>Learn to practice properly using set drills and see rapid progression.</p>
            </div>
        </div>
        <table class="highlights">
            <tr>
                <td><i class="fa fa-check clr-1" aria-hidden="true"></i></td>
                <td>Complete step by step instruction and drills, tailored to your knowledge and ability.</td>
            </tr>
            <tr>
                <td><i class="fa fa-check clr-1" aria-hidden="true"></i></td>
                <td>Check points to track your progress and ensure proper foundations are set before moving on to more advanced skills.</td>
            </tr>
            <tr>
                <td><i class="fa fa-check clr-1" aria-hidden="true"></i></td>
                <td>Guarantees proper progression to a consistent, powerful swing!</td>
            </tr>

        </table>
    </div>
</div>

<div class="container-fluid section2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
              <br>
              <h2>Frustrated?</h2>
                <p>Too much information on the internet?<br>
                Information incomplete, incorrect, or not applicable to you?<br>
                Can't distinguish the good from the bad?</p>
              <h2 class="mtop50">Introducing ProperGolf</h2>
                <p>The most comprehensive and innovative step by step golf instruction ever created.  A complete program starting with the basics and proceeding to the most advanced golf theories and techniques.  We break golf down to simple to understand components.  Each component is presented in the correct sequence and reviewed in finite detail. This ensures there is no confusion in the learning process.</p>
              <br>
             </div>

            <div class="col-md-6">
              <div class="video_box">
                <iframe src="https://www.youtube.com/embed/sXtekwuT8R0" frameborder="0" width="100%" allowfullscreen></iframe>
              </div>
            </div>



        </div>
    </div>
</div>

<div class="container-fluid section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 t_c">
                <h2>ProperGolf Vs. The Other Guys</h2>
            </div>
        </div>
         <div class="row versus-content">
            <div class="col-md-5">

                <h3>ProperGolf</h3>
                <p >ProperGolf is not another typical program that promises you will be able to drive the ball 30 yards farther with a quick tip. We have spent thousands of hours crafting the ProperGolf learning curriculum based on proven methodologies that works for golfers of all levels.
                </p><br>
                <p>Throughout the program, we start with basic concepts and build upon them via easy to follow bite-sized lessons. We teach how to build good habits, and also the logic on why those are good habits.  We provide comprehensive information so nothing is left unclear and questions and videos can be submitted for direct feedback on anything that is uncertain.
                </p><br>
                <p>If you're willing to put the time in to learn and practice properly, you will see improvements in your game... it's that simple.</p>
            </div>

            <div class="col-md-2">
              <div class="versus-line"></div>
              <div class="versus clr-2 b-clr-2">&nbsp;Vs.</div>
            </div>

            <div class="col-md-5">
                <h3>The Other Guys</h3>
                <p>Tired of trying countless 'Quick tips and fixes' programs that never actually improve your game?</p>
                <br/>
                <p>These guys captured your interest with false promises, but think about it, that's not how learning is actually done!</p>
                <br>
                <p>When you start learning piano, do you look for quick tips and fixes that will allow you to play the piano like Mozart? Of course not! You begin by learning the basics: music theory and practicing scales. It's the same in Golf, you begin by learning basic concepts and build upon it. These guys won't teach you that, but ProperGolf will.</p>
            </div>

        </div>
    </div>
</div>

<div class="container-fluid section2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 t_c"><h2>Success Stories</h2></div>
        </div>
        <div class="row stories">
          <div class="col-md-4">
              <div class="story"></div>
          </div>
          <div class="col-md-4">
              <div class="story"></div>
          </div>
          <div class="col-md-4">
              <div class="story"></div>
          </div>
        </div>
    </div>
</div>
