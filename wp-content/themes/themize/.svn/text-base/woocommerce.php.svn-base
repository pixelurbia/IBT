<?php get_header();?>

<?php

/*-----------------------------------------------------------------------------------*/
/* SET CONTENT WIDTH
/*-----------------------------------------------------------------------------------*/

global $post;
$sidebar = get_field('sidebar_position', get_option( 'woocommerce_shop_page_id' ));

$woo_vc_page_css = new Vc_base();
$woo_vc_page_css->addShortcodesCustomCss(get_option('custom_footer'));


if ($sidebar !== "") { $span_size = "col-md-9"; }
if ($sidebar == "") { $span_size = "col-md-12"; }

/*-----------------------------------------------------------------------------------*/
/* LOAD BREADCRUMBS
/*-----------------------------------------------------------------------------------*/

if (get_field('breadcrumb') == true) { do_action('breadcrumb'); }

/*-----------------------------------------------------------------------------------*/
/* BEGIN CONTENT
/*-----------------------------------------------------------------------------------*/
?>

<div class="content-container">
	<div class="container">
		<div class="row">
		
			<!-- Left sidebar -->
			<?php if ($sidebar == "left") { ?>
				<div class="col-md-3 widget-area widget-left">
					<?php if (get_field('select_a_sidebar')) { ?>
						<?php dynamic_sidebar(get_field('select_a_sidebar')); ?>
					<?php } else { ?>
						<?php dynamic_sidebar('Page'); ?>
					<?php } ?>
				</div>
			<?php } ?>
			
			<!-- MAIN CONTENT -->
			<div class="col-md-9">
				<?php woocommerce_content(); ?>
			</div>
			
			<!-- Right sidebar -->
			<?php if ($sidebar == "right") { ?>
				<div class="col-md-3 widget-area widget-right">
					<?php if (get_field('select_a_sidebar')) { ?>
						<?php dynamic_sidebar(get_field('select_a_sidebar')); ?>
					<?php } else { ?>
						<?php dynamic_sidebar('Page'); ?>
					<?php } ?>
				</div>
			<?php } ?>

			<div class="col-md-3 widget-area widget-right">
				<?php dynamic_sidebar('Page'); ?>
			</div>
			
		</div>
	</div>
</div>

<?php 

/*-----------------------------------------------------------------------------------*/
/* BEGIN FOOTER
/*-----------------------------------------------------------------------------------*/

get_footer(); 

?>   