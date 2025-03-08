<?php get_header();?>


<div class="text-center my-5">
<?php echo the_post_thumbnail('post-thumbnails'); ?>
</div>
<h1 class="text-center"><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php get_footer();?>