<?php
// Version v1.1
// Version fanishah.ir
    require ('steamauth/steamauth.php');  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="shortcut icon" href="./favicon.png" type="image/png">
    <title>Authenticate Steam</title>
  </head>
  <body class="bg-body">
  <?php
if(!isset($_SESSION['steamid'])) {
	?>
    <div
      class="relative  mt-20 sm:mt-0 min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent p-6 sm:pb-0 rounded-3xl shadow-xl">
      <div class="flex-col flex  self-center lg:p-14 sm:max-w-4xl xl:max-w-md z-10">
        <div class="self-start hidden lg:flex flex-col  text-gray-300">
          <h1 class="font-semibold text-3xl">Authenticate Steam</h1>
        </div>
      </div>
      <div class="flex justify-center self-center  z-10">
        <div class="p-12 bg-gradient-to-b from-gray-900 via-gray-900 to-purple-800 mx-auto rounded-3xl w-96 ">
          <div class="space-y-6">
              <div>
                <h1 class="text-3xl text-center">Sign in</h1>
                <p class="text-justify">You can use Steam Auth to authenticate on the website and get SteamID Hex and Steam account information.
                </p>
              </div>
              <div>

                <?php loginbutton() ?>
              </div>
            </div>
            <div class="mt-7 text-center text-gray-400 text-xs">
              <span>
                    Copyright ©
					<script>
                 	 document.write(new Date().getFullYear())
               		 </script>
                    <a href="https://fanishah.ir" target="_blank" class="text-violet-500 hover:text-violet-600 ">fanishah</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
	} else {
	include('steamauth/userInfo.php');
	?>
	    <section style="font-family: Montserrat" class=" bg-body flex font-medium items-center justify-center h-screen">
      <div class="w-80 mx-auto  bg-gradient-to-b from-gray-900 to-purple-800 rounded-2xl px-8 py-6 shadow-lg">
          <div class="mt-6 w-fit mx-auto">
              <img src="<?=$steamprofile['avatarfull']?>" class="rounded-2xl w-28 " alt="profile picture">
          </div>
  
          <div class="my-3">
              <h2 class="text-white font-bold text-2xl text-center tracking-wide"><?=$steamprofile['personaname']?></h2>
          </div>
          <div>
            <div class="flex items-center"><p class="text-yellow-500 mr-1">SteamID</p><span><?=$steamprofile['steamid']?></span></div>
            <div class="flex items-center"><p class="text-yellow-500 mr-1">SteamID Hex</p><span>steam:<?=dechex($steamprofile['steamid']);?></span></div>
            <div class="flex items-center"><p class="text-yellow-500 mr-1">Persona State</p><span>
            <?php
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
            ?>
            </span></div>
          </div>
          <div class="mt-3">
           <?php logoutbutton() ?>
          </div>
      </div>
  </section>
	<?php } ?>
  </body>
</html>
