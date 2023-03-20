<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="table1.css">
<link rel="stylesheet" type="text/css" href="nav.css">
<title>Inventory</title>
</head>

<body>

<div class="sidenav">
			<h2 style="font-family:Arial; color:white; text-align:center;"> Military Canteen Management System </h2>
			<p style="margin-top:-20px;color:white;line-height:1;font-size:12px;text-align:center">Developed by: Abhiuday & Amardeep	</p>
			<a href="adminmainpage.php">Dashboard</a>
			<button class="dropdown-btn">Inventory
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="inventory-add.php">Add New Product</a>
				<a href="inventory-view.php">Manage Inventory</a>
			</div>
			<button class="dropdown-btn">Employees
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="employee-add.php">Add New Employee</a>
				<a href="employee-view.php">Manage Employee</a>
			</div>
			<button class="dropdown-btn">Personnel
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="customer-add.php">Add New Personnel</a>
				<a href="customer-view.php">Manage Personnel</a>
			</div>
			<a href="sales-view.php">View Sales Invoice Details</a>
			<a href="salesitems-view.php">View Sold Products Details</a>
			<a href="pos1.php">Add New Sale</a>
			<button class="dropdown-btn">Reports
			<i class="down"></i>
			</button>
			<div class="dropdown-container">
				<a href="stockreport.php">Products - Low Stock</a>
				<a href="salesreport.php">Transactions Reports</a>
			</div>
	</div>


	<div class="topnav">
		<a href="logout.php">Logout</a>
	</div>
	
	<center>
	<div class="head">
	<h2> PRODUCT INVENTORY </h2>
	</div>
	</center>
	
	<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Quantity Available</th>
			<th>Category</th>
			<th>Price</th>
			<th>Location in Store</th>
			<th>Action</th>
		</tr>
	
	<?php
	include "config.php";
	
		$sql = "SELECT pr_id, pr_name,pr_qty,category,pr_price,location_rack FROM products";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {

		echo "<tr>";
			echo "<td>" . $row["pr_id"]. "</td>";
			echo "<td>" . $row["pr_name"] . "</td>";
			echo "<td>" . $row["pr_qty"]. "</td>";
			echo "<td>" . $row["category"]. "</td>";
			echo "<td>" . $row["pr_price"] . "</td>";
			echo "<td>" . $row["location_rack"]. "</td>";
			echo "<td align=center>";
						 
				echo "<a class='button1 edit-btn' href=inventory-update.php?id=".$row['pr_id'].">Edit</a>";
			
				echo "<a class='button1 del-btn' href=inventory-delete.php?id=".$row['pr_id'].">Delete</a>";
				
			echo "</td>";
		echo "</tr>";
		}
		echo "</table>";
		} 

	$conn->close();
	?>
	
</body>

<script>
	
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

			for (i = 0; i < dropdown.length; i++) {
			  dropdown[i].addEventListener("click", function() {
			  this.classList.toggle("active");
			  var dropdownContent = this.nextElementSibling;
			  if (dropdownContent.style.display === "block") {
			  dropdownContent.style.display = "none";
			  } else {
			  dropdownContent.style.display = "block";
			  }
			  });
			}
			
</script>

</html>
