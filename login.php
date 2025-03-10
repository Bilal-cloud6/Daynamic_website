<?php
include("navbar.php");
include("db.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user_email=$_POST['email'];
    $user_password= $_POST['password'] ;

    $sql="SELECT * FROM `user_info` WHERE user_email='$user_email'";
    $result= mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0){

      $user=mysqli_fetch_assoc($result);
      $validate= password_verify($user_password,hash: $user["user-password"]);
      
      if($validate){
        echo"user login";
         

      }
      else{
      echo"invalid user";
      }

    }
}
else{
 echo"user not find";
}



?>


<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="">
    <div class="container flex justify-center items-center h-150   mx-auto">
        <form action="./login.php"  method="POST" class="sm:w-fit w-[80vw] py-20 h-fit  flex-col space-y-6 content-center justify-items-center px-2">
            <h1 class="text-2xl font-medium text-center pb-3">Sign In</h1>
           
           
             <div>
            <input type='email' placeholder='Email' name='email' class='p-1 px-3 w-[70vw] sm:w-[30vw]  outline-0 border border-gray-400 focus:border focus:border-amber-300  shadow-2xl rounded-full'>
            
            </div>
     

           
            <div>
            <input type="password" placeholder="Password" name="password" class="p-1 px-3 w-[70vw] sm:w-[30vw] outline-0 border border-gray-400 focus:border focus:border-amber-300 shadow-2xl rounded-full">
            </div>
           
           <div class="w-full">
            <button class="bg-gray-200 p-2 hover:bg-gray-300 rounded-full w-full">Sign In</button>
           </div>
           <div class="w-full">
            <p class="text-gray-600  text-center"> you have create an account?  <a href="signup.php"> <span class="text-blue-700">Sign Up</span>  </a> </p>
                
           </div>

        </form>
    </div>
  </body>
</html>