<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <style>
        li
        {
            color: blue;
        }
        ul li{
            font-size: 40px;
        }
        .em
        {
            text-decoration: underline;
        }
        </style>
    </head>
    <body>  
    <ol id="target">
        <li>html</li>
        <li>css</li>
        <li>javaScript</li>
    </ol>
    <ol>
        <ul>
            <li>박윤진</li>
            <li>바부</li>
            <li>박윤지인</li>
            <li>메롱</li>
        </ul>
	<input type="button" value="강조" onclick="document.getElementById('target').className='em'"/>
    </ol>
    </body>
</html>
