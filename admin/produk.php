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
                        <a class="active-menu" href="tutor-bertani.php"><i class="fa fa-dashcube"></i>Produk </a>
                        
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
                        <h1 class="page-head-line">Produk</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Produk
                        </div>
                        <div class="panel-body">
                            <a id="btnShowHide" href="#" class="btn btn-success" style="background-color:#DD1533;border:1px solid #DD1533;">Tambah Produk</a><br><br>
                            <div id="showMe" class="well" style="display: none;">
                                <form action="tambah-produk.php" method="post" enctype="multipart/form-data">
                                <h2>Tambah Produk</h2>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Produk</label>
                                    <div class="col-sm-10">
                                      <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Produk">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Keterangan</label>
                                    <div class="col-sm-10">
                                      <textarea name="keterangan" placeholder="Keterangan" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Harga</label>
                                    <div class="col-sm-10">
                                      <input type="harga" name="harga" class="form-control" id="inputEmail3" placeholder="Harga">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Oleh</label>
                                    <div class="col-sm-10">
                                      <select class="form-control" name="suplier">
                                        <?php
                                        include "../koneksi.php";
                                        $getSuplier=mysql_query("select * from suplier");
                                        while($suplier=mysql_fetch_array($getSuplier)){
                                        ?>
                                          <option value="<?php echo $suplier['id_suplier']?>"><?php echo $suplier['nama']?></option>
                                        <?php
                                        }
                                        ?>
                                      </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
                                    <div class="col-sm-10">
                                      <input type="file" name="foto"><br>
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
                                            <th>Gambar</th>
                                            <th>Nama Produk</th>
                                            <th>Keterangan Produk</th>
                                            <th>Harga</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        include "../koneksi.php";
                                        $produk=mysql_query("select * from produk");
                                        $no=1;
                                        while($getProduk = mysql_fetch_assoc($produk)){
                                    ?>
                                        <tr>
                                            <td><?php echo"$no"; ?></td>
                                            <td><img src="../images/<?php echo $getProduk['foto']; ?>" height="35px" width="35px"></td>
                                            <td><?php echo"$getProduk[nama]"; ?></td>
                                            <td>
                                                <?php
                                                    $kalimat="$getProduk[keterangan]";
                                                    $print= substr($kalimat,0,50);
                                                    echo "$print";
                                                ?>
                                            </td>
                                            <td><?php echo"$getProduk[harga]"; ?></td>
                                            <td><?php echo"$getProduk[tanggal]"; ?></td>
                                            <td align="center"><a href="#" class="btn btn-success">Edit</a>  <a href="hapus-produk.php?id=<?php echo"$getProduk[id]"; ?>" class="btn btn-danger">Hapus</a></td>
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
                return text === "Tambah Produk" ? "Batal" : "Tambah Produk";
               })
               return false;
            })  
        });
    </script>

</body>
</html>
