<?php
include ("includes/header.php");


$link = mysqli_connect("localhost", "root", "", "shop_db");//اتصال به پایگاه داده

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$pro_code=0;
if (isset($_GET['id']))
	 $pro_code=$_GET['id'];//دریافت کد کالا از نوار آدرس که در مرحله قبل با کلیک بر روی تصویر کالا یا لینک توضیحات تکمیلی و خرید به این پرونده ارسال شده است

$query = "SELECT * FROM products WHERE pro_code='$pro_code'";      //رکورد کالای انتخابی از جدول استخراج شود      

$result = mysqli_query($link, $query);     

?>
<!-- جدول نمایش جزئیات محصول به صورت پویا -->
 <table style="width: 100%;" border="1px"  >
  <tr>
  
  <?php

    if ($row = mysqli_fetch_array($result)) {//در صورتی که رکورد وجود داشته باشد دستورات بدنه شرط اجرا می شود
  
   ?> 

  
	<td style="border-style: dotted dashed;vertical-align: top;" >

       <h4 style="color: brown;"><?php echo ($row['pro_name']) ?></h4>
 
       <img src="images/products/<?php echo ($row['pro_image']) ?>"  />
     
       <br/>

    قيمت  : <?php echo ($row['pro_price']) ?> &nbsp; ريال
    <br/>

    تعداد موجودي  : <span style="color:red;"><?php echo ($row['pro_qty']) ?></span>
    <br/>

     توضيحات  : <span style="color:green;"> <?php echo ($row['pro_detail']) ?> </span>

     <br/><br/>
    <b><a href="order.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">سفارش و خرید پستی</a></b>
    <br/><br/>
           
    </td>  
    
<?php
   
	  
} // if

?>  
</tr>
</table>

<?php
include ("includes/footer.php");
?>
   
