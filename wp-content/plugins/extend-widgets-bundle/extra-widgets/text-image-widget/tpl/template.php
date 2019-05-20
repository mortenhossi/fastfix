<?php 
$plugin_dir = ABSPATH . 'wp-content/plugins/extend-widgets-bundle';
require_once($plugin_dir . '/global-functions.php');
$title = $instance['title'];
$label = $instance['label'];
$content = $instance['content'];
$image = $instance['image'];
$text_or_image_first = $instance['text_or_image_first'];
$background_color = $instance['background_color'];
$button_text = $instance['button_text'];
$button_link = $instance['button_link'];
?>

<div class="text-image-widget <?php echo ($background_color) ? "background-color" : ""; ?>">
    <div class="container <?php echo ($text_or_image_first === 'image') ? "image-first" : ""; ?>">
       <div class="content-wrapper">
            <?php if (!empty($title)) { ?>
                <div class="header-wrapper">
                    <h2> <?php echo $title; ?></h2>
                    <?php if (!empty($label)) { ?>
                        <p><?php echo $label; ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="text-image-line"></div>

            <?php if (!empty($content)) { ?>
                <div class="content">
                    <?php echo $content; ?>
                </div>
            <?php } ?>

            <?php if (!empty($button_link) and !empty($button_text)) { ?>
                <div class="button-wrapper">
                    <a href="<?php echo getUrl($button_link); ?>" class="button"><?php echo $button_text ?></a>
                </div>
            <?php } ?>
       </div>

       <div class="image-wrapper">
            <?php if (!empty($image)) { ?>
                <div class="image-container">
                    <img src="<?php echo wp_get_attachment_url($image); ?>" alt="<?php echo get_the_title($image); ?>">
                </div>
            <?php } ?>
       </div>
    </div>
</div>