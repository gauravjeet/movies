<?php
// Remove extra links that are not needed in this view mode.
unset($content['links']);
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content clearfix"<?php print $content_attributes; ?>>
    <div class="movie-poster">
      <?php print render($content['field_poster']); ?>
    </div>

    <div class="movie-body">
      <?php print render($content['body']); ?>
    </div>

    <div class="movie-options">
      <div class="movie-favorite-flag">
        <?php print render($content['flag_favorite_movie']); ?>
      </div>
      <div class="movie-trailer" title="Watch movie trailer"></div>
    </div>
  </div>
</div>