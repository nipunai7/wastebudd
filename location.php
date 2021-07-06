
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
                    <li class="nav-item active ">
                        <a class="nav-link" href="./index.php">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>My Account</p>
                        </a>
                    </li>
                    
                    <li>
                        <a class="nav-link" href="./maps.php">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Location</p>
                        </a>
                    </li>
                    <li class= nav-link>
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
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.2952617587734!2d79.91387131472085!3d6.974449094961486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae258033380c747%3A0x12c707892cabde33!2sUniversity%20of%20Kelaniya%20-%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1625600209104!5m2!1sen!2slk" width="1200" height="900" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                    <!--  End Modal -->
                </div>
            </div>
           
        </div>
    </div>
   </body>

<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>

<script src="../assets/js/plugins/bootstrap-switch.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<script src="../assets/js/plugins/chartist.min.js"></script>

<script src="../assets/js/plugins/bootstrap-notify.js"></script>

<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>

<script src="../assets/js/demo.js"></script>

</html>
