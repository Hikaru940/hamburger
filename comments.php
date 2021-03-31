<?php get_header(); ?>

<?php the_tags(); ?>
<?php posts_nav_link(); ?>
<?php wp_list_comments(); ?>
<?php wp_link_pages(); ?>
<?php comments_template(); ?>
<?php comment_form(); ?>
<?php paginate_comments_links(); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>