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
    <?php if(isset($node->created)):?>
      <span class="post-date"><?php print date('M j, Y',$node->created); ?></span>
    <?php endif; ?>

    <?php print render($title_prefix); ?>
      <?php if($title): ?>
        <h2 class="post-title" <?php print $title_attributes; ?>><?php print $title; ?></h2>
      <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($tabs): ?>
      <div class="tabs">
        <?php print render($tabs); ?>
      </div>
    <?php endif; ?>    
    <?php print render($page['content']); ?>

  </div>
  <div class="sidebar">
    <?php print render($page['sidebar_first']); ?>
  </div><!-- sidebar -->
</div><!-- container -->

<footer>
  <?php print render($page['footer']); ?>
</footer>