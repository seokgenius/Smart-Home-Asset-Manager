<!DOCTYPE html>
<head>
	<?php
	$host = "localhost";
	$user = "root";
	$pw = "apmsetup";
	$db_name = "hanium_proj";
	$conn = mysql_connect($host, $user, $pw);
	mysql_select_db($db_name, $conn);

	$result = mysql_query('select * from tbl_asset_regist order by col_date desc');

	?>
	<meta charset="utf-8">
	<style>
		.btn_style
		{
			text-align :center;
			padding-top :10px;
		}
	</style>
</head>
<html>
<title>스마트 홈 정보 자산 관리 시스템</title>
<body>
	<table width="650"
			height="100%"
			align="center"
			border="1"
			bordercolor="gray"
			cellspacing="0"
			cellpadding="0">
		<thead bgcolor="yellow">
			<tr>

				<th width="100" height="50">
			 		유형
				</th>
				<th width="250" height="50">
					이름
				</th>
				<th width="250" height="50">
					등록일자
				</th>
			</tr>			
		</thead>
		<tbody align="center" bgcolor="white">
			<tr>

				<td>
					<?
						while($row = mysql_fetch_row($result)){
						echo $row[0];
					?>
				</td>
				<td>
					<?
						echo $row[1];

					?>
				</td>
				<td>
					<?
						echo $row[2];
					?>
				</td>
			</tr>
			<tr>
				<td>
					<? 
							}				
					?>
				</td>
				<td>
					<?

					?>
				</td>
				<td>

				</td>
			</tr>
		</tbody>
	</table>
	<div class="btn_style">
		<button>
			<a href="asset_add.php">추가</a>
		</button>
		<button>
			<a href="asset_delete.php">삭제</a>
		</button>
	</div>
</body>
</html>