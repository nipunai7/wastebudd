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
                                            <img class="avatar border-gray" src="https://www.google.lk/imgres?imgurl=https%3A%2F%2Fmedia-exp1.licdn.com%2Fdms%2Fimage%2FC4D03AQG-nTZG8vnhZg%2Fprofile-displayphoto-shrink_200_200%2F0%3Fe%3D1603324800%26v%3Dbeta%26t%3DSv_Z7MtLccT3Tvts6lIMs6LLqmk6UWSNgdsgjLBvn0k&imgrefurl=https%3A%2F%2Flk.linkedin.com%2Fin%2Fruwanthi-perera-mit&tbnid=iwvVsemYd-bBxM&vet=12ahUKEwi1nq6--vbrAhXbDLcAHcObAsQQMygEegUIARCVAQ..i&docid=6jWyutNgrWInjM&w=200&h=200&q=ruwanthi%20perera&ved=2ahUKEwi1nq6--vbrAhXbDLcAHcObAsQQMygEegUIARCVAQ" alt="...">
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

