<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $Matkul=$_POST['Matkul'];
    $SKS=$_POST['SKS'];
    $Dosen=$_POST['Dosen'];

    $result = mysqli_query($mysqli, "UPDATE matkul SET Matkul='$Matkul',SKS='$SKS',Dosen='$Dosen' WHERE id=$id");

    header("Location: matkul.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM matkul WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $Matkul = $user_data['Matkul'];
    $SKS = $user_data['SKS'];
    $Dosen = $user_data['Dosen'];
}
?>
<html>
<head>  
    <title>Edit Mata Kuliah</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Mata Kuliah</h2>

    <form name="update_matkul" method="post" action="edit_matkul.php">
        <table align="center" border="0">
            <tr> 
                <td>Mata Kuliah</td>
                <td><input type="text" name="Matkul" value=<?php echo $Matkul;?>></td>
            </tr>
            <tr> 
                <td>SKS</td>
                <td><input type="text" name="SKS" value=<?php echo $SKS;?>></td>
            </tr>
            <tr> 
                <td>Dosen</td>
                <td><input type="text" name="Dosen" value=<?php echo $Dosen;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Perbarui"> | 
                <button><a href="matkul.php">Batal</a></button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>