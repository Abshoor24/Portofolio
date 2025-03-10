<?php 

include "../service/database.php";


if (isset($_POST["submit"])) {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $massage = $_POST["massage"];

  // Validasi hanya untuk email dengan @gmail.com
  if (strpos($email, '@gmail.com') !== false) {
    $sql = "INSERT INTO users (username, email, massage) 
            VALUES ('$username', '$email', '$massage')";

    if ($db->query($sql)) {
      echo '<div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" 
                 class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100" role="alert">
              ✅ Data berhasil masuk!
            </div>';
    } else {
      echo '<div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" 
                 class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100" role="alert">
              ❌ Data gagal masuk!
            </div>';
    }
  } else {
    echo '<div x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)" 
               class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-100" role="alert">
            ⚠️ Email harus menggunakan @gmail.com
          </div>';
  }
  $db->close();
}





?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="styling.css">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config  = {
      fontFamily: {
        inter : ['Inter', 'sans-serif'],
      }
    }

  </script>
  <title>Document</title>
</head>
<body class="bg-[#1E1E1E] max-h-5 overflow-hidden">
  <nav class="bg-[#1E1E1E] font-mono">
    <div class="container mx-auto flex justify-between p-8 text-[20px] text-gray-400">
      <div class="flex justify-center space-x-8  ml-[150px]">
        <div class="w-5 h-5 bg-red-600 rounded-full"></div>
        <div class="w-5 h-5 bg-yellow-500 rounded-full"></div>
        <div class="w-5 h-5 bg-green-600 rounded-full"></div>
      </div>
  <ul class="flex space-x-8 mr-[350px]">
    <li>
      <a href="index.html" class="hover:text-purple-900 hover:underline duration-500 inline-block hover:-translate-y-2 transition ease-out">Home</a>
    </li>
    <li>
      <a href="about.html" class="hover:text-purple-900 hover:underline duration-500 inline-block hover:-translate-y-2 transition ease-out">About</a>
    </li>
    <li>
      <a href="project.html" class="hover:text-purple-900 hover:underline duration-500 inline-block hover:-translate-y-2 transition ease-out">Project</a>
    </li>
    <li>
      <a href="contact.php" class="hover:text-purple-900 hover:underline duration-500 inline-block hover:-translate-y-2 transition ease-out">Contact</a>
    </li>
  </ul>
  
     </div>
  </nav>


  <form action="contact.php" method="post" class="relative flex items-center justify-center w-[1400px] h-[550px] bg-[#282828] mt-5 mx-auto rounded-2xl">

<div class="text-white text-right ml-[870px] mb-80">
  <h1 class="text-7xl font-bold leading-none uppercase">
    CONTACT<br>ME
  </h1>
</div>

<!-- Username -->
<label class="absolute mr-[800px] mb-[350px] text-white">
  <input required type="text" name="username" class="px-4 py-2 w-[400px] text-lg outline-none border-2 border-gray-400 rounded hover:border-gray-600 duration-200 peer focus:border-indigo-600 ">
  <span class="absolute left-4 top-2 text-lg tracking-wide peer-focus:text-indigo-600 pointer-events-none duration-200 peer-focus:text-sm peer-focus:-translate-y-5 bg-[#282828] px-1 peer-valid:text-sm peer-valid:-translate-y-5 text-white">Username</span>
</label>

<!-- Email -->
<label class="absolute mr-[800px] mb-[200px] text-white">
  <input required type="text" name="email" class="px-4 py-2 w-[400px] text-lg outline-none border-2 border-gray-400 rounded hover:border-gray-600 duration-200 peer focus:border-indigo-600 ">
  <span class="absolute left-4 top-2 text-lg tracking-wide peer-focus:text-indigo-600 pointer-events-none duration-200 peer-focus:text-sm peer-focus:-translate-y-5 bg-[#282828] px-1 peer-valid:text-sm peer-valid:-translate-y-5 text-white">Gmail</span>
</label>

<!-- Massage -->
<label class="absolute mr-[800px] ml-[500px] mt-[150px]">
  <textarea name="massage" placeholder="Massage" class="ml-[300px] placeholder-white focus:placeholder-indigo-600 w-[1200px] h-[200px] text-left align-top px-5 py-5 text-lg outline-none border-2 border-gray-400 rounded hover:border-gray-600 duration-200 peer focus:border-indigo-600 text-white"></textarea>
</label>

<!-- Button -->
<button type="submit" name="submit" class="absolute bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-purple-900 transition duration-300 mt-[440px] mr-[1100px]">
  Submit
</button>

<div class="mt-[460px] bottom-13 right-24 flex space-x-6 absolute text-white">
  <a href="https://www.instagram.com/shorss24?igsh=MW1qa3pkMHB0b2FjMw==" target="_blank" class="hover:text-pink-500 transition duration-300">
    <i class="fa-brands fa-instagram text-4xl"></i>
  </a>
  <a href="https://www.linkedin.com" target="_blank" class="hover:text-blue-500 transition duration-300">
    <i class="fa-brands fa-linkedin text-4xl"></i>
  </a>
  <a href="https://github.com/Abshoor24" target="_blank" class="hover:text-gray-400 transition duration-300">
    <i class="fa-brands fa-github text-4xl"></i>
  </a>
</div>
</form>




</body>
</html>

