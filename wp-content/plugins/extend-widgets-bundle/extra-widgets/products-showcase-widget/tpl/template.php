<?php 
$plugin_dir = ABSPATH . 'wp-content/plugins/extend-widgets-bundle';
require_once($plugin_dir . '/global-functions.php');
$title = $instance['title'];
$model_repeater = $instance['model_repeater'];
?>

<div class="products-showcase-widget">
    <div class="container">
        <?php if (!empty($title)) { ?>
            <h2 class="headline"> <?php echo $title; ?></h2>
            <div class="green-line"></div>
        <?php } ?>

        <?php if (!empty($model_repeater)) { ?>
            <div class="model-wrapper">
                <?php foreach ($model_repeater as $key => $field) { ?>
                    <div class="model">
                        <a href="<?php echo getUrl($field['link']);?>">
                            <?php if (!empty($field['image'])) { ?>
                                <div class="image-wrapper">
                                    <img src="<?php echo wp_get_attachment_url($field['image']); ?>" alt="<?php get_the_title($field['image']); ?>">
                                </div>
                            <?php } ?>

                            <?php if (!empty($field['title'])) { ?>
                                <div class="text-wrapper">
                                    <div class="title"><p><?php echo $field['title']; ?></p></div>
                                    <?php if (!empty($field['link_text'])) { ?>
                                        <div class="link-text"><p><?php echo $field['link_text']; ?></p></div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </a>
                    </div>
                <?php } ?> 

                <div class="filler"></div>
                <div class="filler"></div>
            </div>
        <?php } ?>
    </div>
</div>