<html>
<head>
<title>Nomes</title>

</head>
<body>
<div class="container">
        <div class="box"> </div>
        <form method="GET" action = "t5.php">
</form>
</div>
</body>
<?php

$var5 = $_GET["sala"];
setcookie ("sala", $var5);
echo $var5;
echo "<br><a href=t5.php>Proxima pagina </a></br>";
echo "<a href=final.php>Resposta </a>";
?>
</html>