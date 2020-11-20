<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ");
foreach ($mysqli as $data)
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>


<br/><br/>

    <h2 align="center">Tugas SBD<br></br>Data Mahasiswa
    <br></br>----------------------------------------------</h2>


    <table align="center" width='60%' border=1>

    <tr>
        <th>id</th><th>Nama</th> <th>NIM</th> <th>Asal</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['Nama']."</td>";
        echo "<td>".$user_data['NIM']."</td>";
        echo "<td>".$user_data['Asal']."</td>";    
        echo "<td><button1><a href='edit.php?id=$user_data[id]'>Edit</a></button1> | <button2><a href='delete.php?id=$user_data[id]'>Delete</a></button2></td></tr>";        
    }
    ?>
   
    </table>
</body>
<body2>
<form align="center">
<br></br>
<button><a href="add.php">Tambah Mahasiswa</a></button> | <button><a href='matkul.php?'>Daftar Matkul</a></button>
    <br></br>
<button3><a href="inner_join.php">Inner Join</a></button3> * <button3><a href="left_join.php">Left Join</a></button3> * <button3><a href="right_join.php">Right Join</a></button3>
</form>
</body2>
</html>