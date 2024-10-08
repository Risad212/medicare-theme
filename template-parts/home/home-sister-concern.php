<?php 
$options = get_option('medicare-options'); 
$sister_concern_subtitle = esc_html($options['sister-concern-subtitle']);
$sister_concern_title = esc_html($options['sister-concern-title']);
$sister_concern_list = $options['sister-concern-list'];
?>

<section class="sister-concern-section">
    <div class="container">
        <div class="title-head">
            <span class="subtitle"><?php echo $sister_concern_subtitle; ?></span>
            <h3 class="title"><?php echo $sister_concern_title; ?></h3>
        </div>
        <div class="clients-slider owl-carousel owl-theme">
            <?php 
            if (!empty($sister_concern_list)) {
                foreach ($sister_concern_list as $item) {
                    $image = esc_url($item['sister-concern-img']['url']);
            ?>
                <div class="clients-member wow fadeInDown" data-wow-duration=".9s" data-wow-delay=".9s">
                    <a href="#" target="_blank">
                        <div class="clients-photo">
                            <img class="img-fluid" src="<?php echo $image; ?>" alt="Member Image">
                        </div><!--/.member-photo-->
                    </a>
                </div><!--/.clients-member-->
            <?php
                }
            }
            ?>
        </div>
    </div>
</section>
