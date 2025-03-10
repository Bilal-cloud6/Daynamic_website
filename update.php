<?php
include("db.php");





if($_SERVER['REQUEST_METHOD']=="POST"){
    $Blogid=$_POST['id'];
    $user_title=$_POST['title'];
    $user_author= $_POST['author'];
    $user_content=$_POST['content'];
    
    $sql="UPDATE `form` SET `title`='$user_title',`author`='$user_author',`content`='$user_content' WHERE id=$Blogid";
    
    $result=mysqli_query($connection,$sql);
    
    if($result){
    header("location:display.php");
    }
    
    else{
        echo"Blog not update";
    }
    
    }





$id=$_GET['id'];

echo $id;
$sql="SELECT * FROM `form` WHERE id=$id";

$result=mysqli_query($connection,$sql);
$final=mysqli_fetch_assoc($result);





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
    <form action="update.php" method="POST" class=" p-6 rounded-lg  w-96">
        <h2 class="text-2xl font-bold mb-4 text-center">Create Blog</h2>

        <input type="hidden" placeholder="id" value="<?php echo $final['id']; ?>" name="id" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <label class="block mb-2 pl-4 text-gray-700">Title</label>
        <input type="text" placeholder="Enter your title" value="<?php echo $final['title']; ?>" name="title" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <label class="block mb-2 pl-4 text-gray-700">Author</label>
        <input type="text" placeholder="Enter your author"  value="<?php echo $final['author']; ?>"  name="author" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <label class="block mb-2 pl-4 text-gray-700">Content</label>
        <input placeholder="Enter your content"  value="<?php echo $final['content']; ?>"  name="content" class="w-full p-2 border border-gray-300 rounded-full mb-4 focus:outline-none focus:ring-2 focus:ring-amber-500">
        
        <button type="submit" class="w-full bg-gray-200 text-black p-2 rounded-full hover:bg-gray-400">Update Blog</button>
    </form>
    </div>
</body>
</html>
