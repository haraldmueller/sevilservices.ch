<?php include_once 'inc.begin.html'; ?>
	        <div class="menubar">
	        	<ul>
	        		<li><a href="./"					><img src="img/menupunkt.png">Home</a></li>
	        		<li><a href="sevilueber.php"		><img src="img/menupunkt.png">&Uuml;ber SEVILSERVICES</a></li>
	        		<li><a href="sevilleistungen.php"	><img src="img/menupunkt.png">Unsere Leistungen</a></li>
	        		<li><a href="sevilanfrage.php"		><img src="img/menupunkt.png">Anfrage</a></li>
	        		<li class="menuPunktAktuell"		><img src="img/menupunkt.png">Kontakt</li>
	        		<li><a href="sevilreferenzen.php"	><img src="img/menupunkt.png">Referenzen</a></li>
	        		<li><a href="sevilimpressum.php"	><img src="img/menupunkt.png">Impressum</a></li>
	        		<li><a href="tel:+41 78 682 49 90" onclick="alert('+41 78 682 49 90')" title="+41 78 682 49 90"><img src="img/phones16.png"></a></li>
	        	</ul>
	        </div>
	        <div class="pageKontakt">
<!-- 	        	<img src="img/sevilkontakt1.png"> -->
	        </div>
	        <div class="textTitel">
		        <h1>Kontakt</h1>
	        </div>
	        <div class="personKontakt">
	        	<img src="img/stehend_ipadlinks.jpg" height="530">
	        </div> 
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
						mail($empfaenger, "Nachricht von: ".$betreiberSite." ".$betreff, "<p>Folgende Nachricht kommt von einem Benutzer der Website ".$betreiberSite.":<br><br>".$mailtext."</p>", "From: $sender\n" . "Content-Type: text/html; charset=utf-8\n"); 
						
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
								<input class="input-xlarge" type="text" id="name" name="absendername" placeholder="Hans Muster" value="<?=$_REQUEST["absendername"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">E-Mail</label>
							<div class="controls">
								<input class="input-xlarge" type="text" id="email" name="emailvon" placeholder="vorname.nachname@gmail.com" value="<?=$_REQUEST["emailvon"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="telefon">Telefon</label>
							<div class="controls">
								<input class="input-xlarge" type="text" id="telefon" name="telefon" placeholder="079 123 45 67" value="<?=$_REQUEST["telefon"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="subject">Betreff</label>
							<div class="controls">
								<input class="input-xlarge" type="text" id="subject" name="betreff" placeholder="Betreff" value="<?=$_REQUEST["betreff"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="message">Mitteilung</label>
							<div class="controls">
								<textarea class="input-xlarge" rows="4" id="message" name="message" placeholder="Ihre Mitteilung..."><?=$_REQUEST["message"]?></textarea>
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
	        
<?php include_once 'inc.ende.html'; ?>