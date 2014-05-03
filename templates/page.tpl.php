<?php

/**
 * @file
 * theme implementation to display a single Drupal page.
 *
 * Available variables:
 * for info on available variables see modules/system/page.tpl.php
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['top']: Items for the top content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar']: Items for the sidebar.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>

<div class="page">
  <header class="outer-container">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($page['header'] || $debug): ?>
      <div class="header">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
  </header>

  <?php if ($page['top'] || $debug): ?>
    <section class="top outer-container">
      <?php print render($page['top']); ?>
    </section>
  <?php endif; ?>

  <div class="main outer-container">
    <?php if($messages): ?>
      <div class="system-messages">
        <?php print $messages; ?>
      </div>
    <?php endif; ?>

    <div class="content">
      <div class="main-content" role="main">
        <?php print render($title_prefix); ?>
        <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
        <?php print render($title_suffix); ?>

        <?php if (!empty($tabs['#primary']) || !empty($action_links)): ?>
          <nav id="content-author-navigation">
            <?php if (!empty($tabs['#primary'])): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          </nav>
        <?php endif; ?>

        <?php print render($page['content']); ?>
        <?php print $feed_icons; ?>
      </div>
    </div>

    <?php if ($page['sidebar_first'] || $debug): ?>
      <aside class="sidebar" role="complementary">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>
  </div>

  <?php if ($page['footer'] || $debug): ?>
    <footer class="footer outer-container">
      <?php print render($page['footer']); ?>
    </footer>
  <?php endif; ?>
</div>
