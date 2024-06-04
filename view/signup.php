<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Header</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
<body>
<div class="fixed inset-0 bg-black flex items-center content-center" id="signupForm">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8 flex flex-col items-center">
    <h1 class="cursor-pointer text-2xl font-extrabold hover:text-red-500" onclick="window.location.href='./landing.php'">&times;</h1>
      <h2 class="text-2xl font-bold mb-6 text-gray-800" id="formHeader">Sign Up</h2>
      <form action="../controller/signup.php" method="POST" class="space-y-6 w-full">
        <div id="nameHolder">
          <label for="name" class="block text-gray-700">Name</label>
          <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div id="emailHolder">
          <label for="email" class="block text-gray-700">Email</label>
          <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div id="passwordHolder">
          <label for="password" class="block text-gray-700">Password</label>
          <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </div>
        <div>
          <button id="submitButton" type="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            Sign Up
          </button>
        </div>
      </form>
      <p id="already" class="mt-6 text-center text-gray-600">
        Already have an account? 
        <p id="loginLink" onclick="window.location.href='./login.php'" class="text-indigo-600 hover:text-indigo-500 cursor-pointer">Log in</p>
      </p>
    </div>
  </div>
</body>
</html>