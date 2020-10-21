<?php $items=wp_get_menu_array('main-menu');?>
<div class="nav-bg" uk-sticky>

    <div class="uk-container ">
        <nav class="uk-navbar  uk-margin">
            <div class="uk-navbar-left ">
                <button class="uk-button uk-button-default uk-padding-remove uk-border-remove border" type="button"
                    uk-toggle="target: #offcanvas-reveal"><img
                        src="<?php echo get_stylesheet_directory_uri();?>/img/slider.png" alt="Logo"></button>

                <ul class="uk-navbar-nav uk-visible@m  nav-items">
                    <?php foreach($items as $item):?>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
                            <?php if($item['children']):?>
                            <a data-toggle="dropdown"><i style="font-size:24px" class="fa">&#xf0d7;</i></a>
                            <div class="dropdown-menu">
                                <?php foreach($item['children'] as $sitem):?>
                                <a class="dropdown-item"
                                    href="<?php echo $sitem['url'];?>"><?php echo $sitem['title'];?></a>
                                <?php endforeach;?>
                            </div>
                            <?php endif;?>
                        </a>
                    </li>
                    <?php endforeach;?>
                    <li class="english"><a href="#">English</a> </li>
                    <li class=""><a href="" uk-icon="icon: play-circle ; ratio: 1.3" class="icon"> <span class="live">Live</span>  </a>  </li>

                </ul>
            </div>
            <div class="uk-navbar-right  ">
                <!-- <div class="icon-div">
            <a href="" uk-icon="icon: play-circle ; ratio: 1.3" class="icon"> <span class="live">Live</span>  </a>  
            </div> -->
            <div class="input1">
                <form action="#" >
                    <input class="uk-input uk-form-width-small input" name="s" type="text" placeholder="यहाँ खोज्नुहोस .."
                        value="/<?php the_search_query(); ?>">
                   <span uk-icon="icon: search" class="search"></span>
                </form>
                </div>
            </div>
        </nav>

    </div>
</div>
<!-- //slide  -->
<div id="offcanvas-reveal" uk-offcanvas="mode: reveal; overlay: true">
    <div class="uk-offcanvas-bar nav-bg  uk-padding-remove">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="uk-margin-large">
            <div class="slide-logo">
            <?php the_custom_logo(); ?>
            </div>
        </div>
        <div>
            <ul class="uk-nav ">
            <li class=" nav-item"><a href="" uk-icon="icon: play-circle ; ratio: 1.3" class="icon side-list"> <span class="live">Live</span>  </a>  </li>

                <?php foreach($items as $item):?>
                <li class="nav-item">
                    <a class=" side-list" href="<?php echo $item['url'];?>"><?php echo $item['title'];?>
                    </a>
                </li>
                <?php endforeach;?>
                <li class="english nav-item"><a href="#" class="side-list">English</a> </li>
            </ul>
        </div>
    </div>
</div>

<section class="uk-container  div-color">
    <div class="  ">
        <div class="uk-padding-small uk-padding-remove-horizontal ">
            <?php dynamic_sidebar('below-nav'); ?>
        </div>
    </div>