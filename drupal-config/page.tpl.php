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
    <?php print render($page['content']); ?>
  </div>
  <div class="sidebar">
    <?php print render($page['sidebar_first']); ?>
  </div><!-- sidebar -->
</div><!-- container -->

<footer>
  <?php print render($page['footer']); ?>
</footer>