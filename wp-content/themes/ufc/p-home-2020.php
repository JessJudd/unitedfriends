<?
    /*
	    Template Name: Home 2020
	*/

	get_header();

	the_post();

    global $post;
    
    /* acf fields */
    $hero__img__d = get_field('hero_image_d');
    $hero__img__m = get_field('hero_image_m');
    $hero__headline = get_field('hero_headline');
    $hero__blurb = get_field('hero_copy');
    
    $subhero__headline = get_field('subhero_headline');
    $subhero__blurb = get_field('subhero_copy');
    $subhero__button_url = get_field('subhero_button_url');
    $subhero__button_text = get_field('subhero_button_text');
    $get_subhero__button_target = get_field('subhero_button_target');
    $subhero__button_target = ($get_subhero__button_target != 1) ? '_blank' : '';
    $get_button_type = get_field('subhero_button_type');
    
    $s1__copy = get_field('s1_headline');
    $s2__headline = get_field('s2_headline');
    $s3__headline = get_field('s3_headline');

    $s4__img__d = get_field('s4_image_d');
    $s4__img__m = get_field('s4_image_m');
    $s4__headline = get_field('s4_headline');
    $s4__copy = get_field('s4_copy');
    $s4__button_url = get_field('s4_button_url');
    $s4__button_text = get_field('s4_button_text');
    $get_s4__button_target = get_field('s4_button_target');
    $s4__button_target = ($get_s4__button_target == 1) ? '_blank' : '';

    $s5__img__d = get_field('s5_image_d');
    $s5__img__m = get_field('s5_image_m');
    $s5__headline = get_field('s5_headline');
    $s5__copy = get_field('s5_copy');
    $s5__button_url = get_field('s5_button_url');
    $s5__button_text = get_field('s5_button_text');
    $get_s5__button_target = get_field('s5_button_target');
    $s5__button_target = ($get_s5__button_target == 1) ? '_blank' : '';

    $s6__left__bg_color = get_field('s6_left_bg');
    $s6__left__headline = get_field('s6_left_headline');
    $s6__left__copy = get_field('s6_left_copy');
    $s6__left__button_url = get_field('s6_left_button_url');
    $s6__left__button_text = get_field('s6_left_button_text');
    $get_s6__left__button_target = get_field('s6_left_button_target');
    $s6__left__button_target = ($get_s6__left__button_target == 1) ? '_blank' : '';

    $s6__right__bg_color = get_field('s6_right_bg');
    $s6__right__headline = get_field('s6_right_headline');
    $s6__right__copy = get_field('s6_right_copy');
    $s6__right__button_url = get_field('s6_right_button_url');
    $s6__right__button_text = get_field('s6_right_button_text');
    $get_s6__right__button_target = get_field('s6_right_button_target');
    $s6__right__button_target = ($get_s6__right__button_target == 1) ? '_blank' : '';

    $instagram = get_field('home2020__instagram_feed');


    $css = '<style type="text/css">
    @media screen and (min-width:769px){
        #home__hero {
            background-image:url('. $hero__img__d .')!important;
        }
        .home__overlay.bg-left {
            background-image:url('. $s5__img__d .')!important;
        }
        .home__overlay.bg-right {
            background-image:url('. $s4__img__d .')!important;
        }
    }
    </style>';

    echo $css;

?>

<div id="main" class="grid">
    <div id="home__hero" class="row bg-shaded bg-cover" style="background-image:url(<?php echo $hero__img__m; ?>);background-color:#70bae3;">
        <div id="home__hero--inner" class="c12 white">
            <div id="home__hero--content" class="text-center" style="background-color:#70bae3;">
                <h2 class="size10 margin-bot20"><?php echo $hero__headline; ?></h2>
                <p class="size5"><?php echo $hero__blurb; ?></p>
            </div>
        </div>
    </div>
    <?php if ($subhero__headline){

        $fundraiseMe = '<a href="#XZEYHGVR" style="display: none">'.$subhero_button_text.'</a>';
        $defaultButton = $subhero__button_url != '' ? '<a href="'.$subhero__button_url.'" class="btn btn-blue" target="'.$subhero__button_target .'">'.$subhero__button_text.'</a>' : '';
        $button = ($get_button_type == 1) ? $fundraiseMe : $defaultButton ;
        $subhero = '
        <div id="home__subhero" class="row">
            <div id="home__subhero--inner" class="c12">
                <div id="home__subhero--content" class="white text-center">
                    <h2 class="size7 margin-bot20">' . $subhero__headline . '</h2>
                    <p class="size5 margin-bot20">' . $subhero__blurb .'</p>
                    ' . $button . '
                </div>
            </div>
        </div>
        ';
        echo $subhero;
    }
    ?>
    <div id="home__statistics" class="row js-even-columns">
        <div class="c6" id="home__statistics--left">
            <div class="home__statistics--inner">
                <p class="semibold size3">There are <span id="home__statistics--num">30,000</span> foster youth in LA County, the largest concentration in our nation, and the odds are stacked against them.</p>
            </div>
        </div>
        <div class="c6 white" id="home__statistics--right" style="background-color:#70bae3;">
            <div class="home__statistics--inner">
                <p class="size7 semibold"><?php echo $s1__copy; ?></p>
            </div>
        </div>
    </div>
    <div class="row home__full-title" style="background-color:#5c0f40;">
        <div class="c12 text-center">
            <div class="home__full-title--inner white">
                <h2 class="size10 bold"><?php echo $s2__headline; ?></h2>
            </div>
        </div>
    </div>
    <div class="home__icons">
        <div class="row" id="challenges">
            <?php 
            if( have_rows('s2__featured') ) {
                $featured = [];
                $counter = 0;
                while( have_rows('s2__featured') ) {
                    the_row();
                    $counter++;
                    $toggle = 'icon-' . $counter . 'a';
                    $img = get_sub_field('featured_img');
                    $title = get_sub_field('featured_headline');
                    $blurb = get_sub_field('featured_blurb');
                    $mobile_height = get_sub_field('featured_m_height');
                    $html = '<div class="home__icons--single c3">
                    <input class="home__icons--hidden" type="checkbox" name="'.$toggle.'" id="'.$toggle.'">
                    <label class="home__icons--toggle mobile" for="'.$toggle.'">
                        <img class="home__icons--img nostretch" src="'.$img.'">
                        <h3 class="home__icons--title">'.$title.'</h3>
                    </label>
                    <div class="home__icons--content home__icons--content-'.$mobile_height.'">
                        <p class="home__icons--copy semibold">'.$blurb.'</p>
                    </div>
                    </div>';
                    echo $html;
                }
            }
            ?>
        </div>
    </div>
    <div class="row home__full-title" style="background-color:#bfcd2f;">
        <div class="c12 text-center">
            <div class="home__full-title--inner white">
                <h2 class="size10 bold">The United Friends Impact</h2>
            </div>
        </div>
    </div>
    <div class="home__icons">
        <div class="row" id="impact">
            <?php 
            if( have_rows('s3__featured') ) {
                $featured = [];
                $counter = 0;
                while( have_rows('s3__featured') ) {
                    the_row();
                    $counter++;
                    $toggle = 'icon-' . $counter . 'b';
                    $img = get_sub_field('featured_img');
                    $title = get_sub_field('featured_headline');
                    $blurb = get_sub_field('featured_blurb');
                    $mobile_height = get_sub_field('featured_m_height');
                    $html = '<div class="home__icons--single c3">
                    <input class="home__icons--hidden" type="checkbox" name="'.$toggle.'" id="'.$toggle.'">
                    <label class="home__icons--toggle mobile" for="'.$toggle.'">
                        <img class="home__icons--img nostretch" src="'.$img.'">
                        <h3 class="home__icons--title">'.$title.'</h3>
                    </label>
                    <div class="home__icons--content home__icons--content-'.$mobile_height.'">
                        <p class="home__icons--copy semibold">'.$blurb.'</p>
                    </div>
                    </div>';
                    echo $html;
                }
            }
            ?>
        </div>
    </div>
    <div class="home__overlay row bg-cover bg-shaded bg-right" style="background-image:url(<?php echo $s4__img__m; ?>);">
        <div class="c6 emptycol"></div>
        <div class="c6 home__overlay--right">
            <div class="home__overlay--inner white">
                <h3 class="size10 bold margin-bot20"><?php echo $s4__headline; ?></h3>
                <p class="size5 home__overlay--copy"><?php echo $s4__copy; ?></p>

                <?php if($s4__button_url != ''): ?>
                    <a href="<?php echo $s4__button_url; ?>" class="btn btn-blue" target="<?php echo $s4__button_target; ?>"><?php echo $s4__button_text; ?></a>
                <?php endif; ?>
                
            </div>
        </div>
    </div>
    <div class="home__overlay row bg-cover bg-shaded bg-left" style="background-image:url(<?php echo $s5__img__m; ?>);">
        <div class="c6 home__overlay--left">
            <div class="home__overlay--inner white">
                <h3 class="size10 bold margin-bot20"><?php echo $s5__headline; ?></h3>
                <p class="size5 home__overlay--copy"><?php echo $s5__copy; ?></p>
                <?php if($s5__button_url != ''): ?>
                    <a href="<?php echo $s5__button_url; ?>" class="btn btn-blue" target="<?php echo $s5__button_target; ?>"><?php echo $s5__button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="c6 emptycol"></div>
    </div>
    <div class="home__overlay row">
        <div class="c6 home__overlay--left" style="background-color:#5c0f40;">
            <div class="home__overlay--inner white">
                <h3 class="size10 bold margin-bot20"><?php echo $s6__left__headline; ?></h3>
                <p class="size5 home__overlay--copy"><?php echo $s6__left__copy; ?></p>
                <?php if($s6__left__button_url != ''): ?>
                <a href="<?php echo $s6__left__button_url; ?>" class="btn btn-blue" <?php echo $s6__left__button_target; ?>><?php echo $s6__left__button_text; ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="c6 home__overlay--right" style="background-color:#70bae3;">
            <div class="home__overlay--inner white">
                <h3 class="size10 bold margin-bot20"><?php echo $s6__right__headline; ?></h3>
                <p class="size5 home__overlay--copy"><?php echo $s6__right__copy; ?></p>
                <?php if($s6__right__button_url != ''): ?>
                <a href="<?php echo $s6__right__button_url; ?>" class="btn btn-blue" <?php echo $s6__right__button_target; ?>><?php echo $s6__right__button_text; ?></a>
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

<?	get_footer(); 	?>
