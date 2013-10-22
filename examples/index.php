<?php
  require('funcs.php');
?>
<html lang='en' xml:lang='en' xmlns='http://www.w3.org/1999/xhtml'>
  <head>
    <meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
    <script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
    <script src='assets/html/application.js' type='text/javascript'></script>
    <link href='stylesheet.css' media='screen' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="header">
      <div class="box100 no-padding">
        <div class="phaser-version">
          <span>Phaser Version: 1.1</span>
          <!--<a href="#" class="version-button">Update to 1.2</a>-->
        </div>
      </div>
      <div class="clear"></div>
      <div class="line">
        <div class="box20">
          <ul class="nav-links">
            <li class="link-home"><a href="http://phaser.io">Phaser Home</a></li>
            <li class="link-latest"><a href="https://github.com/photonstorm/phaser">Download Latest</a></li>
            <li class="link-forum"><a href="http://www.html5gamedevs.com/forum/14-phaser/">Support Forum</a></li>
            <li class="link-docs"><a href="#">Documentation</a></li>
            <li class="link-twitter"><a href="https://twitter.com/photonstorm">Twitter</a></li>
          </ul>
        </div>
        <div class="box60 txt-center">
          <div class="phaser-examples"></div>
        </div>
        <div class="box20">
          <div class="phaser-logo"></div>
        </div>
      </div>
    </div>
    <div class="clear clear25"></div>
    <div class="line go-top border-bottom">
    <?php
        //echo "<h2>Total Tests: $total </h2>";

        $i = 0;

        foreach ($files as $key => $value)
        {
            //  If $key is an array, output it as an h2 or something
            if (is_array($value) && count($value) > 0)
            {
                if ($i == 1)
                {
    ?>
    <div class="clear5"></div>
    <div class="line dark-bg">
    <?php
                }
                else if ($i == 2)
                {
    ?>
    <div class="clear5"></div>
    <div class="line bright-bg">
    <?php
                }
    ?>
      <div class="box20">
        <p class="title strong"><?php echo $key ?></p>
        <p class="count-examples strong"><?php echo count($value) ?> examples</p>
      </div>
      <div class="box80">
        <ul class="group-items">
    <?php
                echo printJSLinks($key, $value, false);

                $i++;

                if ($i == 3)
                {
                    $i = 1;
                }
            }
    ?>
        </ul>
      </div>
    </div>
    <?php                
        }
    ?>

    <div class="clear"></div>
    <div id="footer" class="footer">
      <div class="main-container centered">
        <div class="prize-bg">
          <a href="#" class="prize-button">View details &amp; submit</a>
        </div>
        <div class="line">
          <div class="box20">
            <a href="http://www.photonstorm.com" class="photonstorm-logo"></a>
            &copy; 2013 Photon Storm Ltd.<br/>
            All rights reserved.
          </div>
          <div class="box5">
            <div class="flixel-logo"></div>
          </div>
          <div class="box15">
            Looking for a flash game framework?<br/>
            <a href="http://flixel.org">Try Flixel</a>
          </div>
          <div class="box55 float-right">
            <ul class="footer-links">
              <li><a class="github-icon" href="https://github.com/photonstorm/phaser">Phaser on Github</a></li>
              <li><a class="twitter-icon" href="https://twitter.com/photonstorm">@photonstorm</a></li>
              <li><a class="forums-icon" href="http://www.html5gamedevs.com/forum/14-phaser/">Phaser Forums</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>