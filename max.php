<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="conainer">
       <div class="row">
       <div class="col-12 text-center h1 mt-5 text-danger">
                Get Max:
            </div>
            <div class="col-8 offset-3 my-5">
            <form action="max.php" method="post">
           <input type="text" name="num1" id="num1">
           <input type="text" name="num2" id="num2">
           <input type="text" name="num3" id="num3">
           <input type="submit" value="Result" > 
           
            </form>
            </div>
       </div>
   </div>
   <!--  <form action="max.php" method="post">
        <input type="text" name="num1" id="num1">
        <input type="text" name="num2" id="num2">
        <input type="text" name="num3" id="num3">
        <input type="submit" value="Result"> -->
        <?php 
            
             if ($_POST){
                $num1= $_POST['num1'];
                $num2= $_POST['num2'];
                $num3= $_POST['num3'];
               
                if($num1>$num2 && $num1>$num3){
                    echo "Max Number is :" ,$num1;
                
                }elseif($num2>$num1 && $num2>$num3){
                   echo "Max Number is :" ,$num2;
              
                }else{
                   echo "Max Number is :" ,$num3;
                 
                }
            } else{
                echo "not founded";
            }
             
           if($_SERVER['REQUEST_METHOD']==="GET"){
                echo "<h1>Method Not Allawed 405</h1>";
                die;
            }
        ?>
    <!--</form>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>