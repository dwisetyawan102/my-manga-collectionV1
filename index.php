<?php
    $db = mysqli_connect("localhost", "root", "", "dbmanga");
    $result = mysqli_query($db, "SELECT * FROM tbmanga");
    if( !$result ) {
        echo mysqli_error($db);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Manga Collection</h1>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Cover</th>
            <th>Title</th>
            <th>Mangaka</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
        <?php $i = 1 ?>
        <?php while( $manga = mysqli_fetch_assoc($result) ) { ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><img src="cover/<?php echo $manga["cover"] ?>" alt=""></td>
                <td><?php echo $manga["title"] ?></td>
                <td><?php echo $manga["mangaka"] ?></td>
                <td><?php echo $manga["releaseyear"] ?></td>
                <td>
                    <a href="">Update</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>