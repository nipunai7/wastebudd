<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
     <link rel="icon"  href="https://img.icons8.com/dusk/2x/garbage-truck.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Waste Management System</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
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
                    <li>
                        <a class="nav-link" href="./index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>My Account</p>
                        </a>
                    </li>
                   
                    
                    
                    <li>
                        <a class="nav-link" href="./location.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Location</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./notifications.php">
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
                    <a class="navbar-brand" href="./index.php"> Dashboard </a>
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
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">My Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-md-6 px-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Username" value="Ruwanthi">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="Ruwanthi">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name" value="Perera">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control" placeholder="Home Address" value="NO 114/A, Weediyagoda Road, Bandaragama">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" placeholder="City" value="Bandaragama">
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <input type="text" class="form-control" placeholder="Country" value="Sri Lanka">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input type="number" class="form-control" placeholder="ZIP Code">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <img src="https://images.unsplash.com/photo-1579795264646-2b9e0b31e6de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            <img class="avatar border-gray" src="data:image/jpeg;base64,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" alt="...">
                                            <h5 class="title">Ruwanthi Perera</h5>
                                        </a>
                                        <p class="description">
                                        <input type="button" class="btn-danger btn-fill" value="Sign Out">
                                        </p>
                                    </div>
                                    
                                </div>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
  
</body>

<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<script src="assets/js/plugins/chartist.min.js"></script>
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<script src="assets/js/demo.js"></script>

</html>

