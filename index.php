<meta charset = "utf-8">

<script type="text/javascript " src="skript.js"> 
</script>

<?php
echo "<div></div>";

require 'components.php';
require 'function.php';  
$name ="Aimar";

//üherealine komentaar
//tagasi algusesse
home();
menu($menu_begin,$menu_arr,$menu_end);
//näitab praegust aega ja anname soovitusi
aeg();

echo "$name, Minu esimene PHP,s kirjutatud lause!<br>";
echo '<b>$name, Minu esimene PHP,s kirjutatud lause!</b><br>';
echo"Nüüd vaatame täpitähti<br>";
GetVisitorIp();
counter();
?>