<?php get_header();?>
<?php
$s=get_search_query();
$args = array(
                's' =>$s
            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        // _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                   
                 <?php
        }
    }else{
?>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>



<div class="margin-top-small uk-padding-small ">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-expand">
            <div>

                <?php
                   while(have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>">
                <h1> <?php the_title(); ?></h1>
               
                <div class="single-content">
                <?php the_post_thumbnail(); ?>
                <p class="single-content"> <?php  the_content(); ?> </p>
                </div>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>

            </div>
            <div>
                <?php get_template_part('templete-parts/comment'); ?>
            </div>
        </div>
        <div class="uk-width-1-4@m">
            <div class="side-add1">
                <?php dynamic_sidebar('side-add'); ?>
            </div>
        </div>
    </div>
    <div>
        <?php get_template_part('templete-parts/related'); ?>
        <?php appharu_paging();?>
    </div>
</div>

   
  


<?php get_footer();?>
