<?php
/*
Template Name: Sitemap
*/
?>

<?php get_header(); ?>
  <div id="content">
    <h2><?php _e('Pages', 'twentyseventeen'); ?></h2>
      <ul><?php wp_list_pages("title_li=" ); ?></ul>
    <h2><?php _e('RSS Feeds', 'twentyseventeen'); ?></h2>
      <ul>
        <li><a title="Full content" href="feed:<?php bloginfo('rss2_url'); ?>"><?php _e('Main RSS' , 'textdomain'); ?></a></li>
        <li><a title="Comment Feed" href="feed:<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comment Feed', 'textdomain'); ?></a></li>
      </ul>
    <h2><?php _e('Categories', 'textdomain'); ?></h2>
      <ul><?php wp_list_categories('sort_column=name&optioncount=1&hierarchical=0&feed=RSS'); ?></ul>
    <h2><?php _e('All Blog Posts', 'textdomain'); ?></h2>
    <ul><?php $archive_query = new WP_Query('showposts=1000'); while ($archive_query->have_posts()) : $archive_query->the_post(); ?>
        <li>
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
            (<?php comments_number('0', '1', '%'); ?>)
        </li>
    <?php endwhile; ?>
    </ul>
    
  </div>

<?php get_footer(); ?>
