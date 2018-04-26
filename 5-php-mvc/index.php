
<?php
echo "<a href=\"../\">BACK</a>";
$dir = "./";
$files = scandir("./");
natsort($files);
echo "<ul>";
foreach ($files as $key => $value) {
    if (preg_match('/^[\d]{1,2}-/', $value)) {
        echo "<li style=\"list-style-type:none;\">";
        echo "<a href=\"$value/\">" . basename($value) . "</a>";
        echo "</li>";
    }
}
echo "</ul>";
?>
<!DOCTYPE html>
<html>
    <head></head>
    <body><h1>1. PHP MVC EXERCISE</h1>
    <p>Create the app </p>
    </body>

</html>
