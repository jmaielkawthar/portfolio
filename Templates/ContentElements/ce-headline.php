<?php
$class = isset($class) ? $class : [];
$lineClass = isset($lineClass) ? $lineClass : [];
$headline = isset($headline) ? $headline : '';
$subline = isset($subline) ? $subline : '';
$text = isset($text) ? $text:'';
?>
<div class="ce-headline center <?php if( !empty( $class ) ): echo $class; endif;?> ">
    <div class="container">
        <div class="col-md-8 mx-auto">
            <?php if( !empty( $subline ) ): ?>
            <div class="subline <?php if( !empty( $lineClass ) ): echo $lineClass; endif;?> "> <?php echo $subline ?></div>
            <?php endif; ?>
            <?php if( !empty( $headline ) ): ?>
            <div class="headline"> <?php echo $headline ?></div>
            <?php endif; ?>
            <?php if( !empty( $text ) ): ?>
            <div class="text"> <?php echo $text ?></div>
            <?php endif; ?>
            <div class="line-headline <?php if( !empty( $lineClass ) ): echo $lineClass; endif;?>"></div>
        </div>
    </div>
</div>