<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="assets/images/logo.png" alt="loading logo">
                <p>Atlas Publishing Group has brilliant writers to accommodate all genres, from fiction novels to
                    business books, memoirs to self-help guides. We also provide turnkey publishing services for
                    authors globally.
                    <br><br>
                    <a href="https://www.atlaspublishinggroup.com/privacy-policy">Privacy Policy</a>
                </p>
            </div>

            <div class="col-md-7 text-right">
                <ul>
                    <li class="first">
                        <i class="fa fa-phone" aria-hidden="true"></i> <?php echo $phone;?>
                    </li>
                    <li class="last">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>Atlas Publishing Group. All Rights Reserved. </p>
            <i class="top-scroll"><img src="assets/images/top-scroll.png" alt="loading image..."></i>
        </div>
    </div>
</footer>

<style>
    @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Oswald:wght@200..700&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


    .popupform.thanksopop {
        padding: 30px 40px 50px 40px;
        border: none;
        width: 100%;
        max-width: 950px;
        overflow: unset;
        position: relative;
        background: url(assets/images/pop-chris-05-85.webp) no-repeat scroll center top;
    }

    .popupform.thanksopop h2:before,
    .popupform.thanksopop h2:after {
        display: none;
    }

    .hallow-ico {
        position: absolute;
        left: -30px;
        top: 34%;
    }

    .popupform.thanksopop .fancybox-close-small {
        border: none;
        background: red;
        color: #fff;
        right: -10px;
        top: -10px;
    }

    .popupform.thanksopop .form-control {
        height: 46px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .popupform.thanksopop textarea.form-control {
        height: 80px;
    }

    .popupform.thanksopop button.btn.btn-blue {
        background: #2d2d2d;
        display: block;
        width: 100%;
        border-radius: 5px;
        color: #fff !important;
        font-weight: 500;
        border: #2d2d2d;
        font-size: 18px;
        letter-spacing: normal;
        padding: 12px;
        text-transform: uppercase;
        /* line-height: 30px; */
    }

    .popupform.thanksopop button.btn.btn-blue:hover,
    .popupform.thanksopop button.btn.btn-blue:focus,
    .popupform.thanksopop button.btn.btn-blue:active {
        background: #000;
        border-color: #000;
        color: #fff !important;
    }

    .popupform.thanksopop ul li.last {
        margin-bottom: 0;
    }

    .popupform ul li input[type="text"],
    .popupform ul li input[type="email"],
    .popupform ul li textarea {
        background: #fafafa;
        border: #dcdcdc 1px solid;
        padding: 10px;
        width: 100%;
        border-radius: 3px;
        color: #000;
        box-shadow: none !important;
        outline: none 0px !important;
        font-size: 14px;
    }

    .popupform.thanksopop ul li {
        width: 100%;
        margin-right: 0;
        margin-bottom: 10px;
        margin-left: 0 !important;
    }

    .popupform.thanksopop h2 {
        text-align: center;
        font-family: "Oswald", serif;
        font-weight: 500;
        font-size: 26px;
        text-transform: uppercase;
        line-height: 30px;
        padding: 0;
        border: none;
        /* letter-spacing: -0.5px; */
        color: #000000;
        margin: 0 auto 10px;
        display: table;
        padding-bottom: 6px;
        background: url(assets/images/pop-4-bar.png) no-repeat scroll center bottom;
    }

    .popupform.thanksopop h3 {
        font-weight: 500;
        text-align: center;
        font-family: "Oswald", serif;
        font-size: 22px;
        margin: 0 auto;
        float: none;
        width: auto;
        display: table;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #000;
    }

    .popupform.thanksopop h4 {
        font-weight: 500;
        color: #fff;
        text-align: center;
        font-family: "Oswald", serif;
        font-size: 26px;
        /* padding: 2px 9px; */
        margin: -5px auto 0;
        float: none;
        width: auto;
        text-transform: uppercase;
        letter-spacing: 1px;
        position: relative;
        z-index: 1;
        position: relative;
    }

    .popupform.thanksopop h4:before {
        content: "";
        position: absolute;
        left: 0;
        width: 100%;
        height: 2px;
        background: #f8bf08;
        top: 50%;
        z-index: 0;
    }

    .popupform.thanksopop h4 strong {
        background: url(assets/images/pop-4-shape.png) no-repeat scroll center bottom;
        padding: 21px 0 20px 0;
        display: block;
        z-index: 1;
        position: relative;
    }

    .popupform.thanksopop h2 b {
        display: block;
    }

    .popupform.thanksopop h3 span {
        vertical-align: baseline;
        font-weight: 700;
        color: #e33732;
    }

    .popupform.thanksopop form ul {
        padding: 0 25px;
        width: 100%;
    }

    .popupform.thanksopop form ul.yellobar {
        background: #f8bf08;
        width: 96%;
        margin: 0 auto 10px;
        border-radius: 10px 10px 30px 20px;
        padding: 20px 30px 13px 30px;
    }

    .popupform.thanksopop .popup-content {
        padding: 0;
        margin: 0;
        max-width: 100%;
    }

    .popupform.thanksopop form {
        padding: 0;
        width: 100%;
        margin-top: 0;
    }

    .popupform.thanksopop p {
        color: #000;
        text-align: center;
        font-family: 'IBM Plex Serif';
        font-size: 17px;
        line-height: 22px;
        margin-top: 0;
    }

    .popupform.thanksopop li i.fa {
        display: none;
    }

    .popupform ul li {
        margin-top: 0;
    }

    .popupform.thanksopop ul li textarea {
        height: 90px;
    }

    .popupform.thanksopop .cst-pop {
        background: #f3ece2;
        border: none;
        width: 100%;
        max-width: 400px;
        position: relative;
        border-radius: 30px;
        overflow: hidden;
        right: 30px;
        margin: 0 auto;
        float: none;
        padding-top: 20px;
    }

    img.hallow-mob-ico {
        position: absolute;
        left: -20px;
        top: -40px;
        z-index: 1;
        display: none
    }

    .popupform.thanksopop h2 strong {
        color: #fff10f;
        font-size: inherit;
        vertical-align: baseline;
        text-transform: uppercase;
    }


    .popupform.thanksopop .fancybox-close-small {
        border: none;
        background: red;
        color: #fff;
        right: -330px;
        left: 0;
        top: 15px;
        margin: auto;
    }

    .popupform .fancybox-close-small:after {
        color: #fff;
        top: 0;
        left: 0;
        font-size: 22px;
        font-weight: 600;
        line-height: 22px;
        width: auto;
        height: auto;
        right: 0;
        bottom: 0;
        margin: auto;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    @media only screen and (max-width:850px) {

        .popupform.thanksopop {
            max-width: 90%;
            transform: none;
            padding: 0;
            background: transparent;
        }

        .popupform.thanksopop .cst-pop {
            left: 0;
            margin: 0;
            padding-top: 10px;
        }

        .popupform.thanksopop h2 {
            font-size: 22px;
        }

        .popupform.thanksopop h3 {
            font-size: 14px;
        }

        .popupform.thanksopop .fancybox-close-small {
            right: -10px;
            top: -20px;
            left: initial;
        }

        img.hallow-ico {
            display: none;
        }

        img.hallow-mob-ico {
            display: block;
        }

        .popupform ul li input[type="text"],
        .popupform ul li input[type="email"],
        .popupform ul li textarea {
            font-size: 13px;
        }

        .cst-pop-img {
            display: none;
        }

        .popupform.thanksopop br {
            display: none;
        }

    }
</style>

<div style="display: none;" class="popupform thanksopop" id="popupform">
    <img class="hallow-ico" src="assets/images/pop-4-70.html" alt="" />
    <div class="cst-pop-cov">
        <div class="cst-pop">
            <h2>Turn your author <br>
                <b>dreams into reality</b></h2>
            <h3>Don’t wait! Our <br> <span>Christmas sale</span> is here with</h3>
            <h4><strong>85% Off everything</strong></h4>
            <form action="mail" method="post" class="validate-popupform">
                <ul>
                    <li class="first">
                        <input type="text" class="required" required="" placeholder="Full Name *" name="name"
                            aria-required="true">
                    </li>
                    <li>
                        <input type="email" class="required email" required="" placeholder="Email Address *"
                            name="email" aria-required="true">
                    </li>
                    <li>
                        <input type="text" class="required number" minlength="10" required="" placeholder="Phone No. *"
                            name="phone" aria-required="true">
                    </li>
                    <li>
                        <textarea name="msg" class="required" required=""
                            placeholder="Enter a brief description about your book" aria-required="true"></textarea>
                    </li>
                </ul>
                <ul class="yellobar">
                    <li class="last">
                        <button class="btn btn-blue" type="submit" value="Submit">Submit Now</button>
                        <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                        <input type="hidden" name="ip2loc_ip" value="">
                        <input type="hidden" name="ip2loc_isp" value="">
                        <input type="hidden" name="ip2loc_org" value="">
                        <input type="hidden" name="ip2loc_country" value="">
                        <input type="hidden" name="ip2loc_region" value="">
                        <input type="hidden" name="ip2loc_city" value="">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
<a href="javascript:;" data-fancybox="" data-src="#autopopup" id="triggerClick"></a>
<div style="display: none;" class="popupform thanksopop" id="autopopup">
    <img class="hallow-ico" src="../assets/images/pop-4-70.html" alt="" />
    <div class="cst-pop-cov">
        <div class="cst-pop">
            <h2>Turn your author <br>
                <b>dreams into reality</b></h2>
            <h3>Don’t wait! Our <br> <span>Christmas sale</span> is here with</h3>
            <h4><strong>85% Off everything</strong></h4>
            <form action="mail" method="post" class="validate-apopupform">
                <ul>
                    <li class="first">
                        <input type="text" class="required" required="" placeholder="Full Name *" name="name"
                            aria-required="true">
                    </li>
                    <li>
                        <input type="email" class="required email" required="" placeholder="Email Address *"
                            name="email" aria-required="true">
                    </li>
                    <li>
                        <input type="text" class="required number" minlength="10" required="" placeholder="Phone No. *"
                            name="phone" aria-required="true">
                    </li>
                    <li>
                        <textarea name="msg" class="required" required=""
                            placeholder="Enter a brief description about your book" aria-required="true"></textarea>
                    </li>
                </ul>
                <ul class="yellobar">
                    <li class="last">
                        <button class="btn btn-blue" type="submit" value="Submit">Submit Now</button>
                        <input type="hidden" name="pageurl" value="<?php echo $actual_link;?>">
                        <input type="hidden" name="ip2loc_ip" value="">
                        <input type="hidden" name="ip2loc_isp" value="">
                        <input type="hidden" name="ip2loc_org" value="">
                        <input type="hidden" name="ip2loc_country" value="">
                        <input type="hidden" name="ip2loc_region" value="">
                        <input type="hidden" name="ip2loc_city" value="">
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<style>
    /*@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
 
.popupform.christopop {  
    padding:30px 40px 120px 40px; 
    border: none;
    width: 100%;
    max-width: 905px;
    overflow: unset;
    position: relative;
    background: url(assets/images/christ-bg.png) no-repeat scroll center top !important;
    margin: 0;
    transform: scale(0.9);       
}   
 
img.christ-offer {  
    position: absolute;
    left: -29px;
    top: 55px;
}

img.christ-log {
    margin: 0 auto;
    display: table;
}

.popupform.christopop  .fancybox-close-small {
    border: none;
    background: url(assets/images/cancel.png) no-repeat scroll center top !important;
    color: #fff;
    right: 10px;
    top: 40px;
    height: 36px;
    width: 36px;
    box-shadow: none; 
}

.popupform.christopop .form-control {
    height: 46px;
    font-size: 14px;
    margin-bottom: 10px; 
}

.popupform.christopop textarea.form-control {
    height: 80px;
}
 
.popupform.christopop button.btn.btn-blue {    
    background: #fabc48;
    display: block;
    width: 100%;
    border-radius: 5px;
    color: #000 !important;
    font-weight: 600;
    border: #fabc48;
    font-size: 18px;
    letter-spacing: normal;
    padding: 12px;
    text-transform: uppercase; 
}

.popupform.christopop button.btn.btn-blue:hover , .popupform.christopop button.btn.btn-blue:focus , .popupform.christopop button.btn.btn-blue:active {
    background: #000;
    border-color: #000;
    color: #fff !important;
}    

.popupform.christopop ul li.last {
    margin-bottom: 0;
}

.popupform ul li input[type="text"], .popupform ul li input[type="email"], .popupform ul li textarea {
    background: #fafafa;
    border: #dcdcdc 1px solid;
    padding: 10px;
    width: 100%;
    border-radius: 3px;
    color: #000;  
    box-shadow: none !important;
    outline: none 0px !important;
    font-size: 14px;
} 
  
.popupform.christopop ul li {
    width: 100%;
    margin-right: 0;
    margin-bottom: 10px;
    margin-left: 0 !important;
}

.popupform.christopop h2 {
    text-align: center;
    text-transform: uppercase;
    padding: 0;
    border: none;
    font-family: "Inter", sans-serif;
    font-weight: normal;
}
 
.popupform.christopop h2 span{
    font-size: 16px;
    font-weight: 600;
}  

.popupform.christopop h2 b {
    text-transform: uppercase;
    display: block;
    font-size: 37px;
}

.popupform.christopop form ul {
    padding: 0 25px;
    width: 100%;
} 

.popupform.christopop  .popup-content {      
    padding: 0;
    margin: 0;
    max-width: 100%;
}
.popupform.christopop form {
    padding: 0;
    width: 100%;
    margin-top: 0;
}

.popupform.christopop p {
    color: #000;
    text-align: center; 
    font-size: 17px;
    line-height: 22px;  
    margin-top: 0;
}   

.popupform.christopop li i.fa {
    display: none;
}

.popupform ul li {
    margin-top: 0;
}

.popupform.christopop ul li textarea {
    height: 90px;
}

.popupform.christopop .cst-pop {
    border: none;
    width: 100%;
    max-width: 395px;
    position: relative;
    overflow: hidden;
    left: 5px;
    margin: 0 auto;
    float: none;
}
   
.popupform.christopop .cst-pop h4 { 
    background: linear-gradient(to bottom, rgba(203, 15, 15, 1) 0%, rgba(117, 0, 0, 1) 100%);
    text-align: center;
    color: #fff;
    font-size: 1.7rem;
    text-transform: uppercase;
    padding: 8px 0;
}
 
.popupform.christopop .fancybox-close-small:after{
    display:none; 
}  

.popupform.christopop .cst-pop h4:before , .popupform.christopop .cst-pop h4:after {
    content: "";
    width: 10px;
    height: 10px;
    background: #f3ece2;
    position: absolute;
    left: 10px;
    border-radius: 50%;
    margin-top: 3px;
}

.popupform.christopop .cst-pop h4:after {
    right: 10px;
    left: auto;
}      
 
 
@media only screen and (max-width:850px ){

.popupform.christopop {  max-width: 90%;        transform: none;        padding: 0;        background: #f3ece2 !important;       }           

.popupform.christopop::before {    display: none;   }   
 
.popupform.christopop .cst-pop {            left: 0;            margin: 0;        padding: 10px 0;  }         

.popupform.christopop h2 {      padding: 0;        line-height: normal;   }   

.popupform.christopop h2 b {    font-size: 30px;    }

.popupform.christopop h2 span {    font-size: 14px;     }

img.christ-offer {    max-width: 43px;    top: -33px;    left: -3px;    z-index: 1;     clip-path: circle(60% at 51% 82%);      }   

img.christ-log {    max-width: 150px;   }  
  
.popupform.christopop .fancybox-close-small {    right: -15px;    top: -10px;  left: initial;    } 
 
.popupform ul li input[type="text"], .popupform ul li input[type="email"], .popupform ul li textarea {    font-size: 13px;    }
 
.popupform.christopop br {    display: none;    }   

}    */
</style>
<!--
<div style="display: none;" class="popupform christopop" id="popupform"> 
    <img class="christ-offer" src="assets/images/christ-offer-85.png" alt=""> 
    <div class="cst-pop-cov">    
    <div class="cst-pop">
    <img class="christ-log" src="assets/images/christ-logo.png" alt="">
    <h4>Activate Your Book Writing Coupon</h4>    
    <h2><b>Sign up now and </b> <span>Limited-time Deal: Publish Your Book</span></h2>  
    <form action="/order/mail" method="post" class="validate-popupform">
       <ul class="yellobar">
        <li class="first"> <input type="text" class="required" required="" placeholder="Full Name *" name="cn" aria-required="true"></li>
        <li><input type="email" class="required email" required="" placeholder="Email Address *" name="em" aria-required="true"></li>
        <li><input type="text" class="required number" minlength="10" required="" placeholder="Phone No. *" name="pn" aria-required="true"></li>
        <li><textarea name="msg" class="required" required="" placeholder="Enter a brief description about your book" aria-required="true"></textarea></li>
        <li class="last"><button class="btn btn-blue" type="submit" value="Submit">Submit Now</button>  
        <input type="hidden" name="send" value="1" />
        <input type="hidden" name="nosc" value="1">
        <input type="hidden" name="lead_area" value="" class="leadprice" />
          
        </li>
    </ul>
    </form>
    </div>
    </div>
</div> 
<a href="javascript:;" data-fancybox="" data-src="#autopopup" id="triggerClick"></a> 
<div style="display: none;" class="popupform christopop" id="autopopup"> 
    <img class="christ-offer" src="assets/images/christ-offer-85.png" alt=""> 
    <div class="cst-pop-cov">    
    <div class="cst-pop">
    <img class="christ-log" src="assets/images/christ-logo.png" alt="">
    <h4>Activate Your Book Writing Coupon</h4>    
    <h2><b>Sign up now and </b> <span>Limited-time Deal: Publish Your Book</span></h2>  
    <ul class="yellobar">
        <li class="first"> <input type="text" class="required" required="" placeholder="Full Name *" name="cn" aria-required="true"></li>
        <li>  <input type="email" class="required email" required="" placeholder="Email Address *" name="em" aria-required="true"></li>
        <li> <input type="text" class="required number" minlength="10" required="" placeholder="Phone No. *" name="pn" aria-required="true"></li>
        <li> <textarea name="msg" class="required" required="" placeholder="Enter a brief description about your book" aria-required="true"></textarea></li>
        <li class="last"><button class="btn btn-blue" type="submit" value="Submit">Submit Now</button>  
        <input type="hidden" name="send" value="1" />
        <input type="hidden" name="nosc" value="1">
        <input type="hidden" name="lead_area" value="" class="leadprice" />
          
        </li>
    </ul>
    </form>
    </div>
</div>
</div>
-->
<!--<div class="whatsapp-widget chat" style="display:none;">-->
<!--    <i class="fa fa-whatsapp"></i>-->
<!--    <span>Chat with us on WhatsApp</span>-->
<!--</div>-->