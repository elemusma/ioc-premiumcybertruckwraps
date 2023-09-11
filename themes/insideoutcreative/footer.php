<?php
echo '<footer>';

echo '<section style="padding:25px 0px;">';
echo '<div class="container">';
echo '<div class="row justify-content-center">';

echo '<div class="col-md-5 text-center" style="padding-bottom:25px;">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
$logoFooter = get_field('logo_footer','options'); 

if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}

echo '</a>';
echo '</div>';

echo '<div class="col-12 text-center">';

echo get_template_part('partials/si');

echo '<div class="" style="">';

the_field('website_message','options');

echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</section>';
echo '<div class="text-center" style="background:#363636;padding:15px;">';
    echo '<div class="d-flex justify-content-center align-items-center">';
        echo '<a href="https://insideoutcreative.io/" target="_blank" rel="noopener noreferrer" style="" class="">';
        echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/04/created-by-inside-out-creative.png" style="width:150px;" class="h-auto ml-2" alt="">';
        // echo '<img src="https://insideoutcreative.io/wp-content/uploads/2022/06/created-by-inside-out-creative-black.png" style="width:150px;" class="h-auto ml-2" alt="">';
        echo '</a>';
    echo '</div>';
echo '</div>';
echo '</footer>';

if(get_field('footer', 'options')) { the_field('footer', 'options'); }
if(get_field('footer_code')) { the_field('footer_code'); }

wp_footer();

echo '</body>';
echo '</html>';
?>