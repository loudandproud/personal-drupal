
  <header>
    <div class="container">


      <div class="back-to-home">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
        <?php 
          if($site_name) {
            print $site_name;
          } 
        ?>
        </a>
      </div>
      <?php print render($page['menu']); ?>

    </div><!-- container -->
  </header>
  <div class="container">
    <div class="main-content">
      <section class="post">
        <span class="post-date">May 16, 2016</span>
        <h2 class="post-title"><a href="">Here's the third one.</a></h2>
        <div class="post-summary">ああああいうえぴあjりえおぱおえいじゃぺおりじゃおぺり</div>
      </section>
      <section class="post">
        <span class="post-date">May 12, 2016</span>
        <h2 class="post-title"><a href="">Another post with comments</a></h2>
        <div class="post-summary">
          Dustin Curtis recently wrote about Fixing Twitter — most of which I can't say I agree with — but he did touch on an idea I like to call being Lost in your Vision.
        </div>
      </section>
      <section class="post">
        <span class="post-date">May 9, 2016</span>
        <h2 class="post-title"><a href="">This is the first post</a></h2>
        <div class="post-summary">
          What happens when we stop trying to measure emotion and start feeling it instead?
        </div>
      </section>
    </div>
    <div class="sidebar">
      <div class="sidebar-item">
        <img src="images/profile.png" alt="" class="profile-pic">
        <p>Toru</p>
      </div>
      <div class="sidebar-item">
        <p class="profile-description">I'm Toru. Welcome to my humble blog. I love coding, designing, blogging, and taking great photos. This is a sub blog or quick note of <a href="http://loudandproud.me">Loud And Proud</a>.</p>
      </div>
      <div class="sidebar-item">
        <div class="social-media">
          <ul>
            <li class="social-media-item"><a href=""><img src="images/facebook.svg" alt="facebook" class="social-media-icon"></a></li>
            <li class="social-media-item"><a href=""><img src="images/twitter.svg" alt="twitter" class="social-media-icon"></a></li>
            <li class="social-media-item"><a href=""><img src="images/instagram.svg" alt="instagram" class="social-media-icon"></a></li>
          </ul>
          <p class="credits">These icons made by <a href="http://www.flaticon.com/authors/bogdan-rosu" target="_blank">Bogdan Rosh</a></p>
        </div>
      </div>
    </div><!-- sidebar -->
  </div><!-- container -->
  <footer>
    <p class="copyright">All Rights Reserved: Loud And Proud</p>
  </footer>