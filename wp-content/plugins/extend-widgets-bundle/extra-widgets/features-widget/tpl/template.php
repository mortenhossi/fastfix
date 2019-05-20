<?php
$title = $instance['title'];
$feature_repeater = $instance['feature_repeater'];
?>

<div class="features-widget">
    <div class="container">
        <?php if (!empty($title)) { ?>
            <div class="title-wrapper">
                <h2><?php echo $title; ?></h2>
                <div class="green-line"></div>
            </div>
        <?php } ?>

        <?php if (!empty($feature_repeater)) { ?>
            <div class="feature-wrapper">
                <?php foreach ($feature_repeater as $key => $field) { ?>
                <div class="feature">
                    <?php if (!empty($field['feature_icon'])) { ?>
                        <div class="feature-icon">
                                <img src="<?php echo wp_get_attachment_url($field['feature_icon']); ?>" alt="<?php echo get_the_title($field['feature_icon']); ?>">
                        </div>
                    <?php } ?>

                    <?php if (!empty($field['feature_title'])) { ?>
                        <div class="feature-title">
                            <?php echo $field['feature_title']; ?>
                        </div>
                    <?php } ?>

                    <?php if (!empty($field['feature_text'])) { ?>
                        <div class="feature-text">
                            <?php echo $field['feature_text']; ?>
                        </div>
                    <?php } ?>
                </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>