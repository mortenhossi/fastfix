<?php
$contact_form = $instance['contact_form'];
$newsletter = $instance['newsletter'];
?>

<div class="contact-widget <?php echo ($newsletter) ? "newsletter" : ""; ?>">
    <div class="container">
        <?php if (!empty($contact_form)) { ?>
            <div class="contact-form">
                <?php echo $contact_form; ?>
            </div>
        <?php } ?>
    </div>
</div>

