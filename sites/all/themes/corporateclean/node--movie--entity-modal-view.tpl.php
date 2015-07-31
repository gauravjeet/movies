<?php
  // Remove extra links that are not needed in this view mode.
  unset($content['links']);

  // Add js file for swapping movie details and trailer.
  drupal_add_js(drupal_get_path('theme', 'corporateclean') . '/js/movie_toggle_popup_details.js');
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="movie-details">
    <div class="movie-poster">
      <?php print render($content['field_poster']); ?>
    </div>

    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a class="entity-modal-node-title" href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>

    <div class="content clearfix"<?php print $content_attributes; ?>>
      <div class="movie-body">
        <?php print render($content['body']); ?>
      </div>
    </div>
  </div>

  <div id="movie-trailer-field">
    <?php print render($content['field_trailer']); ?>
  </div>

  <div class="movie-options">
    <div class="movie-favorite-flag">
      <?php print render($content['flag_favorite_movie']); ?>
    </div>
    <div class="movie-trailer" title="Watch movie trailer"></div>
    <div class="movie-details-icon" title="Movie Details"></div>
  </div>  
</div>