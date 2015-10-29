<?php include_once 'inc.begin.html'; ?>
	        <div class="menubar">
	        	<ul>
	        		<li><a href="./"					><img src="img/menupunkt.png">Home</a></li>
	        		<li><a href="sevilueber.php"		><img src="img/menupunkt.png">&Uuml;ber SEVILSERVICES</a></li>
	        		<li><a href="sevilleistungen.php"	><img src="img/menupunkt.png">Unsere Leistungen</a></li>
	        		<li class="menuPunktAktuell"		><img src="img/menupunkt.png">Anfrage</li>
	        		<li><a href="sevilkontakt.php"		><img src="img/menupunkt.png">Kontakt</a></li>
	        		<li><a href="sevilreferenzen.php"	><img src="img/menupunkt.png">Referenzen</a></li>
	        		<li><a href="sevilimpressum.php"	><img src="img/menupunkt.png">Impressum</a></li>
	        		<li><a href="tel:+41 78 682 49 90" onclick="alert('+41 78 682 49 90')" title="+41 78 682 49 90"><img src="img/phones16.png"></a></li>
	        	</ul>
	        </div>
	        <div class="pageAnfrage">
<!-- 	        	<img src="img/sevilanfragen.jpg"> -->
	        </div>
	        <div class="textTitel">
		        <h1>Anfrage</h1>
			</div>
			
			<div class="formAnfrage">
				<?php
				if ( isset($_REQUEST["senden"])) {
					$fehlers = "";
					if ($_REQUEST["emailvon"] == null){
						$fehlers = $fehlers."<li class='fehlermeldung'>Ohne E-Mail-Adresse oder Telefonnummer k&ouml;nnen wir Sie nicht so gut kontaktieren.</li>";
					}
				
					if ($fehlers == "") {
						$nachrichtErhalten = "Wir haben Ihre Nachricht erhalten und werden uns bei Ihnen melden.";
						$betreiberSite 	= 	"www.sevilservices.ch";
						$empfaenger 	=  "info@sevilservices.ch";
						$sender 		= htmlspecialchars($_REQUEST["emailvon"]);
						$mailtext 		= "<br>Email oder Telefon: ".$_REQUEST["emailvon"]."<br><br>Mitteilung: ".$_REQUEST["message"];
						$mailtext		.= "<br><br>Geschaeftskunde: <b>".$_REQUEST["Geschaeftskunde"]."</b>";
						$mailtext		.= "<br>Privatkunde: <b>".$_REQUEST["Privatkunde"]."</b>";
						$mailtext		.= "<br><br>Unterhaltsreinigung: <b>".$_REQUEST["Unterhaltsreinigung"]."</b>";
						$mailtext		.= "<br>Wohnungsreinigung: <b>".$_REQUEST["Wohnungsreinigung"]."</b>";
						$mailtext		.= "<br>Fensterreinigung: <b>".$_REQUEST["Fensterreinigung"]."</b>";
						$mailtext		.= "<br>SpezialGlasreinigung: <b>".$_REQUEST["SpezialGlasreinigung"]."</b>";
						$mailtext		.= "<br><br>Hauswartung: <b>".$_REQUEST["Hauswartung"]."</b>";
						$mailtext		.= "<br>Transporte: <b>".$_REQUEST["Transporte"]."</b>";
						$mailtext		.= "<br>Zuegelservice: <b>".$_REQUEST["Zuegelservice"]."</b>";
						//Mail an Betreiber der Website						
						mail($empfaenger, "Nachricht von: ".$betreiberSite, "<p>Folgende Anfrage kommt von einem Benutzer der Website ".$betreiberSite.":<br><br>".$mailtext."</p>", "From: myWebSite\n" . "Content-Type: text/html; charset=utf-8\n"); 
												
						$_REQUEST["emailvon"] 		= "";
						$_REQUEST["message"]  		= "";
						
						echo "<p style='color: green'><img src='img/check.png'>&nbsp;&nbsp;&nbsp;Vielen Dank!<br>".$nachrichtErhalten;						
					} else {
						echo "<ul>".$fehlers."</ul>";
					}
				}
				?>
				<form class="form-horizontal" action="#contact-form" method="post">
					<fieldset>
						<p>Ich interessiere mich f&uuml;r folgende Ihrer Leistungen:</p>
						<div class="control-group">
							<table>
								<tr>
									<td valign="top" width="220">
										    <input class="chkBox" type="checkbox" name="Unterhaltsreinigung">Unterhaltsreinigung 
										<br><input class="chkBox" type="checkbox" name="Wohnungsreinigung">Wohnungsreinigung  
										<br><input class="chkBox" type="checkbox" name="Fensterreinigung">Fensterreinigung  
										<br><input class="chkBox" type="checkbox" name="SpezialGlasreinigung">Spezial-Glasreinigung  
									</td>
									<td valign="top">
										    <input class="chkBox" type="checkbox" name="Hauswartung">Hauswartung  
										<br><input class="chkBox" type="checkbox" name="Transporte">Transporte  
										<br><input class="chkBox" type="checkbox" name="Zuegelservice">Z&uuml;gelservice
									</td>
								</tr>
								<tr>
									<td colspan="2">&nbsp;</td>
								</tr>
								<tr>
									<td>Ich bin <input class="chkBox" type="checkbox" name="Geschaeftskunde">Gesch&auml;ftskunde</td>
									<td><input class="chkBox" type="checkbox" name="Privatkunde">Privatkunde</td>
								</tr>
							</table>
							<p>Bitte nehmen Sie mit mir Kontakt auf, um mir ein Angebot erstellen zu k&ouml;nnen.</p> 
						</div>
						<div class="control-group">
							<label class="control-label" for="email">Absender:</label>
							<div class="controls">
								<input class="input-xlarge" type="text" id="email" name="emailvon" placeholder="E-Mail oder Telefonnummer" value="<?=$_REQUEST["emailvon"]?>"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="message">Mitteilung:</label>
							<div class="controls">
								<textarea class="input-xlarge" rows="3" id="message" name="message" placeholder="Ihre Bemerkung..."><?=$_REQUEST["message"]?></textarea>
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" name="senden" id="senden" class="btn">Senden</button>
						</div>
					</fieldset>
				</form>
			</div>
			        
	        <div class="personAnfrage">
	        	<img src="img/stehend_ipadlinks.jpg" height="530">
	        </div> 
			<div class="logo_klein">
	        	<img src="img/tiptopundsauber.jpg" width="266" border="0"/>
	        </div>        
<?php include_once 'inc.ende.html'; ?>