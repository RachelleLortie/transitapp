<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package transit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
            
            <a href="<?php the_permalink()?>"> 
                <div <?php if( !is_single() ) { 
                    echo 'class="shift-ele"';           
                } else {
                    echo 'class="center-ele"';
                }
                    ?> >
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </a>

            
		<?php               
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
                        
                                        
                $categories_list = get_the_category_list( esc_html__( '', 'transit' ) );
                    if ( $categories_list && transit_categorized_blog() && !is_single() ) {
                    printf( '<span class="stations cat-links shift-txt">' . esc_html__( '%1$s', 'transit' ) . '</span>', $categories_list ); // WPCS: XSS OK.
                } else if ($categories_list && transit_categorized_blog()){
                    printf( '<span class="stations cat-links center-txt">' . esc_html__( '%1$s', 'transit' ) . '</span>', $categories_list ); // WPCS: XSS OK.
                }
                ?>
            
                <div <?php if( !is_single() ) { 
                    echo 'class="shift-txt photo-num"';           
                } else {
                    echo 'class="center-txt photo-num"';
                }
                    ?> >
                    
                    <p> <?php echo the_subheading(); ?> </p></div>
            
                <?php

		if ( 'post' === get_post_type() ) : ?>
<!--		<div class="entry-meta">
			<?php// transit_posted_on(); ?>
		</div> .entry-meta -->
		<?php
		endif; ?>


	</header><!-- .entry-header -->

	<div class="entry-content">
           


		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'transit' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'transit' ),
				'after'  => '</div>',
			) );
		?>
            
            <?php $test1 = '#trial1'?>
            
            <?php if (!is_single()) { ?>
            <a class="comment-share" href="<?php the_permalink() . printf($test1)?>">VIEW COMMENTS</a>
            <?php } ?>
            
            
        
	</div><!-- .entry-content -->
        
        <?php if(!is_single()) { ?>
            <div class="sm-wrapper">
                <a href="http://facebook.com" class="share-button fb-share"><?php echo rand(10,60) ?></a>
                <a href="http://twitter.com" class="share-button tw-share"><?php echo rand(10,60) ?></a>
                <a href="http://instagram.com" class="share-button insta-share"><?php echo  rand(10,60) ?></a>
            </div>
        <?php } ?>

	<footer class="entry-footer">
		<?php //transit_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
