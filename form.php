
<?php

include("db.php");
include("navbar.php");

if($_SERVER['REQUEST_METHOD']=="POST"){

$user_title=$_POST['title'];
$user_author= $_POST['author'];
$user_content=$_POST['content'];

$sql="INSERT INTO `form`( `title`, `author`, `content`) VALUES ('$user_title','$user_author','$user_content')";

$result=mysqli_query($connection,$sql);

if($result){
    echo"post created";
}

else{
    echo"error";
}

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="form.php" method="POST" class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Create Blog</h2>
        
        <label class="block mb-2 text-gray-700 pl-4">Title</label>
        <input type="text" placeholder="Enter your title" name="title" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <label class="block mb-2 text-gray-700 pl-4">Author</label>
        <input type="text" placeholder="Enter your author" name="author" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <label class="block mb-2 text-gray-700 pl-4">Content</label>
        <input placeholder="Enter your content" name="content" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <button type="submit" class="w-full bg-gray-200 text-black p-2 rounded-full hover:bg-gray-400">Submit</button>
    </form>
    </div>
</body>
</html>
