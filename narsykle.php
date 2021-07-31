<?php

if(strpos($_SERVER['HTTP_USER_AGENT'], 'Edg') !== FALSE) {
   echo 'Microsoft edge';
   echo "<br>";
   echo "<img src='https://cdn.vox-cdn.com/thumbor/VeEPEECslTmxDJwzV2RHXhslYpg=/0x0:1980x1320/920x613/filters:focal(832x502:1148x818):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/65613211/microsoftedgenewlogo.5.jpg' >";
} else if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
echo 'Google Chrome';
echo "<br>";
echo "<img src='https://play-lh.googleusercontent.com/KwUBNPbMTk9jDXYS2AeX3illtVRTkrKVh5xR1Mg4WHd0CG2tV4mrh1z3kXi5z_warlk' >";
} else echo " Sia narsykle nesinaudoju";
   

?>