<?php get_header();?>




<div class="container py-5">
<div class="containferforgrid">
<?php

$newcustom= new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page'=> '-1'
));
if($newcustom -> have_posts()) :
            while ($newcustom -> have_posts()) : $newcustom -> the_post(); ?>



    <div class="itemsforgridx">
                            <div class="cartforshowmibile">

                           <a href="<?php the_permalink(); ?>" class="d-block text-center img-classforxfg">
                           <?php echo the_post_thumbnail('post-thumbnails'); ?>
                           </a>

                            <div class="cattbody">
                            <h4 class="text-center nexfsgex"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            <p><?php the_excerpt(); ?></p>
                            <div class="text-center">
                                <a href="<?php the_permalink(); ?>"
                                class="btnclassmoretbt"
                                
                                >click me</a>
                            </div>
                            </div>

                            </div>
    </div>
    <?php endwhile;
            else :
            _e('No post found');
            endif; ?>  
</div>

</div>


<?php get_footer();?>