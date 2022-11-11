<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materipost</title>
</head>
<body>
    <form action="ProsesNabung.php" method="post">
        Masukan saldo awal <input type="text" name="saldo_awal" id="">
        Bunga <select name="bunga">;
        <option value= "0.10"> 10% </option>
        <option value= "0.05"> 5% </option>
        <option value= "0.03">3% </option>
    <select><br>
    bulan <input type="text" name="bulan" id="">
    <input type="submit" value="proses">      
    </form>
    
</body>
</html>