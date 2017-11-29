<?
	$host = "localhost";
	$user = "root";
	$pw = "apmsetup";
	$db_name = "hanium_proj";
	$conn = mysql_connect($host, $user, $pw);
	mysql_select_db($db_name, $conn);

	$col_type_name = $_POST['col_type_name'];
	$col_reg_name = $_POST['col_reg_name'];

	mysql_query("insert into tbl_asset_regist (col_type_name, col_reg_name, col_date) values('$col_type_name', '$col_reg_name', now())");
?>
<script type="text/javascript" language="javascript">
	document.location = "index.php";
</script>