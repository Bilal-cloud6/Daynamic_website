
<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $user_name=$_POST['username'];
  $user_email=$_POST['email'];
  $user_password= password_hash($_POST['password'] ,PASSWORD_BCRYPT ); 

  $sql="SELECT * FROM `user_info` WHERE user_email ='$user_email'";
  $result= mysqli_query($connection,$sql);

  ?>



   




  <?php
  if(mysqli_num_rows($result) > 0){

     echo"
     <div class='flex justify-center text-red-500 font-medium  w-full'>
       <p class='bg-green-400 p-3 rounded-md'> email already exist </p>
     </div>
     
     ";
     


    
   




           


           
        
            



















      


   

  }

  else{



  $sql="INSERT INTO `user_info`( `user-name`, `user_email`, `user-password`) VALUES ('$user_name','$user_email','$user_password')";

  $result= mysqli_query($connection,$sql);

  if($result){
    echo'
    <div class="flex justify-center text-green-500 font-medium  w-full">
    record submit succesfull
    </div>
    ';
    header("location:login.php");
  }
  else{
    echo"record not submitted";
  }


}

}

/*else{
    echo"record not submit";
}*/



?>








<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="output.css">
  </head>
  <body class="">
    <div class="container flex justify-center items-center h-150   mx-auto">
        <form action="./signup.php"  method="POST" class="sm:w-fit w-[80vw] py-20 h-fit  flex-col space-y-6 content-center justify-items-center px-2">
            <h1 class="text-2xl font-medium text-center">Sign Up</h1>
              




            <div>
            <input type="text" placeholder="Username" name="username" class="p-1 px-3 w-[70vw] sm:w-[30vw]  outline-0 border border-gray-400 focus:border focus:border-amber-300 shadow-2xl rounded-full">
            </div>
           
             <div>
            <input type='email' placeholder='Email' name='email' class='p-1 px-3 w-[70vw] sm:w-[30vw]  outline-0 border border-gray-400 focus:border focus:border-amber-300  shadow-2xl rounded-full'>
            
            </div>
     

           
            <div>
            <input type="password" placeholder="Password" name="password" class="p-1 px-3 w-[70vw] sm:w-[30vw] outline-0 border border-gray-400 focus:border focus:border-amber-300 shadow-2xl rounded-full">
            </div>
           
           <div class="w-full">
            <button class="bg-gray-200 p-2 hover:bg-gray-300 rounded-full w-full">Sign Up</button>
           </div>
           <div class="w-full">
            <p class="text-gray-600  text-center">Already have an account?  <a href="login.php"> <span class="text-blue-700">login</span>  </a> </p>
                
           </div>

        </form>
    </div>
  </body>
</html>