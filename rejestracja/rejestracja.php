<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<title>Rejestracja użytkownika w bazie danych</title>
	<style>
		div { margin: 10px; }
	</style>
</head>
<body>
<main>
	<article>
	
		<form action="rejestracja.php" method="post">
			  
			<div>
				<label>
					Podaj imię: <input type="text" name="imie">
				</label>
			</div>
			
			<div>
				<label>
					Podaj nazwisko: <input type="text" name="nazwisko">
				</label>
			</div>
			
			<div>
				<label>
					<input type="checkbox" name="regulamin"> Akceptuję regulamin serwisu!
				</label>		
			</div>
			<input type="submit" value="Zarejestruj się!">
				
		</form>

	<?php

	
	
		
	?>
			
	</article>
</main>
</body>
</html>