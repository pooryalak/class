<?php
include ("includes/header.php");   //نمایش سرصفحه و منوهای مرتبط

//بررسي خالي نبودن كادر متن نام كاربری و گذرواژه
	
if ((isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) &&
    !empty($_POST['password']))) {

    $username = $_POST['username']; // ذخيره نام كاربري
    $password = $_POST['password'];  // ذخيره گذرواژه
} else
    exit("برخی از فیلد ها مقدار دهی نشده است");


$link = mysqli_connect("localhost", "root", "", "shop_db"); // اتصال به  پايگاه داده shop_db

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

// پرس و جو بر اساس نام كاربري و گذرواژه
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($link, $query);   //اجراي پرس و جو $query

$row = mysqli_fetch_array($result);   //رکورد اطلاعات کاربر را در آرایه ذخیره می کنیم 

if ($row) {
    $_SESSION["state_login"] = true; //درصورت ورود موفقیت آمیز به تارنما وضعیت ورود به حالت ترو در می آید و همچنین نام کاربری و نام واقعی کاربر در سشن ذخیره می شود
    $_SESSION["realname"] = $row['realname'];
    $_SESSION["username"] = $row['username'];

//تعیین نوع کاربر
    if ($row["type"] == 0)
	{
        $_SESSION["user_type"] = "public";
		?>
        <script type="text/javascript">
		<!--
		location.replace("index.html");	 // منتقل شود index.php به صفحه
		-->
		</script>
     <?php
	}
    elseif ($row["type"] == 1) {
        $_SESSION["user_type"] = "admin";
?>

<script type="text/javascript">
<!--
location.replace("admin_products.php");	
-->
</script> 
   
<?php
    } // elseif پایان

    echo ("<p style='color:green;'><b>{$row['realname']} به فروشگاه ايرانيان خوش آمديد</b></p>");
} else
    echo ("<p style='color:red;'><b>نام كاربري يا كلمه عبور يافت نشد</b></p>");


mysqli_close($link);   // قطع اتصال پايگاه داده

include ("includes/footer.php");   // اضافه كردن پرونده footer.php
?>
