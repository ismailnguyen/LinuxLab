
	 <div class="main">
	 	<div class="container contact">
	 		<div class="contact_top">
				<div class="contact_btn">
					<form method="post" action="./?logout">
						<input name="logout" type="submit" value="Deconnexion">
					</form>
				</div>
               <h3>Bienvenue <?php echo $_SESSION["user"]["firstname"].' '.$_SESSION["user"]["lastname"]; ?></h3>
               <p>Si vous avez une id&eacute;e d'article, n'h&eacute;sitez pas &agrave; nous la soumettre !</p>
               <div class="row">
                 <div class="col-md-12">
                   <form method="post" action="./?contact">
					<div class="contact-to">
					 	<input name="subject" type="text" class="text" placeholder="Sujet..." style="margin-left: 10px">
					</div>
					<div class="text2">
	                   <textarea name="content" placeholder="Contenu de l'actualit&eacute;..."></textarea>
	                </div>
	                <div class="contact_btn">
	               		<input name="contact" type="submit" value="Soumettre"><br/><br/>
	                </div>
	                <div class="clearfix"> <br/></div>
	               </form>
                  </div>				
                </div>
              </div>
	      </div>
	 </div>
