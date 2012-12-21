<?php get_header(); ?>

<div id='content'>
  <?php while (have_posts()) : the_post();
	global $ozh_ta;
	$tweet_id = get_post_meta( $post->ID, 'ozh_ta_id', true);
	$screename = 'mdrude'; ?>
	<div id="tweet_template-<?php echo $post->ID; ?>" class="post">
		<div id='tweet-<?php echo $post->ID; ?>' class='tweet_post' >
			<div class="twitter-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'twentyeleven_status_avatar', '64' ) ); ?></div>
			<?php the_content(); ?>
		</div>
		<div id='tweet_date-<?php echo $post->ID; ?>' class='byline tweet_date' ><?php
			if ( get_post_meta( $post->ID, 'aktt_twitter_id', true ) ) {
				$twitterid = get_post_meta( $post->ID, 'aktt_twitter_id', true);
			} elseif ( get_post_meta( $post->ID, '_aktt_tweet_id', true ) ) {
				$twitterid = get_post_meta( $post->ID, '_aktt_tweet_id', true);
			} elseif ( get_post_meta( $post->ID, 'ozh_ta_id', true ) ) {
				$twitterid = get_post_meta( $post->ID, 'ozh_ta_id', true);
			} elseif ( function_exists(twitter_permalink) ) {
                $twitterid = twitter_permalink( false );
            } else {
				$twitterid ='';
			}

			?>Posted to <a href="https://twitter.com/mdrude/status/<?php echo $twitterid; ?>" rel="nofollow">Twitter</a> by <a href="http://twitter.com/<?php echo $screename; ?>" rel="nofollow">Matt Rude</a> on <?php
			$permlink = get_permalink( $post->ID );
			if ( is_home() ) { 
				echo "<a href='$permlink'>";
				the_time('F jS Y, g:i a T');
				echo "</a>";
			} else {
				the_time('F jS Y, g:i a T');
			}
			edit_post_link('Edit', ', '); ?>
		</div>
	</div>
  <?php endwhile; 
  if ( is_home() ) { ?>
  <div class="navigation">
     <div class="floatleft"><?php next_posts_link('&laquo; Older Tweets') ?></div>
     <div class="floatright"><?php previous_posts_link('Newer Tweets &raquo;') ?></div>
     <div class="clearfloatthick">&nbsp;</div>
   </div>
  <?php } else { ?>
  <div class="navigation">
     <div class="floatleft"><?php next_post_link('%link','&laquo; Next Tweet') ?></div>
     <div class="floatright"><?php previous_post_link('%link','Previous Tweet &raquo;') ?></div>
     <div class="clearfloatthick"><center><a href="<?php bloginfo('url'); ?>">Home</a></center></div>
   </div>
   <?php } ?>
</div>

<?php get_footer(); ?>
