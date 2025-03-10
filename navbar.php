<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Simple Navbar</title>
</head>
<body class="bg-gray-100">
    <nav class="bg-amber-300 shadow-md p-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="text-2xl font-bold text-white">Bolgs</div>
        
        <!-- Links -->
        <div class="space-x-4">
        <a href="signup.php" class="text-white font-bold hover:text-gray-500">Sign Up</a>
            <a href="form.php" class="text-white font-bold hover:text-gray-500">Create Blog</a>
            <a href="display.php" class="text-white font-bold hover:text-gray-500">View Blog</a>
        </div>
    </nav>
</body>
</html>
