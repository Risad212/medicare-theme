<?php 
  $options = get_option( 'medicare-options' ); 
  $contact_info = $options['contact-info'];
?>

<section class="contact-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="contact-info">
           <?php 
              foreach($contact_info as $contact){
                  $icon = $contact['contact-icon'];
                  $title = $contact['contact-title'];
                  $text = $contact['contact-info-text'];
              ?>
               <div class="single-info">
               <span class="icon">
                 <i class="<?php echo $icon ?>"></i>
               </span>
            <div class="content">
              <h4 class="title"><?php echo $title ?></h4>
              <span><?php echo $text ?></span>
            </div>
           </div>
            <?php
              }
            ?>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="04590d6" title="Contact Form"]') ?>
        </div>
      </div>
    </div>
  </div>
</section>