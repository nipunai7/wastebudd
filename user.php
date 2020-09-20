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
                        <a class="nav-link" href="index.php">
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
                        <a class="nav-link" href="#">
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
                    <a class="navbar-brand" href="index.php"> Dashboard </a>
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
                                <a class="nav-link" href="user.php">
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

