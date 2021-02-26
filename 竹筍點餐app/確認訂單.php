<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="0212.css">
       
</head>
<body>
    <div style=" position: relative; margin-top: 30px; width: 1000px;margin-left:auto; margin-right: auto; height: 650px; background-color: bisque;" >
        <div style="border: 1px;  padding-left: 30px; padding-top: 10px;">
            <h2>
                紫雲農場 - 觀音山有機綠竹筍點餐
            </h2>
        </div>
        <div style="margin-top: 20px; background-color: darkgrey; ">
            <table style="background-color: darkgrey;">
            <tr>
                <td align="center" id="a"><a href="index.html" style="color:black; text-decoration:none;">首頁</a></td>
                <td id="a" align="center"><a href="最新推出.html" style="color:black; text-decoration:none;">最新推出</a></td>
                <td id="a" align="center" style="background-color: coral;"><a href="菜單.html" style="color:black; text-decoration:none;">菜單</a></td>
                
            </tr>
            </table>
        </div>
        
       


        <form action="" id="form">

            <table id="td4">
                <tr>
                    <td>
                        <?php

                            
                            $a = isset($_POST['1']) ? $_POST['1'] : "0";
                            $b = isset($_POST['2']) ? $_POST['2'] : "0";
                            $c = isset($_POST['3']) ? $_POST['3'] : "0";
                            $d = isset($_POST['4']) ? $_POST['4'] : "0";
                            $e = isset($_POST['5']) ? $_POST['5'] : "0";
                            $f = isset($_POST['6']) ? $_POST['6'] : "0";                          
                            
                                                      
                            $aa=$a*50;
                            $bb=$b*50;
                            $cc=$c*50;
                            $dd=$d*50;
                            $ee=$e*50;
                            $ff=$f*50;
                            

                            $z=$aa+$bb+$cc+$dd+$ee+$ff;
                            echo "<h1>總共:". $z."元</h1>";
                            echo "<img src=3.png> ";

                           
                           
                        ?>
                    </td>                
                </tr>
            </table>

          
        </form>



<img src="紫雲農場竹筍訂購頁面.jpg"  style="margin-left: 10%; margin-top: 90px; width: 200px; height: 200px;">

        <br>
        <img src="f.png" style="width: 250px; height: 100px; margin-top: 20px; margin-left: 7%;">
        
        
       
        
       
        
       
        

    </div>
</body>
</html>