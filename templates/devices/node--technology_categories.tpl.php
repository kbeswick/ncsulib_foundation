<?php
  drupal_add_css(drupal_get_path('theme', 'ncsulibraries').'/styles/node-technology_categories.css');
  hide($content['comments']);
  hide($content['links']);
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

    <ul class="crumbs">
      <li><a href="/1techlending">Technology Lending</a></li>
      <li><?php print $title; ?></li>
    </ul>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print render($content); ?>
  </div>
</div>
