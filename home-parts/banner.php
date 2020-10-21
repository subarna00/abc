<div class="uk-container ">
    <div class="uk-margin-small-top banner uk-text-center">
        <?php $i=0; $args = array('cat'=>'' , 'showposts'=>3);$result = new WP_Query($args);while($result->have_posts()) : $result->the_post();$i++ ?>
        <a href="<?php the_permalink(); ?>">
            <div class="uk-card uk-card-hover uk-card-body zoom">
                <h1 class="uk-card-title card-title"><?php the_title(); ?></h1>
                <h3><img src="https://i2.wp.com/www.abcnepal.tv/wp-content/uploads/2017/10/cropped-Artboard-2don.png?fit=270%2C270&ssl=1"
                        class="author-side-img"> <span class="author"><?php the_author(); ?></span> </h3>
                <div class="card-img">
                    <?php the_post_thumbnail();?>
                </div>
                <div class="card-disc">
                    <?php echo wp_trim_words(get_the_excerpt(),20,'...'); ?>
                </div>
            </div>
        </a>
        <?php if($i==1){

        if ( is_active_sidebar( 'banner-1' ) ) { ?>
        <div class="banner-muni-add">
            <?php dynamic_sidebar('banner-1'); ?>
        </div>
        <?php } ?>

        <?php } if($i ==2){
        if ( is_active_sidebar( 'banner-2' ) ) { ?>
        <div class="banner-muni-add">
            <?php dynamic_sidebar('banner-2'); ?>
        </div>
        <?php } }?>
        <?php  if($i ==3){
        if ( is_active_sidebar( 'banner-3' ) ) { ?>
        <div class="banner-muni-add">
            <?php dynamic_sidebar('banner-3'); ?>
        </div>
    <?php } }?>
        <?php endwhile; wp_reset_postdata(); ?>

    </div>
</div>