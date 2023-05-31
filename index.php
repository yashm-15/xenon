<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>COER</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form method = "post" class = login>
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" placeholder="Enter Your Email" name = "Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" placeholder="Enter Your Password" name = "pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          <div class="underline"></div>
        </div>
        <div class="input-box button">
          <input type="submit" name="submit" value="LOGIN">
        </div>
        <?php
        @session_start();
                    if(isset($_POST['submit']))
                    {
                        include('database.php');
                        $link=@mysqli_connect($server,$username,$password)or Die("<font color='red'>Server not connected!!!</font>");
                       mysqli_select_db($link,$database)or die("<font color='red'>Database not connected!!!</font>");                                                                                                                                                
                    
                      $Email=$_POST['Email'];
                     
                     $pwd=$_POST['pwd'];
                     
                     if($Email!='' && $pwd!='' )
                     {
                       $query=mysqli_query($link,"select * from login where Email='".$Email."' and Password='".$pwd."'") or die(mysql_error());
                       $res=@mysqli_fetch_row($query);
                       if($res)
                       {
                        $_SESSION['Email']=$Email;
                        $Email=$_SESSION['Email'];
                        echo 
                        "<script>
                    
                        window.location.href='./Home/home.php?';
                        
                        </script>";;

                        }
                     else
                       {
                        echo"<font color='Green' ><h3 align='center'>You  have entered wrong username or password !!!!!!</h3></font>";
                       }
                     }
                        }
                    
                    ?>        
      </form>
    </div>
  </body>
</html>