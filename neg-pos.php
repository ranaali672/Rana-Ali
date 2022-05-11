<?php
    /* if ($_POST){
        $number= $_POST['number'];
     
        if($number== (-$number)){
            echo "is negative ,$number";
        }else{
            echo " is postive ,$number";
        }
    } */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negative or Postive</title>
</head>
<body>
  <div class="container">
      <div class="row">
      <div class="col-12 text-center h1 mt-5 text-danger">
                CHECK
            </div>
          <div class="col-8 offset-4 my-5">
          <form  method="POST">
        <input type="text" name="number" placeholder="Enter Number">
        <input type="submit" value="show">
            <?php
                if ($_POST){
                   $number = $_POST['number'];

                    if($number>0){
                   echo "Postive Number";
                  }elseif($number<0){
                     echo "Negative Number"; 
                  }else{
                 echo "Please Enter Numeric Number"; 
              }
           }
           ?>
    </form>
        </div>
      </div>
  </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>