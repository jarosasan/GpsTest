<?php
wp_enqueue_script( 'easings' );
wp_enqueue_script( 'ale-multiscroll' );
wp_enqueue_style('aletheme-multiscroll');

$args = array(
    'count'         => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$args = array(
    'posts_per_page'    => $count,
    'post_type'         => 'works',
);
$recent_works = new WP_Query( $args );
?>
<div id="olins_scroll_works" class="olins_scroll_works">

    <div class="left">
        <?php
        $i = 0;
        if ( $recent_works->have_posts() ) { while ( $recent_works->have_posts() ) { $i++; $recent_works->the_post(); ?>
        <div class="section data_holder" id="left<?php echo esc_attr($i); ?>">
            <div class="data_container">
                <h2> <a href="<?php esc_url(the_permalink()); ?>"><?php echo the_title(); ?></a></h2>
                <?php $type_terms = get_the_terms( get_the_ID(), "work-category" );
                if(!empty($type_terms)){
                    foreach($type_terms as $term){
                        if(isset($term->name)){
                            echo '<span class="category">'.esc_attr($term->name).'</span>';
                        } break;
                    }
                } ?>
                <a href="<?php esc_url(the_permalink()); ?>" class="ale_button"><?php echo esc_html_e('Read More','olins'); ?></a>
            </div>
        </div>
        <?php }
            wp_reset_postdata();
        } else {
            echo esc_html_e( 'Add some posts in Works Post Type section', 'olins' );
        } ?>
    </div>

    <div class="right">
        <?php
        $j = 0;
        if ( $recent_works->have_posts() ) { while ( $recent_works->have_posts() ) { $j++; $recent_works->the_post();

            $olins_thumbnail_url = '';
            $olins_thumbnail_url = get_the_post_thumbnail_url(get_the_ID(),'full');
        ?>
            <div class="section image_holder" id="right<?php echo esc_attr($j); ?>" <?php if(!empty($olins_thumbnail_url)){echo 'style="background-image:url('.esc_url($olins_thumbnail_url).')"';} ?>>

            </div>
        <?php }
            wp_reset_postdata();
        } else {
            echo esc_html_e( 'Add some posts in Works Post Type section', 'olins' );
        } ?>
    </div>
</div>