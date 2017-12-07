<?php
/* Template Name: Templejt */
?>
<?php get_header(); ?>


      <form id="ajaxform" method="post" class="search">
        <input type="text" id="ime" placeholder="Name">
        <input type="email" id="email" placeholder="E-mail">
        <input type="hidden" id="kljuc" value="igor">
        <input type="submit" name="submit" value="Submit">
      </form>


      <div class="autoplay">
        <div><img src="<?php echo get_bloginfo('template_url') ?>/img/1.jpg" alt=""></div>
        <div><img src="<?php echo get_bloginfo('template_url') ?>/img/2.jpg" alt=""></div>
        <div><img src="<?php echo get_bloginfo('template_url') ?>/img/3.jpg" alt=""></div>
      </div>

    <footer align="center">
      <p><?php  bloginfo('name'); ?></p>
    </footer>

    </main>

    <script type="text/javascript">

    //SLICK SLIDER
    jQuery(document).ready(function(){
      console.log("TEST");
      jQuery('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: '0px',
        arrows: false,
        infinite: true,
        cssEase: 'linear'
      });
    });

    //AJAX FORM
    jQuery("#ajaxform").submit(function(event) {
      event.preventDefault();
      var ime = jQuery('#ajaxform #ime').val();
      var email = jQuery('#ajaxform #email').val();
      var kljuc = jQuery('#ajaxform #kljuc').val();
      jQuery.ajax({
        type: 'POST',
        data: { ime, email, kljuc},
        dataType: "text",
        url: "/wptheme/strana-2"
      }).done(function(data) {
        // var json = jQuery.parseJSON(data);
        // jQuery.each( json, function( key, value ) {
        //   if (bla == value) {
        //     console.log(key + ": " + value);
        //   }
        // });
        console.log(data);
      });
    });

    </script>


  </body>
</html>
