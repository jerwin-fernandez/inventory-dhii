<?php require_once 'includes/header.php'; ?>

<?php 

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = "";
while ($orderResult = $orderQuery->fetch_assoc()) {
	$totalRevenue += $orderResult['paid'];
}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$connect->close();

?>
<ul class="nav navbar-nav navbar-left">        

      	


<style type="text/css">
	.ui-datepicker-calendar {
		display: none;
	}
</style>

<!-- fullCalendar 2.2.5-->
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="assests/plugins/fullcalendar/fullcalendar.print.css" media="print">


<!--
<div class="row">
	
	<div class="col-md-12">
		<div class="panel panel-success">
			<div class="panel-heading">
				
				<a href="product.php" style="text-decoration:none;color:black;">
					Total Product
					<span class="badge pull pull-right"><?php echo $countProduct; ?></span>	
				</a>

-->
	<div class="col-md-12">
	
		  <div class="cardHeader">
		   <a href="product.php" style="text-decoration:none;color:white;">
					Total Device Inventory
					<span class="badge pull pull-right"><?php echo $countProduct; ?></span>	
				</a>
		  </div>

<br>
	<div class="col-md-12">
		
		  
    <br>
  <div class="cardHeader">
 <a href="brand.php" style="text-decoration:none;color:white;">
 		Brand     
       	

		</a>
  </div>

  <br>
  <div class="cardHeader">
<a href="categories.php" style="text-decoration:none;color:white;">
       <div class="card-body">Categories</div>
  </div>
  <br>
  <div class="cardHeader">
<a href="setting.php" style="text-decoration:none;color:white;">
       <div class="card-body">
    Settings
   </div>
  </div>
  <br>




			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->
<!--
		<div class="col-md-12">
			<div class="panel panel-info">
			<div class="panel-heading">
				<a href="orders.php?o=manord" style="text-decoration:none;color:black;">
					Total Orders
					<span class="badge pull pull-right"><?php echo $countOrder; ?></span>
				</a>
					
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
		</div> <!--/col-md-4-->





				
			</div> <!--/panel-hdeaing-->
		</div> <!--/panel-->
	</div> <!--/col-md-4-->

	
	
		  </div>


	</div>
<!--
	<div class="col-md-8">
		<div class="panel panel-default">
			<div class="panel-heading"> <i class="glyphicon glyphicon-calendar"></i> Calendar</div>
			<div class="panel-body">
				<div id="calendar"></div>
			</div>	
		</div>
		
	</div>

	
</div> <!--/row-->

<!-- fullCalendar 2.2.5 -->

<!--
<script src="assests/plugins/moment/moment.min.js"></script>
<script src="assests/plugins/fullcalendar/fullcalendar.min.js"></script>


<script type="text/javascript">
	$(function () {
			// top bar active
	$('#navDashboard').addClass('active');

      //Date for the calendar events (dummy data)
      var date = new Date();
      var d = date.getDate(),
      m = date.getMonth(),
      y = date.getFullYear();

      $('#calendar').fullCalendar({
        header: {
          left: '',
          center: 'title'
        },
        buttonText: {
          today: 'today',
          month: 'month'          
        }        
      });


    });
</script>

-->

<?php require_once 'includes/footer.php'; ?>