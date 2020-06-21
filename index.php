<?php
  include("logic.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet"> 
<script src="https://kit.fontawesome.com/cbe84cee06.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

<title>Covid-19 Tracker</title>
</head>

<body>
<div class="container-fluid bg-light p-5 text-center my-3">
<h1>Covid-19 Tracker</h1>
<h5 class="text-muted">Project to keep track of all the COVID-19 cases around the world.</h5>
</div>

<div class="container my-5">
<div class="row text-center">
<div class="col-4 text-warning">
<h5>Confirmed</h5>
<?php echo $total_confirmed; ?>
</div>
<div class="col-4 text-success">
<h5>Recovered</h5>
<?php echo $total_recovered; ?>
</div>
<div class="col-4 text-danger">
<h5>Deaths</h5>
<?php echo $total_deaths; ?>
</div>
</div>
</div>

<div class="container bg-light p-3 my-3 text-center">
<h5 class="text-info">Prevention is the only cure.</h5>
<p class="text-muted">Stay Indoors Stay Safe.</p>
</div>

<div class="container-fluid">
<div class="table-responsive">
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Countries</th>
<th scope="col">Confirmed</th>
<th scope="col">Recovered</th>
<th scope="col">Deaths</th>
</tr>
</thead>
<tbody>
   <?php
     foreach($data as $key => $value){
		 $increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed']
   ?>
   
   <tr>
     <th><?php echo $key; ?></th>
	 <td>
	   <?php echo $value[$days_count]['confirmed']; ?>
	   <?php if($increase != 0){?>
	   <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase; ?></small>
	   <?php } ?>
	 </td>
	 <td>
	   <?php echo $value[$days_count]['recovered']; ?>
	 </td>
	 <td>
	   <?php echo $value[$days_count]['deaths']; ?>
	 </td>
   </tr>
   
	 <?php } ?>
</tbody>
</table>
</div>
</div>


<footer class="footer mt-auto py-3 bg-light">
  <div class="container text-center">
    <span class="text-muted">Copyright &copy;2020, Crystal Monica Abou Jneid.</span>
  </div>
</footer>

</body>
</html>











