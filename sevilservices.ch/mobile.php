<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<title>SEVILSERVICES</title>

<!-- media-queries.js -->
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<!-- html5.js -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
<link href="css/media-queries.css" rel="stylesheet" type="text/css" />
<link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/sevilmobile.css" rel="stylesheet" type="text/css" />

<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link rel="shortcut icon" type="image/x-icon" href="icon36.png" /><!-- Standard --> 

<link rel="apple-touch-icon" sizes="57x57" href="icon57.png" /> <!-- Standard iPhone -->
<link rel="apple-touch-icon" sizes="114x114" href="icon114.png" /><!-- Retina iPhone --> 
<link rel="apple-touch-icon" sizes="72x72" href="icon72.png" /><!-- Standard iPad -->
<link rel="apple-touch-icon" sizes="144x144" href="icon144.png" /><!-- Retina iPad --> 

<meta name="viewport" content="width=device-width" />

<link href='http://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll">

<h1>&nbsp;&nbsp;<span class="sevilSpan">SEVIL</span>SERVICES</h1>

<!-- MAIN CONTENT -->
<div class="container content container-fluid" id="home">


	<!-- HOME -->
	<div class="row-fluid">
  
		<div class="span6">
			           
			<!-- TAGLINE -->
			<div id="tagline">
				<img src="img/sevil_frei.jpg" width="300">
				<br>
				<br>Sauberkeit ist das Eine.
				<br>Vertrauen das Andere.
				<br>&nbsp;F&uuml;r beides stehe ich 
				<br>&nbsp;mit meinem Namen.
				<br>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sevil Imamoglu
			</div>
	        <div class="logo_klein">
				<br>
				<br>
	        	<img src="img/tiptopundsauber.jpg" width="266" border="0"/>
	        </div>			
			
		</div>
	</div>
	
	
	
	
	<!-- LEISTUNGEN -->
	<div class="row-fluid" id="ueber">	
		<div class="span6">
			<h2 class="page-title" id="scroll_up">
				Leistungen
			</h2>
			<div>
	        <div class="textLeistungenMobile">
	        	<img src="img/leistungen_text.jpg" width="200">
	        </div> 
	        <div class="personLeistungenMobile">
	        	<img src="img/stehend_ipadrechts.jpg" width="200">
	        </div> 
		</div>		
	</div>
	
	
	
	<!-- REFERENZEN -->
	<div class="row-fluid" id="impressum">
	
		<h2 class="page-title" id="scroll_up">
			Referenzen
		</h2>
		
		<!-- REFERENZEN -->
		<div class="span4" id="contact-info">			
	        <div class="textReferenzen">
		        <p><strong>Praxisgemeinschaft Engelgasse Basel</strong>
		        		<br>Seit Januar 2011
		        		<br>Unterhaltsreinigung
		        		<br>Spezial-Glasreinigung
		        		<br><a href="http://www.praxisengelgasse.ch" target="_blank">www.praxisengelgasse.ch</a>
		        </p>
		        <p><strong>Frenken-Garage AG Pratteln</strong>
		        		<br>Seit November 2011
		        		<br>Unterhaltsreinigung
		        		<br><a href="http://www.frenkengarage.ch" target="_blank">www.frenkengarage.ch</a>
		        </p>
		        <p><strong>Kantonale Psychiatrische Dienste Baselland M&uuml;nchenstein</strong>
		        		<br>Januar 2010 bis April 2015
		        		<br>Unterhaltsreinigung
		        		<br><a href="http://www.pbl.ch" target="_blank">www.pbl.ch</a>
		        </p>
		   </div>
		</div>
	</div>
	
	
	
	
	<!-- CONTACT -->
	<div class="row-fluid" id="contact">
	
		<h2 class="page-title" id="scroll_up">
				Kontakt
		</h2>
		
		<!-- CONTACT INFO -->
		<div class="span4" id="contact-info">
			<p>Sevil Imamoglu
			<br>Sevil's Dienstleistungszentrale Aktas 
			<br>Hupperstrasse 90 
			<br>4415 Lausen 
			</p> 
			<p><a href="mailto:info@sevilservices.ch">info@sevilservices.ch</a>
		   <br><a href="tel:+41 78 682 49 90" >Telefon +41 78 682 49 90</a> 
			</p>
		</div>
		
		<!-- CONTACT FORM -->
		<div class="span7" id="contact-form">
		
	        <div class="formKontakt">
				<?php
				if ( isset($_REQUEST["senden"])) {
					$fehlers = "";
					if ($_REQUEST["absendername"] == null){
						$fehlers = $fehlers."<li class='fehlermeldung'>Bitte geben Sie Ihren Namen an.</li>";
					}
					if ($_REQUEST["telefon"] == null){
						$fehlers = $fehlers."<li class='fehlermeldung'>Mit einer Telefonnummer k&ouml;nnen wir Sie bei Fragen besser erreichen.</li>";
					}
					if ($_REQUEST["emailvon"] == null){
						$fehlers = $fehlers."<li class='fehlermeldung'>Ohne E-Mail-Adresse k&ouml;nnen wir Sie nicht so gut kontaktieren.</li>";
					}
					if ($_REQUEST["betreff"] == null){
						$fehlers = $fehlers."<li class='fehlermeldung'>Ein Betreff w&auml;re auch noch gut.</li>";
					}
				
					if ($fehlers == "") {
						$nachrichtErhalten = "Wir haben Ihre Nachricht erhalten und werden uns bei Ihnen melden.";
						$betreiberSite 	= 	"www.sevilservices.ch";
						$empfaenger 	=  "info@sevilservices.ch";
						$sender 		= htmlspecialchars($_REQUEST["emailvon"]);
						$betreff 		= ": ". htmlspecialchars($_REQUEST["betreff"]) ." ";
						$mailtext 		= "<br>Name:<br>".htmlspecialchars($_REQUEST["absendername"])
										."<br><br>Telefon:<br>".htmlspecialchars($_REQUEST["telefon"])
										."<br><br>Email:<br>".htmlspecialchars($_REQUEST["emailvon"])
										."<br><br>Mitteilung:<br>".htmlspecialchars($_REQUEST["message"]);
						//Mail an Betreiber der Website						
						mail($empfaenger, "Nachricht von: ".$betreiberSite.$betreff, "<p>Folgende Nachricht kommt von einem Benutzer der Website ".$betreiberSite.":<br><br>".$mailtext."</p>", "From: $sender\n" . "Content-Type: text/html; charset=utf-8\n"); 
						
						//Mail an Benutzer/Besucher der Website						
						mail($sender, "Danke von ".$betreiberSite, "<p>".$nachrichtErhalten."<br><br>Folgende Angaben haben Sie uns gemacht: <br>".$mailtext."</p>", "From: ".$empfaenger."\n" . "Content-Type: text/html; charset=utf-8\n"); 
						
						$_REQUEST["absendername"] 	= "";
						$_REQUEST["telefon"]  		= "";
						$_REQUEST["emailvon"] 		= "";
						$_REQUEST["betreff"]		= "";
						$_REQUEST["message"]  		= "";
						
						echo "<p style='color: green'><img src='img/check.png'>&nbsp;&nbsp;&nbsp;Vielen Dank!<br>".$nachrichtErhalten;						
					} else {
						echo "<ul>".$fehlers."</ul>";
					}
				}
				?>
		
				<form class="form-horizontal" action="#contact-form" method="post">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="name">Name</label>
							<div class="controls">
								<input class="input-large" type="text" id="name" name="absendername" placeholder="Hans Muster" value="<?=$_REQUEST["absendername"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">E-Mail</label>
							<div class="controls">
								<input class="input-large" type="text" id="email" name="emailvon" placeholder="vorname.nachname@gmail.com" value="<?=$_REQUEST["emailvon"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="telefon">Telefon</label>
							<div class="controls">
								<input class="input-large" type="text" id="telefon" name="telefon" placeholder="079 123 45 67" value="<?=$_REQUEST["telefon"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="subject">Betreff</label>
							<div class="controls">
								<input class="input-large" type="text" id="subject" name="betreff" placeholder="Betreff" value="<?=$_REQUEST["betreff"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="message">Mitteilung</label>
							<div class="controls">
								<textarea class="input-large" rows="4" id="message" name="message" placeholder="Ihre Mitteilung..."><?=$_REQUEST["message"]?></textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" name="senden" id="senden" class="btn">Senden</button>
						</div>
					</fieldset>
				</form>
	        </div>  
	        <div class="logo_klein">
	        	<img src="img/tiptopundsauber.jpg" width="266" border="0"/>
	        </div>        
		
		</div>
	        
	</div>

	
	
	
	<!-- ABOUT / UEBER -->
	<div class="row-fluid" id="ueber">
		<div class="span6">
			<h2 class="page-title" id="scroll_up">
				&Uuml;ber <span class="sevilSpan">SEVIL</span>SERVICES
			</h2>
			<div class="personUeberMobile">
				<p>Kunden mit Dienstleistungen, die professionell und speditiv 
	        		ausgef&uuml;hrt werden zufrieden zu stellen, 
	        		das ist Aufgabe und Leidenschaft zugleich. 
	        		Deshalb gr&uuml;ndete ich 2009 mein Unternehmen. 
	        	</p>
	        	<p>Diskretion, Zuverl&auml;ssigkeit und Vertrauensw&uuml;rdigkeit 
	        		sind nicht nur Schlagworte, sondern oberstes Gebot, 
	        		wenn Sie uns die Reinigung Ihres Unternehmens, 
	        		Ihres Hauses anvertrauen oder andere Leistungen 
	        		unserer Dienstleistungspalette in Anspruch nehmen.
	        	</p>
	        	<p>SEVILSERVICES ist ein inhabergef&uuml;hrtes Unternehmen 
	        		mit einem zuverl&auml;ssigen
		        <img id="sevilStehend" src="img/stehend.jpg" height="400">
	        		 &uuml;berschaubaren Team, 
	        		das seit der Firmengr&uuml;ndung so besteht. Unsere Ausrichtung ist
					regional und konzentriert sich auf die Nordwestschweiz. 
					All das sind Pluspunkte in Hinblick auf Flexibilit&auml;t, 
					Schnelligkeit und nicht zuletzt den Preis. 
					Und schaffen so die Basis f&uuml;r eine erfolgreiche, 
					vertrauensvolle Zusammenarbeit.
	        	</p>	        	
	        </div>
		</div>	
	</div>
	
</div>

</div>

<!-- FOOTER -->
<div class="footer container container-fluid">


	<div id="credits">
		Design by <a href="http://www.powerlook.ch">powerlook.ch</a>.
	</div>

</div>

<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="js/init.js"></script>

</body>
</html>
