<?php
$site_title = "Homestead test";
$header ="Hello world of Homestead and Vagrant";
$content= <<< EOL
<p>This is a content of this site.<p>
whatever you say will be shown<br/>
EOL
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
     <title><?php print $site_title; ?></title>
</head>
<body>

<?php 
 print "<h1>".$header."</h1>";
 print $content;
 var_dump($_GET["name"]);
 ?>
</body>
</html>