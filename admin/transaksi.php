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
                        <a href="user.php"><i class="fa fa-user-plus"></i>User </a>
                        
                    </li>
                    
                    <li>
                        <a href="produk.php"><i class="fa fa-dashcube"></i>Produk </a>
                        
                    </li>
                   
                     
                     <li>
                        <a class="active-menu" href="transaksi.php"><i class="fa fa-dashcube"></i>Transaksi</a>
                    </li>
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Transaksi</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Transaksi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>Nama Produk</th>
                                            <th>Pembeli</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "../koneksi.php";
                                        $transaksi=mysql_query("select * from transaksi,produk where transaksi.id_produk=produk.id");
                                        $no=1;
                                        while($getTransakasi = mysql_fetch_assoc($transaksi)){
                                    ?>
                                        <tr>
                                            <td><?php echo"$no"; ?></td>
                                            <td><?php echo"$getTransakasi[id_transaksi]"; ?></td>
                                            <td><?php echo"$getTransakasi[nama]"; ?></td>
                                            <td><?php echo"$getTransakasi[username]"; ?></td>
                                            <td><?php echo"$getTransakasi[harga]"; ?></td>
                                            <td><?php echo"$getTransakasi[status_order]"; ?></td>
                                            <td><?php echo"$getTransakasi[tanggal]"; ?></td>
                                            <td align="center">
                                            <?php
                                            if($getTransakasi['status_order']!='sukses'){
                                            ?>
                                            <a href="proses-order.php?id=<?php echo"$getTransakasi[id_transaksi]"; ?>" class="btn btn-success">Sukses</a>
                                            <?php
                                            }
                                            ?>
                                            </td>
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
