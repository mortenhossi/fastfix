<?php
$text = $instance['text'];
$subline = $instance['subline'];
$image = $instance['image'];
$cta_checkbox = $instance['cta_checkbox'];
$cta_section = $instance['cta_section'];
?>

<div class="cover-widget <?php echo ($cta_checkbox) ? "cta" : ""; ?>">
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

    <?php if (!empty($cta_section)) { ?>
        <div class="cta-container">
            <div class="cta-inner">
                <?php if (!empty($cta_section['title'])) { ?>
                    <h3><?php echo $cta_section['title']; ?></h3>
                <?php } ?>

                <?php if (!empty($cta_section['benefits_repeater'])) { ?>
                    <div class="benefits-container">
                        <?php foreach ($cta_section['benefits_repeater'] as $key => $field) { ?>
                            <div class="benefit">
                                <p><?php echo $field['benefit']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if (!empty($cta_section['button_text']) and !empty($cta_section['button_link'])) { ?>
                    <a href="<?php echo $cta_section['button_link'] ?>" class="button"><?php echo $cta_section['button_text'] ?></a>
                <?php } ?>
            </div>
        </div>
    <?php } ?>

</div>


