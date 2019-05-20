<?php 
$title = $instance['title'];
$subtitle = $instance['subtitle'];
?>

<div class="text-island-widget">
    <div class="container">
        <div class="text-island-wrapper">
            <?php if (!empty($title)) { ?>
                <h2><?php echo $title; ?></h2>
            <?php } ?>

            <?php if (!empty($title) or !empty($subtitle)) { ?>
                <div class="green-line"></div>
            <?php } ?>
            
            <?php if (!empty($subtitle)) { ?>
                <h3><?php echo $subtitle; ?></h3>
            <?php } ?>
        </div>
    </div>
</div>