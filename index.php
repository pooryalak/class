<?php

include ("includes/header.php"); //نمایش سرصفحه و منوی پیوندها 

$link = mysqli_connect("localhost", "root", "", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM products";    // پرس و جوي نمايش همه محصولات فروشگاه

$result = mysqli_query($link, $query);    //  اجراي پرس و جو


?>
<!-- جدول نمایش محصولات به صورت پویا -->
 <table style="width: 100%;" border="1px"  >
  <tr>
  
  <?php

$counter = 0;//شمارنده تعداد محصولات
while ($row = mysqli_fetch_array($result)) {// این حلقه تا زمانی که محصولی در جدول وجود داشته باشد ادامه می یابد
    $counter++;
?> 

  
	<td style="border-style: dotted dashed;vertical-align: top;width: 33%;" >

       <h4 style="color: brown;"><?php echo ($row['pro_name']) ?></h4>
 <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">
       <img src="images/products/<?php echo ($row['pro_image']) ?>" width="250px" height="150px" />
  </a>    
       <br/>

    قيمت  : <?php echo ($row['pro_price']) ?> &nbsp; ريال
    <br/>

    تعداد موجودي  : <span style="color:red;"><?php echo ($row['pro_qty']) ?></span>
    <br/>

     توضيحات  : <span style="color:green;"> <?php echo (substr($row['pro_detail'],0,230)) ?> ...</span>

     <br/><br/>
    <b><a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">توضيحات تكميلي و خريد</a></b>
    <br/><br/>
           
    </td>  
    
<?php
    if ($counter % 3 == 0)//درصورتی که تعداد محصول نمایش داده شده در یک سطر 3 عدد بود با بستن برچسب سطر جاری و باز کردن سطر جدید محصولات را به سطر جدید منتقل می کند
        echo ("</tr><tr>");
} // while

if ($counter % 3 != 0)
    echo ("</tr>");

?>  
</table>

<?php
include ("includes/footer.php"); //نمایش پاصفحه 
?>
   
