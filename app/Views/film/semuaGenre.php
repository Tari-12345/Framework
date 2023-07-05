<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Film</title>
</head>
<body>
    
</body>
    <h1>Data Genre</h1>
    <table border = "1" cellspacing ="0" cellpading="5">
        <tr>
            <th>No</th>
            <th>nama_genre</th>
</tr>
<?php $i = 1; ?>
<?php foreach($semuagenre as $genre) : ?>
</tr>
    <td><?= $i++ ?></td>
    <td><?php echo $genre['nama_genre'] ?>
    <td>
          <a href="#" class="btn btn-success">Update</a>
          <a href="#" class="btn btn-warning">Delete</a>
        
</td>
</tr>

<?php endforeach; ?>
</table>
</body>    
</html>