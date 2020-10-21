<div>
    <div class="cat-title uk-flex uk-flex-between uk-flex-middle">
        <h1 class=" uk-heading-line uk-width-expand"><span><a href="/?cat=6" class="heading"><img
                        src="https://i2.wp.com/www.abcnepal.tv/wp-content/uploads/2017/10/cropped-Artboard-2don.png?fit=270%2C270&ssl=1"
                        class="author-side-img "> 
समाज
                </a></span></h1>
        <a href="/?cat=126">
            <h2 class="second">सबै <span uk-icon="icon:table "></span> </h2>
        </a>
    </div>
</div>
<?php 
                    $args = array('cat'=>'' , 'showposts'=>5);
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
    <a href="<?php the_permalink(); ?>">
<div class="uk-card uk-card-default uk-grid-collapse uk-grid  uk-margin-small-bottom" uk-grid>
   
        <div class="uk-width-1-3@s">
            <div class="uk-card-media-left uk-cover-container mukhya-img1">
           <?php the_post_thumbnail(); ?>
            </div>
        </div>
        <div class="uk-width-expand">
            <div class="uk-card-body uk-padding-small">
                <h3 class="uk-card-title side-card-title"><?php echo wp_trim_words(get_the_title(),10,'..');?></h3>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p> -->
            </div>
        </div>
    
</div>
</a>
    <?php endwhile; wp_reset_postdata(); ?>