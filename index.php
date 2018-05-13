<head>
	<title>Manage</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>
	body {margin:0;}

	ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		position: fixed;
		top: 0;
		width: 100%;
	}

	li {
		float: left;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	li a:hover:not(.active) {
		background-color: #111;
	}

	.active {
		background-color: #4CAF50;
	}
	
	#table_product tr:first-child{
		background-color:#D3D3D3;
		color : #424242;
		padding : 20px;
	}
	
	#table_product td{
		padding : 20px;
	}
	
	#pagecontent{
		padding:20px;
		margin-top:30px;
		background-color:#1abc9c;
		height:100%;
	}
</style>

</head>

<body onload=onload()>

	<ul>
	  <li><a class="active" href="#home">สินค้าทั้งหมด</a></li>
	  <li><a href="#news">เพิ่ม/ลด/แก้ไข สินค้า</a></li>
	  <li><a href="#contact">การแจ้งชำระเงินของลูกค้า</a></li>
	</ul>
	<div id='pagecontent' >
		<h1 id='head'></h1>
		<p id='content'>Some text some text some text some text..</p>

	</div>

</body>


<script>
function onload(){
	$('#head').html("สินค้าทั้งหมด");
	var content = document.getElementById('content');
	content.innerHTML =  "<table id='table_product' style='width:100%'></table>";
	var table = document.getElementById('table_product');
	table.innerHTML =  "<tr><td>ลำดับ</td><td>ชื่อสินค้า</td><td>รหัสสินค้า</td><td>รูปภาพ</td><td>ราคา</td><td>จำนวน</td></tr>";
	product_load();
}

function product_load(){
	$.ajax({
		url : "product_load.php",
		type : "post",
		data : {},
		success:function(result){
			alert(result);
		}
	});
}

</script>