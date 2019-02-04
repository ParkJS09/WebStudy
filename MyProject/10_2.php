<!--배열과 반복문-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Java Script</h1>
	<ul>
        <script>
            list = new Array(
                "하이", "윤진", "파크"
            );
            i = 0;
            while(i<list.length)
            {
                document.write("<li>"+list[i]+"</li>");
		i=i+1;
            }
        </script>
	</ul>

	<h1>PHP</h1>
	<ul>
	<?php
		$list=array("나는","배고파","뀨!!");
		$i=0;
		while($i<count($list))
		{
		echo "<li>".$list[$i]."</li>";
		$i=$i+1;
		}
	?>
	</ul>
    </body>
</html>
