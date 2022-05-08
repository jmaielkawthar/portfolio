<?php
$class = isset($class) ? $class : [];
$headline = isset($headline) ? $headline : '';
$subline = isset($subline) ? $subline : '';
$text = isset($text) ? $text:'';
?>
<div class="ce-headline center">
    <div class="container">
        <?php if( !empty( $subline ) ): ?>
        <div class="subline "> <?php echo $subline ?></div>
        <?php endif; ?>
        <?php if( !empty( $headline ) ): ?>
        <div class="headline"> <?php echo $headline ?></div>
        <?php endif; ?>
        <?php if( !empty( $text ) ): ?>
        <div class="text"> <?php echo $text ?></div>
        <?php endif; ?>
        <div class="line-headline "></div>
    </div>
</div>