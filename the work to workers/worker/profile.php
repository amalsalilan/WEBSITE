<script>
function selectDistrict(state)
{
if(window.XMLHttpRequest)
{

obj=new XMLHttpRequest();
}
else
{
obj=new ActiveXobject("microsoft.XMLHttp");
}
obj.open("GET","../selectDistrict.php?state="+state,true);
obj.send();
obj.onreadystatechange=function()
{
if(obj.readyState==4&&obj.status==200)
{

var res=obj.responseText;
document.getElementById("district").innerHTML=res;
}
}

}
</script>
<?php
$conn=mysqli_connect("localhost","root","","work2work");
session_start();
$id=$_SESSION["id"];
$q="select * from worker where id='$id'";
$data=mysqli_query($conn,$q);
if($row = mysqli_fetch_array($data)){
?>
<!--<form action="editprofile.php"method="post" enctype="multipart/form-data" >-->
<!--name<input type="text"required pattern="[a-zA-Z\s]{2,20}" title="Only char allowed" name="name" value="--><?php //echo $row[1];?><!--"><br />-->
<!--age<input type="number"name="age" value="--><?php //echo $row[2];?><!--"><br />-->
<!--gender m <input type="radio" --><?php //if($row[3]=="male"){ ?><!--checked="checked" --><?php //}?><!-- name="gender" value="male" />-->
<!--       f <input type="radio" name="gender" value="female" --><?php //if($row[3]=="female"){ ?><!--checked="checked" --><?php //}?><!-- /><br/>-->
<!--address<input  type="text" name="address"value="--><?php //echo $row[4];?><!--" /> <br />-->
<!--state<select name="state" onchange="selectDistrict(this.value)">-->
<!--       <option> select </option>-->
<!--	   --><?php
//	   $q1="select distinct state from district_tb";
//	   $data1=mysqli_query($conn,$q1);
//	   while($row1=mysqli_fetch_array($data1))
//	   {
//	   ?>
<!--	   <option --><?php //if($row[12]==$row1[0]){?><!-- selected="selected" --><?php //}?><!--> --><?php //echo $row1[0];
//	   ?>
<!--	   </option>-->
<!--	   --><?php
//	   }
//	   ?>
<!--	   </select><br />-->
<!--	   District<select name="district" id="district">-->
<!--       <option> select </option>-->
<!--	    --><?php
//	   $q1="select district from district_tb where state='$row[12]'";
//	   $data1=mysqli_query($conn,$q1);
//	   while($row1=mysqli_fetch_array($data1))
//	   {
//	   ?>
<!--	   <option --><?php //if($row[13]==$row1[0]){?><!-- selected="selected" --><?php //}?><!--> --><?php //echo $row1[0];
//	   ?>
<!--	   </option>-->
<!--	   --><?php
//	   }
//	   ?>
<!--	   </select>-->
<!--	   <br />-->
<!---->
<!--email<input  type="email"name="email"value="--><?php //echo $row[5];?><!--"  /><br />-->
<!--mobile<input  type="number"required pattern="[0-9]{10}"name="mobile"value="--><?php //echo $row[7];?><!--"  /><br />-->
<!--skill<input type="text"name="skill"value="--><?php //echo $row[8];?><!--"  /><br />-->
<!--experience<input type="text"name="exp"value="--><?php //echo $row[9];?><!--"  /><br />-->
<!--id_proof<input type="file"name="id_proof"value="--><?php //echo $row[10];?><!--"  /><br />-->
<!-- <input type="submit" value="update" />-->
<!--</form>-->
<?php
}
?>







<!DOCTYPE html>
<html lang="en">

<!-- checkout43:21-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Boldman &#8211; Handyman &amp; Renovation Services HTML Template" />

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Boldman &#8211; Handyman &amp; Renovation Services</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="css/animate.css"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="css/main.css"/>

    <!--Color Switcher Mockup-->
    <link rel="stylesheet" type="text/css" href="css/color-switcher.css" >

    <!--Color Themes-->
    <link id="switcher-color" href="css/colors/default-color.css" rel="stylesheet">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>

</head>

<body>

<!--page start-->
<div class="page">

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-classic">
        <!-- ttm-topbar-wrapper -->
        <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
            <div class="container">
                <div class="ttm-topbar-content">
                    <ul class="top-contact ttm-highlight-left text-left">
                        <li><i class="fa fa-phone"></i><strong>Client Services:</strong> <span class="tel-no"> 0 (143) 456 7897</span></li>
                    </ul>
                    <div class="topbar-right text-right">
                        <ul class="top-contact">
                            <li><i class="fa fa-envelope-o"></i><strong>Email: </strong><a href="mailto:info@example.com.com">info@example.com</a></li>
                        </ul>
                        <div class="ttm-social-links-wrapper list-inline">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ttm-topbar-wrapper end -->
        <!-- ttm-header-wrap -->
        <div class="ttm-header-wrap">
            <!-- ttm-stickable-header-w -->
            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                <div id="site-header-menu" class="site-header-menu">
                    <div class="site-header-menu-inner ttm-stickable-header">
                        <div class="container">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="index-2.html" title="Boldman" rel="home">
                                    <img id="logo-img" class="img-center" src="images/logo-img.png" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="header-btn">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" href="#">REQUEST QUOTE</a>
                                </div>
                                <!-- header-icins -->
                                <div class="ttm-header-icons ">
                                        <span class="ttm-header-icon ttm-header-cart-link">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>
                                                <span class="number-cart">0</span>
                                            </a>
                                        </span>
                                    <div class="ttm-header-icon ttm-header-search-link">
                                        <a href="#"><i class="ti ti-search"></i></a>
                                        <div class="ttm-search-overlay">
                                            <form method="get" class="ttm-site-searchform" action="#">
                                                <div class="w-search-form-h">
                                                    <div class="w-search-form-row">
                                                        <div class="w-search-input">
                                                            <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                            <button type="submit">
                                                                <i class="ti ti-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- header-icons end -->
                                <div class="ttm-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                        <li><a href="index-2.html">Home</a>
                                            <ul>
                                                <li><a href="index-2.html">Sample Homepage 1</a></li>
                                                <li><a href="home-2.html">Sample Homepage 2</a></li>
                                                <li><a href="home-3.html">Sample Homepage 3</a></li>
                                                <li><a href="home-4.html">Sample Homepage 4<span class="label-new">New</span></a></li>
                                                <li><a href="home-5.html">Sample Homepage 5<span class="label-new">New</span></a></li>
                                                <li><a href="home-onepage.html">Sample Homepage One<span class="label-new">New</span></a></li>
                                                <li><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li><a href="index-2.html">Header Classic</a></li>
                                                        <li><a target="_blank" href="header-overlay.html">Header Overlay</a></li>
                                                        <li><a target="_blank" href="header-infostack.html">Header Infostack</a></li>
                                                        <li><a target="_blank" href="header-stackcenter.html">Header Stack Center</a></li>
                                                        <li><a target="_blank" href="header-classic-info.html">Header Classic Info</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="active"><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="aboutus-1.html">About Us 1</a></li>
                                                <li><a href="aboutus-2.html">About Us 2</a></li>
                                                <li><a href="services-1.html">Service 1</a></li>
                                                <li><a href="services-2.html">Service 2</a></li>
                                                <li><a href="contact-us-1.html">Contact Us 1</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                                <li><a href="our-team.html">Our Team</a></li>
                                                <li class="active"><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="home-shop.html">Home Shop</a></li>
                                                        <li><a href="product-details.html">Single Product Details</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li class="active"><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="career.html">Carrer</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                                <li><a href="element.html">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Services</a>
                                            <ul>
                                                <li><a href="renovation-and-painting.html">Renovation And Painting</a></li>
                                                <li><a href="air-conditioner.html">Air Conditioner</a></li>
                                                <li><a href="home-maintainance.html">Home Maintainance</a></li>
                                                <li><a href="wiring-and-installation.html">Wiring And Installation</a></li>
                                                <li><a href="plumber-services.html">Plumber Services</a></li>
                                                <li><a href="painting-services.html">Painting Services</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="portfolio-style-1.html">Project Style 1</a></li>
                                                <li><a href="portfolio-style-2.html">Project Style 2</a></li>
                                                <li><a href="#">Project Single</a>
                                                    <ul>
                                                        <li><a href="single-style-1.html">Style One</a></li>
                                                        <li><a href="single-style-2.html">Style Two</a></li>
                                                        <li><a href="single-style-3.html">Style Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Classic</a></li>
                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                <li><a href="single-blog.html">Single Blog View</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div><!-- ttm-stickable-header-w end-->
        </div><!--ttm-header-wrap end -->
    </header><!--header end-->


    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">Update Profile</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index-2.html"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Update Profile</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

        <!-- checkout-section -->
        <section class="ttm-row checkout-section ttm-bgcolor-grey break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <form name="checkout" method="post" class="checkout row" action="#">
                            <div class="col-lg-6">
                                <div class="billing-fields">
                                    <h3>Billing details</h3>
                                    <form action="editprofile.php"method="post" enctype="multipart/form-data" >
                                        name<input type="text"required pattern="[a-zA-Z\s]{2,20}" title="Only char allowed" name="name" value="<?php echo $row[1];?>"><br />
                                        age<input type="number"name="age" value="<?php echo $row[2];?>"><br />
                                        gender m <input type="radio" <?php if($row[3]=="male"){ ?>checked="checked" <?php }?> name="gender" value="male" />
                                        f <input type="radio" name="gender" value="female" <?php if($row[3]=="female"){ ?>checked="checked" <?php }?> /><br/>
                                        address<input  type="text" name="address"value="<?php echo $row[4];?>" /> <br />
                                        state<select name="state" onchange="selectDistrict(this.value)">
                                            <option> select </option>
                                            <?php
                                            $q1="select distinct state from district_tb";
                                            $data1=mysqli_query($conn,$q1);
                                            while($row1=mysqli_fetch_array($data1))
                                            {
                                                ?>
                                                <option <?php if($row[12]==$row1[0]){?> selected="selected" <?php }?>> <?php echo $row1[0];
                                                    ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select><br />
                                        District<select name="district" id="district">
                                            <option> select </option>
                                            <?php
                                            $q1="select district from district_tb where state='$row[12]'";
                                            $data1=mysqli_query($conn,$q1);
                                            while($row1=mysqli_fetch_array($data1))
                                            {
                                                ?>
                                                <option <?php if($row[13]==$row1[0]){?> selected="selected" <?php }?>> <?php echo $row1[0];
                                                    ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>
                                        <br />

                                        email<input  type="email"name="email"value="<?php echo $row[5];?>"  /><br />
                                        mobile<input  type="number"required pattern="[0-9]{10}"name="mobile"value="<?php echo $row[7];?>"  /><br />
                                        skill<input type="text"name="skill"value="<?php echo $row[8];?>"  /><br />
                                        experience<input type="text"name="exp"value="<?php echo $row[9];?>"  /><br />
                                        id_proof<input type="file"name="id_proof"value="<?php echo $row[10];?>"  /><br />
                                        <input type="submit" value="update" />
                                    </form>




<!--                                    <p class="form-row">-->
<!--                                        <label>First name&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <input type="text" class="input-tex" name="billing_first_name" placeholder="" value="">-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Last name&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <input type="text" class="input-text " name="billing_last_name" placeholder="" value="">-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Company name&nbsp;<span class="optional">(optional)</span></label>-->
<!--                                        <input type="text" class="input-text " name="billing_company" placeholder="" value="">-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Country&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <select name="billing_country" class="country_to_state country_select" tabindex="-1" aria-hidden="true">-->
<!--                                            <option value="">Select a country…</option>-->
<!--                                            <option value="AX">Åland Islands</option>-->
<!--                                            <option value="AF">Afghanistan</option>-->
<!--                                            <option value="AL">Albania</option>-->
<!--                                            <option value="DZ">Algeria</option>-->
<!--                                            <option value="AS">American Samoa</option>-->
<!--                                            <option value="AD">Andorra</option>-->
<!--                                        </select>-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Street address&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <input type="text" class="input-text" name="billing_address_1" placeholder="House number and street name" value="">-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Apartment, suite, or unit.&nbsp;-->
<!--                                            <span class="optional">(optional)</span>-->
<!--                                        </label>-->
<!--                                        <input type="text" class="input-text " name="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Town / City&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <input type="text" class="input-text " name="billing_city" placeholder="" value="" >-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>State / County&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <select name="billing_state" id="billing_state" class="state_select select2-hidden-accessible">-->
<!--                                            <option value="">Select a state…</option>-->
<!--                                            <option value="AP">Andhra Pradesh</option>-->
<!--                                            <option value="AR">Arunachal Pradesh</option>-->
<!--                                            <option value="AS">Assam</option>-->
<!--                                            <option value="BR">Bihar</option>-->
<!--                                        </select>-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Postcode / ZIP&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <input type="text" class="input-text " name="billing_postcode" placeholder="" value="">-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Phone&nbsp;<span class="optional">(optional)</span></label>-->
<!--                                        <input type="tel" class="input-text " name="billing_phone" placeholder="" value="" >-->
<!--                                    </p>-->
<!--                                    <p class="form-row">-->
<!--                                        <label>Email address&nbsp;<abbr class="required" title="required">*</abbr></label>-->
<!--                                        <input type="email" class="input-text " name="billing_email" placeholder="" value="">-->
<!--                                    </p>-->
                                </div>
                            </div>
<!--                            <div class="col-lg-6">-->
<!--                                <div class="additional-fields">-->
<!--                                    <h3>Additional information</h3>-->
<!--                                    <div class="additional-fields-wrapper">-->
<!--                                        <p class="form-row" id="order_comments_field">-->
<!--                                            <label>Order notes&nbsp;<span class="optional">(optional)</span></label>-->
<!--                                            <textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>-->
<!--                                        </p>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
<!--                            <div class="col-lg-12">-->
<!--                                <h3 id="order_review_heading">Your order</h3>-->
<!--                                <div id="order_review" class="checkout-review-order">-->
<!--                                    <table class="shop_table checkout-review-order-table">-->
<!--                                        <thead>-->
<!--                                        <tr>-->
<!--                                            <th class="product-name">Product</th>-->
<!--                                            <th class="product-total">Total</th>-->
<!--                                        </tr>-->
<!--                                        </thead>-->
<!--                                        <tbody>-->
<!--                                        <tr class="cart_item">-->
<!--                                            <td class="product-name">Shovel&nbsp;-->
<!--                                                <strong class="product-quantity">× 1</strong>-->
<!--                                            </td>-->
<!--                                            <td class="product-total">-->
<!--                                                    <span class="Price-amount">-->
<!--                                                        <span class="Price-currencySymbol">$</span>18.00-->
<!--                                                    </span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr class="cart_item">-->
<!--                                            <td class="product-name">Ladder&nbsp;-->
<!--                                                <strong class="product-quantity">× 1</strong>-->
<!--                                            </td>-->
<!--                                            <td class="product-total">-->
<!--                                                    <span class="Price-amount amount">-->
<!--                                                        <span class="Price-currencySymbol">$</span>20.00-->
<!--                                                    </span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr class="cart_item">-->
<!--                                            <td class="product-name">Spanner&nbsp;-->
<!--                                                <strong class="product-quantity">× 1</strong>-->
<!--                                            </td>-->
<!--                                            <td class="product-total">-->
<!--                                                    <span class="Price-amount">-->
<!--                                                        <span class="Price-currencySymbol">$</span>90.00-->
<!--                                                    </span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        </tbody>-->
<!--                                        <tfoot>-->
<!--                                        <tr class="cart-subtotal">-->
<!--                                            <th>Subtotal</th>-->
<!--                                            <td>-->
<!--                                                    <span class="Price-amount amount">-->
<!--                                                        <span class="Price-currencySymbol">$</span>128.00-->
<!--                                                    </span>-->
<!--                                            </td>-->
<!--                                        </tr>-->
<!--                                        <tr class="order-total">-->
<!--                                            <th>Total</th>-->
<!--                                            <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>128.00</span></strong> </td>-->
<!--                                        </tr>-->
<!--                                        </tfoot>-->
<!--                                    </table>-->
<!--                                    <div id="payment" class="checkout-payment">-->
<!--                                        <ul class="payment_methods">-->
<!--                                            <li class="payment_method_ppec_paypal">-->
<!--                                                <label>-->
<!--                                                    PayPal <img src="images/paypal.png" alt="PayPal">-->
<!--                                                </label>-->
<!--                                                <div class="payment_box">-->
<!--                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>-->
<!--                                                </div>-->
<!--                                            </li>-->
<!--                                        </ul>-->
                                        <div class="form-row place-order">
<!--                                            <button type="submit" class="button" name="checkout_place_order" id="place_order" value="Place order" data-value="Place order">Continue to payment</button>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- checkout-section end -->


    </div><!--site-main end-->

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-footer-cta-wrapper ttm-textcolor-dark ttm-bgcolor-white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                    <div class="featured-icon-box iconalign-before-heading ttm-icon_element-size-lg">
                                        <div class="featured-content">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="ti ti-email"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h5>Subscribe To Our Newsletter</h5>
                                                <h6>At vero eos et accusamus et iusto oddummy..</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                    <form id="subscribe-form" class="newsletter-form" method="post" action="#" data-mailchimp="true">
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <p><input type="email" name="email" placeholder="Email Address.." required=""></p>
                                            <p><input type="submit" value="SUBSCRIBE"></p>
                                        </div>
                                        <div id="subscribe-msg"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center" src="images/footer-logo.png" alt="">
                            </div>
                            <p>We work to ensure people’s com fort at their company specializing in house holance. During ourour</p>
                        </div>
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">Work Days</h3>
                            <div class="textwidget widget-text">
                                <div class="ttm-pricelistbox-wrapper ">
                                    <div class="ttm-timelist-block-wrapper">
                                        <ul class="ttm-timelist-block">
                                            <li>Mon - sat <span class="service-time">09am - 05pm</span></li>
                                            <li>Sunday<span class="service-time"><strong>Closed</strong></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Our Services</h3>
                            <ul id="menu-footer-services">
                                <li><a href="index-2.html">Home</a></li>
                                <li><a href="services-1.html">Services</a></li>
                                <li><a href="about-1.html">About</a></li>
                                <li><a href="portfolio-style-1.html">Gallery</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="our-team.html">Team</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="career.html">Carrer</a></li>
                                <li><a href="contact-us-1.html">Contact Us</a></li>
                                <li><a href="single-style-3.html">Projects</a></li>
                                <li><a href="contact-us-2.html">Locations</a></li>
                                <li><a href="home-shop.html">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">Get Free Estimate</h3>
                            <div class="textwidget widget-text">
                                <h3 class="ttm-textcolor-skincolor">123-456-78910</h3>
                                <p>Our online scheduling and payment system is safe.</p>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mt-15 mb-20" href="#">REQUEST WITH ONLINE FORM</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix">
                            <h3 class="widget-title">Flickr</h3>
                            <div class="ttm-flicker-widget-wrapper">
                                <a href="#"><img src="images/flicker/01.jpg" alt="A photo on Flickr" title="themetech-one"></a>
                                <a href="#"><img src="images/flicker/02.jpg" alt="A photo on Flickr" title="themetech-two"></a>
                                <a href="#"><img src="images/flicker/03.jpg" alt="A photo on Flickr" title="themetech-three"></a>
                                <a href="#"><img src="images/flicker/04.jpg" alt="A photo on Flickr" title="themetech-four"></a>
                                <a href="#"><img src="images/flicker/05.jpg" alt="A photo on Flickr" title="themetech-five"></a>
                                <a href="#"><img src="images/flicker/06.jpg" alt="A photo on Flickr" title="themetech-six"></a>
                                <a href="#"><img src="images/flicker/07.jpg" alt="A photo on Flickr" title="themetech-seven"></a>
                                <a href="#"><img src="images/flicker/08.jpg" alt="A photo on Flickr" title="themeteh-eight"></a>
                                <a href="#"><img src="images/flicker/09.jpg" alt="A photo on Flickr" title="themetech-nine"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-8 ttm-footer2-left">
                        <span><a href="https://www.templateshub.net" target="_blank">Templates Hub</a></span>
                    </div>
                    <div class="col-md-4 ttm-footer2-right">
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

    <!-- Color Palate / Color Switcher -->
    <div class="color-switcher">
        <div class="color-trigger">
            <i class="fa fa-gear"></i>
        </div>
        <div class="color-switcher-header">
            <h6>Switcher Colors</h6>
        </div>
        <div class="various-color clearfix">
            <div class="colors-list">
                <span class="theme-color default-color active" data-file="css/colors/default-color.css"></span>
                <span class="theme-color theme-color1" data-file="css/colors/theme-color1.css"></span>
                <span class="theme-color theme-color2" data-file="css/colors/theme-color2.css"></span>
                <span class="theme-color theme-color3" data-file="css/colors/theme-color3.css"></span>
                <span class="theme-color theme-color4" data-file="css/colors/theme-color4.css"></span>
                <span class="theme-color theme-color5" data-file="css/colors/theme-color5.css"></span>
            </div>
        </div>
    </div><!-- Color Palate / Color Switcher end-->

</div><!-- page end -->


<!-- Javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/color-switcher.js"></script>
<script src="js/jquery.easing.js"></script>
<script src="js/jquery-waypoints.js"></script>
<script src="js/jquery-validate.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/numinate.min6959.js?ver=4.9.3"></script>
<script src="js/main.js"></script>

<!-- Javascript end-->

</body>

<!-- checkout43:22-->
</html>
