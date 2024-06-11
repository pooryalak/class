<?php
include ("includes/header.php"); //نمایش سرصفحه و منوهای مرتبط

//بررسی تعریف اشیاء و خالی نبودن محتوای آنها با استفاده از توابع 
// isset و empty
if (isset($_POST['realname'])  && !empty($_POST['realname']) && 
	isset($_POST['username']) && !empty($_POST['username']) && 
	isset($_POST['password']) && !empty($_POST['password']) &&
    isset($_POST['repassword']) && !empty($_POST['repassword']) &&
	isset($_POST['email']) && !empty($_POST['email'])) {

    $realname = $_POST['realname'];  // دریافت اطلاعات از فرم با استفاده از ویژگی POST
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $email = $_POST['email'];
} else
    exit("برخی از فیلد ها مقدار دهی نشده است");

if ($password != $repassword)
    exit("كلمه عبور و تكرار آن مشابه نيست");

//بررسی صحت ورود نشانی ایمیل
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    exit("پست اكترونيك وارد شده صحيح نیست");

//اتصال به سرویس دهنده mySql
$link = mysqli_connect("localhost", "root", "", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

//پرس و جوی ذخیره اطلاعات عضویت در جدول کاربران
$query = "INSERT INTO users (realname,username,password,email,type) VALUES ('$realname','$username','$password','$email','0')";

if (mysqli_query($link, $query) === true)
    echo ("<p style='color:green;'><b>" . $realname .
        " گرامي عضويت شما با نام كاربري " . $username .
        " در فروشگاه با موفقيت انجام شد " . "</b></p>");
else
    echo ("<p style='color:red;'><b>عضويت شما در فروشگاه انجام نشد</b></p>");

//بستن اتصال سرویس دهنده
mysqli_close($link);

include ("includes/footer.php");
?>
