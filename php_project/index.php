

<!--including db.php to establish connection-->
<?php   include "Config/database.php"  ?>

<!----------------------Accessing input and storing it in db--------------->
<?php

//fuction to give class to html elements to display error


//validating info
$nameErr = null;$bodyErr = null; $emailErr = null;
if(isset($_POST['submit'])){
    //validating name
    if(empty($_POST['name'])){
        $nameErr = 'Name is rquired';
    }
    else{
        $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

//validating email
$email_pattern = "([a-z|1-9]+(@)[a-z]+(.)[a-z]+)"; //regex pattern to validate email address
    if(empty($_POST['email'])){
        $emailErr = 'Email is rquired (Email input feild is empty)';
    }
    else{
        if(preg_match($email_pattern,$_POST['email']))
        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);
        else{
        $emailErr = 'Such email addrees does not exists! Please verify your email.';
        }
    }

//validating feedback
    if(empty($_POST['body'])){
        $bodyErr = 'Feedback is rquired';
    }
    else{
        $body = filter_input(INPUT_POST,'body',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

echo "Errors: ".$nameErr."<br>";
echo $emailErr."<br>";
echo $bodyErr."<br>";

//if no error exists then submitting data to db
if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
    $sql = "INSERT INTO feedbacks (name, email, body) VALUES
    ('$name','$email','$body')";
   // $result = mysqli_query($connec,$sql); //performs squl query on db in connec
    if(mysqli_query($connec,$sql)){
        //sucess
        header('Location: home.php');
    }
    else{
        echo 'Error'. mysqli_error($connec);
    }
}

}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed Back Php project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<style>
      
    </style>


    <div class="main_container">
        <nav>
            <div class="logo_with_name">
            <img src="images/logo.png" alt="logo">
            <h3>Think Company</h3>
            </div>
           <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="index.php"><li>FeedBack</li></a>
            <a href="about.php"><li>About</li></a>
           </ul>
        </nav>
        <article>
            <div class="message_body" >
               <img src="images/svg2.svg" alt="">
            </div>
        <div class="form_body">
        <form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
           <label for="name">Name</label>
           <br>
           <input type="text" placeholder="Enter your name" name="name" class="<?php 
            echo !$nameErr ? null :'error';    ?>">
          
           <label for="email">Email</label>
           <br>
           <input type="text" placeholder="Enter your email" name="email">
         


           <br>
           <label for="name">FeedBack</label>
           <br>
            <textarea name="body"  rows="4"   placeholder="Enter your feedback"></textarea>
           

           <br>
           <input type="submit"  cursor= "pointer" value="Send" name="submit" >
        </form>
        </div>
        </article>
    
       
    
        <footer>
            <p>Copyright @ 2022</p>

        </footer>
    </div>
    <style>
        .error_message{
        display: block;
        color: red;
        width: 70%;
        }
    </style>
</body>
</html>
