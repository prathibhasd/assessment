<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online Student Feedback System for Mangalore University</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="http://localhost/Code3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="http://localhost/Code3/css/modern-business.css" rel="stylesheet">
	<script src="http://localhost/Code3/js/sweetalert.min.js"></script>

    <!-- Custom Fonts -->
    <link href="http://localhost/Code3/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
				<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

</head>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
		 
        
							$.ajax({
									url:'deletep',
									type:"POST",
									data:{
										id: id
										
									},
									success:function(result)
									{
										
										swal({
											title: "Deleted!",
											text: "Programme Details Deleted Successfully!",
											icon: "success"
										}).then(function() {
											window.location.reload();
										});
									}
								});
				
     }
}


function updates(id)
{
	
					
					$.ajax({
									url:'updatep',
									type:"POST",
									data:{
										id: id
									},
									success:function(result)
									{
										console.log(result);
										 window.location.href = "updateformp";
									}
								});
				
     
}


</script>	

<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 1">
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.php">Online Student Feedback System for Mangalore University</a>
            </div>
            <!-- /.navbar-header -->
        </nav>
<h3><a href="<?= base_url() ?>Crud/dashboard" style="float: right;margin:15px;"><i class="fa fa-arrow-circle-left"></i> Back</a></h3>

<h3 class="page-header"><center>Programme Details</center></h3>
<div class="col-lg-8" style="margin:15px;">

<?php



	echo "<div id='display'>";
	echo "<table class='table table-responsive table-bordered table-striped table-hover' style=margin:15px;>";
	echo "<tr>";
	
	echo "<th>Programme No</th>";
	echo "<th>Programme Code</th>";
	echo "<th>Programme Name</th>";
	echo "<th>Department Name</th>";
	echo "<th>Campus Code</th>";
		
	echo "<th>Update</th>";
	echo "<th>Delete</th>";
	
	echo "</tr>";
	
	$i=1;
	
	
	foreach ($data as $row)
	{

		echo "<tr>";
		echo "<td>".$row->Pgm_no."</td>";
		echo "<td>".$row->Pgm_code."</td>";
		echo "<td>".$row->Pgm_name."</td>";
		echo "<td>".$row->Dept_name."</td>";
		echo "<td>".$row->Campus_code."</td>";
		
		
		
		echo "<td class='text-center'><a href='#' onclick='updates($row->Pgm_no)'><span class='glyphicon glyphicon-pencil'style=color:green;></span></a></td>";
		
		
		echo "<td class='text-center'><a href='#' onclick='deletes($row->Pgm_no)'><span class='glyphicon glyphicon-remove' style=color:red;></span></a></td>";
		
		
		echo "</tr>";
		$i++;
		
		
		
	}
	echo "</div>";
?>