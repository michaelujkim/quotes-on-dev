<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package QOD_Starter_Theme
 */
$source = get_post_meta( get_the_ID(), '_qod_quote_source', true ); 
$source_url = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if( $source && $source_url ):?>
				<span class="source">, <a href="<?php echo $source_url;?>">
				<?php echo $source; ?></a></span>

				<?php  elseif( $source):	 ?>
				<span class="source">, <?php echo $source; ?></span>
				
				<?php  else:	 ?>
				<span class="source">Do you have the source? We sure don't</span>
<?php endif; ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
