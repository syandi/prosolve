<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>selamat datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1> masukkan keluhan anda</h1>
    <form action="http://problem.test/post/pekerjaan" method="post">
        <label for="keluhan">jenis keluhan</label>
        <input type="text" name="keluhan" id="keluhan">
        <br>
        <label for="body">deskripsi keluhan</label>
        <textarea name="body" id="body" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>
