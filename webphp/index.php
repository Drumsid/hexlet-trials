<?php

// header('Location: /');
function myDebug($data)
{
	echo "<pre>" . print_r($data, 1) . "</pre>";
}
echo date("Y");
echo "\n";
echo 'Hello, world!';
myDebug($_SERVER);
myDebug($_GET);
if($_SERVER['REQUEST_URI'] == '/webphp'){
	echo 'its webphp';
} else {
	echo 'not webphp';
}
?>
<h1>header h1 with html tag</h1>

<?php echo "<h1>header h1 with php tag</h1>" ?>