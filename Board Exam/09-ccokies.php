<?php
$fruit = "apple";
setcookie("fruit","apple",time()+(86400));
if(isset($_COOKIE('fruit')))
{
    echo "Current cookie is".$_COOKIE['fruit'];

}
else{
    echo "N0 Cookie available";
}

?>