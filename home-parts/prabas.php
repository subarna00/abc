<div class=" uk-margin-small-top">
    <div class="cat-title uk-flex uk-flex-between uk-flex-middle">
        <h1 class=" uk-heading-line uk-width-expand"><span><a href="/?cat=6" class="heading"><img
                        src="https://i2.wp.com/www.abcnepal.tv/wp-content/uploads/2017/10/cropped-Artboard-2don.png?fit=270%2C270&ssl=1"
                        class="author-side-img "> प्रवास
                </a></span></h1>
        <a href="/?cat=126">
            <h2 class="second">सबै <span uk-icon="icon:table "></span> </h2>
        </a>
    </div>
</div>
<div class="uk-grid uk-child-width-1-4@m  uk-grid-small grid-small uk-padding-small uk-padding-remove-right uk-padding-remove-left uk-padding-remove-top"
    uk-grid>
    <?php 
                    $args = array('cat'=>'' , 'showposts'=>4);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <div>
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top mukhya-img">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="uk-card-body card-body">
                    <h3 class="uk-card-title mukhya-img">
                        <?php echo wp_trim_words(get_the_title(),10,'..');?></h3>
                    <!-- <p><?php echo wp_trim_words(get_the_excerpt(),10,'..'); ?></p> -->
                </div>
            </div>
        </div>
    </a>
    <?php endwhile; wp_reset_postdata(); ?>

</div>