<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold text-blue-800">Welcome to Our Website</h1>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </header>

        <!-- Main Content -->
        <main>
            <div class="max-w-md mx-auto bg-white shadow-md rounded px-8 py-6">
                <h2 class="text-xl font-bold mb-4">Login Successful!</h2>
                <p class="text-gray-700 mb-4">You have successfully logged in to your account.</p>
                <form action="../controller/signout.php" method="post">
                    <button type="submit" class="text-white bg-blue-400 p-3 rounded-xl px-4">Sign out</button>
                </form>
                <form action="../controller/delete_user.php" method="post" class="mt-4">
                    <button type="submit" class="text-white bg-red-400 p-3 rounded-xl px-4">Delete</button>
                </form>
                <h1 class="mt-6 text-lg font-bold">All Users</h1>
                <table class="min-w-full mt-4 bg-white">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">Name</th>
                            <th class="px-4 py-2 border">Email</th>
                            <th class="px-4 py-2 border">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        session_start();
                        include '../controller/db.php';

                        // Ensure the user is logged in
                        if (!isset($_SESSION['user_id'])) {
                            header('Location: ../view/login.php');
                            exit();
                        }

                        $query = "SELECT id, name, email FROM users";
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "
                                <tr>
                                    <td class='border px-4 py-2'>{$row['id']}</td>
                                    <td class='border px-4 py-2'>{$row['name']}</td>
                                    <td class='border px-4 py-2'>{$row['email']}</td>
                                    <td class='border px-4 py-2'>
                                        <form action='./edit.php' method='post'>
                                            <input type='hidden' name='id' value='{$row['id']}'>
                                            <button type='submit' class='text-blue-500'>Edit</button>
                                        </form>
                                        <form action='../controller/delete_user.php' method='post' class='mt-2'>
                                            <input type='hidden' name='id' value='{$row['id']}'>
                                            <button type='submit' class='text-red-500'>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            ";
                        }

                        mysqli_close($conn);
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
