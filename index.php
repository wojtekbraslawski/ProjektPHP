<?php
require_once "systemClass.php";
require_once "layoutClass.php";

?>

<!DOCTYPE html>

<html lang="en" >
<?php
	SystemClass::printHead("./styles/main.css");
?>
<body>
	<?php
		LayoutClass::printHeader();
	?>

	<section class='hero'>	
		<div class="header__container">
					<ul>
					<h3>Akcesoria </h3>
					<img src="./assets/pad.png" >
						<li><button type="button" onclick="alert('Jescze nie ma pod strony')">Sprawdz Produkty</button></li>
					</ul>
  		</div>
		<div class="header__container">
					<ul>
					<h3>Akcesoria </h3>
					<img src="./assets/pad.png" >
						<li><button type="button" onclick="alert('Jescze nie ma pod strony')">Sprawdz Produkty</button></li>
					</ul>
  		</div>
		<div class="header__container">
					<ul>
					<h3>Akcesoria </h3>
					<img src="./assets/pad.png" >
						<li><button type="button" onclick="alert('Jescze nie ma pod strony')">Sprawdz Produkty</button></li>
					</ul>
  		</div>		
	</section>
	
	<?php
	 	LayoutClass::printFooter();
	?>
</body>

</html>
