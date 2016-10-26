<?php get_header(); ?>
<?php echo do_shortcode('[searchandfilter fields="search,category,post_date"]'); ?>
	<div id="content" <?php Avada()->layout->add_class( 'content_class' ); ?> <?php Avada()->layout->add_style( 'content_style' ); ?>>
	<?php get_template_part( 'templates/blog', 'layout' ); ?>
	</div>
	<?php do_action( 'fusion_after_content' ); ?>
<?php get_footer();

// Omit closing PHP tag to avoid "Headers already sent" issues.
