<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn : '';
$subline = isset($subline) ? $subline : '';
?>
<section class="ce-home main-banner-left">
    <div class="container">
        <div class="row row-home ">
            <div class="col-lg-6 col-xs-6 col-12">
                <div class=" teaser-info">
                    <?php if( !empty( $subline ) ): ?>
                    <h5 class="subline pink-violet"> <?php echo $subline ?></h1>
                        <?php endif; ?>
                        <?php if( !empty( $headline ) ): ?>
                        <h1 class="headlineBig"> <?php echo $headline ?></h1>
                        <?php endif; ?>
                        <?php if( !empty( $text ) ): ?>
                        <p class="text"> <?php echo $text ?></p>
                        <?php endif; ?>
                        <?php if( !empty( $btn ) ): ?>
                        <button class="primary-button "><?php echo $btn ?></button>
                        <?php endif; ?>
                </div>
            </div>
            <div class=" col-lg-6 col-xs-6 col-12 ">
                <div class="teaser-image main-banner-right">
                    <?php if( !empty( $image ) ): ?>
                    <figure>
                        <img src="<?php echo $image; ?>" alt="header image" title="header image">
                    </figure>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>