<?php 
  $options = get_option( 'medicare-options' ); 
  $contact_map = $options['contact-map'];
  $lat = $contact_map['latitude'];
  $lang = $contact_map['longitude'];

?>

<section class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317719.5877495047!2d-0.4312316281021684!3d51.52817979531493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sbd!4v1696673461555!5m2!1sen!2sbd"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
