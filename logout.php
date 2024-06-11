<?php
//حذف همه متغیرهای جلسه و خروج از سایت
session_start();

session_unset();

session_destroy();

?>

<script type="text/javascript">
<!--
location.replace("index.html");	
-->
</script>