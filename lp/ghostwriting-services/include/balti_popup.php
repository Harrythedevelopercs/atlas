<!-- START POPUP MODAL -->
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

   .modal {
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(20px);
   }

   .balti_popup {
      width: 1050px;
      border-radius: 0;
      padding: 30px 50px 50px;
      background: url("assets/images/popup/form-bg.webp");
      background-size: cover;
      font-family: 'Poppins', sans-serif !important;
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
   }

   .balti_popup::before {
      content: "";
      width: 520px;
      height: 520px;
      background: #ff0000;
      border-radius: 50%;
      box-shadow: 0 0 85px 4px #fd2031;
      position: absolute;
      left: 40px;
      bottom: 0;
   }

   .balti_popup::after {
      content: "";
      width: 520px;
      height: 520px;
      background: url("assets/images/popup/form-af.webp");
      background-size: contain;
      filter: drop-shadow(2px 4px 6px #fd2031);
      transform: scale(1);
      position: absolute;
      left: 40px;
      bottom: 0;
      animation: balti_animation 1s linear infinite;
   }

   @keyframes balti_animation {
      0% {
         transform: scale(1);
         filter: drop-shadow(2px 4px 6px #fd2031);
      }

      50% {
         transform: scale(1.015);
         filter: unset;
      }

      100% {
         transform: scale(1);
         filter: drop-shadow(2px 4px 6px #fd2031);
      }
   }

   .balti_popup .inner_popup {
      width: 35%;
      margin: 0 0 0 auto;
   }

   .balti_popup h3 {
      font-size: 35px;
      color: #fff;
      font-weight: bold;
      margin-bottom: 30px;
   }

   .balti_popup ul {
      margin: 0;
      padding: 0;
   }

   .balti_popup ul li {
      text-align: left;
      position: relative;
      width: 100%;
      margin: 10px 0px;
      display: inline-block;
   }

   .balti_popup ul li input,
   .balti_popup ul li textarea {
      background: rgba(255, 255, 255, .2);
      border: 1px solid #fd20327e;
      padding: 10px 10px 10px 15px;
      width: 100%;
      border-radius: 0;
      font-weight: 300;
      font-size: 14px;
      color: #fff;
      box-shadow: none !important;
      outline: none 0px !important;
   }

   .balti_popup ul li textarea {
      height: 120px;
   }

   .balti_popup ul li input::placeholder,
   .balti_popup ul li textarea::placeholder {
      color: #fff;
   }

   .balti_popup ul li input:focus,
   .balti_popup ul li textarea:focus {
      border: 1px solid #fd2031;
   }

   .balti_popup .pd-right-0 {
      padding-right: 0px !important;
   }

   .balti_popup ul li .btn-1 {
      display: block;
   }

   .balti_popup ul li .btn-1 span {
      background: #ff0000;
      text-transform: uppercase;
      font-weight: 600;
      cursor: pointer;
      display: block;
      width: 100%;
   }

   .balti_popup .fancybox-close-small {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .2);
      border: 0;
      box-shadow: #000 0 0 10px;
      padding: 0;
      margin: 0;
      outline: none !important;
      position: absolute;
      right: -14px;
      top: -13px;
      overflow: visible;
      z-index: 10;
   }

   .balti_popup .fancybox-close-small:hover {
      background-color: #fd2031;
      z-index: 11;
   }

   .balti_popup .fancybox-close-small:after {
      content: "\f00d";
      font-family: "Font Awesome 6 free";
      color: #fff;
      font-size: 25px;
      font-weight: bold;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      transition: .1s linear;
   }

   .balti_popup .fancybox-close-small:hover:after {
      color: white;
   }

   .balti_popup button:focus {
      outline: 1px dotted;
      outline: 5px auto -webkit-focus-ring-color;
   }

   @media screen and (max-width: 1440px) {
      .balti_popup {
         width: 1000px;
         padding: 30px 30px 30px;
      }

      .balti_popup::before {
         width: 480px;
         height: 480px;
         bottom: 10px;
      }

      .balti_popup::after {
         width: 490px;
         height: 490px;
      }

      .balti_popup .inner_popup {
         width: 38%;
      }
   }

   @media screen and (max-width: 1199px) {
      .balti_popup {
         width: 910px;
         padding: 30px 30px 30px;
      }

      .balti_popup::before {
         width: 470px;
         height: 470px;
         bottom: 20px;
      }

      .balti_popup::after {
         width: 480px;
         height: 480px;
      }
   }

   @media screen and (max-width: 991px) {
      .balti_popup h3 {
         font-size: 25px;
         margin-bottom: 10px;
      }

      .balti_popup::after,
      .balti_popup::before {
         width: 370px;
         height: 370px;
         bottom: 50px;
      }

      .balti_popup ul li input,
      .balti_popup ul li textarea {
         font-size: 12px;
      }

      .balti_popup {
         width: 700px;
         padding: 20px 20px 20px;
      }
   }

   @media screen and (max-width: 767px) {
      .balti_popup ul li textarea {
         height: 85px;
      }

      .balti_popup {
         width: 500px;
         padding: 1rem;
      }

      .balti_popup::after,
      .balti_popup::before {
         width: 250px;
         height: 250px;
         bottom: 80px;
         left: 20px;
      }

      .balti_popup .inner_popup {
         width: 44%;
      }

      .balti_popup h3 {
         font-size: 18px;
         margin-bottom: 10px;
      }

      .balti_popup .fancybox-close-small {
         width: 34px;
         height: 34px;
      }

      .balti_popup .fancybox-close-small:after {
         font-size: 20px;
      }
   }

   @media screen and (max-width: 535px) {

      .balti_popup::after,
      .balti_popup::before {
         display: none;
      }

      .balti_popup {
         width: 90%;
         padding: 2rem 1rem 1rem;
         background-position: right;
         border-radius: 20px;
      }

      .balti_popup .inner_popup {
         width: 95%;
         margin: 0 auto;
      }

      .balti_popup .fancybox-close-small {
         right: -4px;
         top: -13px;
      }
   }

   .modal-backdrop {
      display: none !important;
   }
</style>
<div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
   aria-hidden="true">
   <div class="balti_popup" id="balti_popup">
      <div class="inner_popup">
         <h3>Let's Work Together</h3>
         <form action="mail.php" method="post" class="validate-balti_popup">
            <div class="row">
               <div class="col-md-12">
                  <ul>
                     <li>
                        <input type="text" placeholder="Full Name *" name="n" required="required">
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li>
                        <input type="email" placeholder="Email Address *" name="e" required="required">
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li>
                        <input type="number" placeholder="Phone No. *" name="p" required="required">
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li>
                        <textarea name="m"
                           placeholder="To help us understand better enter a brief description of your project."></textarea>
                     </li>
                  </ul>
               </div>
               <div class="col-md-12">
                  <ul>
                     <li>
                        <button class="btn btn-1" type="submit">
                           <span>Send</span>
                           <span>Submit Now!</span>
                        </button>
                        <input type="hidden" class="lead_area_popup leadprice" name="lead_area" value="" />
                        <input type="hidden" id="lead_org_price" name="lead_org_price" value="" />
                        <input type="hidden" name="send" value="">
                        <input type="hidden" name="lb_source" value="">
                        <input type="hidden" name="lb_source_cat" value="">
                        <input type="hidden" name="lb_source_nam" value="">
                        <input type="hidden" name="lb_source_ema" value="">
                        <input type="hidden" name="lb_source_con" value="">
                        <input type="hidden" name="lb_source_pho" value="">
                        <input type="hidden" name="lb_source_off" value="">
                        <input type="hidden" name="fullpageurl" value="">
                        <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                        <input type="hidden" name="ip2loc_ip" value="">
                        <input type="hidden" name="ip2loc_isp" value="">
                        <input type="hidden" name="ip2loc_org" value="">
                        <input type="hidden" name="ip2loc_country" value="">
                        <input type="hidden" name="ip2loc_region" value="">
                        <input type="hidden" name="ip2loc_city" value="">
                        <input type="hidden" name="service_id" value="" class="">
                        <input type="hidden" name="loc" value="">
                        <input type="hidden" name="postal" value="">
                        <input type="hidden" name="timezone" value="">
                        <input type="hidden" name="service_id" value="" class="">
                        <input type="hidden" name="isp" value="">
                        <input type="hidden" name="org" value="">
                        <input type="hidden" name="country" value="">
                        <input type="hidden" name="region" value="">
                        <input type="hidden" name="city" value="">
                     </li>
                  </ul>
               </div>
            </div>
         </form>
      </div>
      <button data-fancybox-close="" class="fancybox-close-small close"></button>
   </div>
</div>
<!-- END POPUP MODAL -->