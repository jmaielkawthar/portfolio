<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn : '';
?>
<div class="ce-header-home  mt-30  mb-50 ">
    <div class="container">
        <div class="header-home">
            <div class="row row-home ">
                <div class="col-lg-6 col-xs-6 col-12">
                    <div class=" teaser-info">
                        <?php if( !empty( $headline ) ): ?>
                            <h1 class="blue-txt" > <?php echo $headline ?></h1>
                        <?php endif; ?>
                        <?php if( !empty( $text ) ): ?>
                            <p class="col-md-30 px-0"> <?php echo $text ?></p>
                        <?php endif; ?>
                        <?php if( !empty( $btn ) ): ?>
                            <button class="primary-button "><?php echo $btn ?></button>
                        <?php endif; ?>
                    </div>
                </div>
                <div class=" col-lg-6 col-xs-6 col-12 ">
                    <div class="teaser-image">
                        <?php if( !empty( $image ) ): ?>
                            <figure>
                                <img src="<?php echo $image; ?>" alt="header image" title="header image">
                            </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
       </div>
    </div>
</div>