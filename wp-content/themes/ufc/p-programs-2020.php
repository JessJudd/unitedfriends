<?
    /*
	    Template Name: Programs 2020
	*/

	get_header();

	the_post();

    global $post;

    /* acf fields */
        $hero__img__d = get_field('hero_image_d');
        $hero__img__m = get_field('hero_image_m');
        $hero__m_align = get_field('hero_image_m_align');
        $hero__headline = get_field('hero_headline');
        $hero__copy = get_field('hero_copy');

        $subhero__copy = get_field('subhero_copy');

        $blue__title = get_field('blue_title');
        $blue__subtitle = get_field('blue_subtitle');
        $blue__copy = get_field('blue_copy');
        $blue__button_url = get_field('blue_button_url');
        $blue__button_text = get_field('blue_button_text');
        $get_blue__button_target = get_field('blue_button_target');
        $blue__button_target = ($get_blue__button_target == 1) ? '_blank' : '';

        $quote1 = get_field('quote1_text');
        $quote1__name = get_field('quote1_name');
        $quote1__img__d = get_field('quote1_image_d');
        $quote1__img__m = get_field('quote1_image_m');

        $purple__title = get_field('purple_title');
        $purple__subtitle = get_field('purple_subtitle');
        $purple__copy = get_field('purple_copy');
        $purple__button_url = get_field('purple_button_url');
        $purple__button_text = get_field('purple_button_text');
        $get_purple__button_target = get_field('purple_button_target');
        $purple__button_target = ($get_purple__button_target == 1) ? '_blank' : '';

        $quote2 = get_field('quote2_text');
        $quote2__name = get_field('quote2_name');
        $quote2__img__d = get_field('quote2_image_d');
        $quote2__img__m = get_field('quote2_image_m');

        $chart__headline = get_field('charts_headline');
        $chart__copy = get_field('charts_copy');

        $col1__title = get_field('col1_title');
        $col1__copy = get_field('col1_copy');
        $col1__list_item = 'list_copy';
        $col1__button_url = get_field('col1_button_url');
        $col1__button_text = get_field('col1_button_text');
        $get_col1__button_target = get_field('col1_button_target');
        $col1__button_target = ($get_col1__button_target == 1) ? '_blank' : '';

        $col2__title = get_field('col2_title');
        $col2__copy = get_field('col2_copy');
        $col2__list = 'col2_list';
        $col2__list_item = 'list_copy';
        $col2__button_url = get_field('col2_button_url');
        $col2__button_text = get_field('col2_button_text');
        $get_col2__button_target = get_field('col2_button_target');
        $col2__button_target = ($get_col2__button_target == 1) ? '_blank' : '';

        $yellow__copy = get_field('yellow_copy');
        $yellow__button_url = get_field('yellow_button_url');
        $yellow__button_text = get_field('yellow_button_text');
        $get_yellow__button_target = get_field('yellow_button_target');
        $yellow__button_target = ($get_yellow__button_target == 1) ? '_blank' : '';

        $css = '<style type="text/css">
        .hero__main--img {
            background-position: '. $hero__m_align .';
        }
        @media screen and (min-width:768px){
            #programs__hero--inner {
                background-image:url('. $hero__img__d .')!important;
            }
            #quote1--bg {
                background-image:url('. $quote1__img__d .')!important;
            }
            #quote2--bg {
                background-image:url('. $quote2__img__d .')!important;
            }
        }
        </style>';

        echo $css;

?>

<div id="main" class="grid">
    <div id="programs__hero" class="programs__hero hero__main row" style="background-color:#70BAE3;">
        <div id="programs__hero--inner" class="c12 white programs__hero--inner hero__main--inner">
            <div class="hero__main--img programs__hero--img bg-shaded bg-cover" style="background-image:url(<?php echo $hero__img__m; ?>);"></div>
            <div id="programs__hero--content" class="programs__hero--content hero__main--content text-center">
                <h2 class="size10 hero__main--headline"><?php echo $hero__headline; ?></h2>
                <p class="size5"><?php echo $hero__copy; ?></p>
            </div>
        </div>
    </div>
    <?php
    if ($subhero__copy){
        $subhero = '
        <div id="programs__subhero" class="row programs2020 subhero__simple">
            <div id="programs__subhero--inner" class="c12 subhero__simple--inner">
                <div id="programs__subhero--content" class="text-center subhero__simple--content">
                    <p class="size5">' . $subhero__copy .'</p>
                </div>
            </div>
        </div>
        ';
        echo $subhero;
    } 
    // blue section
        if ($blue__title){
            
        $defaultButton = $blue__button_url != '' ? '<a href="'.$blue__button_url.'" class="btn btn-blue" target="'.$blue__button_target .'">'.$blue__button_text.'</a>' : '';
        $button = $defaultButton;
        $blue = '
        <div id="blue" class="row programs__main content__full" style="background-color:#70BAE3;">
            <div id="blue--inner" class="c12 programs__inner content__full--inner">
                <div id="blue--content" class="white text-center programs__content content__full--content">
                    <h2 class="content__full--title">' . $blue__title . '</h2>
                    <h3 class="size5 margin-bot20">' . $blue__subtitle . '</h3>
                    <p class="content__full--p margin-bot30">' . $blue__copy .'</p>
                    ' . $button . '
                </div>
            </div>
        </div>
        ';
    echo $blue;
    }
    if( $quote1 ): ?>
        <div class="about__history quote_img quote_img row js-even-columns">
            <div class="c6 quote_img--left quote_img--content">
                <div class="quote_img--inner">
                    <h3 class="size7 bold margin-bot10">"<?php echo $quote1; ?>"</h3>
                    <p class="size4 quote_img--copy">- <?php echo $quote1__name; ?></p>
                </div>
            </div>
            <div id="quote1--bg" class="c6 quote_img--right quote_img--bg" style="background-image:url(<?php echo $quote1__img__m; ?>);"></div>
        </div>
    <?php endif;

    // purple section
        if ($purple__title){
            
        $defaultButton = $purple__button_url != '' ? '<a href="'.$purple__button_url.'" class="btn btn-blue" target="'.$purple__button_target .'">'.$purple__button_text.'</a>' : '';
        $button = $defaultButton;
        $purple = '
        <div id="purple" class="row programs__main content__full" style="background-color:#5C0F40;">
            <div id="purple--inner" class="c12 programs__inner content__full--inner">
                <div id="purple--content" class="white text-center programs__content content__full--content">
                    <h2 class="content__full--title">' . $purple__title . '</h2>
                    <h2 class="size5 margin-bot20">' . $purple__subtitle . '</h2>
                    <p class="content__full--p margin-bot30">' . $purple__copy .'</p>
                    ' . $button . '
                </div>
            </div>
        </div>
        ';
        echo $purple;
        }
    
    if( $quote2 ): ?>
        <div class="about__history quote_img quote_img row js-even-columns">
            <div id="quote2--bg" class="c6 quote_img--left quote_img--bg" style="background-image:url(<?php echo $quote2__img__m; ?>);"></div>
            <div class="c6 quote_img--right quote_img--content">
                <div class="quote_img--inner">
                    <h3 class="size7 bold margin-bot10">"<?php echo $quote2; ?>"</h3>
                    <p class="quote_img--copy">- <?php echo $quote2__name; ?></p>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php // new charts
    if( $chart__headline ): ?>
    <div id="programs__charts" class="programs__charts title__description">
        <div class="programs__charts--title title__description--inner">
            <h2 class="programs__charts-header size10 margin-bot20 text-center title__description--header">
                <?php echo $chart__headline; ?>
            </h2>
            <p class="size5 programs__charts-copy size4 text-center title__description--copy">
                <?php echo $chart__copy; ?>
            </p>
        </div>
        <div class="programs__charts--inner max max-1260">
            <?php if ($col1__title && $col2__title): 
            $get_col1_button = $col1__button_url != '' ? '<a href="'.$col1__button_url.'" class="btn btn-blue" target="'.$col1__button_target .'">'.$col1__button_text.'</a>' : '';
            $col1_button = $get_col1_button;
            $get_col2_button = $col2__button_url != '' ? '<a href="'.$col2__button_url.'" class="btn btn-blue" target="'.$col2__button_target .'">'.$col2__button_text.'</a>' : '';
            $col2_button = $get_col2_button;
            ?>
        <div class="row list_columns">
            <div class="programs__chart-col programs__chart-col--left list_columns--col">
                <h3 class="programs__chart-title list_columns--title size7 margin-bot10">
                    <?php echo $col1__title; ?>
                </h3>
                <p class="programs__chart-blurb list_columns--blurb size4 margin-bot20">
                    <?php echo $col1__copy; ?>
                </p>
                <?php if( have_rows('col1_list')): 
                    echo '<ul class="programs__chart-list list_columns--list">';
                    while( have_rows('col1_list') ) : the_row();
                    $copy = get_sub_field('list_copy');
                    $li = '<li class="programs__chart-list-item list_columns--list-item"><i class="fas fa-check"></i><span class="list__copy">'.$copy.'</span></li>';
                    echo $li;
                    endwhile;
                    echo '</ul>';
                endif; 
                echo (isset($col1_button)) ? $col1_button : '';
                ?>
            </div>
            <div class="programs__chart-col programs__chart-col--gutter list_columns--col--gutter"></div>
            <div class="programs__chart-col programs__chart-col--right list_columns--col">
                <h3 class="programs__chart-title size7 margin-bot10 list_columns--title">
                    <?php echo $col2__title; ?>
                </h3>
                <p class="programs__chart-blurb size4 list_columns--blurb margin-bot20">
                    <?php echo $col2__copy; ?>
                </p>
                <?php if( have_rows('col2_list')): 
                    echo '<ul class="programs__chart-list list_columns--list">';
                    while( have_rows('col2_list') ) : the_row();
                    $copy = get_sub_field('list_copy');
                    $li = '<li class="programs__chart-list-item list_columns--list-item"><i class="fas fa-check"></i><span class="list__copy">'.$copy.'</span></li>';
                    echo $li;
                    endwhile;
                    echo '</ul>';
                endif;
                echo (isset($col2_button)) ? $col2_button : '';
                ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if( have_rows('charts__repeater')):
        echo '<div class="row programs__charts--container chart_w_captions">';
        while( have_rows('charts__repeater') ) : the_row(); ?>
            <div class="c4 chart__single chart_w_captions--single">
                <img class="chart__img" src="<?php echo get_sub_field('chart_img'); ?>" />
                <h3 class="chart__value text-center size7">
                    <?php echo get_sub_field('chart_value'); ?>
                </h3>
                <p class="chart__copy text-center size5">
                    <?php echo get_sub_field('chart_copy'); ?>
                </p>
            </div>
        <?php endwhile;
        echo '</div>';
        endif; ?>
        </div>
    </div>
    <?php endif;
        if ($yellow__copy){        
            $defaultButton = $yellow__button_url != '' ? '<a href="'.$yellow__button_url.'" class="btn btn-blue" target="'.$yellow__button_target .'">'.$yellow__button_text.'</a>' : '';
            $button = $defaultButton;
            $yellow = '
            <div id="yellow" class="row programs__main content__full" style="background-color:#FFAD00;">
                <div id="yellow--inner" class="c12 programs__inner content__full--inner">
                    <div id="yellow--content" class="white text-center programs__content content__full--content">
                        <p class="margin-bot20 font-bold content__full--p large">' . $yellow__copy .'</p>
                        ' . $button . '
                    </div>
                </div>
            </div>
            ';
            echo $yellow;
        } 
    ?>

</div>

<?	get_footer(); 	?>
