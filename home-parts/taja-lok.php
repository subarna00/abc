<ul class="uk-margin-medium-top" uk-tab>
    <li><a href="#" class="switcher-h">ताजा समाचार</a></li>
    <li><a href="#" class="switcher-h">लोकप्रिय
        </a></li>
</ul>

<ul class="uk-switcher uk-margin" >
    <li>

        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider id="slider">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <?php 
                    $args = array('cat'=>'' );
                    $result = new WP_Query($args);
                    while($result->have_posts()) : $result->the_post(); ?>
                <a href="<?php the_permalink(); ?>">
                    <li>
                        <div class="uk-margin-small-right uk-margin-small-right">
                            <div class="uk-card uk-card-default ">
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
                    </li>
                </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-left" href="#" uk-slidenav-previous
                uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small  uk-right" href="#" uk-slidenav-next
                uk-slider-item="next"></a>

        </div>
    </li>



    <!-- lok -->
    <li>

<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider id="slider1">

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
        <?php 
            $args = array('cat'=>'' );
            $result = new WP_Query($args);
            while($result->have_posts()) : $result->the_post(); ?>
        <a href="<?php the_permalink(); ?>">
            <li>
                <div class="uk-margin-small-right uk-margin-small-right">
                    <div class="uk-card uk-card-default ">
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
            </li>
        </a>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-left" href="#" uk-slidenav-previous
        uk-slider-item="previous"></a>
    <a class="uk-position-center-right uk-position-small  uk-right" href="#" uk-slidenav-next
        uk-slider-item="next"></a>

</div>
</li>

</ul>


