<?php 
$title = $instance['title'];
$background_image_or_not = $instance['background_image_or_not'];
$background_image = $instance['background_image'];
$first_repeater = $instance['first_repeater'];
$second_repeater = $instance['second_repeater'];
$third_repeater = $instance['third_repeater'];
?>

<div class="assistance-widget">

    <?php if ($background_image_or_not === 'yes' and !empty($background_image)) { ?>
        <div class="background-image">
            <img src="<?php echo wp_get_attachment_url($background_image); ?>" alt="<?php get_the_title($background_image); ?>">
        </div>
    <?php } ?>
    <div class="container <?php echo ($background_image_or_not === 'yes' and !empty($background_image)) ? 'white-text' : ""; ?>">
        <?php if (!empty($title)) { ?>
            <div class="title-wrapper">
                <h2> <?php echo $title; ?></h2>
                <div class="green-line"></div>
            </div>
        <?php } ?>

        <?php if (!empty($first_repeater) or !empty($second_repeater) or !empty($third_repeater)) { ?>
            <div class="assistance-wrapper">
                <?php if (!empty($first_repeater)) { ?>
                    <div class="col">
                        <?php foreach ($first_repeater as $key => $field) { ?>
                            <p><?php echo $field['text']; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if (!empty($second_repeater)) { ?>
                    <div class="col">
                        <?php foreach ($second_repeater as $key => $field) { ?>
                            <p><?php echo $field['text']; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if (!empty($third_repeater)) { ?>
                    <div class="col">
                        <?php foreach ($third_repeater as $key => $field) { ?>
                            <p><?php echo $field['text']; ?></p>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>