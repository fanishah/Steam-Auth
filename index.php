<?php
// Version v1.0
// Version fanishah.ir
    require ('steamauth/steamauth.php');  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- bootstrap css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-+qdLaIRZfNu4cVPK/PxJJEy0B0f3Ugv8i482AKY7gwXwhaCroABd086ybrVKTa0q" crossorigin="anonymous">
	<!-- bootstrap css -->
	
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<!-- bootstrap icons -->
	<title>SteamID Finder</title>
  </head>
  <body class='bg-dark'>
    <div>
		<?php
if(!isset($_SESSION['steamid'])) {
	?>

<div class='container-fluid vh-100 row justify-content-center align-items-center'>
	<div class='row justify-content-center align-items-center'>
		<div class='col-12 col-sm-9  col-lg-6 my-5'><div class='card '>
			<div class='card-header p-3 pt-2  bg-secondary'>
			<div class='text-end pt-1' >
					<h5 class='text-sm mb-0 text-capitalize'>SteamID Finder</h5>
				</div>
			</div>
			<hr class='dark horizontal my-0  bg-secondary'>
			<div class='card-footer p-3  bg-secondary'>
				<h5 class='mb-0 text-center'>
					<h6 class="text-dark text-center mb-2">
					You can use SteamID Finder to find out about SteamID Hex and SteamID Dec
					</h6>
					<?php loginbutton() ?>
			    	</h5>
					</div>
			</div>
		</div>
	</div>
	<footer class="footer">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-center">
            <div class="col-9">
              <div class="copyright text-start text-sm text-muted text-lg-center">
                made with <i class="bi bi-suit-heart-fill"></i> by
                <a href="https://fanishah.ir" class="font-weight-bold" target="_blank">fanishah</a>
				-
				<script>
                  document.write(new Date().getFullYear())
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
</div>

	<?php
	}  else {
    include ('steamauth/userInfo.php');
	?>
		
		<div class='container-fluid justify-content-center align-items-center'>
	<div class='row d-flex justify-content-center align-items-center'>
<div class="card mb-3 bg-secondary" style="max-width: 540px;">
  <div class="row">
    <div class="col-4 col-md-4 my-2">
	<img src='<?=$steamprofile['avatarfull']?>class="img-fluid rounded-start" '>
    </div>
    <div class="col-8 col-md-8">
      <div class="card-body">
	 	 <p >
		  Persona Name : <?=$steamprofile['personaname']?>
		  </p>
		  <p >
		  SteamID : <?=$steamprofile['steamid']?>
		  </p>
		  <p>
		  SteamID Hex : <?=dechex($steamprofile['steamid']);?>
		  </p>
		  <p>
		  Persona State : <?php
		  if($steamprofile['personastate']==0){
			  echo "Offline";
			}elseif($steamprofile['personastate']==1){
				echo "Online";
			}elseif($steamprofile['personastate']==2){
				echo "Busy";
			}elseif($steamprofile['personastate']==3){
				echo "Away";
			}elseif($steamprofile['personastate']==4){
				echo "Snooze";
			}elseif($steamprofile['personastate']==5){
				echo "looking to trade";
			}elseif($steamprofile['personastate']==6){
				echo "looking to play";
		  }
		  logoutbutton();
		 ?>
		  </p>
		  
      </div>
    </div>
  </div>
</div>
	</div>
	<footer class="footer">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-center">
            <div class="col-9">
              <div class="copyright text-start text-sm text-muted text-lg-center">
                made with <i class="bi bi-suit-heart-fill"></i> by
                <a href="https://fanishah.ir" class="font-weight-bold" target="_blank">fanishah</a>
				-
				<script>
                  document.write(new Date().getFullYear())
                </script>
              </div>
            </div>
          </div>
        </div>
      </footer>
</div>
		<?php
		}    
		?>
	</div>
	
	<!--Version v1.0--> 
	<!--Version fanishah.ir--> 
  </body>
</html>
