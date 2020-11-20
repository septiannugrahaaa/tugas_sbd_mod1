<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body>
    <br/><br/>

    <h2 align="center">Masukan Data Mahasiswa</h2>

    <form action="add.php" method="post" name="form1">
        <table align="center" width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr> 
                <td>NIM</td>
                <td><input type="text" name="NIM"></td>
            </tr>
            <tr> 
                <td>Asal</td>
                <td><input type="text" name="Asal"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"> | 
                <button><a href="index.php">Kembali</a></button>
                </td>
            </tr>
        </table>
    </form>
    <form align="center">
    <?php
    if(isset($_POST['Submit'])) {
        $Nama = $_POST['Nama'];
        $NIM = $_POST['NIM'];
        $Asal = $_POST['Asal'];

        include_once("config.php");
        
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(Nama,NIM,Asal) VALUES('$Nama','$NIM','$Asal')");
        
        echo "Data Mahasiswa Berhasil Ditambahkan";
              
    }
    ?>
    </form>
</body>
</html>
