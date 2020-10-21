<?php get_header(); ?>

<div class=" ">
    <div class="uk-grid uk-margin-small-top" uk-grid>
        <div class="uk-width-expand uk-margin-small-top">

            <div class="uk-width-expand">
                <?php 
                  
                   
                    while(have_posts()) : the_post(); ?>
                <div class="single-title">
                    <h1><?php the_title(); ?></h1>
                    <div class="sharethis-inline-share-buttons uk-margin-small"></div>
                </div>
                <div class="single-thumb">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="single-content">
                    <?php the_content(); ?>
                </div>
                <div>
    <?php get_template_part('template-parts/comment'); ?>
                
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <div class="uk-width-1-4@m uk-margin-small-top">
            <?php  get_template_part('template-parts/side-add'); ?>
        </div>
    </div>
    <?php get_template_part('template-parts/related'); ?>

</div>
<?php get_footer(); ?>