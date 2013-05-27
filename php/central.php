<?php
$title_tabs = array("Organisation Hierarchique","Organisation par deroulement d'activites","Vue par intentions");
?>

	<div class="row-fluid" id="central_bloc"> <!-- bloc central --> 
		
	
		<div class="span1"></div>
		
		<div class="span10" id="claroline_entete_appli"> <!-- application centrale --> 
			<div class="row-fluid" id="claroline_sous_menu"> <!-- sous menu --> 
				<div class="tabbable">
					<ul class="nav nav-pills">
						<li class="active"><a href="#hierarchique" data-toggle="tab"><?php echo $title_tabs[0];?></a></li>
						<li><a href="#deroulement" data-toggle="tab"><?php echo $title_tabs[1];?></a></li>
						<li><a href="#intention" data-toggle="tab"><?php echo $title_tabs[2];?></a></li>
					</ul>
					<div class="tab-content" id="content_central_bloc">
						<div class="tab-pane active" id="hierarchique"><p>Soleo saepe ante oculos ponere, idque libenter crebris usurpare sermonibus, omnis nostrorum imperatorum, omnis exterarum gentium potentissimorumque populorum, omnis clarissimorum regum res gestas, cum tuis nec contentionum magnitudine nec numero proeliorum nec varietate regionum nec celeritate conficiendi nec dissimilitudine bellorum posse conferri; nec vero disiunctissimas terras citius passibus cuiusquam potuisse peragrari, quam tuis non dicam cursibus, sed victoriis lustratae sunt.</p></div>
						<div class="tab-pane" id="deroulement"><p>Quam ob rem id primum videamus, si placet, quatenus amor in amicitia progredi debeat. Numne, si Coriolanus habuit amicos, ferre contra patriam arma illi cum Coriolano debuerunt? num Vecellinum amici regnum adpetentem, num Maelium debuerunt iuvare?Cum autem commodis intervallata temporibus convivia longa et noxia coeperint apparari vel distributio sollemnium sportularum, anxia deliberatione tractatur an exceptis his quibus vicissitudo debetur, peregrinum invitari conveniet, et si digesto plene consilio id placuerit fieri, is adhibetur qui pro domibus excubat aurigarum aut artem tesserariam profitetur aut secretiora quaedam se nosse confingit.</p></div>
						<div class="tab-pane" id="intention">
							<div id="demo" class="demo" style="height:200px;"></div>
							<div id="demo2" class="demo" style="height:200px;"></div>
							<div id="mmenu" style="height:30px; overflow:auto;">
								<input type="button" id="add_folder" value="Ajouter un niveau d'organisation" style="display:block; float:left;"/>
								<input type="button" id="add_default" value="Ajouter une ressource" style="display:block; float:left;"/>
								<input type="button" id="rename" value="Renommer" style="display:block; float:left;"/>
								<input type="button" id="remove" value="Supprimer" style="display:block; float:left;"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		<div class="span1"></div>
		
	
	</div>