<?php

// Add Automatic Feed Links to theme for WordPress 3.0
add_theme_support( 'automatic-feed-links' );

/********************************************************************************
 Your changeable header business starts here
*/

$custom_header_support = array(
    'default-image' => '%s/images/header-cabin.jpg',
    'default-text-color' => '000',
    'header-text' => false,
    'width' => 700,
    'height' => 143,
);

add_theme_support( 'custom-header', $custom_header_support );

function milly_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
        border-bottom: 1px solid #000000;
        border-top: 4px solid #000000;
}

/* If NO_HEADER_TEXT is false, you can style here the header text preview */
#headimg #name {
}

#headimg #desc {
}
</style>
<?php
}


/*********************************************************************************
 Change the page naviagion forward and back buttons
*/

function milly_navigation_post() {
  ?>
  <div class="navigation">
     <div class="floatleft"><?php next_post_link('&laquo; %link') ?></div>
     <div class="floatright"><?php previous_post_link('%link &raquo;') ?></div>
     <div class="clearfloatthick">&nbsp;</div>
   </div>
  <?php
}

function milly_navigation_category() {
  ?>
  <div class="navigation">
    <div class="txtalignleft"><?php previous_posts_link('&laquo; Newer Entries'); ?></div>
    <div class="txtalignright"><?php next_posts_link('Older Entries &raquo;') ?></div>
    <div class="clearfloatthick">&nbsp;</div>
  </div>
  <?php
}

?>
