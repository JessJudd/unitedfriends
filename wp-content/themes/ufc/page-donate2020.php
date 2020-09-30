<?	
	/*
		Template Name: Donate 2020

	 */

	get_header();	
	
	the_post();

    global $post;

    $header = get_field('page_header');
    $paragraph = get_field('paragraph');
    $first = get_field('first_section');
    $subheader = get_field('subheader');
    $second = get_field('second_section');
    $address = get_field('address');
    $bg_img = get_field('background_image');
    $bg_position_x = get_field('background_position_x');
    $bg_position_y = get_field('background_position_y');
    $bg_class_x = ($bg_position_x != '') ? 'donateBg--' . $bg_position_x : '';
    $bg_class_y = ($bg_position_y != '') ? 'donateBg--' . $bg_position_y : '';
    $form_id = get_field('form_id');
    $form_color = get_field('form_color');
?>

<div class="grid" id="main">
	<div class="c12" style="padding:0;">
		<div id="donateBg" class="row <?php echo $bg_class_x; ?> <?php echo $bg_class_y; ?>" style="background-image:url(<?php echo $bg_img; ?>);">
			<div class="c1 emptycol"></div>
			<div class="c4">
                <div id="donateForm">
                    <div class="inner">
                        <?php
                            if($header){
                                echo '<h2 class="header size7 margin-bot20">'. $header .'</h2>';
                            }
                            if($paragraph){
                                echo '<div class="main margin-bot20">'. $paragraph .'</div>';
                            }
                        ?>
                    </div>
                    <!-- start: donate form -->
                    <?php if($form_id){
                        echo '<div id="embedForm" class="margin-bot20">
                        <div class="sk-chase">
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                        </div>
                        <a href="#'.$form_id.'&type=fullform&color='.$form_color.'" style="display: none">Give Now</a>
                        </div>';
                    } ?>
                    <!-- end: donate form -->
                    <div class="inner">
                        <?php
                        if($first){
                            echo '<div class="paragraph margin-bot20">'. $first .'</div>';
                        }
                        if($subheader){
                            echo '<h2 class="subheader">'. $subheader .'</h2>';
                        }
                        if($second){
                            echo '<div class="paragraph margin-bot20">'. $second .'</div>';
                        }
                        if($address){
                            echo '<div class="paragraph paragraph--last">'. $address .'</div>';
                        }
                        ?>
                    </div>
                </div>
			</div>
			<div class="c7 emptycol"></div>
		</div>
	</div>
</div>


<?	get_footer(); 	?>