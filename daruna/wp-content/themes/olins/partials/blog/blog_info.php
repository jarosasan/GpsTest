<span class="post_category">
	<?php if(ale_get_option('blog_custom_date_position')=='infoline'){
		echo esc_html__('Posted at','olins')." ".get_the_date()." ";
	}
	if(ale_get_option('blog_show_category') == 'show'){
		if(ale_get_option('blog_custom_date_position')=='infoline'){echo esc_html__('in','olins')." ";}
		the_category(', ','');
		echo " ";
	}
	if(ale_get_option('blog_show_author') == 'show'){
		echo esc_html__('by','olins')." ".get_the_author_posts_link()." ";
	}
	if(ale_get_option('blog_show_comments') == 'show'){
		echo esc_html__('and has','olins').' ';
		echo '<a class="post_comments" href="'.get_comments_link().'" target="_self">';
		comments_number('0 ' . esc_html__('Comments','olins'), '1 '.esc_html__('Comment','olins'), '% '.esc_html__('Comments','olins'));
		echo '</a>';
	}
	?>

</span><br />