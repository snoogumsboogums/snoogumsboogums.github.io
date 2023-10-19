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
        }

        form {
            /* background-color: #fff; */
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

        input[type="file"] {
            width: 100%;
            margin-bottom: 20px;
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

        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h2>Add Kartun</h2>
    <form action="create.php" method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description" required></textarea>
        <br>
        <label for="picture">Picture:</label>
        <input type="file" name="picture" accept="image/*" required>
        <br>
        <input type="submit" value="Add">
    </form>

    <div class="links">
    <a href="read.php">Click here to see more!</a>
    </div>

</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $description = $_POST['description'];

    $picture = $_FILES['picture']['name'];
    move_uploaded_file($_FILES['picture']['tmp_name'], 'images/' . $picture);

    $conn = new mysqli("localhost", "root", "", "cartoon_recommendation");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO cartoons (title, description, picture) VALUES ('$title', '$description', '$picture')";
    if ($conn->query($sql) === true) {
        echo "Already added!.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
