<html>
<head>
<title>registation form</title>
</head>
<body>
      <h1>Registration form</h1>
      <form action =""Method="POST">
      <label>username:</label>
      <input type="text" name="username"><br><br>
      <label>email:</label>
      <input type="email"name="email"><br><br>
      <label>password:</label>
      <input type="password"name="pass"><br><br>
      <label>confirm password:</label>
      <input type="password"name="cpass"><br><br>
   <input type="submit"value="register">
   </form>
  <?php
      if($_SERVER["REQUEST_METHOD"]=="POST"){
              $username=$_POST['username'];
              $email=$_POST['email'];
              $pass=$_POST['pass'];
              $cpass=$_POST['cpass'];
          if (empty($username)||empty($email)||empty($pass)||empty($cpass)){
                   echo"<p style='color:red;'>please fill all required fileds!</p>";
           }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                   echo"<p style='color:red;'>please enter a valid email address!</p>";
           }else if($pass!=$cpass){
                   echo"<p style='color:red;'>password and confirm password should match!</p>";
           }else{        
                    echo"<p style='color:green;'>registration successfull!</p>";
                    }
            }
            ?>
</body>
</html>                        
