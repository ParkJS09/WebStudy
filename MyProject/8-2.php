<!--php에서의 로그인-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <?php
	$id = $_GET["ID"];
        $password = $_GET["password"];
	if($password =="1111")
	{
	    echo "Hello World<br>";
	    echo $id;
	    echo "<br>";
	    echo $password;
	    echo "<br>";
	}
	else
	{
	    echo "Fuck the";
	}
	?>
    </body>
</html>
