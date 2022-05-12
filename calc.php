<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form  method="post">
        <input type="text" name="n1" placeholder="first number"> <br>
        <input type="text" name="n2" placeholder="second number"> <br>
        <input type="submit" name="add" value="+">
        <input type="submit" name="add" value="-">
        <input type="submit" name="add" value="/">
        <input type="submit" name="add" value="*"> <br>
         
         <?php
       
         if(isset($_POST['add'])){
           
             $n1=$_POST['n1'];
             $n2=$_POST['n2'];
             $oprnd=$_POST['add'];
             if($oprnd=="+"){
                 echo $ans=$n1+$n2;
             }
             else if($oprnd=="-"){
                  echo $ans=$n1-$n2;
                }
             else if($oprnd=="*"){
                 echo  $ans=$n1*$n2;
             }
             else if($oprnd =="/"){
                 echo  $ans=$n1/$n2 ;
             }
         }
         ?>
    </form>
</body>
</html>