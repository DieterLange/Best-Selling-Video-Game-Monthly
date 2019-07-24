<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Rank</th>
        <th>Ranklast</th>
        <th>Title</th>
        <th>Publisher</th>
    </tr>
    <?php
   $conn = mysqli_connect("localhost", "root", "bestselling");
    if ($conn->connect_error)   {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ranks, ranklast, title, publisher from games";
    $result = $conn-> query($sql);

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>". $row["ranks"]. "</td><td>". $row["ranklast"]."</td><td>".$row["title"]."</td><td>".$row["publisher"]."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    $conn-> close();
    ?>
</table>
</body>
</html>