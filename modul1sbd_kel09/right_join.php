<html>

<head>
    <title>Tabel Right Join</title>
    <link rel="stylesheet" href="tampilan.css">
</head>

<body align="center">
<br>/<br>
    <h1>Right Join</h1>
    <h2>--------------------------------------------------</h2>
    <table align="center" width='50%' border=1 class='table'>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Asal</th>
            <th>Matkul</th>
            <th>SKS</th>
        </tr>
        <?php
        include_once("config.php");
        $result = mysqli_query($mysqli, "SELECT A.id, A.Nama, A.NIM, A.Asal, B.Matkul, B.SKS FROM mahasiswa A RIGHT JOIN matkul B
     ON A.id = B.id ");
        while($data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $data['id'] . "</td>";
            echo "<td>" . $data['Nama'] . "</td>";
            echo "<td>" . $data['NIM'] . "</td>";
            echo "<td>" . $data['Asal'] . "</td>";
            echo "<td>" . $data['Matkul'] . "</td>";
            echo "<td>" . $data['SKS'] . "</td>";
        }
        ?>
    </table>
    <form align="center">
    <br></br>
    <button><a href="index.php">Home</a></button>
    </form>
    </body>

</html>