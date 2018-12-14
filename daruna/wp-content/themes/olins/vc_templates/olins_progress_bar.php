<?php
$args = array(
    'title'  => '',
    'progress'  => '',
    'bar_color'  => '',
    'bar_bg_color' => '',
);

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts ); ?>

<div class="olins_progress_bar">
    <?php if($title){
        echo '<span class="bar_title">'.esc_attr($title).'</span>';
    } ?>
    <div class="bar" <?php if($bar_bg_color){echo 'style="background-color:'.esc_attr($bar_bg_color).'"';} ?>>
        <div class="progress " style="<?php if($bar_color){echo 'background-color:'.esc_attr($bar_color).';';} ?> <?php if($progress){echo 'width:'.esc_attr($progress).';';} ?>"></div>
        <?php if($progress){
            echo '<span class="bar_progress" style="margin-left:'.esc_attr($progress).'">'.esc_attr($progress).'</span>';
        } ?>
    </div>
</div>
