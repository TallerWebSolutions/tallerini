<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<header id="header" role="header">
  <?php print drupal_render($main_navbar); ?>
</header>

<div id="main-wrapper">
  <div id="main" class="main">
    <div class="container">
      <?php if ($breadcrumb): ?>
        <div id="breadcrumb" class="visible-desktop">
          <?php print $breadcrumb; ?>
        </div>
      <?php endif; ?>
      <?php if ($messages): ?>
        <div id="messages">
          <?php print $messages; ?>
        </div>
      <?php endif; ?>
      <div id="page-header">
        <?php if ($title): ?>
          <div class="page-header">
            <h1 class="title"><?php print $title; ?></h1>
          </div>
        <?php endif; ?>
        <?php if ($tabs): ?>
          <div class="tabs">
            <?php print render($tabs); ?>
          </div>
        <?php endif; ?>
        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
    <div id="content" class="<?php print (!$is_panel) ? 'container' : ''; ?>">
      <?php print render($page['content']); ?>
    </div>
  </div> <!-- /#main -->
</div> <!-- /#main-wrapper -->

<footer id="footer" class="footer" role="footer">
  <div class="container">
    <?php if ($copyright): ?>
      <small class="copyright pull-left"><?php print $copyright; ?></small>
    <?php endif; ?>
    <?php if (!empty($newsletter)): ?>
        <?php if (!empty($newsletter['subject'])): ?>
          <h4><?php print $newsletter['subject']; ?></h4>
        <?php endif; ?>
        <?php print render($newsletter['content']); ?>
    <?php endif; ?>
    <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
  </div>
</footer>