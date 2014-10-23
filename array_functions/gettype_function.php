<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>hello page</title>
    </head>
    <body>
        <?php
        //echo "Hello FTFL";
        $aNumber=9;
    echo gettype($aNumber);
    echo settype($aNumber, 'string');
    echo gettype($aNumber);
    $_aString='abcd';
    $_aString='abcd$aNumber';
    $_anotherString="abcd$aNumber";
    echo $_aString;
    echo $_anotherString;
$aBool=true;
$anotherBool=false;
echo gettype($aBool);
echo gettype($anotherBool);

 //$a=2*3+5;
  //echo nl2br($a."\n".$a);
  //echo $a;
    

        ?>
    </body>
</html>
