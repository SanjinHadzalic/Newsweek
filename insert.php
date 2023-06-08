<?php
    include 'connect.php';

    $slika=$_FILES['slika']['name'];
    $naslov=$_POST['naslov'];
    $sazetak=$_POST['kratki'];
    $sadrzaj=$_POST['sadrzaj'];
    $kategorija=$_POST['newsCategory'];
    $datum=date('d.m.Y.');

    if(isset($_POST['arhiva'])){
        $arhiva=1;
    }else{
        $arhiva=0;
    }
    
    $target_dir = 'images/'.$slika;
    move_uploaded_file($_FILES['slika']['tmp_name'], $target_dir);

    try{
        $query = "INSERT INTO newsweek(datum, naslov, sazetak, tekst, slika, kategorija, arhiva) VALUES('$datum', '$naslov', '$sazetak', '$sadrzaj', '$slika', '$kategorija', '$arhiva')";
    
        $result = mysqli_query($dbc, $query) or die('Error querying database.');
    } catch(mysqli_sql_exception $e){
        var_dump($e);
        exit;
    }
    mysqli_close($dbc);
?>
