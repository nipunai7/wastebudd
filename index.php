
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    
   <link rel="icon"  href="https://img.icons8.com/dusk/2x/garbage-truck.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Waste Management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
        
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQA2OVeThkfkmGbgVl7HOQUGcCPhWgXDrnHWQ&usqp=CAU" data-color = "blue">
            

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="" class="simple-text">
                        Waste Management System
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>My Account</p>
                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="./maps.html">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Location</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.html">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            
            <nav class="navbar navbar-expand-lg bg-light " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"> Dashboard </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <span class="notification">3</span>
                                    <span class="d-lg-none">Notifications</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Garbage bin at Bandaragama town is full.</a>
                                    <a class="dropdown-item" href="#">2 Garbage bins are full at Kelaniya.</a>
                                    <a class="dropdown-item" href="#">Another Notification......</a>
                                    
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Select Area</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Bandaragama</a>
                                    <a class="dropdown-item" href="#">Hikkaduwa</a>
                                    <a class="dropdown-item" href="#">Kelaniya</a>
                                    <a class="dropdown-item" href="#">Colombo</a>
                                    
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user.html">
                                    <span class="no-icon"> 
                                        <button class="btn-outline-success btn-sm">Sign Up</button></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="no-icon"><button class="btn-outline-danger btn-sm">Log Out</button></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Garbage Collecting Summary</h4>
                                    <p class="card-category">Today Statistics</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartPreferences" class="ct-chart "></div>
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Glass
                                        <i class="fa fa-circle text-danger"></i> Polythene
                                        <i class="fa fa-circle text-warning"></i> Food wastage
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Last collected 2 hours ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Behaviour Chart</h4>
                                    <p class="card-category">Last Week Performance</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartHours" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Food Wastage
                                        <i class="fa fa-circle text-danger"></i> Polythene
                                        <i class="fa fa-circle text-success"></i> Glass
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 5 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">2020 Overall Statistics</h4>
                                    <p class="card-category">Collected Garbage</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartActivity" class="ct-chart"></div>
                                </div>
                                <div class="card-footer ">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Bio-degradable waste
                                        <i class="fa fa-circle text-danger"></i> Non Bio-degradable waste
                                    </div>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card  card-tasks">
                                <div class="card-header ">
                                    <h4 class="card-title">Where to collect next?</h4>
                                    
                                </div>
                                
                                                   
                                <div class="card-footer ">
                                    <hr>
                                    <div class="stats">
                                        <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
</body>

<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="../assets/js/demo.js"></script>

       <script>
           window.onload = function () {

var options = {
	
	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40, 
		
		
		indexLabelFontSize: 16,
		
		dataPoints: [
			{ y: 48, label: "Food Waste 48%" },
			{ y: 20, label: "Polythene 20%" },
			{ y: 32, label: "Glass 32%" },
		
			
		]
	}]
};
$("#chartPreferences").CanvasJSChart(options);

}
</script>


<div id="chartPreferences" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>


</html>
