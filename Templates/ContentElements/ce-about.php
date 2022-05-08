<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$textes = isset($textes) ? $textes:[];
$btn = isset($btn) ? $btn : '';
$subline = isset($subline) ? $subline : '';
$items = isset($items) ? $items : [];
?>
<section class="ce-about">
    <div class="container">
        <div class="row row-about ">
            <div class=" col-lg-6 col-xs-6 col-12 ">
                <div class="teaser-image">
                    <?php if( !empty( $image ) ): ?>
                    <figure>
                        <img src="<?php echo $image; ?>" alt="header image" title="header image">
                    </figure>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6 col-xs-6 col-12">
                <div class=" teaser-info">
                    <?php if( !empty( $subline ) ): ?>
                    <h5 class="subline"> <?php echo $subline ?></h1>
                        <?php endif; ?>
                        <?php if( !empty( $headline ) ): ?>
                        <h1 class="headline"> <?php echo $headline ?></h1>
                        <?php endif; ?>
                        <div class="line-headline yellow-bg "></div>
                        <?php foreach ($textes as $text) { ?>
                        <?php if( !empty( $text['text'] ) ): ?>
                        <p> <?php echo $text['text'] ?></p>
                        <?php endif; ?>

                        <?php } ?>
                        <div class="row">
                            <?php foreach ($items as $item) { ?>
                            <div class="col-6">
                                <?php if( !empty( $item['headline'] ) ): ?>
                                <div class="title yellow"> <?php echo $item['headline'] ?> :</div>
                                <?php endif; ?>
                                <?php if( !empty( $item['text'] ) ): ?>
                                <p> <?php echo $item['text'] ?></p>
                                <?php endif; ?>
                            </div>
                            <?php } ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>