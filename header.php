<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5f8bd154d41ce00012c02e92&product=sop'
        async='async'></script>
    <title>ABC NEWS NEPAL | No.1 News channel of Nepal</title>
    <?php wp_head(); ?>
</head>

<body>
    <section>
        <div class="uk-container">
            <div class="uk-grid uk-padding-small header  " uk-grid>

                <div class="uk-width-1-3@m uk-margin-remove">
                    <?php the_custom_logo(); ?>
                    <p class="uk-text-center uk-margin-remove-top"> Accuracy, Balance & Credibility</p>
                </div>
                <div class="uk-width-expand uk-margin-remove ">
                    <?php dynamic_sidebar('logo-right');?>
                </div>
            </div>
        </div>
        <?php get_template_part('nav'); ?>