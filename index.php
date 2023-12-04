<?php
    require "functions.php";
    $mangas = query("SELECT * FROM tbmanga");
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

    <a href="add.php">[+] Add new manga</a><br><br>

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
        <?php foreach( $mangas as $manga ) { ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><img src="cover/<?php echo $manga["cover"] ?>" alt=""></td>
            <td><?php echo $manga["title"] ?></td>
            <td><?php echo $manga["mangaka"] ?></td>
            <td><?php echo $manga["releaseyear"] ?></td>
            <td>
                <a href="">Update</a>
                <a href="delete.php?id=<?php echo $manga["id"] ?>" onclick="return confirm('Delete this manga?');">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>
    
</body>
</html>