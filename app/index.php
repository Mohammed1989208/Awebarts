<?php
session_start();
if(!isset($_SESSION['username']))
{
	include "login.php";
	die();
}

?>

<?php include ('header.php');?>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			
			<?php include("sidebar.php");?>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
	<div class="page-content">
	<?php
	if(@$_GET['page']){
		$url="controllers/C_".$_GET['page'].".php";
		
		   if(is_file($url)){
		   	include $url;
		   }
		   else{
		   	echo "required file is not found";
		   }
		}
	else{
		include 'main.php';
	    }	
		?>
	</div>
	<!-- END CONTENT -->
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<?php include("footer.php");?>