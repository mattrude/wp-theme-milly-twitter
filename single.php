<?php /* Template Name: Twitter Page */ ?>
<?php get_header(); ?>

<div id='content'>
  <?php while (have_posts()) : the_post();
    global $ozh_ta;
    $tweet_id = get_post_meta( $post->ID, 'ozh_ta_id', true);
    $permlink = get_permalink( $post->ID );
    $screename = $ozh_ta['screen_name']; ?>
    <div class="post" id="tweet_template-<?php echo $post->ID; ?>">
      <div id='tweet-<?php echo $post->ID; ?>' class='tweet_post' >
        <img src="<?php ozh_ta_twitter_avatar(); ?>" class='tweet-image' style='margin-right: 5px;' alt='Twitter bird' />
	<?php the_content(); ?>
      </div>
      <div id='tweet_date-<?php echo $post->ID; ?>' class='byline tweet_date' >
	Posted to <a href="<?php ozh_ta_tweet_link(); ?>">Twitter</a> by <a href="http://twitter.com/<?php echo $screename; ?>">Matt Rude</a> on <?php
        the_time('F jS, h:ma T Y');
	edit_post_link('Edit', ' | '); ?>
      </div>	
    </div>
  <?php endwhile; ?>
  <div class="navigation">
     <div class="floatleft"><?php next_post_link('%link', '&laquo; Next Tweet') ?></div>
     <div class="floatright"><?php previous_post_link('%link', 'Previous Tweet &raquo;') ?></div>
     <div class="clearfloatthick">&nbsp;</div>
   </div>
</div><!--close content id-->

<?php get_footer(); ?>
