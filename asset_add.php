<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<style>
	#wrap 
	{
		border-top:1px solid gray;
		border-right:1px solid gray;
		width:622px;
		height:118px;
		color:#333;
	}

	.fld_title 
	{ 
		float:left; 
		padding:12px 0px 1px 10px;
		width:100px; 
		height:25px;
		font-size:12px; 
		font-weight:bold;
		border-left:1px solid gray;
		border-bottom: 1px solid gray;
	}    

	.fld_val 
	{      
		float:left; 
		padding:10px 0px 3px 10px; 
		font-size:12px; 
		width:500px;
		height:25px;
		border-left:1px solid gray;
		border-bottom: 1px solid gray; 
	}

	.btn_fld 
	{      
		float:left; 
		text-align:center;
		padding-top:10px;
		font-size:12px; 
		width:622px;
		height:30px;
		border-left:1px solid gray;
		border-bottom: 1px solid gray; 
	}       
	</style>
</head>
<html>
<title>스마트 홈 정보 자산 관리 시스템</title>
<body>
	<div id="wrap">
		<form name="asset_add" method="post" action="save.php">
			<div id="asset_type_title" class="fld_title">
				자산 유형
			</div>
			<div id="asset_type_select" class="fld_val">
				<select name="col_type_name">
					<option value="">유형 선택</option>
					<option value="Book">Book</option>
					<option value="CD">CD</option>
					<option value="USB">USB</option>
				</select>
			</div>
			<div id="asset_name" class="fld_title">
				자산 이름
			</div>
			<div class="fld_val">
				<input type="text"
						id="name_fld"
						name="col_reg_name"
						maxlength="64"
						size="25">
			</div>
			<div id="asset_add" class="btn_fld">
				<input type="submit"
						id="submit_btn"
						class="btn_style"
						value="추가">
			</div>
		</form>
	</div>
</body>
</html>