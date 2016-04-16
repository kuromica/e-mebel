<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.html">Admin Panel 

                </a>
            </div>

            <div class="notifications-wrapper">
            <ul class="nav">   
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="../index.php"><i class="fa fa-sign-out"></i> View Full Website</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/administrator.png" class="img-circle" />
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <strong> Admin </strong></a>
                    </li>

                    <li>
                        <a href="index.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="user.php"><i class="fa fa-user-plus"></i>User </a>
                        
                    </li>
                    
                    <li>
                        <a href="produk.php"><i class="fa fa-dashcube"></i>Produk </a>
                        
                    </li>
                   
                     
                     <li>
                        <a href="transaksi.php"><i class="fa fa-dashcube"></i>Transaksi</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Member</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Member
                        </div>
                        <div class="panel-body">
                            <a id="btnShowHide" href="#" class="btn btn-success" style="background-color:#DD1533;border:1px solid #DD1533;">Tambah Member</a><br><br>
                            <div id="showMe" class="well" style="display: none;">
                                <form action="tambah-user.php" method="post" enctype="multipart/form-data">
                                <h2>Tambah User</h2>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="Username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="nama_lengkap" class="form-control" id="inputEmail3" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor HP</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="no_hp" class="form-control" id="inputEmail3" placeholder="Nomor HP">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-5">
                                      <input type="password" name="password" class="form-control" id="inputEmail3" placeholder="Password">
                                    </div>
                                    <div class="col-sm-5">
                                      <input type="password" name="ulang_password" class="form-control" id="inputEmail3" placeholder="Ulang Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Level</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="level">
                                          <option value="admin">Admin</option>
                                          <option value="suplier">Suplier</option>
                                          <option value="user">User</option>
                                      </select>
                                    </div>
                                </div>
                                
                                <input name="submit" type="submit" id="submit" value="Tambah" class="btn btn-success" style="background-color:#DD1533;border:1px solid #DD1533;">
                                </form>
                            </div>      


                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Email</th>
                                            <th>Alamat</th>
                                            <th>Level</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "../koneksi.php";
                                        $user=mysql_query("select * from user");
                                        $no=1;
                                        while($getUser = mysql_fetch_assoc($user)){
                                    ?>
                                        <tr>
                                            <td><?php echo"$no"; ?></td>
                                            <td><?php echo"$getUser[username]"; ?></td>
                                            <td><?php echo"$getUser[nama_lengkap]"; ?></td>
                                            <td><?php echo"$getUser[email]"; ?></td>
                                            <td><?php echo"$getUser[alamat]"; ?></td>
                                            <td><?php echo"$getUser[level]"; ?></td>
                                            <td align="center"><a href="#" class="btn btn-success">Edit</a>  <a href="hapus-user.php?username=<?php echo"$getUser[username]"; ?>" class="btn btn-danger">Hapus</a></td>
                                        </tr>
                                    <?php
                                    $no++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <footer >
        &copy; 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script>
        $(document).ready(function() {
            // When the button is clicked..
            $("#btnShowHide").click(function(){
                // Use JQuery to toggle a Bootstrap "well" div
                $("#showMe").toggle();  
               // Toggle button text based on its current contents
               $(this).text(function(i, text){
                return text === "Tambah Member" ? "Batal" : "Tambah Member";
               })
               return false;
            })  
        });
    </script>

</body>
</html>
