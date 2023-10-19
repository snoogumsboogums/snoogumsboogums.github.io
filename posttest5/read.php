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

        a {
            display: block;
            text-align: center;
            margin: 10px;
            text-decoration: none;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            font-weight: bold;
        }

        a:hover {
            background-color: #0056b3;
        }

        .kartun {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            display: inline-block;
            text-align: center;
            width: 300px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .kartun-wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .kartun img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 10px 0;
        }

        .kartun h3 {
            color: #333;
            font-size: 20px;
            margin: 10px 0;
        }

        .kartun p {
            color: #666;
        }
    </style>
</head>

<body>
    <h2>Cartoon List</h2>
    <!-- <a href="create.php">Create Kartun</a> -->
    <div class="kartun-wrapper">
        <?php
        $conn = new mysqli("localhost", "root", "", "cartoon_recommendation");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM cartoons";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="kartun">';
                echo '<img src="images/' . $row['picture'] . '">';
                echo '<h3>' . $row['title'] . '</h3>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<a href="update.php?id=' . $row['id'] . '">Update</a>';
                echo '<a href="delete.php?id=' . $row['id'] . '">Delete</a>';
                echo '</div>';
            }
        } else {
            echo "Nothing too see yet.";
        }
        
        $conn->close();
        ?>
</div>
<a href="create.php">Add</a>
</body>
</html>