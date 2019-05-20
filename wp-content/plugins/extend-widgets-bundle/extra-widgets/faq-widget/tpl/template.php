<?php 
$faq_repeater = $instance['faq_repeater'];
?>

<div class="faq-widget">
    <div class="container">
        <?php if (!empty($faq_repeater)) { ?>
            <div class="faq-wrapper">
                <?php foreach ($faq_repeater as $key => $field) { ?>
                    <div class="faq">
                        <div class="faq-title">
                            <div class="title"><?php echo $field['title']; ?></div>
                            <div class="faq-icon">+</div>
                        </div>
                        <div class="faq-content">
                            <div class="content-inner">
                                <?php echo $field['content']; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</div>