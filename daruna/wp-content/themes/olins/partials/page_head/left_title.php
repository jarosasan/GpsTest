<?php

//Featured image on Single Post/Page and Options Image for the rest pages.
$ale_title_for_heading = '';
if(ale_get_option('archiveblogtitle')){ $ale_title_for_heading = ale_get_option('archiveblogtitle'); };

if(is_single() or is_page()){
    global $post;

    $ale_title_for_heading = get_the_title();
    if(ale_get_meta('post_pre_title')) {
        $ale_pre_title_for_heading = ale_get_meta( 'post_pre_title' );
    } else {
        $ale_pre_title_for_heading = '';
    }

    if(ale_get_meta('post_title_position') != 'onheadingfeatured' and ale_get_meta('post_title_position') != ''){
        $ale_title_for_heading = '';
        $ale_pre_title_for_heading = '';
    }

    if(ale_get_meta('post_title_position') == 'afterheadingwithdefaults' or ale_get_meta('post_title_position') == 'afterfeaturedimage'){
        if(ale_get_option('archiveblogtitle')){ $ale_title_for_heading = ale_get_option('archiveblogtitle'); };

        if(is_singular('works')){
            if(ale_get_option('works_title')){ $ale_title_for_heading = ale_get_option('works_title'); };
        }
    }
}

if(is_category()){
    $ale_title_for_heading = single_cat_title("", false);
} else if(is_author()){
    $ale_title_for_heading =  get_the_author();
} else if(is_tag()){
    $ale_title_for_heading = single_tag_title("", false);
} else if(is_search()){
    $ale_title_for_heading = get_search_query();
} else if(is_archive()) {
    if ( is_day() ) :
        $ale_title_for_heading = sprintf( esc_html__( 'Daily Archive: %s', 'olins' ), get_the_date() );
    elseif ( is_month() ) :
        $ale_title_for_heading = sprintf( esc_html__( 'Monthly Archive: %s', 'olins' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'olins' ) ) );
    elseif ( is_year() ) :
        $ale_title_for_heading = sprintf( esc_html__( 'Yearly Archive: %s', 'olins' ), get_the_date( _x( 'Y', 'yearly archives date format', 'olins' ) ) );
    else :
        $ale_title_for_heading = esc_html__( 'Archive', 'olins' );
    endif;
} else if(is_404()){
    $ale_title_for_heading = esc_html__('page not found','olins');
}

//WooCommerce Pages
if(function_exists('is_woocommerce')){
    if(is_woocommerce()){
        $ale_title_for_heading = esc_attr(ale_get_option('wooblogtitle'));
    }
}

//Works Archive
if(is_post_type_archive('works')){
    $ale_title_for_heading = esc_attr(ale_get_option('works_title'));
}

?>

<div class="left_title <?php if(ale_get_option('page_heading_style') == 'left_text_breadcrumbs'){ ?>left_title_with_breadcrumbs<?php }?> font_two">
    <div class="content_wrapper item_with_title">
        <h2><?php echo esc_attr($ale_title_for_heading); ?></h2>
        <?php if(ale_get_option('page_heading_style') == 'left_text_breadcrumbs'){ ?>
            <div class="left_text_breadcrumbs">
                <?php ale_get_breadcrumbs(); ?>
            </div>
        <?php } ?>
    </div>
</div>
