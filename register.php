<?php
include ("includes/header.php"); //نمایش سرصفحه و منوهای مرتبط


//درصورتی که کاربر از قبل وارد سایت شده است با انتقال به صفحه اصلی  از ادامه اجرای دستورات صفحه جاری جلوگیری می شود
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
<!--
location.replace("index.html");	 // منتقل شود index.php به صفحه
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>watch Store</title>
<link rel=icon type="image/png" sizes=32x32 href="images/logo_icon-removebg-preview.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .gif2 {
        position: absolute;
        top: 15px;
        right: 50px;
        border-radius: 50px;
        background: none;
        margin: 0;
      }
  p
{
  font-family: afsaneh;
  padding-bottom: 51px;
 color: antiquewhite;
 font-size: 26px;
}
.title-border3 {
    border-bottom: 2px solid antiquewhite;
    padding-top: 21px;
    width: 400px; 
    float: right; 
    clear: both; 
}
.title-border4
{
  border-bottom: 2px solid antiquewhite;
    padding-top: 21px;
    width: 400px; 
    float: right;
    clear: both; 
}
.transparent-button {
  background-color: transparent;
  border: 2px solid #ffffff;
  color: #ffffff;
  border-radius: 20px;
  padding: 10px 20px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
  
}
.transparent2-button {
  background-color: transparent;
  border: 2px solid #ffffff;
  color: #ffffff;
  border-radius: 20px;
  margin-right: 700px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
  
}
.transparent-button:hover {
  background-color: #fafafa;
  color: #030303;
}
.transparent2-button:hover {
  background-color: #fafafa;
  color: #030303;
}
.header
{
  background-color: transparent;
  color: #ffffff;
  border-radius: 20px;
  font-size: 30px;
 right: -400px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
}
.header:hover
{
  background-color: #fafafa;
  color: #030303;
}
body {
    font-family: afsaneh;
    margin: 0;
    padding: 0;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #f8f8f8;
    border-bottom: 1px solid #ddd;
}

.search-bar {
    flex: 1; 
}

.search-bar form {
    display: flex;
    align-items: center;
}

.search-bar input[type="text"] {
    padding: 8.5px 20px;
    border: 1px solid #b6b6b6;
    border-radius: 4px 0 0 4px;
    outline: none;
   
}

.search-bar button {
    padding: 5.2px 25px;
    border: 1px solid #741709;
    border-left: none;
    border-radius: 0 4px 4px 0;
    background-color:rgb(255, 206, 159);
    color: rgb(0, 0, 0);
    cursor: pointer;
}

.search-bar button:hover {
    background-color: rgb(255, 206, 159);
}
body {
            font-family: afsaneh;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .product-card {
            flex-basis: calc(33.333% - 20px);
            background-color: rgb(255, 206, 159);
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s;
            cursor: pointer;
        }

        .product-card:hover {
            transform: translateY(-70px);
        }

        .product-image {
            width: 100%;
            height: 330px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .product-info {
            padding: 15px;
        }

        .product-title {
            font-size: 1.7rem;
            margin-bottom: 20px;
            text-align: right;

        }

        .product-category {
            font-size: 1.6rem;
            color: #777;
            margin-bottom: -50px;
            text-align: right;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: -30px;
            text-align:right;
            color: #ffffff;
        }

        .sale-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #f00;
            color: #ffffff;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        @media (max-width: 768px) {
            .product-card {
                flex-basis: calc(50% - 20px);
            }
        }

        @media (max-width: 800px) {
            .product-card {
                flex-basis: 100%;
            }
        }
        .bottun
        {
          background-color: transparent;
  border: 3px solid #ffffff;
  color: #000000;
  border-radius: 20px;
  padding: 10px 30px;
  font-size: 20px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
        }
        .bottun:hover
        {
          background-color: #fafafa;
  color: #030303;
        }
        .transparent2-button {
  background-color: transparent;
  border: 2px solid #ffffff;
  color: #ffffff;
  border-radius: 20px;
  margin-right: 700px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
  
}
.transparent2-button:hover {
  background-color: #fafafa;
  color: #030303;
}
    </style>
  </head>
  <body>
    <div class="bg-white dark:bg-zinc-900">
  <header class="flex justify-between items-center p-4 bg-zinc-100 dark:bg-zinc-800 " id="targetTag7">
    <div class="flex items-center space-x-4"  id="targetTag6">
      <div class="search-bar">
        <form action="/search" method="GET">
            <input type="text" name="query" placeholder="Search..." required>
            <button type="submit" style="font-family: afsaneh; font-size: 23px;">جستجو</button>
        </form>
      <a class="logo"> <img src="images/logo.png" alt="" width=125 height=125 class="gif2"></a>
      <nav class="hidden md:flex space-x-4" style="font-family: afsaneh; font-size:40px; margin-left: 850px; margin-top: -55px;">
        <div class="header">
        <a href="#" style="padding-left: -300px;" id="myButton4">ارتباط با ما</a>
        </div>
        <div class="header" id="myButton3">
        <a href="#">درباره ما</a>
        </div>
        <div class="header" id="myButton2">
        <a href="#">فروشگاه</a>
        </div>
        <div class="header">
        <a href="./logout.php" class="set_style_link">خروج از حساب کاربری<?php echo(" ({$_SESSION["realname"]}) ") ?></a>

        </div>
        <div class="header">
          
      </nav>
    </div>
    </div>
  </header>

  <div class="text-center py-16 bg-zinc-50 dark:bg-zinc-800">
  
      <div style="float:left; margin-left: 200px;">
        <img src="images/5.png" alt="Image" width="690" height="600" style="margin-left: -60px; margin-top: -120px;" class="w-3/3">
      </div>
      <div style="margin-left:850px; margin-top: 70px;">
        <h1 class="text-4xl font-bold" style="color: rgb(255, 206, 159); font-family: afsaneh; font-size: 60px;">فروشگاه ساعت زمان آرا</h1>
        <p style="margin-top: 30px;">فروش تا 30% تخفیف</p>
        <button id="myButton" class="transparent-button" style=" font-size: 22px; font-family: afsaneh; margin-top: -25px;">اکنون خرید کنید</button>
      </div>
      
  </div>
  <section class="py-16 bg-zinc-50 dark:bg-zinc-800" id="targetTag3">
    <h2 class="text-2xl font-bold text-right text-zinc-800 dark:text-zinc-100" style="font-size: 60px;font-family: afsaneh; padding-bottom: 80px; margin-left: 500px;">دسته بندی های پرطرفدار</h2>
   
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
          <div class="product-card"  id="image">
           
              <img src="images/product 1.jpg" alt="Apple Watch" class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت زنانه کرونوگراف اتوماتیک اسپید مستر</h2>
                  <p class="product-category">دسته بندی های پرطرفدار</p>
                  <p class="product-price">    تومان3500000     <strike>    تومان 5000000    </strike></p>
                  <button type="button" id="button" class="bottun" onclick="location.href='1.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image2">
           
              <img src="images/product 2.jpg" alt="Google Pixel" class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت مچی مردانه بتمن بیزل اتوماتیک با بند چرم رنگ قهوه ای</h2>
                  <p class="product-category">دسته بندی های پرطرفدار</p>
                  <p class="product-price">4700000 تومان</p>
                  <button  id="button2" class="bottun" onclick="location.href='2.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image3">
              
              <img src="images/product 3.jpg" alt="Headphones"class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت مچی مردانه صفحه ای با بند چرم رنگ سورمه ای</h2>
                  <p class="product-category">دسته بندی های پرطرفدار</p>
                  <p class="product-price">14000000 تومان </p>
                  <button  id="button3" class="bottun" onclick="location.href='3.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image4">
           
            <img src="images/product 4.jpg" alt="Headphones"class="product-image">
            <div class="product-info">
                <h2 class="product-title">ساعت مچی زنانه استیل صفحه خودکار خاکستری</h2>
                <p class="product-category">دسته بندی های پرطرفدار</p>
                <p class="product-price">9300000 تومان </p>
                <button  id="button4" class="bottun" onclick="location.href='4.html';">خرید</button>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="py-16 bg-zinc-50 dark:bg-zinc-800">
    <h2 class="text-2xl font-bold text-right text-zinc-800 dark:text-zinc-100" style="font-size: 60px;font-family: afsaneh; padding-bottom: 80px; margin-left: 500px;">آخرین محصولات</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
          <div class="product-card"  id="image">
           
              <img src="images/product 5.jpg" alt="Apple Watch" class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت مچی زنانه امگا پرستیژ اتوماتیک با صفحه شامپاین</h2>
                  <p class="product-category">آخرین محصولات</p>
                  <p class="product-price">    تومان3250000     <strike>    تومان 4000000    </strike></p>
                  <button  id="button" class="bottun" onclick="location.href='5.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image2">
           
              <img src="images/product 6.jpg" alt="Google Pixel" class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت مچی مردانه بتمن بیزل اتوماتیک با بند چرم رنگ قهوه ای</h2>
                  <p class="product-category">آخرین محصولات</p>
                  <p class="product-price">4900000 تومان</p>
                  <button  id="button2" class="bottun" onclick="location.href='6.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image3">
              
              <img src="images/product 7.jpg" alt="Headphones"class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت مچی مردانه صفحه ای با بند چرم رنگ مشکی</h2>
                  <p class="product-category">آخرین محصولات</p>
                  <p class="product-price">5400000 تومان </p>
                  <button  id="button3" class="bottun" onclick="location.href='7.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image4">
           
            <img src="images/product 8.jpg" alt="Headphones"class="product-image">
            <div class="product-info">
                <h2 class="product-title">ساعت مچی مردانه با بند چرم صفحه خودکار مشکی</h2>
                <p class="product-category">آخرین محصولات</p>
                <p class="product-price">10000000 تومان </p>
                <button  id="button4" class="bottun" onclick="location.href='8.html';">خرید</button>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  
  <section class="py-16 bg-zinc-50 dark:bg-zinc-800" id="targetTag1">
    <h2 class="text-2xl font-bold text-right text-zinc-800 dark:text-zinc-100" style="font-size: 60px;font-family: afsaneh; padding-bottom: 80px; margin-left: 500px;">محصولات محبوب</h2>
    <button  id="myButton6" class="transparent2-button small-button" style="font-family:afsaneh; margin-top: -115px; margin-left: 100px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="42" height="40" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
      </svg>
    </button>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
          <div class="product-card"  id="image">
           
              <img src="images/product 9.jpg" alt="Apple Watch" class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت هوشمند اولترا با سه بند به رنگ های مشکی ، خاکستری ، صورتی </h2>
                  <p class="product-category">محصولات محبوب</p>
                  <p class="product-price">    تومان6800000     <strike>    تومان 7800000    </strike></p>
                  <button  id="button" class="bottun" onclick="location.href='9.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image2">
           
              <img src="images/product 10.jpg" alt="Google Pixel" class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت هوشمند مدل پرو مکس 26 به همراه هدفون بلوتوثی</h2>
                  <p class="product-category">محصولات محبوب</p>
                  <p class="product-price">5900000 تومان</p>
                  <button  id="button2" class="bottun" onclick="location.href='10.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image3">
              
              <img src="images/product 11.jpg" alt="Headphones"class="product-image">
              <div class="product-info">
                  <h2 class="product-title">ساعت هوشمند میبرو مدل واچ لایت به همراه بند</h2>
                  <p class="product-category">محصولات محبوب</p>
                  <p class="product-price">3500000 تومان </p>
                  <button  id="button3" class="bottun" onclick="location.href='11.html';">خرید</button>
              </div>
          </div>
          <div class="product-card" id="image4">
           
            <img src="images/product 12.jpg" alt="Headphones"class="product-image">
            <div class="product-info">
                <h2 class="product-title">ساعت هوشمند سمگپرس مدل اس 800 پلاس به همراه یک بند رایگان</h2>
                <p class="product-category">محصولات محبوب</p>
                <p class="product-price">9800000 تومان </p>
                <button  id="button4" class="bottun" onclick="location.href='12.html';">خرید</button>
            </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="py-16 bg-zinc-50 dark:bg-zinc-800" id="targetTag4">
    <h2 class="text-2xl font-bold text-right text-zinc-800 dark:text-zinc-100"  style="font-size: 60px;font-family: afsaneh; padding-bottom: 80px; margin-left: 500px;color: rgb(255, 206, 159); ">درباره ما</h2>
  <p class="p2 text-right">
    به جهان ساعت های مچی زمان آرا خوش آمدید، جایی که هر ثانیه با ارزش است. ما با اعتقاد به اینکه زمان بیش از همه چیز، نمادی از لحظات زندگی ماست، ماموریت خود را آغاز کردیم. در زمان آرا، ما به دنبال خلق ساعت هایی هستیم که نه تنها وقت شما را نگه دارند، بلکه داستان های شما را روایت کنند و همراه شما در هر لحظه، خاطره های جاودان بسازند.
از سال 1402 ، با دقت و تعهد به کیفیت، ما ساعت هایی با طراحی منحصر به فرد و مواد اولیه درجه یک تولید کردهایم. هر ساعتی که از خط تولید ما بیرون میآید، حاصل ساعت ها کار دستی و دقت است که توسط صنعتگران ماهر ما انجام شده است.
  </p>
  <div class=title-border3></div>
  <p>
    <p class="p3 text-right">
      ما مفتخریم که محصولاتمان را به بیش از 10کشور در سراسر جهان عرضه کردهایم و هر روز به جمع مشتریان خود افزوده ایم. مشتریان ما نه تنها یک ساعت مچی خریداری میکنند، بلکه بخشی از خانواده زمان آرا میشوند.
      با انتخاب ساعت زمان آرا ، شما به ما اعتماد میکنید که همراه شما در هر لحظه باشیم. ما این اعتماد را با افتخار پذیرا هستیم و قول میدهیم که همیشه در کنار شما باشیم.      
  </p>
  </p>
  <p class="text-right">
    با تشکر</br>
     طراح سایت : پوریا لک</br>
    بنیانگذار : زمان آرا
  </p>
<div class="header-title wow fadeIn">
   
</div>
</div>
</section>
  <footer class="py-8 bg-zinc-50 dark:bg-zinc-800" id="targetTag5">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 text-right md:text-right">
      <div>
        <h3 class="text-lg font-bold text-zinc-800 dark:text-zinc-100" style="font-size: 36px;">با ما در ارتباط باشید</h3>
        <p class="text-zinc-600 dark:text-zinc-400" style="font-size: 30px;">آدرس : کرمان ، فروشگاه ساعت زمان آرا</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">info@example.com : ایمیل</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">شماره تماس : (123) 456-7890</p>
      </div>
      <div>
        <h3 class="text-lg font-bold text-zinc-800 dark:text-zinc-100" style="font-size: 36px;">اطلاعات</h3>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">درباره ما</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">سیاست حفظ حریم خصوصی</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">شرایط و ضوابط</p>
      </div>
      <div>
        <h3 class="text-lg font-bold text-zinc-800 dark:text-zinc-100" style="font-size: 36px;">خدمان مشتری</h3>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">سوالات متداول</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">ارسال و بازگردانی</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">با پشتیبانی تماس بگیرید</p>
      </div>
      <div>
        <h3 class="text-lg font-bold text-zinc-800 dark:text-zinc-100" style="font-size: 36px;">برنامه مارا دانلود کنید</h3>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">اپ استور</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">گوگل پلی</p>
        <p class="text-zinc-600 dark:text-zinc-400"  style="font-size: 30px;">بازار</p>
      </div>
    </div>
    <div class="mt-8 text-center text-zinc-600 dark:text-zinc-400" style="font-size: 30px;">
      &copy; .تمامی حقوق محتوای این فروشگاه محفوظ است
    </div>
    <button  id="myButton7" class="transparent2-button small-button" style="font-family:afsaneh; margin-top: -40px; margin-left: 90px;">
      <svg xmlns="http://www.w3.org/2000/svg" width="42" height="40" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
      </svg>
    </button>
  </footer>

</div>
<script>
  document.getElementById('myButton').addEventListener('click', function() {
  var targetElement = document.getElementById('targetTag1');
  targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
document.getElementById('myButton2').addEventListener('click', function() {
  var targetElement = document.getElementById('targetTag3');
  targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
document.getElementById('myButton3').addEventListener('click', function() {
  var targetElement = document.getElementById('targetTag4');
  targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
document.getElementById('myButton4').addEventListener('click', function() {
  var targetElement = document.getElementById('targetTag5');
  targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
document.getElementById('myButton6').addEventListener('click', function() {
  var targetElement = document.getElementById('targetTag6');
  targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
});
document.getElementById('myButton7').addEventListener('click', function() {
  var targetElement = document.getElementById('targetTag7');
  targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
});

</script>
  </body>
</html>
-->
</script>
<?php
   } // if پایان
?>
<!--در این تابع نام کاربری وارد شده دریافت می شود و در صورتی که خالی باشد با پیام خطای نام کاربری الزامی است کاربر 
مواجه می شود. در غیر اینصورت پس از تائید کاربر اطلاعات به پروند 
action_register
ارسال می شود -->
<script type="text/javascript">
<!--
   function check_empty()
   {
	   var username="";
	   username=document.getElementById("username").value;
	   if(username=="")
	  	 alert('وارد کردن نام کاربری الزامی است');
	   else
	   {
		   var r=confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
		   if(r==true)
		   document.register.submit();
	   }
   }
-->
</script>
  <br />
  <form name="register" action="action_register.php"  method="POST" style="width: 50%;background-color: white; font-family: 'afsaneh';" >
  <table  border="0"  style="margin-left: auto;margin-right: auto;">
           
           <tr>
              <td style="width: 40%;">نام واقعي <span style="color: red;font-family: 'afsaneh';">*</span></td>
              <td style="width: 60%;"><input type="text" id="realname" name="realname"  /></td>
           </tr>
                                 
           <tr>
              <td>نام كاربري <span style="color: red;font-family: 'afsaneh';">*</span></td>
              <td><input type="text" style="text-align: left;" id="username" name="username"  /></td>
           </tr>
                                
           <tr>
              <td>كلمه عبور <span style="color: red;font-family: 'afsaneh';">*</span></td>
              <td><input type="password" style="text-align: left;" id="password" name="password"  /></td>
           </tr>
                               
           <tr>
              <td>تكرار كلمه عبور <span style="color: red;font-family: 'afsaneh';">*</span></td>
              <td><input type="password" style="text-align: left;" id="repassword" name="repassword"  /></td>
           </tr>
                                
           <tr>
              <td>پست الكترونيكي <span style="color: red;font-family: 'afsaneh';">*</span></td>
              <td><input type="text" style="text-align: left;" id="email" name="email"  /></td>
           </tr>
                                
           <tr>
              <td><br /><br /></td>
              <td>
                     <input type="button" class="bg-blue-500 text-black p-2 rounded "  style="background-color: white;font-family: 'afsaneh';" value="ثبت نام" onclick="check_empty()" />
                      &nbsp;&nbsp;&nbsp;
                     <input type="reset" class="bg-blue-500 text-black p-2 rounded "  style="background-color: white;font-family: 'afsaneh';"  value="جديد" />
              </td>
           </tr>
                         
   </table>
  </form>
                    
                    
<?php
include ("includes/footer.php");
?>
   