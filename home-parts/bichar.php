<div>
    <div class="cat-title uk-flex uk-flex-between uk-flex-middle">
        <h1 class=" uk-heading-line uk-width-expand"><span><a href="/?cat=6" class="heading"><img
                        src="https://i2.wp.com/www.abcnepal.tv/wp-content/uploads/2017/10/cropped-Artboard-2don.png?fit=270%2C270&ssl=1"
                        class="author-side-img ">
                    विचार
                </a></span></h1>
        <a href="/?cat=126">
            <h2 class="second">सबै <span uk-icon="icon:table "></span> </h2>
        </a>
    </div>
</div>
<div class="uk-grid uk-child-width-1-4@m" uk-grid>
    <?php 
                    $args = array('cat'=>'' , 'showposts'=>4);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
    <a href="<?php the_permalink(); ?>">
        <div class="bichar-img">
            <?php the_post_thumbnail(); ?>
        </div>
        <div>
            <p class="author uk-text-center">Author</p>
            <p class="bichar-title"><?php the_title(); ?></p>
        </div>
    </a>
    <?php endwhile; wp_reset_postdata(); ?>
</div>