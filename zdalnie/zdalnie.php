<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Rejestracja pracy zdalnej</title>
</head>
<body>
<main>
	<article>

    <?php

function token($dlugosc = 10) {
    $znaki = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $znakiDlugosc = strlen($znaki);
    $randomString = '';
    for ($i = 0; $i < $dlugosc; $i++) {
        $randomString .= $znaki[rand(0, $znakiDlugosc - 1)];
    }
    return $randomString;
}


session_start();

echo "<p>ID sesji: " . token(10) . "</p>";
if (!isset($_SESSION["activity"])) {
  
    $_SESSION["activity"] = 1;
    
    
} else {

  
    $_SESSION["activity"]++;
}

if(!isset($_SESSION["historia"]))
{
    $_SESSION["historia"] = [];

}

$tablica = "<p>Liczba odświeżeń podstrony: " . $_SESSION["activity"] . " Data i czas: " . date('Y-m-d H:i:s') . "</p>";
$_SESSION["historia"][] = $tablica;

foreach( $_SESSION["historia"] as $wartosc){
echo $wartosc;
}




?>
			
	</article>
</main>
</body>
</html>
