<?php
//Jim Holloway Oct 1, 2012
//itc290 Advanced Web Database
//Lab_01 Fahrenheit to Celsius

$fahrenheit= ""; //set the functions to zero
$celsius= "";
    if(isset($_POST['f'])) $fahrenheit=($_POST['f']);
    if(isset($_POST['c'])) $celsius=($_POST['c']);

if($fahrenheit!= "")
    {
        $celsius=intval((5/9)*($fahrenheit-32));
        $result=" $fahrenheit &#176; <em>farenheit</em> &nbsp; &#8801; &nbsp; $celsius &#176; <em>celsius</em>";
    }
elseif($celsius!= "")
    {
        $fahrenheit=intval((9/5)* $celsius + 32);
        $result=" $celsius  &#176; <em>celsius</em> &nbsp; &#8801; &nbsp; $fahrenheit &#176; <em>farenheit</em>";
    }
 else $result= "";
 //this statment wiil print untill the end_end>>> also do NOT add white space or this will blow up!!!
 echo <<<_END
 <html>
    <head>
        <title>itc290_lab_01</title>
        <style>
            body
            {
                margin:0 auto;
                padding:0;
            }
            #wrap
            {
                margin:0 auto;
                padding:10;
                margin-top:55px;
                overflow:hidden;
                width:300px;
                background-color:#BFB0A3;
                box-shadow: 0 -3px 20px 15px #000;
            }
        </style>
    </head>
 <body>
    <div id="wrap">
        <h1>Fahrenheit to Celsius </h1>
        <form method="post">
            <p>Fahrenheit: <input type="text" name="f" /></p><br>
            <p>Celsius: <input type="text" name="c" /></p><br>
        <input type="submit"  value="Convert" /><b> $result</b>
        </form>
    </div>
 </body>
</html>
_END;

?> 