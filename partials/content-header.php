

	<?php 
	$image = get_field( 'header_image');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)
	?>


	<header class="page-banner" style="background-image: url(<?php if ( get_header_image() ) : header_image(); else : echo esc_url($image['url']); endif; ?>);">
	<div class="header-overlay"></div>
	<div class="header-content-wrapper">
        <div class="container">
            <div class="row justify-content-center justify-content-lg-end">
                <div id="header-text-col" class="col col-lg-5 col-xl-6">
                   test
                   
                </div>
            </div>
        </div>
    </div>
</header>

<?php

	get_template_part( 'partials/content', 'header');
	
?>
