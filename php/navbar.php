<?php
$content_first_level = array("Fichier","Edition","Vue","Outils","?");
$content_file = array("Nouveau","Ouvrir","Sauvegarder","Exporter","Fermer");
$content_export = array("Exporter la branche en XML","Exporter la vue hierarchique en JPEG","Exporter la vue par activite en JPEG","Exporter la vue par intention en JPEG","Exporter la vue par intention en HTML","Exporter le projet en PDF");
$content_edit = array("Couper","Copier","Coller","Supprimer");
$content_view = array("Contexte et intentions","Bibliotheque et entrepot","Barre d'outils","Plein ecran");
$content_tools = array("Fonction LGF","Definir la langue","Reglages graphiques","Verifier la consistance du scenario");
$content_functionLGF = array("Indexation dans l'entrepot LGF");
$content_graphic_settings = array("Parametrage de vue par activite");
$content_about = array("A propos de scen game");
$content_language = array("Anglais","Francais","Espagnol")
?>

	<div class="row-fluid"> <!-- ligne du haut pour le menu -->
		<div class="navbar navbar-fixed-top">
		  <div class="navbar-inner">
			<div class="container">
			  <a href="#" class="brand" id="click_logo_navbar">Logo</a>
			  <ul class="nav">
				<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $content_first_level[0];?> <b class="caret"></b> </a>
					<ul class="dropdown-menu">
					<li><a href="#"><?php echo $content_file[0];?></a></li>
					<li><a href="#"><?php echo $content_file[1];?></a></li>
					<li><a href="#"><?php echo $content_file[2];?></a></li>
					<li class="dropdown-submenu">
						<a href="#"><?php echo $content_file[3];?></a>
						<ul class="dropdown-menu">
							<li><a href="#"><?php echo $content_export[0];?></a></li>
							<li class="divider"></li>
							<li><a href="#"><?php echo $content_export[1];?></a></li>
							<li><a href="#"><?php echo $content_export[2];?></a></li>
							<li><a href="#"><?php echo $content_export[3];?></a></li>
							<li><a href="#"><?php echo $content_export[4];?></a></li>
							<li class="divider"></li>
							<li><a href="#"><?php echo $content_export[5];?></a></li>
						</ul>
					</li>
					<li><a href="#"><?php echo $content_file[4];?></a></li>
				  </ul>
				</li>
				<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $content_first_level[1];?> <b class="caret"></b> </a>
					<ul class="dropdown-menu">
					<li><a href="#"><?php echo $content_edit[0];?></a></li>
					<li><a href="#"><?php echo $content_edit[1];?></a></li>
					<li><a href="#"><?php echo $content_edit[2];?></a></li>
					<li><a href="#"><?php echo $content_edit[3];?></a></li>
				  </ul>
				</li>
				<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $content_first_level[2];?> <b class="caret"></b> </a>
				  <ul class="dropdown-menu">
					<li><a href="#"><?php echo $content_view[0];?></a></li>
					<li><a href="#"><?php echo $content_view[1];?></a></li>
					<li class="divider"></li>
					<li><a href="#"><?php echo $content_view[2];?></a></li>
					<li class="divider"></li>
					<li><a href="#"><?php echo $content_view[3];?></a></li>
				  </ul>
				</li>
				<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $content_first_level[3];?> <b class="caret"></b> </a>
				  <ul class="dropdown-menu">
					<li class="dropdown-submenu">
						<a href="#"><?php echo $content_tools[0];?></a>
						<ul class="dropdown-menu">
							<li><a href="#"><?php echo $content_functionLGF[0];?></a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><?php echo $content_tools[1];?></a>
						<ul class="dropdown-menu">
							<li><a href="#"><?php echo $content_language[0];?></i></a></li>
							<li><a href="#"><?php echo $content_language[1];?></a></li>
							<li><a href="#"><?php echo $content_language[2];?></a></li>
						</ul>
					</li>
					<li class="dropdown-submenu">
						<a href="#"><?php echo $content_tools[2];?></a>
						<ul class="dropdown-menu">
							<li><a href="#"><?php echo $content_graphic_settings[0];?></a></li>
						</ul>
					</li>
					<li><a href="#"><?php echo $content_tools[3];?></a></li>
				  </ul>
				</li>
				<li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $content_first_level[4];?> <b class="caret"></b> </a>
				  <ul class="dropdown-menu">
					<li><a href="#"><?php echo $content_about[0];?></a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</div>
	</div>
