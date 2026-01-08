<!-- START POPUP MODAL -->
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

   .modal {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(20px);
   }

   .balti_popup {
      width: 500px;
      border-radius: 15px;
      padding: 50px;
      background: linear-gradient(202deg, rgba(0, 204, 203, 1) 0%, rgba(83, 60, 145, 1) 100%);
      box-shadow: inset -5px -5px 5px rgba(0, 0, 0, 0.5);
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
   }

   .balti_popup .inner_popup {
      width: 100%;
   }

   .balti_popup h3 {
      font-size: 30px;
      line-height: 30px;
      text-transform: uppercase;
      color: var(--light-color);
      font-weight: bold;
      margin-bottom: 0;
   }

   .balti_popup p {
      font-size: 14px;
      font-weight: var(--font-400);
      color: var(--light-color);
      margin: 10px 0 0;
   }

   .balti_popup input,
   .balti_popup textarea {
      background: rgba(255, 255, 255, .2);
      padding: 10px 10px 10px 15px;
      width: 100%;
      border-radius: 8px;
      font-size: 14px;
      font-weight: var(--font-400);
      color: var(--light-color);
      box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
      outline: none 0px !important;
      margin-top: 15px;
   }

   .balti_popup textarea {
      height: 120px;
      resize: none;
   }

   .balti_popup input::placeholder,
   .balti_popup textarea::placeholder {
      color: var(--light-color);
   }

   .balti_popup input:focus,
   .balti_popup textarea:focus {
      border: 1px solid var(--light-color);
   }

   .balti_popup .btn-1 {
      display: block;
   }

   .balti_popup .fancybox-close-small {
      width: 40px;
      height: 40px;
      border-radius: 50px;
      background: #07c2c7;
      box-shadow: inset -3px 0px 4px rgba(0, 0, 0, 0.5);
      outline: none !important;
      position: absolute;
      right: -10px;
      top: -10px;
      overflow: visible;
      z-index: 10;
   }

   .balti_popup .fancybox-close-small:after {
      content: "X";
      color: var(--light-color);
      font-family: var(--font-base-2);
      font-size: 25px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      transition: .1s linear;
   }

   .modal-backdrop {
      display: none !important;
   }

   @media screen and (max-width: 991px) {
      .balti_popup {
         padding: 30px;
      }

      .balti_popup h3 {
         font-size: 25px;
         margin-bottom: 10px;
      }
   }

   @media screen and (max-width: 767px) {
      .balti_popup {
         width: 450px;
      }

      .balti_popup textarea {
         height: 85px;
      }
   }

   @media screen and (max-width: 575px) {
      .balti_popup {
         width: 300px;
      }

          .balti_popup h3 {
        font-size: 20px;
        margin-bottom: 0;
    }
   }
</style>
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="balti_popup" id="balti_popup">
      <div class="inner_popup">
         <h3>Your Book <br> Deserves Attention</h3>
         <p>Fill Out the Form to Begin Your Book Marketing Journey.</p>
         <form action="mail" method="post" class="validate-balti_popup">
            <div class="row">
               <div class="col-md-12">
                  <input type="text" placeholder="Full Name *" name="n" required="required">
               </div>
               <div class="col-md-12">
                  <input type="email" placeholder="Email Address *" name="e" required="required">
               </div>
               <div class="col-md-12">
                  <input type="tel" placeholder="Phone No. *" name="p" required="required">
               </div>
               <div class="col-md-12">
                  <textarea name="m"
                     placeholder="To help us understand better enter a brief description of your project."></textarea>
               </div>
               <div class="col-md-12">
                  <input class="btn btn-1" type="submit" value="Submit Now!">
                  <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                  <input type="hidden" name="ip2loc_ip" value="">
                  <input type="hidden" name="ip2loc_isp" value="">
                  <input type="hidden" name="ip2loc_org" value="">
                  <input type="hidden" name="ip2loc_country" value="">
                  <input type="hidden" name="ip2loc_region" value="">
                  <input type="hidden" name="ip2loc_city" value="">
               </div>
            </div>
         </form>
      </div>
      <button data-fancybox-close="" class="fancybox-close-small close"></button>
   </div>
</div>
<script type="text/javascript">
   $(".close").click(function () {
      $(".modal").hide()
   })

   $(".popup-btn").click(function () {
      $(".modal").show()
   })

   setTimeout(function () {
      $(".modal").show()
   }, 5000);
</script>
<!-- END POPUP MODAL -->