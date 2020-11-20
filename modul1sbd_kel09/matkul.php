<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM matkul ");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Daftar Mata Kuliah</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
<br/><br/>

    <h2 align="center">Kelompok 09<br></br>Daftar Mata Kuliah</h2>


    <table align="center" width='50%' border=2>

    <tr>
        <th>id</th><th>Matkul</th> <th>SKS</th> <th>Dosen</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['Matkul']."</td>";
        echo "<td>".$user_data['SKS']."</td>";
        echo "<td>".$user_data['Dosen']."</td>";    
        echo "<td><button1><a href='edit_matkul.php?id=$user_data[id]'>Edit</a></button1> | <button2><a href='delete_matkul.php?id=$user_data[id]'>Delete</a></button2></td></tr>";        
    }
    ?>
    </table>
</body>
<body2>
<form align="center">
<br></br>
<button><a href="add_matkul.php">Tambah Matkul</a></button> | 
<button><a href="index.php">Home</a></button>
</form>
</body2>
</html>