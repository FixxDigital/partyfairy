   <footer class="pf-footer">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-9">
          <div class="pf-footer--left">
            <div class="row m-b-25">



              <?php $footer_menu = get_field('footer_menu', 'option'); 
              if ($footer_menu){
                foreach ($footer_menu as $key => $value) {

                  ?>
                  <div class="col-lg-3">
                    <div class="footer--title">
                      <img src="<?php echo  $value['menu_icon'] ?>" style="margin-right: 5px;width: 30px;height: 30px;">
                      <?php echo  $value['menu_title'] ?>
                    </div>
                    <ul class="footer--list">
                      <?php if($value['sub_menu']) { 

                        foreach ($value['sub_menu'] as $sub_key => $sub_value) {

                          ?>
                          
                          <li><a rel="nofollow" href="<?php echo $sub_value['sub_menu_link'] ?>" <?php if($sub_value['open_new_tab'] =='y') { echo 'target="_blank"'; } ?>><?php echo $sub_value['title_sub_menu'] ?></a></li>
                          
                        <?php }
                      } ?>
                    </ul>
                  </div>

                <?php }  } ?>   
              </div>
              <div class="row">
                <div class="col-lg-4 m-b-10">
                  <div class="footer-btm-title">
                    <h6 class="font-12"><?php the_field('about_as_title', 'option'); ?></h6>
                    <?php the_field('about_as_description', 'option'); ?>
                  </div>
                </div>
                <div class="col-lg-4 m-b-10"> 
                  <div class="footer-btm-title">
                    <h6 class="font-12"><?php the_field('payment_partner_title', 'option'); ?></h6>

                    <?php $payment = get_field('payment_partner_icon', 'option'); 

                    if($payment) {

                      foreach ($payment as $key => $value) {

                        ?>

                        <img src="<?php echo $value['icon']?>" width="55" height="45">

                        <?php

                      }

                    }

                    ?>
                  </div>
                </div>
                <div class="col-lg-4 m-b-10">
                  <div class="footer-btm-title">
                    <h6 class="font-12"><?php the_field('security_certification_title', 'option'); ?></h6>

                    <?php $secure = get_field('security_certification', 'option'); 

                    if($secure) {

                      foreach ($secure as $key => $value) {

                        ?>

                        <img src="<?php echo $value['icon']?>">

                        <?php

                      }

                    }

                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="pf-footer--right">
              <div class="newsletter-wrap">
                <div class="newsletter-wrap--head">
                  <div class="newsletter-wrap--head--img"><xml version="1.0" encoding="UTF-8" standalone="no">
                   <?php $img_news_letter = get_field('footer_logo', 'option'); 
                   if($img_news_letter){
                     ?>
                     <img src="<?php echo $img_news_letter; ?>" width="75" height="75">
                   <?php } ?>
                 </div>
                 <div class="newsletter-wrap--head--text">
                  <h5 class="word"><?php the_field('title_subcribe', 'option'); ?></h5>
                  <p class="word-sub font-normal"><?php the_field('description_subcribe', 'option'); ?></p>
                </div>
              </div>
              <div class="newsletter-wrap--body">

               <?php the_field('subcribe_form', 'option'); ?>

             </div>
             <div class="newsletter-wrap--footer">
              <p><?php the_field('copyright', 'option'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>
<!-- 
  <div id="sticky"><strong>LOOKING FOR SOMETHING?</strong> <br /> The site is down for planned maintenance but you'll be able to ring/drop her a message at +65 9896 4800, or email us at <a href="mailto:customercare@partyfairy.com">customercare@partyfairy.com</a></div> -->



  <?php wp_footer() ?>


<!-- 
<script type='text/javascript'>
  (function (d, t) {
   var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
   bh.type = 'text/javascript';
   bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=6vzwfwgixhugqlt7qxkasg';
   s.parentNode.insertBefore(bh, s);
 })(document, 'script');
</script> -->

<?php if(is_singular('product')) { ?>
  <script type="text/javascript">

    <?php 
    $block_date_pickup = get_field('block_date_pickup', get_option('page_for_posts')); ?>


    <?php if($block_date_pickup) { ?>

      var disabledDatesPickup = [<?php foreach ($block_date_pickup as $key => $value) {
        echo '"'.$value['date_pickup'].'",';
      } ?>];


    <?php } ?> 


    $(function() {
      $("#datepickerpickup").datepicker({
        <?php if($block_date_pickup) { ?>

          beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            return [ disabledDatesPickup.indexOf(string) == -1 ]
          },

        <?php } ?>

        minDate: 0,
        dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
        todayHighlight: !1,
        onSelect: function(e, i) {
          $("#calendarValuepickup").val(e)
        }
      })

    })


    <?php 
    $block_date_delivery = get_field('block_date_delivery', get_option('page_for_posts')); ?>

    <?php if($block_date_delivery) { ?>

      var disabledDatesDelivery = [
      <?php foreach ($block_date_delivery as $key => $value) {
        echo '"'.$value['date_delivery'].'",';
      } ?>];

    <?php }  ?>

    $(function() {

      $('#datepickerdelivery').datepicker({
        <?php if($block_date_delivery) { ?>
          beforeShowDay: function(date){
            var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            return [ disabledDatesDelivery.indexOf(string) == -1 ]
          },
        <?php } ?>

        minDate: 0,
        dayNamesMin: ["S", "M", "T", "W", "T", "F", "S"],
        todayHighlight: !1,
        onSelect: function(e, i) {
          $("#calendarValuedelivery").val(e)
        }

      });

    })


  </script>

<?php } ?>
	   
	   <script>
	   
// 	   setTimeout(function(){
//     var ccfiledform = $('#wc-stripe-cc-form');
//     var savePaymentMethold = $('.woocommerce-SavedPaymentMethods-saveNew');
//     $('input:radio[name="wc-stripe-payment-token"]').change(function(){
//         if ($('#wc-stripe-payment-token-new').is(':checked')) {
//             ccfiledform.show();
//             savePaymentMethold.show();
//         }else{
//             ccfiledform.hide();
//             savePaymentMethold.hide();
//         }
//     });
// }, 333);
// 	   
 	    	    	   </script>
</body>
</html>