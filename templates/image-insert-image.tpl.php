<?php
/**
 * @file
 * Template file for Image module content inserted via the Insert module.
 *
 * Available variables:
 * - $item: The complete item being inserted.
 * - $url: The URL to the image.
 * - $class: A set of classes assigned to this image (if any).
 * - $width: The width of the image (if known).
 * - $height: The height of the image (if known).
 * - $style_name: The Image style being used.
 * - $attribution: An attribution string.
 *
 * Note that ALT and Title fields should not be filled in here, instead they
 * should use placeholders that will be updated through JavaScript when the
 * image is inserted.
 *
 * Available placeholders:
 * - __alt__: The ALT text, intended for use in the <img> tag.
 * - __title__: The Title text, intended for use in the <img> tag.
 * - __description__: A description of the image, sometimes used as a caption.
 * - __filename__: The file name.
 * - __[token]_or_filename__: Any of the above tokens if available, otherwise
 *   use the file's name. i.e. __title_or_filename__.
 */
?>
<img src="<?php print $url ?>" <?php if ($width && $height): ?>width="<?php print $width; ?>" height="<?php print $height; ?>" <?php endif; ?>alt="__alt__" title="__title__" class="image-<?php print $style_name ?><?php print $class ? ' ' . $class : '' ?>" />
<?php if ($attribution): ?>
  <blockquote class="image-attribution"><?php print $attribution; ?></blockquote>
<?php endif; ?>
