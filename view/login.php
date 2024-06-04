<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
  <div class="bg-white shadow-md rounded-lg p-8 w-full max-w-md">
    <h1 class="text-2xl font-extrabold cursor-pointer text-gray-800 hover:text-red-500 mb-6" onclick="window.location.href='./landing.php'">&times;</h1>
    <?php
    session_start();
    if (isset($_SESSION['error'])) {
        echo '<div class="mb-4 p-3 bg-red-100 text-red-700 rounded">' . $_SESSION['error'] . '</div>';
        unset($_SESSION['error']);
    }
    ?>
    <h2 class="text-2xl font-bold mb-6 text-gray-800" id="formHeader">Login</h2>
    <form action="../controller/login.php" method="POST" class="space-y-6 w-full">
      <div id="emailHolder">
        <label for="email" class="block text-gray-700">Email</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>
      <div id="passwordHolder">
        <label for="password" class="block text-gray-700">Password</label>
        <input type="password" id="password" name="password" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" required>
      </div>
      <div>
        <button id="submitButton" type="submit" name="submit" class="w-full py-2 px-4 bg-indigo-600 text-white font-semibold rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
          Login
        </button>
      </div>
    </form>
    <p id="already" class="mt-6 text-center text-gray-600">
      Don't have an account? 
      <span id="loginLink" onclick="window.location.href='./signup.php'" class="text-indigo-600 hover:text-indigo-500 cursor-pointer">Signup</span>
    </p>
  </div>
</body>
</html>
