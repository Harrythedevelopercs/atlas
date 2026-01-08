<!doctype html>
<html lang="en">

<head>
   <?php include 'include/style.php'; ?>
   <title>Thank You | Atlas Publishing Group</title>
   <meta name="description"
      content="Thank you for contacting Atlas Publishing Group. Our team has received your request and will be in touch with you shortly.">

   <style>
      .main-content {
         height: 100vh;
         background: url(assets/images/banner.jpg);
         background-size: cover;
         background-position: center;
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         gap: 40px;
      }

      .main-content h1 {
         font-size: 80px;
         font-weight: bold;
         color: #fff;
      }

      .main-content p {
         color: #fff;
         font-size: 20px;
      }

      .main-content hr {
         width: 100%;
         color: #fff;
      }

      .main-content .combo_btn {
         display: flex;
         justify-content: center;
      }

      .main-content .combo_btn .common_btn {
         display: inline-block;
         width: 270px;
         text-align: center;
         margin: 29px 7px 0;
         /* background: #ec1200; */
         color: #fff;
         text-transform: uppercase;
         padding: 14px 10px;
         font-size: 17px;
         border-radius: 80px;
         margin-bottom: 23px;
         text-shadow: #000 0 1px 1px;
         font-weight: 500;
         background: #f9ab0e;
      }
   </style>
</head>

<body>
   <div class="main-content text-center">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12">
               <h1>THANK YOU!</h1>
               <p>
                  Thank you for reaching out to Atlas Publishing Group.
                  <br>
                  We’ve received your details, and one of our ghostwriting specialists will contact you shortly to
                  discuss your project.
               </p>
               <hr>
               <div class="combo_btn">
                  <a class="common_btn" href="/lp/ghostwriting-services" class="btn t-btn">Go To Home</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php include 'include/footer-script.php'; ?>
</body>

</html>