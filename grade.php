<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Grade</title>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-12 text-center h1 mt-5 text-danger">
                Get Grade :
            </div>
            <div class="col-4 offset-4 my-5">
                <form method="post">
                <div class="form-group">
                    <input type="text" name="physics" placeholder="physics">
                    <input type="text" name="chemistry" id="" placeholder="chemistry">
                    <input type="text" name="biology" id="" placeholder="biology">
                    <input type="text" name="math" id="" placeholder="math">
                    <input type="text" name="computer" id="" placeholder="computer">
                </div>
                    <div class="form-group">
                        <button class="btn btn-outline-danger rounded btn-m"> Your grade</button>
                    </div>
                    <?php
                       
                       if(isset($_POST)) {
                        $physics = $_POST['physics'];
                        $chemistry=$_POST['chemistry'];
                        $biology=$_POST['biology'];
                        $math=$_POST['math'];
                        $computer=$_POST['computer'];
                        $sum=$physics+$chemistry+$biology+$computer+$math;
                        $maxgrade=100;
                        $total=500;
                        $percentage= $sum/$total*100;
                        $total=$sum;

                        if($percentage>=90){
                            echo "Your Grade is A and your total is :<br> Your percentage :", $percentage ."%" ;
                            
                            
                        }elseif($percentage<90 && $percentage>=80){
                            echo "Your Grade is B <br> Your percentage :" ,$percentage ."%";
                        
                        }elseif($percentage<80 && $percentage>=70){
                            echo "Your Grade is C <br> Your percentage : ", $percentage ."%";
                        
                        }elseif($percentage<70 && $percentage>=60){
                            echo "Your Grade is D <br> Your percentage :", $percentage ."%";
                        
                        }elseif($percentage<60 && $percentage>=40){
                            echo "Your Grade is E <br> Your percentage :", $percentage ."%";
                        }else{
                            echo "Your Grade is F <br> Your percentage :", $percentage ."%";
                        }

                    }
                    ?>
                </form>

        </div>
    </div>









     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>