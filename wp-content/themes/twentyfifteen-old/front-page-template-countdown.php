<?php
/*
Template Name: Front Page
*/

get_header(); ?>

<style>
.content-area {
	margin-top: 150px;
}
.share-panel {
	display: none !important;
}
.site-title {
	font-size: 40px;
}
h1.site-title {
		color: black !important;
}
.main-wrap {
	position: relative;
	margin: 0 auto;
	width: 90%;
}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="main-wrap">
			
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div><!-- .site-branding -->
			
			
			<?php echo do_shortcode('[ujicountdown id="Time Until Deletion" expire="2015/03/31 23:00" hide="false" url="" subscr="" recurring="" rectype="second" repeats=""]') ?>
			
			<?php echo do_shortcode('[Best_Wordpress_Gallery id="1" gal_title="Ola Teas Logos"]]') ?>
			
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>