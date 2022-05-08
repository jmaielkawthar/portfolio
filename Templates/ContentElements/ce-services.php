<?php
$class = isset($class) ? $class : [];
$image = isset($image) ? $image:'';
$headline = isset($headline) ? $headline : '';
$subline = isset($subline) ? $subline : '';
$text = isset($text) ? $text:'';
$btn = isset($btn) ? $btn : '';
$items = isset($items) ? $items : [];
?>
<section class="ce-services">
    <div class="container">
        <div class=" services-slider">
                <?php foreach ($items as $item) { ?>
                    <div class="item">
                        <div class="icon">
                            <?php if( !empty( $item['image'] ) ): ?>
                                <figure >
                                    <img src="<?php echo $item['image']; ?>" alt="image" title="image">
                                </figure>
                            <?php endif; ?>
                        </div>
                        <div class="bodytext">
                            <?php if( !empty( $item['headline'] ) ): ?>
                                <div class="headline"> <?php echo $item['headline'] ?></div>
                            <?php endif; ?>
                            <?php if( !empty( $item['text'] ) ): ?>
                                <p> <?php echo $item['text'] ?></p>
                            <?php endif; ?>
                            <?php if( !empty( $item['btn'] ) ): ?>
                                <div class="a-flex">
                                    <a class="secondary-button " href="#"> <?php echo $item['btn'] ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
    </div>
   
</section>