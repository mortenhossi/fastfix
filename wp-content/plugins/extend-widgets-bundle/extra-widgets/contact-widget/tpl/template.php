<?php
$contact_form = $instance['contact_form'];
?>

<div class="contact-widget">
    <div class="container">
        <?php if (!empty($contact_form)) { ?>
            <div class="contact-form">
                <?php echo $contact_form; ?>
            </div>
        <?php } ?>
    </div>
</div>

