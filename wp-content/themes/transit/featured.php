<?php
/* 
 * Display 3 random testimonials
 */

$args = array( 
    'post_type' => 'post', 
    'posts_per_page' => 5,
    'orderby' => 'rand'
);

$featured = new WP_Query( $args );
echo '<aside id="featured" class="clear">';
while ( $featured->have_posts() ) : $featured->the_post();
    echo '<div class="featured">';
    
    echo '<figure class="featured-thumb">';
    ?>
    <a href="<?php the_permalink()?>">
        
    <?php
    the_post_thumbnail('large');
    echo '</a>';
    echo '</figure>';

    echo '<p class="featured-title">' . get_the_title() . '</p>';
    
    $category = get_the_category();
    $category_id = get_cat_ID( $category[0]->cat_name );

    echo '<p class="featured-category"><a href="' . get_category_link( $category_id ) . '" class="featured-category">' . $category[0]->cat_name . '</a></p>';
    echo '</div>';
endwhile;
echo '</aside>';