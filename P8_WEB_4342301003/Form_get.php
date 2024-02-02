<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Form </title>
</head>
<body>
    <center><h1> Program Data Mahasiswa dengan metode GET  </h1> </center>
    
    <Form method="GET" action="./proses_get.php"> 
        <table width="350" border="1" align= "center" bordercolor ="#0000ff">
            <tr>
                <td> <strong> NIM </strong></td>
                <td> <input name="nim" type="text" id="nim" /></td>
            </tr>
            <tr>
                <td> <strong> Nama Mahasiswa </strong></td>
                <td> <input name="nama" type="text" id="nama" /></td>
            </tr>
            <tr>
                <td> <strong> Jurusan </strong></td>
                <td> <input name="jurusan" type="text" id="jurusan" /></td>
            </tr>
            <tr>
                <td> <strong> Nilai </strong></td>
                <td> <input name="nilai" type="text" id="nilai" /></td>
            </tr>
        </table>
        
        <center><input type="submit" name="submit" value="tampil"/></center>
    </Form>
</body>
</html>