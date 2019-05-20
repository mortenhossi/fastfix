<?php
$title = $instance['title'];
$subline = $instance['subline'];
$price_repeater = $instance['price_repeater'];
?>

<div class="price-widget">
    <div class="container">
        <?php if (!empty($title)) { ?>
            <div class="title-wrapper">
                <h2><?php echo $title; ?></h2>
                
                <div class="green-line"></div>

                <?php if (!empty($subline)) { ?>
                    <h3><?php echo $subline; ?></h3>
                <?php } ?>
            </div>
        <?php } ?>

        <?php if ($price_repeater) { ?>
           <div class="price-table">
                <div class="price-titles">
                    <div class="price-title">
                        <div>Reparation</div>
                    </div>

                    <div class="price-title">
                        <div>Tid</div>
                    </div>

                    <div class="price-title">
                        <div>Pris</div>
                    </div>
                </div>
                <?php foreach ($price_repeater as $key => $field) { ?>
                    <div class="row">
                        <div class="row-item">
                            <?php echo $field['reparation'] ?>
                        </div>

                        <div class="row-item">
                            <?php echo $field['time'] ?>
                        </div>

                        <div class="row-item">
                            <?php echo $field['price'] ?>
                        </div>
                    </div>
                <?php } ?>
           </div>
        <?php } ?>
    </div>
</div>