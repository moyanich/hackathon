<?php 
$image = get_field( 'header_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if ( $image ) :

?>


    <div class="page-banner" style="background-image: url(<?php if ( get_header_image() ) : header_image(); else : echo esc_url($image['url']); endif; ?>);">
        <div class="header-overlay"></div>
        <div class="header-content-wrapper">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="header-text-col" class="col-12 py-5">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
		else : ?>

        here


<?php endif; ?>