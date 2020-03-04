<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>NTTshop</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="source/script.php">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
</head>

<body>

	<?php include ('source/script.php'); ?>
	<div class="bgjumbotron text-center"><p>NTTshop</p>
  	<p><small><i>All for you!</i></small></p></div>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center sticky-top">  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#Ram">Ram</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mainboard">Mainboard</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="#HDD">HDD-SDD</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admin
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#UID">Update-Insert-Delete Products</a>
      </div>
    </li>
  </ul>
</nav>

<div id="Ram" class="container-fluid bg-light btn-sm" style="padding-top:50px;padding-bottom:70px;width: 900px;">
	 <div class="d-flex justify-content-start bg-light mb-3">
    <div class="p-2 bg-light" > <h1 style="width: 100px;padding-bottom:-100px " >Ram</h1></div>
    <div class="p-3 bg-light" >
		
    	<?php
				$con = mysqli_connect("localhost","root",""	);
				mysqli_set_charset($con,"utf8");
				if(!$con){
					echo "Lỗi không thể kết nối";
				}else{
					$db = mysqli_select_db($con,"qlbh");
					//
					if(!$db){
						echo "Không chọn được db";
					}else {
						$query = "select * from producer";
						$result = mysqli_query($con,$query);
						
						echo "<select name='cars' class='custom-select-sm mb-3'>";
						echo "<option value=''>---Choose Producer---</option>";
						if(mysqli_num_rows($result)>0){
							while($row = mysqli_fetch_assoc($result) )
								echo  "<option value='<a href='index.php?idncc=".$row["idncc"].">".$row['tenncc']."</option>";
								
						}
						echo "</select>";
					}
				}
				mysqli_close($con);
			?>
			
		
    	
  		
		 </div>
		
  </div>
	 <div class="p-3 bg-light"><?php
				$con = mysqli_connect("localhost","root","");
				if(!$con){
					echo "Lỗi không thể kết nối";
				}else{
					$db = mysqli_select_db($con,"qlbh");
					mysqli_set_charset($con,"utf8");
					if(!$db){
						echo "Không chọn được db";
					}else {
						$query = "select * from sanpham,producer where  sanpham.idncc=producer.idncc limit 3";
						if(isset($_GET["idncc"])){
							$query = $query." where idloai = '".$_GET["idncc"]."'";
						}
						
						$result = mysqli_query($con,$query);
						if(mysqli_num_rows($result)>0){
							while($row = mysqli_fetch_assoc($result)){
								echo "<table width='500' >
									  <tbody>
										<tr>
										  <td rowspan= 4 width='200px' heigh='200px' >"?> <img src=" <?php echo $row["images"] ?>" height="150px" width="150px"><?php echo "</td>
										  <td colspan='2' width='20'><b>".$row["tenncc"]."</b></td>
										  <td>&nbsp</td>

										</tr>
										<tr>
										 <td colspan='2'>".$row["tensp"]."</td>

										  <td>&nbsp;</td>
										</tr>
										<tr>
										  <td colspan='2'>Số lượng: ".$row["soluong"]."</td>
										  <td>&nbsp;</td>

										</tr>
										<tr>
										  <td colspan='2'><b>Gía: </b>".$row["dongia"]." VND</td>
										  <td>&nbsp;</td>

										</tr>
									  </tbody>
										  
									</table>
									</br>";
									
								
						}
					}
				}
				mysqli_close($con);
			}
			?>
		 </div>
	<div class="pagination">
		<nav aria-label="Search results pages">
   <ul class="pagination">
      <li class="page-item disabled">
         <a class="page-link" href="" tabindex="-1">Previous</a>
      </li>
      <li class="page-item">
         <a class="page-link" href="index.php">1</a>
      </li>
      <li class="page-item">
         <a class="page-link" href="index2.php">2</a>
      </li>
      <li class="page-item">
         <a class="page-link" href="index3.php">3</a>
      </li>
     
   </ul>
</nav>
	</div>
	
		
</div>
<div id="mainboard" class="container-fluid bg-light btn-sm" style="padding-top:50px;padding-bottom:70px;width: 900px;">
	 <div class="d-flex justify-content-start bg-light mb-3">
    <div class="p-1 bg-light" > <h1 style="width: 250px;margin-bottom:-10px" >Mainboard</h1></div>
    <div class="p-3 bg-light" >
		<form action="#" method="post">
    	<select name="cars" class="custom-select-sm mb-3">
      		<option selected>----Choose Producer----</option>
     	 	<option value="AMD">Mainboard for CPU AMD</option>
      		<option value="INTEL">Mainboard for CPU Intel</option>
      		<option value="Asus">Mainboard Asus</option>
			<option value="MSI">Mainboard MSI</option>
    	</select>
		<select name="cars" class="custom-select-sm mb-3">
      				<option selected>--Choose Memory slots--</option>
     	 			<option value="DDR3">2 Memory slots</option>
      				<option value="DDR4">4 Memory slots</option>
      				<option value="DDR4">8 Memory slots</option>
					<option value="DDR4">16 Memory slots</option>
    			</select>
    	<button type="submit" class="btn btn-primary">Submit</button>	
  		</form>
		 </div>
  </div>
</div>
<div id="HDD" class="container-fluid bg-light btn-sm" style="padding-top:50px;padding-bottom:70px;width: 900px;">
	 <div class="d-flex justify-content-start bg-light mb-3">
    <div class="p-2 bg-light" > <h1 style="width: 200px;padding-bottom:-100px " >HDD-SDD</h1></div>
    <div class="p-3 bg-light" >
		<form action="#" method="post">
    	<select name="cars" class="custom-select-sm mb-3">
      		<option selected>--Choose Producer--</option>
     	 	<option value="Corsair">Corsair</option>
      		<option value="Kingston">Kingston</option>
      		<option value="KingMax">KingMax</option>
    	</select>
		<select name="cars" class="custom-select-sm mb-3">
      				<option selected>--Choose Product Type--</option>
     	 			<option value="hdd">HDD</option>
      				<option value="ssd">SSD</option>
      		
    	</select>
		<select name="cars" class="custom-select-sm mb-3">
      				<option selected>--Choose Disk Capacity--</option>
     	 			<option value="120">120Gb</option>
      				<option value="240">240Gb</option>
					<option value="256">256Gb</option>
					<option value="512">512Gb</option>
      				<option value="1">1Tb</option>
    	</select>
    	<button type="button" class="btn btn-primary">Submit</button>	
  		</form>
		 </div>
  </div>
</div>
<div id="UID" class="container-fluid bg-light" style="padding-top:50px;padding-bottom:70px;width: 900px">
	<h1>Admin</h1>
  	<div class="container text-center" style="margin:50px 50px 50px;margin-top: 50px ">
		
		<span><a href="insert.php"><button type="submit" class="btn btn-success" style="paddind:0px"  >Update-Insert-Delete Products</button></a></span>
	</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <div><p>&copy; 2019 NTT shop. All Rights Reserved | Design by <a href="#">NTTproduction</a> </p></div>
</div>

</body>
</html>