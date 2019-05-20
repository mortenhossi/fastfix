<?php
$text = $instance['text'];
$subline = $instance['subline'];
$image = $instance['image'];
?>

<div class="cover-widget">
    <?php if (!empty($image)) { ?>
        <div class="cover-image">
            <img src="<?php echo wp_get_attachment_url($image); ?>" alt="<?php echo get_the_title($image); ?>">
        </div>
    <?php } ?>

    <?php if (!empty($text)) { ?>
        <div class="cover-headline">
            <h1> <?php echo $text; ?></h1>
            <?php if (!empty($subline)) { ?>
                <h2><?php echo $subline; ?></h2>
            <?php } ?>
        </div>
    <?php } ?>

</div>


