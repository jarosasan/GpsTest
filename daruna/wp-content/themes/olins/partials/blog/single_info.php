<?php
    echo esc_html__('By','olins')." ".get_the_author_posts_link()." / ";
    echo get_the_date()." / ";
    the_category(', ','');
    echo " / ";
    echo '<a class="post_comments" href="'.get_comments_link().'" target="_self">';
    comments_number('0 ' . esc_html__('Comments','olins'), '1 '.esc_html__('Comment','olins'), '% '.esc_html__('Comments','olins'));
    echo '</a>';
?>