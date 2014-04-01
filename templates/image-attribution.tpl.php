<?php
/**
 * $image - contains the image html rendered by Drupal
 * $attribution - optional image attribution string
 */
?>
<?php print $image; ?>
<?php if ($attribution): ?>
  <blockquote class="image-attribution">
    <?php print $attribution; ?>
  </blockquote>
<?php endif; ?>
