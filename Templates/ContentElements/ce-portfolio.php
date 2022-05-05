<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$subline = isset($subline) ? $subline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn : '';
$items = isset($items) ? $items : [];
?>
<div class="ce-services">
    <div class="container">
    <?php if( !empty( $subline ) ): ?>
            <div class="blue-txt h1"> <?php echo $subline ?></div>
        <?php endif; ?>
        <?php if( !empty( $headline ) ): ?>
            <div class="blue-txt h1"> <?php echo $headline ?></div>
        <?php endif; ?>
        <?php if( !empty( $text ) ): ?>
            <div class="blue-txt h1 mb-40"> <?php echo $text ?></div>
        <?php endif; ?>
        <div class="row no-gutters services-slider">
                <?php foreach ($items as $item) { ?>
                    <div class="item">
                        <div class="icon">
                            <?php if( !empty( $item['image'] ) ): ?>
                                <figure class="teaser-image">
                                    <img src="<?php echo $item['image']; ?>" alt="image" title="image">
                                </figure>
                            <?php endif; ?>
                        </div>
                        <div class="bodytext">
                            <?php if( !empty( $item['headline'] ) ): ?>
                                <div class="title-1"> <?php echo $item['headline'] ?></div>
                            <?php endif; ?>
                            <?php if( !empty( $item['text'] ) ): ?>
                                <p> <?php echo $item['text'] ?></p>
                            <?php endif; ?>
                            <?php if( !empty( $item['btn'] ) ): ?>
                                <div class="a-btn">
                                    <a class="secondary-button small" href="#"> <?php echo $item['btn'] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </div>
   
</div>