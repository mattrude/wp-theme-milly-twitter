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
	<div class="twitter-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'twentyeleven_status_avatar', '65' ) ); ?></div>
	<?php the_content(); ?>
      </div>
      <div id='tweet_date-<?php echo $post->ID; ?>' class='byline tweet_date' >
	Posted to <a href="<?php ozh_ta_tweet_link(); ?>">Twitter</a> by <a href="http://twitter.com/<?php echo $screename; ?>">Matt Rude</a> on <?php
        if ($tweet_id) { 
          echo "<a href='$permlink'>";
          the_time('F jS, h:ma Y T');
          echo "</a>, ";
        } else {
          the_time('F jS, h:ma Y T');
        }
	edit_post_link('Edit', ' | '); ?>
      </div>	
    </div>
  <?php endwhile; ?>
  <div class="navigation">
     <div class="floatleft"><?php next_posts_link('&laquo; Older Tweets') ?></div>
     <div class="floatright"><?php previous_posts_link('Newer Tweets &raquo;') ?></div>
     <div class="clearfloatthick">&nbsp;</div>
   </div>
</div><!--close content id-->

<?php get_footer(); ?>
