<html>
<head>
    <title>Tambah Mata Kuliah</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Mata Kuliah</h2>

    <form action="add_matkul.php" method="post" name="form2">
        <table align="center" width="25%" border="0">
            <tr> 
                <td>Mata Kuliah</td>
                <td><input type="text" name="Matkul"></td>
            </tr>
            <tr> 
                <td>SKS</td>
                <td><input type="text" name="SKS"></td>
            </tr>
            <tr> 
                <td>Dosen</td>
                <td><input type="text" name="Dosen"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"> | 
                <button><a href="matkul.php">Kembali</a></button></td>
            </tr>
        </table>
    </form>

    <form align="center">
    <?php
    if(isset($_POST['Submit'])) {
        $Matkul = $_POST['Matkul'];
        $SKS = $_POST['SKS'];
        $Dosen = $_POST['Dosen'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO matkul(Matkul,SKS,Dosen) VALUES('$Matkul','$SKS','$Dosen')");

        echo "Mata Kuliah Berhasil Ditambahkan";
    }
    ?>
    </form>
</body>
</html>
