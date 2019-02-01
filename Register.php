<?php
    $conn = mysqli_connect("localhost", "root", "", "register");
?>
  
   <html>
    <head>
        <title>
            Registration Form
        </title>
    </head>
    <body>
       <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['pwd'];
                
                $query = "insert into detail(email, password)values('$email', '$password')";
                $run = mysqli_query($conn, $query);
                
                if($run){
                    echo "Your data is successfully inserted";
                }
                else{
                    echo "Oops! there is some error".mysqli_error($conn);
                }
            }
        ?>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="pwd" placeholder="your password"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>