 <?	/*
		Template Name: Financials 2020

	 */

	get_header();	

	the_post();	

	$sectors = get_terms('sector',array('hide_empty'=>false));

	?>

<div class="bg-green page-nav">
	<div class="grid">
		<div class="row text-center">
			<?	ufc_buttons(get_field('page_nav'),"clear"); ?>
		</div>
	</div>
</div>

<a class="sectionanchor"></a>
<div id="main" class="grid">

	<div class="headline-row">
		<div class="row js-even-columns bg-cover bg-shaded white" <? if($image = get_field('content_1_image')): ?>style="background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
			<div class="c12">

				<div class="valign-middle text-center">
				  <div>
				 	<h2 class="size10 margin-bot20"><? the_field('content_1_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_1_blurb'); ?></div>
				  </div>
				</div>

			</div>
		</div>
	</div>

	<?php 
	$hideCharts = get_field('content_1_1_hide');
	if($hideCharts != true) { ?>
		<div class="row">

			<div class="c12">

				<div class="size7 margin-top90 margin-bot40 text-center"><? the_field('content_1_1_headline'); ?></div>

				<div class="content margin-bot60">
					<? the_field('content_1_1_body'); ?>
				</div>

			</div>
		</div>

	<div id="financials-pies" class="row text-center js-even-columns">
		<div class="c2 emptycol"></div>
		<div class="c4 margin-bot60">
			<img src="<? the_field('content_1_1_img1'); ?>" height="250" />
		</div>

		<div class="c4 margin-bot60">
			<img src="<? the_field('content_1_1_img2'); ?>" height="250" />
		</div>
		<div class="c2 emptycol"></div>
	</div>
	<?php } ?>
	<div class="row">
		<div class="c12">
			<div class="content margin-top90 margin-bot40">

				<div class="size7 margin-bot40 text-center"><? the_field('content_1_2_headline'); ?></div>

				<? the_field('content_1_2_body'); ?>

			</div>
		</div>
	</div>

	<div class="row" id="financePdfs">
		<!-- <div class="c3 emptycol"></div> -->
		<div class="c12">
			<div class="content">
				<div class="row">
					<div class="c6 margin-bot30 text-center">
						<div class="financeHeader size6 margin-bot20 text-center">Form 990</div>
						<?	ufc_buttons(get_field('content_1_2_990_pdfs')); ?>
					</div>
					<div class="c6 margin-bot30 text-center">
						<div class="financeHeader size6 margin-bot20 text-center">Audited Financials</div>
						<?	ufc_buttons(get_field('content_1_2_af_pdfs')); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="c3 emptycol"></div> -->
	</div>

	<div class="row">
		<div class="c12">
			<div class="content margin-bot60">

				<div class="size7 margin-top90 margin-bot40 text-center"><? the_field('content_1_3_headline'); ?></div>

				<? the_field('content_1_3_body'); ?>
			
			</div>			
		</div>
	</div>

	<div class="row">

		<div class="c3 emptycol"></div>

		<div class="c6 margin-bot120">
			<?	if($companies = get_field('content_1_3_companies')):
					echo '<ul class="menu fourths text-center">';
					foreach($companies as $company):
						echo "<li class='col margin-bot20'><img class='padding-left10 padding-right10' src='".$company['image']['url']."'/>".$company['title']."</li>";
					endforeach;
					echo '</ul>';
				endif;				
			?>
		</div>

		<div class="c2 bg-grey margin-bot40">
			<? if($image = get_field('content_1_3_blurb_image')): ?><img class="margin-top10" src="<?= $image['sizes']['medium']; ?>"/><? endif; ?>
			<div class="bold size3"><? the_field('content_1_3_blurb_title'); ?></div>
			<div class="size1"><? the_field('content_1_3_blurb'); ?></div>			
		</div>

		<div class="c3 emptycol"></div>

	</div>

	<a class="sectionanchor"></a>
	<div class="headline-row">
		<div class="row js-even-columns bg-cover bg-shaded white" <? if($image = get_field('content_2_image')): ?>style="background-image:url(<?= $image['url']; ?>)"<? endif; ?>>
			<div class="c12">

				<div class="valign-middle text-center">
				  <div>
				 	<h2 class="size10 margin-bot20"><? the_field('content_2_headline'); ?></h2>
					<div class="size5 content-size2"><? the_field('content_2_blurb'); ?></div>
				  </div>
				</div>

			</div>
		</div>
	</div>

	<div class="row">

		<div class="c12 margin-bot120">

			<div class="content">

				<div class="size7 margin-top90 margin-bot40 text-center"><? the_field('content_2_1_headline'); ?></div>

				<? the_field('content_2_1_body'); ?>			

				<ol class="big-number margin-top60">

				<?	$list = get_field('content_2_1_list'); 

					if($list) :
						foreach($list as $item) : ?>

							<li>
								<p><strong><?= $item['title']; ?></strong></p>
								<p><?= $item['body']; ?></p>
							</li>

				<?		endforeach;
					endif;
				?>

				</ol>

				<?	ufc_buttons(get_field('content_2_1_pdfs')); ?>

			</div>

		</div>

	</div>


</div>
	

<?	get_footer();	?>