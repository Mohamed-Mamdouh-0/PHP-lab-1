<?php
// phpinfo();
// -----------------
const pageName = "Mohamed's Page Name";
echo pageName;
// -------------------------
// print_r($_SERVER);
echo "<br/>";
// print_r($_SERVER);
echo "<br /> server port : " .$_SERVER["SERVER_PORT"] ."<br/>";
echo "server address : " .$_SERVER["SERVER_ADDR"] ."<br/>";
echo "server name : " .$_SERVER["SERVER_NAME"] ."<br/>";
echo "file path and name : " .__FILE__ ."<br/>";

// ------------------
$brotherAge = 10;
echo "<br /> brother's Age" .$brotherAge;
switch($brotherAge){
    case $brotherAge <= 4:
        echo " <br/>stay at home ";
        break;
    case 5:
        echo "<br/> Go to kindergarden ";
        break;

    case $brotherAge <= 12:
        echo " <br/> Go to grade :" .$brotherAge - 6 ;
        break;
    }

?>