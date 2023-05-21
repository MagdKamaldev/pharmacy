<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 50px;
            height: 50px;
        }
        a {
            text-decoration: none;
            color: #009688;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Product List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Color</th>
            <th>Price</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include "connection.php";
        $query = "SELECT * FROM products";
        $records = mysqli_query($con, $query);
        while ($data = mysqli_fetch_array($records)) {
        ?>
            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['productname']; ?></td>
                <td><?php echo $data['color']; ?></td>
                <td><?php echo $data['price']; ?></td>
                <td><img src="<?php echo $data['image']; ?>" alt="Product Image"></td>
                <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
