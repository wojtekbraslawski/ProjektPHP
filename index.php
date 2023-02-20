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
		<div class ='hero_container'>
			<h1>Sklep</h1>
			<p>Wojtek Braslawski</p>
			<button type='button'>
				<a> AAA </a>
			</buttom>
		</div>
	</section>
	
	<?php
	 	LayoutClass::printFooter();
	?>
</body>

</html>
