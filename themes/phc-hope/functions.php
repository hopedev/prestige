<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/uikit-menu-walker-offcanvas.php',
  'lib/uikit-menu-walker.php'
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

// Remove related from end of youtube video embeds
add_filter('oembed_result', 'ehide_youtube_related_videos', 10, 3);
function ehide_youtube_related_videos($data, $url, $args = array()) {

  //Autoplay
  $autoplay = strpos($url, "autoplay=1") !== false ? "&autoplay=1" : "";

  //Setup the string to inject into the url
  $str_to_add = apply_filters("add_extra_querystring_parameters", "wmode=transparent&amp;") . 'rel=0';

  //Regular oembed
  if (strpos($data, "feature=oembed") !== false) {
    $data = str_replace('feature=oembed', $str_to_add . $autoplay . '&amp;feature=oembed', $data);

  //Playlist
  } elseif (strpos($data, "list=") !== false) {
    $data = str_replace('list=', $str_to_add . $autoplay . '&amp;list=', $data);
  }

  //All Set
  return $data;
}