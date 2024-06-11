<?php
session_start();// برای استفاده از 
				// $_SESSION
				//باید در ابتدای پروژه ها از این تابع استفاده کرد
?>
<html>
<head>
<meta charset="UTF-8" />
<link rel=icon type="image/png" sizes=32x32 href="images/logo_icon-removebg-preview.png">

<title>watch store</title>
</head>

<body>
<!-- برای جلوگیری از نمایش زیر خط در پایین پیوندهای صفحه مقدار
     text-decoration: none; 
مقدار دهی شده است 
-->
<style type="text/css">
<!--
	.set_style_link {
     text-decoration: none;
     font-weight: bold; 
     }

-->
</style>
<!-- جدول اصلی نگهدارنده -->
<table dir="rtl"  style="font-family: 'afsaneh';;font: size 22px;pt;width: 1024px;margin-left: auto;margin-right: auto;"   >
    <tr>
        <td>
        <!-- جدول نگهدارنده لوگوی سایت -->

            <table style="width: 100%;"  border="1"  >
                <tr style="text-align:center">
	               <td>فروشگاه ساعت زمان آرا</td>
                </tr>
            </table>

				<!-- جدول نگهداری منوی بالای سایت -->

            <table style="width: 100%;"  border="1"  >
                <tr style="text-align: center;">
                    <td><a href="index.html" class="set_style_link" >صفحه اصلی</a></td>
                    <td><a href="register.php"  class="set_style_link" >عضويت در سايت</a></td>
                    <?php
					    //در صورت ورود کاربر پیوند خروج از سایت به همراه نام واقعی کاربر نمایش داده می شود
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true) 
                         {
                    ?>
                    <td><a href="logout.php"  class="set_style_link" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a></td>
                    <?php
                         } // if  پایان
						 //در صورت عدم ورود کاربر پیوند ورود به سایت نمایش داده می شود
                        else
                         { 
                    ?>
                    <td><a href="login.php"  class="set_style_link" >ورود به سايت</a></td>
                    <?php
                         }  //else پایان 
                    ?>
                    
                    
                    <?php
					//درصورتی که کاربر وارد شده به سایت مدیر باشد لینک مدیریت محصولات و مدیریت سفارشات به انتهای منوی بالای سایت اضافه می شود
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin") 
                         {
                    ?>
                    <td><a href="admin_products.php"  class="set_style_link" >مدیریت محصولات</a></td>                    
                    <td><a href="admin_manage_order.php"  class="set_style_link" >مدیریت سفارشات</a></td>
                    <?php
                         } // if  پایان
                    ?>
                    
                </tr>
            </table>
            
			<!-- جدول نگهدارنده موقعیت بخش های امکانات سایت و نمایش محصولات -->

			<table style="width: 100%;"  border="1"  >
                <tr>
                    