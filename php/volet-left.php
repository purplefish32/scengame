<?php
$title_volet = "Contexte et intentions";
$title_accordion = array("Entreprise","Formation","Competence","Jeu");
$title_tabs = array("Contexte","Intention");
?>

<div id="menu-gauche" ouvert="pasok">

			
		<div id="contenu-menu-gauche">
			<div id="claroline_tete_volet_gauche"> <!-- header du volet -->
				<h5><?php echo $title_volet;?></h5>
			</div>
			
				<div id="accordion">
					<h3><?php echo $title_accordion[0];?></h3>
					
						<div id="tabsA" class="scroll">
							<ul>
								<li><a href="#tabs-1"><?php echo $title_tabs[0];?></a></li>
								<li><a href="#tabs-2"><?php echo $title_tabs[1];?></a></li>
							</ul>
							<div id="tabs-1">
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Nom">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Secteur d'activite">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Fonction metier">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Fonction metier">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Fonction metier">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Fonction metier">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Fonction metier">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Fonction metier">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
							</div>
							<div id="tabs-2">
								<p>Contenu2</p>
							</div>
						</div>
					
					<h3><?php echo $title_accordion[1];?></h3>
					
						<div id="tabsB" class="scroll">
							<ul>
								<li><a href="#tabs-3"><?php echo $title_tabs[0];?></a></li>
								<li><a href="#tabs-4"><?php echo $title_tabs[1];?></a></li>
							</ul>
							<div id="tabs-3">
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Public cible">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Lieu">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Ressources">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
								<form class="form-search">
									<div>
									  <input type="text" class="search-query" value="Outils">
									  <button class="btn btn-primary" type="submit"><i class="icon-ok"></i></button>
									</div>
								</form>
							</div>
							<div id="tabs-4">
								<p>Contenu4</p>
							</div>
						</div>
	
					<h3><?php echo $title_accordion[2];?></h3>
			
						<div id="tabsC" class="scroll">
							<ul>
								<li><a href="#tabs-5"><?php echo $title_tabs[0];?></a></li>
								<li><a href="#tabs-6"><?php echo $title_tabs[1];?></a></li>
							</ul>
							<div id="tabs-5">
								<p>Contenu5</p>
							</div>
							<div id="tabs-6">
								<p>Contenu6</p>
							</div>
						</div>
				
					<h3><?php echo $title_accordion[3];?></h3>
		
						<div id="tabsD" class="scroll">
							<ul>
								<li><a href="#tabs-7"><?php echo $title_tabs[0];?></a></li>
								<li><a href="#tabs-8"><?php echo $title_tabs[1];?></a></li>
							</ul>
							<div id="tabs-7">
								<p>Contenu7</p>
							</div>
							<div id="tabs-8">
								<p>Contenu8</p>
							</div>
						</div>
				
				</div>
		</div>	
			<div id="click-left">
				<i class="icon-chevron-right icon-white" id="chevron_right_leftvolet"></i>
				<i class="icon-chevron-left icon-white" id="chevron_left_leftvolet"></i>
			</div>

</div>