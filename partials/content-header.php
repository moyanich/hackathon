
<div class="page-banner position-relative" style="background: url(<?php if ( get_header_image() ) : header_image(); endif;?>); background-repeat: no-repeat; background-size: cover;">
    <div class="header-overlay"></div>
    <div class="header-content-wrapper">
        <div class="container position-relative">
            <div class="row justify-content-center">
                <div id="header-inner" class="col-12 header-inner">
                    <?php 
                        if ( is_home() && ! is_front_page() ) { 
                            single_post_title('<h1 class="header-title">', '</h1>'); 
                        } else {
                            the_title( '<h1 class="header-title">', '</h1>' );
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

 