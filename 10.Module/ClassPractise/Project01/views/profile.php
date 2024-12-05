<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-card {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }
        .profile-card h2 {
            margin-bottom: 10px;
            font-size: 24px;
            color: #333;
        }
        .profile-card p {
            margin: 8px 0;
            font-size: 16px;
            color: #555;
        }
        .profile-card p span {
            font-weight: bold;
            color: #333;
        }
        .profile-card a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            border-radius: 4px;
            font-size: 14px;
        }
        .profile-card a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <h2>User Profile</h2>
        <p><span>Name:</span> <?php echo "$name" ?> </p>
        <p><span>Mobile Number:</span>  <?php echo "$mobile" ?> </p>
        <p><span>Address:</span>  <?php echo "$address" ?></p>
        <p><span>Password:</span> *******</p>
        <a href="edit-profile.php">Edit Profile</a>
    </div>
</body>
</html>
