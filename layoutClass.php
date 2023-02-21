<?php
	
	class LayoutClass {
		static function printHeader(){
			$conditionReander = "";
			if(isset($_SESSION['signedIn']) && $_SESSION['signedIn'] === true) {
				$conditionReander = "
				<li>
				 <a href='logout.php'>Wyloguj</a>
				</li>
				";
			} else {
				$conditionReander = "
				<li><a href='signInPage.php'>Zaloguj sie</a></li>
				<li><a href='signUnPage.php'>Zarejestruj sie</a></li>
				";
			}
			echo "
				<header>
					<div class='header__container'>
						<h4>LOGO</h4>
						<nav>
							<ul>
								<li><a>Home</a></li>
								<li><a>About</a></li>
								<li><a>Content</a></li>
								$conditionReander
							</ul>
						</nav>
					</div>
				</header>
			";
		}


		static function printFooter() {
			echo'
			<footer>
				<div class="footer_conteiner"> 					
					<ul>
					<h3>☏ Kontakt </h3>
						<li>Telefon</li>
						<li>Telefon</li>
						<li>Email</li>
					</ul>
									
					<ul>
					<h3>📖 Informacje</h3>
						<li>Coffee</li>
						<li>Tea</li>
						<li>Milk</li>
					</ul>
							
					<ul>
					<h3>📌 Lokalizajca</h3>
						<li>Coffee</li>
						<li>Tea</li>
						<li>Milk</li>
					</ul>
				</div>
				<div class="autor">
					<h2>Wojtek braslawski™<h2>
				</div>
			</footer>
			';
		}
	}

	
?>
