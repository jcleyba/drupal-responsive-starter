<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>

<div id="page">
  
    <header class="frame" id="header" role="banner">
      <div id="header-content">
      <?php if ($logo): ?>
        <div class="bit-4"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
      </div><?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div class="header__name-and-slogan" id="name-and-slogan">
          <?php if ($site_name): ?>
            <h1 class="" id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div class="bit-" id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div>
      <?php endif; ?>

     
     <div class=""> <button id="nav-button" class="bit-"><span></span><span></span><span></span></button></div>
      <?php print render($page['header']); ?>
    </div>
    </header>
  
      <div id="navigation" class="frame">

      <?php if ($main_menu): ?>
        <nav id="main-menu" role="navigation" tabindex="-1" class="bit-">
          <?php
          // This code snippet is hard to modify. We recommend turning off the
          // "Main menu" on your sub-theme's settings form, deleting this PHP
          // code block, and, instead, using the "Menu block" module.
          // @see https://drupal.org/project/menu_block
          print theme('links__system_main_menu', array(
            'links' => $main_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>

      <?php print render($page['navigation']); ?>

    </div>
     <?php print render($page['highlighted']); ?>
  <div id="main" class="frame">
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
    <div id="content" class="" role="main">
    
      <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
    
   <div class="frame"><?php print render($page['content']); ?></div>
      <?php print $feed_icons; ?>
    </div>



    <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar_first  = render($page['second_row']);
      $sidebar_second = render($page['third_row']);
      $sidebar_second = render($page['fourth_row']);
    ?>

    <?php if ($sidebar_first || $sidebar_second): ?>
      <aside class="sidebars frame">
      <div class="">  <?php print $sidebar_first; ?></div>
       <div class="">   <?php print $sidebar_second; ?></div>
      </aside>
    <?php endif; ?>

  </div>
</div>
 <div class="frame"> <?php print render($page['footer']); ?></div>



<div class="frame"><?php print render($page['bottom']); ?></div>

