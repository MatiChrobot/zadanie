<!DOCTYPE html>
<html>
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Zadanie</title>
    </head>
    <style type="text/css">
      body{ background-color: #FFFAF0;}
      #parent { position: relative;
    left: 80px;
    top: -119px;
    width: 300px;
    height: 50px; }
    table { margin: 10px auto;
    padding: 10px;
    font-size: 50px;}
        
    </style>
    <body>
        <table align="center">
            <tr>
                <td>kto:<br>co:</td>
            </tr>
            <tr>
                <td id="parent">
        <?php
        $sep=";"; // separator 
        $mycsv=file('C:\xampp\htdocs\zadanie\export.csv');
        $data1=[];
        foreach ($mycsv as $line) {
        $data1[] = str_getcsv($line);}
        $row=rand(0,count($mycsv)-1); 
        $data=explode($sep,$mycsv[$row]); 

        $num = count ($data); 


        for ($a=0; $a < $num; $a++) { 
        print $data[$a] ." <br>"; 
    } 
    ?>     </td></tr>
            </table>
            <table>
            <tr>
        <td><img src="https://symfony.com/logos/symfony_black_02.png" alt="Symfony" width="300" /></td>
        <td><img src="https://2.bp.blogspot.com/-1e1iVGCYpbQ/VF9UFzkdi2I/AAAAAAAAGhw/8EzVGUQF_3M/s1600/Logo%2BMySQL.png" alt="MySQL" width="300"/></td>
        <td><img src="https://www.test4u.eu/img_index/free-web-courses.png" alt="Program" width="300"/></td>
            </tr>
            </table>
    </body>
</html>