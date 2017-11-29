<?
	$host = "localhost";
	$user = "root";
	$pw = "apmsetup";
	$db_name = "hanium_proj";
	$conn = mysql_connect($host, $user, $pw);
	mysql_select_db($db_name, $conn);

	$col_reg_name = $_POST['col_reg_name'];

	mysql_query("delete from tbl_asset_regist where col_reg_name='$col_reg_name'");
?>
<script type="text/javascript" language="javascript">
	document.location = "index.php";
</script>