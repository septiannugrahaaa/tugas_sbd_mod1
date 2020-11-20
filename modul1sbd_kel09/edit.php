<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Nama=$_POST['Nama'];
    $NIM=$_POST['NIM'];
    $Asal=$_POST['Asal'];

    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET Nama='$Nama',NIM='$NIM',Asal='$Asal' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $Nama = $user_data['Nama'];
    $NIM = $user_data['NIM'];
    $Asal = $user_data['Asal'];
}
?>
<html>
<head>  
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Mahasiswa</h2>

    <form name="update_user" method="post" action="edit.php">
        <table align="center" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama" value=<?php echo $Nama;?>></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="NIM" value=<?php echo $NIM;?>></td>
            </tr>
            <tr> 
                <td>Asal</td>
                <td><input type="text" name="Asal" value=<?php echo $Asal;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Perbarui"> | 
                <button><a href="index.php">Batal</a></button>
                </td> 
            </tr>
        </table>
    </form>
</body>
</html>
