<?
    /*
	    Template Name: About 2020
	*/

	get_header();

	the_post();

    global $post;

    /* acf fields */
    $hero__img__d = get_field('hero_image_d');
    $hero__img__m = get_field('hero_image_m');
    $hero__headline = get_field('hero_headline');

    $subhero__blurb = get_field('subhero_copy');

    $s1__headline = get_field('s1_headline');

    $video__headline = get_field('video_headline');
    $video__thumb = get_field('video_img');
    $video__url = get_field('video_embed');
    $vimeo__id = ltrim($video__url, 'https://vimeo.com/');

    $s2__headline = get_field('s2_headline');
    $s2__img = get_field('s2_image_d');
    $s2__copy = get_field('s2_copy');
    $s2__button_url = get_field('s2_button_url');
    $s2__button_text = get_field('s2_button_text');
    $get_s2__button_target = get_field('s2_button_target');
    $s2__button_target = ($get_s2__button_target == 1) ? '_blank' : '';

    $s3__headline = get_field('s3_headline');
    $s3__title_left = get_field('s3_left_title');
    $s3__img_left = get_field('s3_left_img');
    $s3__title_right = get_field('s3_right_title');
    $s3__img_right = get_field('s3_right_img');
    $s3__demographics = array(
        get_field('about2020__s3_demographics_hispanic'),
        get_field('about2020__s3_demographics_black'),
        get_field('about2020__s3_demographics_multi'),
        get_field('about2020__s3_demographics_white'),
        get_field('about2020__s3_demographics_na'),
        get_field('about2020__s3_demographics_asian'),
        get_field('about2020__s3_demographics_native')
    );

    $s4__bg_img = get_field('s4_image_d');

    $s5__left__bg_color = get_field('s5_left_bg');
    $s5__left__headline = get_field('s5_left_headline');
    $s5__left__copy = get_field('s5_left_copy');
    $s5__left__button_url = get_field('s5_left_button_url');
    $s5__left__button_text = get_field('s5_left_button_text');
    $get_s5__left__button_target = get_field('s5_left_button_target');
    $s5__left__button_target = ($get_s5__left__button_target == 1) ? '_blank' : '';

    $s5__right__bg_color = get_field('s5_right_bg');
    $s5__right__headline = get_field('s5_right_headline');
    $s5__right__copy = get_field('s5_right_copy');
    $s5__right__button_url = get_field('s5_right_button_url');
    $s5__right__button_text = get_field('s5_right_button_text');
    $get_s5__right__button_target = get_field('s5_right_button_target');
    $s5__right__button_target = ($get_s5__right__button_target == 1) ? '_blank' : '';


    $css = '<style type="text/css">
    .about__video .video--wrapper #trigger {
        background-image:url('. $video__thumb .')!important;
    }
    @media screen and (min-width:769px){
        #home__hero {
            background-image:url('. $hero__img__d .')!important;
        }
    }
    </style>';

    echo $css;

?>

<div id="main" class="grid">
    <div id="home__hero" class="about2020 row bg-shaded bg-cover" style="background-image:url(<?php echo $hero__img__m; ?>);background-color:#70bae3;">
        <div id="home__hero--inner" class="c12 white">
            <div id="home__hero--content" class="text-center" style="background-color:#70bae3;">
                <h2 class="size10 margin-bot20"><?php echo $hero__headline; ?></h2>
            </div>
        </div>
    </div>
    <?php if ($subhero__blurb){

        $subhero = '
        <div id="home__subhero" class="row about2020">
            <div id="home__subhero--inner" class="c12">
                <div id="home__subhero--content" class="white text-center">
                    <p class="size5 margin-bot20">' . $subhero__blurb .'</p>
                </div>
            </div>
        </div>
        ';
        echo $subhero;
    } ?>

    <?php
    if( $s1__headline ) : ?>
        <div class="about__featured">
            <div class="about__featured-title">
                <h2 class="about__featured-header">
                    <?php echo $s1__headline; ?>
                </h2>
            </div>
            <!-- start row-->
            <div id="featured-wrapper" class="row">

            <?php if(have_rows('s1_featured')):
                while(have_rows('s1_featured')) : the_row();

                // Load sub field value.
                $title = get_sub_field('s1_header');
                $copy = get_sub_field('s1_copy');
                $card = '<div class="c4 card">
                    <h3>'.$title.'</h3>
                    <p>'.$copy.'</p>
                </div>';
                echo $card;

                endwhile;
            endif; ?>

            </div>
            <!-- end row -->
        </div>
    <?php
    endif;
    ?>

    <?php
        if( $vimeo__id ) :
    ?>
        <div class="about__video row" style="background-color:#5C0F40;">
            <div class="c12">
                <div class="video--inner">
                    <h3 class="size10 bold margin-bot20 white"><?php echo $video__headline; ?></h3>
                    <div class="video--wrapper">
                        <iframe id="vimeo" src="https://player.vimeo.com/video/<?php echo $vimeo__id; ?>" width="700" height="394" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php
        if( $s2__headline ) :
    ?>
        <div class="about__history row" style="background-color:#70bae3;">
            <div class="c6 about__history--left">
                <div class="about__history--inner white">
                    <h3 class="size10 bold margin-bot20"><?php echo $s2__headline; ?></h3>
                    <p class="size5 about__history--copy"><?php echo $s2__copy; ?></p>
                    <?php if($s2__button_url != ''): ?>
                    <a href="<?php echo $s2__button_url; ?>" class="btn btn-blue" <?php echo $s2__button_target; ?>><?php echo $s2__button_text; ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="c6 about__history--right" style="background-image:url(<?php echo $s2__img; ?>);"></div>
        </div>
    <?php endif; ?>

    <?php 
        if( $s3__headline ) :
    ?>

    <div class="about__charts">
        <div class="about__charts-title">
            <h2 class="about__charts-header">
                <?php echo $s3__headline; ?>
            </h2>
        </div>
        <div class="row">
            <div class="about__chart-col about__chart-col--left">
                <?php 
                    echo '<h4 class="about__charts-label">'.$s3__title_left.'</h4>
                    <img class="nostretch about__charts-img about__charts-img--left" src="'.$s3__img_left.'" alt="'.$s3__title_left.'" />';
                ?>
            </div>
            <div class="about__chart-col about__chart-col--gutter"></div>
            <div class="about__chart-col about__chart-col--right demographics">
                <?php 
                    echo '<h4 class="about__charts-label">'.$s3__title_right.'</h4>';
                ?>
                <div class="demo__inner">
                    <?php 
                        echo '
                        <img class="nostretch about__charts-img about__charts-img--right" src="'.$s3__img_right.'" alt="'.$s3__title_right.'" />';

                        if( have_rows('s3_demographics_repeat') ):
                            // Loop through rows.
                            echo '<ul class="demo__list">';
                            while( have_rows('s3_demographics_repeat') ) : the_row();
                                // Load sub field value.
                                $color = get_sub_field('s3_color');
                                $label = get_sub_field('s3_label');
                                $value = get_sub_field('s3_value');

                                echo '<li class="demo__list-item">
                                <span class="demo__color '.$color.'"></span>
                                <span class="demo__name">'.$label.'</span>
                                <span class="demo__stat">'.$value.'%</span>
                                </li>';

                                // Do something...
                            // End loop.
                            endwhile;
                            echo '</ul>';
                            // No value.
                            else :
                            // Do something...
                            endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php endif; 
    
    if ($s4__bg_img) :

        echo '<div class="about__divider">
            <div class="about__divider--img" style="background-image:url('.$s4__bg_img.');">
            </div>
        </div>';

    endif;
    
    
    ?>

    <div class="home__overlay row">
        <div class="c6 home__overlay--left" style="background-color:#5c0f40;">
            <div class="home__overlay--inner white">
                <h3 class="size10 bold margin-bot20"><?php echo $s5__left__headline; ?></h3>
                <p class="size5 home__overlay--copy"><?php echo $s5__left__copy; ?></p>
                <?php if($s5__left__button_url != ''): ?>
                <a href="<?php echo $s5__left__button_url; ?>" class="btn btn-blue" <?php echo $s5__left__button_target; ?>><?php echo $s5__left__button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="c6 home__overlay--right" style="background-color:#70bae3;">
            <div class="home__overlay--inner white">
                <h3 class="size10 bold margin-bot20"><?php echo $s5__right__headline; ?></h3>
                <p class="size5 home__overlay--copy"><?php echo $s5__right__copy; ?></p>
                <?php if($s5__right__button_url != ''): ?>
                <a href="<?php echo $s5__right__button_url; ?>" class="btn btn-blue" <?php echo $s5__right__button_target; ?>><?php echo $s5__right__button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php if($instagram == 1): ?>
    <div class="home__instagram row">
        <div class="c12">
            <a id="instaIcon" href="https://www.instagram.com/unitedfriendsla/" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram-2x.png" alt="Instagram" />
            </a>
            <h3>Connect with United Friends</h3>
            <div id="igWrapper">
                <div id="igBackground">
                    <div id="loader">
                        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    </div>
                </div>
                <div id="instaFade">
                    <div id="instafeed"></div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>

<script>
    var trigger = jQuery('#trigger');
    var hidden = jQuery('#hidden');
    var vimeo = jQuery('#vimeo')

    vimeo.click(function() {
        console.log('hide placeholder, show video');
        trigger.addClass('off');
        // hidden.addClass('reveal');
        // vimeo.contents().find(selector).click();
    });
</script>

<?	get_footer(); 	?>
