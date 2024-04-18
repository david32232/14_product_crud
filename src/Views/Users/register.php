<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;
            margin: 50px;
        }

        h2 {
            color: #007BFF;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            text-align: left;
            margin: 10px 0;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="file"] {
            padding: 5px; /* Adjust padding for file input */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>User Registration</h2>
    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
                <div><?php echo $error ?></div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    <form method="post" enctype="multipart/form-data">
        <label for="username">Username:</label>
        <input type="text" name="username"  required>

        <label for="email">Email:</label>
        <input type="email" name="email"  required>

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture"  id="profile_picture" accept="image/*">

        <label for="gender">Gender:</label>
        <select name="gender"  required>
            <option value="" disabled selected>Select gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <label for="password">Password:</label>
        <input type="text" name="password"  required>

        <a href="login"><h3>Already have an account</h3></a>

        <button type="submit">Register</button>
    </form>
</body>
</html>
