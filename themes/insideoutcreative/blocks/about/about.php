<?php

echo '<section class="position-relative content-section ' . get_field('classes') . '" style="padding:50px 0 0;' . get_field('style') . '" id="' . get_field('id') . '">';

echo get_template_part('partials/bg-img');

echo '<div class="container">';
echo '<div class="row">';

echo '<div class="col-1 ' . get_field('image_column_classes') . '" style="' . get_field('image_column_style') . '">';

$img = get_field('image');

echo wp_get_attachment_image($img['id'],'full','',[
    'class'=>'' . get_field('image_classes'),
    'style'=>'object-fit:contain;' . get_field('image_style')
]);


echo '</div>';

// start of side links
echo '<div class="col-lg-4 col-md-7 col-11 col-side-links pr-md-5">';

echo '<div class="row">';

echo '<div class="col-10">';

$sideLinksCounter = 0;
if(have_rows('titles_repeater')): while(have_rows('titles_repeater')): the_row(); 
$sideLinksCounter++;

echo '<div class="position-relative" style="margin-bottom:15px;">';

$link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';

echo '<a class="text-white position-relative about-side-links" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '" data-aos="fade-up" data-aos-delay="' . $sideLinksCounter . '50" style="">';

echo '<div class="position-absolute w-100 h-100 about-side-links-bg bg-accent-tertiary"  style="top:0;left:0;
clip-path: polygon(95% 0, 100% 50%, 95% 100%, 0 100%, 0 0);
-webkit-clip-path: polygon(95% 0, 100% 50%, 95% 100%, 0 100%, 0 0);
-moz-clip-path: polygon(95% 0, 100% 50%, 95% 100%, 0 100%, 0 0);
-o-clip-path: polygon(95% 0, 100% 50%, 95% 100%, 0 100%, 0 0);
-ms-clip-path: polygon(95% 0, 100% 50%, 95% 100%, 0 100%, 0 0);
"></div>';

echo '<div class="position-relative bold text-shadow" style="padding:15px 0px 15px 25px;font-style:italic;">';
echo esc_html( $link_title );
echo '</div>';

echo '</a>';
endif;
echo '</div>';
endwhile; else : endif;

echo '</div>';

// echo '<div class="col-2">';
//     echo '<div class="m-auto" style="height:100%;width:4px;background:var(--accent-primary);"></div>';
// echo '</div>';

echo '</div>';

echo '</div>';
// <!-- end of side links -->

// <!-- start of content -->
echo '<div class="col-md-7 pl-md-5" data-aos="fade-up" data-aos-delay="100">';

the_field('content');

echo '</div>';
// <!-- end of content -->

echo '<div class="col-12" style="padding-top:100px;">';

echo wp_get_attachment_image(147,'full','',[
    'class'=>'w-100 h-auto',
    'style'=>''
]);

echo '</div>';

echo '</div>'; // end of row

echo '</div>'; // end of container


echo '</section>';

?>