<?php
include ("includes/header.php"); //نمایش سرصفحه و منوهای مرتبط

if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
<!--
location.replace("index.html");	
 // منتقل شود index.php به صفحه
-->
<div class="header">
        <a href="logout.php"  class="set_style_link" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a>
        </div>
</script>
<?php
   } // if پایان
?>
   <br />
   <form name="login" action="action_login.php"  method="POST" >
     <table style="width: 50%;" border="0"  style="margin-left: auto;margin-right: auto;"  >
     
      <tr>
         <td>نام كاربري <span style="color: red;">*</span></td>
         <td><input type="text" style="text-align: left;" id="username" name="username"  /></td>
      </tr>
     
      <tr>
         <td>كلمه عبور <span style="color: red;">*</span></td>
         <td><input type="password" style="text-align: left;" id="password" name="password"  /></td>
      </tr>
     
       <tr>
         <td><br /><br /></td>
         <td><input type="submit"  class="bg-blue-500 text-black p-2 rounded "  style="background-color: white;font-family: 'afsaneh';" value="ورود" />&nbsp;&nbsp;&nbsp;<input type="reset" class="bg-blue-500 text-black p-2 rounded "  style="background-color: white;font-family: 'afsaneh';" value="جديد" /></td>
      </tr>
     
    </table>
  </form>
                    
                    
<?php
include ("includes/footer.php");
?>
   
