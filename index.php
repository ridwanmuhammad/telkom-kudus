<?php require_once('Connections/telkom.php'); ?>
<?php
session_start();
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_telkom, $telkom);
$query_telkom = "SELECT * FROM egbis";
$telkom = mysql_query($query_telkom, $telkom) or die(mysql_error());
$row_telkom = mysql_fetch_assoc($telkom);
$totalRows_telkom = mysql_num_rows($telkom);
?>
<!DOCTYPE html>	
<html lang="en">

<head>


<style>


table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid black;
}

th, td {
    
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>




    <meta charset="utf-8">
	<link rel="icon" type="image/png" href="admin/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Telkom Kudus</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                      <span class="light"><img width="30px" src="img/earth.png" /> Telkom Kudus</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="#test2"><strong>Tentang</strong></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><!--PT Telkom--></h1>
                        <p class="intro-text"><!--PT telekomunikasi witel,tbk--></p>
                        <center>
                        
                            
                            
            <?php 
							
				$n = !empty($_SESSION['MM_Username']) ? $_SESSION['MM_Username'] : "";
				if($n == NULL){?>
                            
                    <a style="color:#000; font-size:20px; border-radius:5px;" href="login.php"><div class="btn btn-danger" style="width:300px;">Login</div></a>
                            
                <?php }else{ ?>
					<a style="color:#000; font-size:20px; border-radius:5px;" href="admin/index.php"><div class="btn btn-danger" style="width:300px;">Kembali ke Menu</div></a>
				<?php } ?>
                            
                        
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </header>



   


<section id="test2">
        <center>
            	<div style="height:100px;"></div>
            	
                <div style="height:540px; background-color:white; width:90%; color:#000">
            	
                
                <h3>Tentang Telkom</h3>
                Dalam rangka menuju perusahaan digital telco, Telkom melakukan transformasi organisasi dari sebelumnya berdasarkan adjacent portfolio empat segmen usaha digital TIMES (Telecommunication, Information, Media, Edutaiment and Services) menuju model Customer Facing Unit dan Functional Unit, atau disebut CFU dan FU. Transformasi tersebut akan membuat organisasi Telkom menjadi lebih lean (ramping) dan agile (lincah) dalam beradaptasi dengan perubahan industri telekomunikasi yang berlangsung sangat cepat. Organisasi yang baru juga diharapkan dapat meningkatkan efisiensi dan efektivitas dalam menciptakan customer experience yang berkualitas.

Kegiatan usaha Telkom bertumbuh dan berubah seiring dengan perkembangan teknologi, informasi dan digital, namun masih dalam koridor industri telekomunikasi dan informasi. Hal ini terlihat dari lini bisnis yang terus berkembang melengkapi legacy yang sudah ada sebelumnya. Saat ini Telkom mengelola 6 produk portofolio yang melayani empat segmen konsumen, yaitu korporat, perumahan, perorangan dan segmen konsumen lainnya.
           </div></center>
</section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; PT telekomunikasi witel,tbk</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
-->
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
<?php
mysql_free_result($telkom);
?>
