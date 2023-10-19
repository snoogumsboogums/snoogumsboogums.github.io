<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FFE5E5;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
            padding: 70px;
            text-align: left;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #555;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Edit Kartun</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $conn = new mysqli("localhost", "root", "", "cartoon_recommendation");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE cartoons SET title='$title', description='$description' WHERE id=$id";

        if ($conn->query($sql) === true) {
            header("Location: read.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        $id = $_GET['id'];

        $conn = new mysqli("localhost", "root", "", "cartoon_recommendation");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM cartoons WHERE id=$id";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $title = $row['title'];
            $description = $row['description'];
        } else {
            echo "Kartun tidak ditemukan.";
            exit;
        }

        $conn->close();
    }
    ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="title">title:</label>
        <input type="text" name="title" value="<?php echo $title; ?>" required>
        <br>
        <label for="description">description:</label>
        <textarea name="description" required><?php echo $description; ?></textarea>
        <br>
        <input type="submit" value="Simpan Perubahan">
    </form>
</body>
</html>