<?php

include("db.php");
//include("navbar.php");

$sql="SELECT * FROM `form` ";

$result=mysqli_query($connection,$sql);




if($result){

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Cards Grid</title>
</head>
<body class="bg-gray-200 ">
    <div class=" mx-auto flex bg-gray-200 gap-20">
 
    <div class="w-72 bg-amber-400 p-3  border-r-2 border-gray-600 h-[100vh]">
        <h1 class="text-white font-bold text-2xl border-b-4 border-gray-500 pb-1">Blogs</h1>

        <ul class=" grid gap-4 pt-10">
        <a href="form.php" > <li class="flex items-center gap-2 font-bold text-white hover:text-gray-500 "> <img class="h-5" src="https://cdn-icons-png.flaticon.com/128/16019/16019931.png" alt=""> Home </li></a>

           <a href="display.php"> <li class="flex items-center gap-2 font-bold text-white hover:text-gray-500 "> <img class="h-5" src="https://cdn-icons-png.flaticon.com/128/1265/1265907.png" alt="">Blogs Detail</li></a>

          <a href="form.php">    <li class="flex items-center gap-2 font-bold text-white hover:text-gray-500 "> <img class="h-5" src="https://cdn-icons-png.flaticon.com/128/13877/13877951.png" alt="">Create New Blog</li></a>

           <a href="login.php"> <li class="flex items-center gap-2 font-bold text-white hover:text-gray-500 "> <img class="h-5" src="https://cdn-icons-png.flaticon.com/128/2853/2853434.png" alt="">Sign In</li></a>
        </ul>
    </div>
    
<div class=" container mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 pr-3 gap-6 mt-10   ">



<?php




    while($final=mysqli_fetch_assoc($result)){

     echo"
        <!-- Card 1 -->
        <div class='bg-white p-6 rounded-xl hover:shadow-md border-2 border-gray-400 relative'>
            <h2 class='text-xl font-bold'> " ." ".$final['title']. " </h2>
            <p class='text-gray-600 mt-2'> " ." ".$final['content']. "</p> 
            <p class='text-sm text-gray-600 mt-2'> Author:" ." ".$final['author']. " </p>
            <div class='absolute top-6 right-2 flex space-x-2 '>
                <a href='delete.php?id=$final[id]' class='text-blue-500 hover:text-blue-700'><img class='h-5' src='https://cdn-icons-png.flaticon.com/128/1214/1214428.png' alt=''></a>
                <a href='update.php?id=$final[id]' class='text-red-500 hover:text-red-700'> <img class='h-5' src='https://cdn-icons-png.flaticon.com/128/1827/1827933.png' alt=''> </a>
            </div>
        </div>
     
     ";

        //echo $final['title'];
    }
}


?>



   
       
        
       
        </div>
       
        </div>
   
</body>
</html>
