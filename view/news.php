<?php
$list_article = include("/controller/articleController.php");
$_count = new Article();
$_count = $_count->count();
?>

	 <div class="main">
         <div class="container content_bottom">
         	<h3 id="news">Votre actualit&eacute; du LinuxLab</h3>
         	<p class="m_1">Le manuel disait " N&eacute;cessite Windows XP ou mieux ". J'ai donc install&eacute; Linux.</p>
         	<div class="row">
         		<div class='col-md-7 comment_top'>
         			<div class="project_grid">
						  <?php
						  foreach($list_article as $article)
						  {
							$time = strtotime($article["created_date"]);
						  ?>
						  <ul class="project_box">
							<li class="mini-post-meta"><time datetime=""><span class="day"><?php echo date('d', $time); ?></span><span class="month"><?php echo date('M', $time); ?></span></time></li>
							<li class="desc"><h5><a href="?news=<?php echo $article["id_article"]; ?>"><?php echo htmlentities($article["title"]); ?></a></h5>
								<p>
									<?php
									if(empty($_GET["news"]))
									{
									?>
									<?php echo substr(htmlentities($article["content"]), 0, 45); ?> <a href="?news=<?php echo $article["id_article"]; ?>"><img src="resources/images/comment_arrow.png" alt=""/></a>
									<?php
									}
									else
										echo htmlentities($article["content"]); // n'autorise pas les balises HTML
									?>
								</p>
							</li>	
							<div class="clearfix"> </div>
						  </ul>
						  <?php
						  }
						  
						  if(empty($_GET["news"]))
						  {
							  $_max = isset($_GET["max"]) && !empty($_GET["max"]) ? $_GET["max"] : 10;
							  
							  $_nbrPages = ceil($_count/$_max);
							  
							  if(isset($_GET["page"]))
							  {
								  $_currentPage = intval($_GET["page"]);
								  
								  if($_currentPage > $_nbrPages)
									  $_currentPage = $_nbrPages;
							  }
							  else
							  {
								  $_currentPage = 1;
							  }
							  
							  echo 'Page ';
							  
							  for($p=1; $p<=$_nbrPages; $p++)
								if($p == $_currentPage)
									echo '<b>'.$p.'</b> ';
								else
									echo '<a href="?news&page='.$p.'">'.$p.'</a> ';
						  }
						  ?>
					  </div>
         		</div>
         		<div class='col-md-5'>
         		  <ul class="comment_section top_grid">
         		  		<br><span class="m_2"><a class="twitter-timeline"  href="https://twitter.com/esgilinuxlab" data-widget-id="645280699914784773">Tweets de @esgilinuxlab</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></span>
         		  	</li>
         		  	<div class="clearfix"></div>
         		  </ul>
					<ul class="comment_section">
         		  		<br><span class="m_2"><div class="fb-page" data-href="https://www.facebook.com/pages/LinuxLab/711131565632001" data-width="500" data-height="250" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/LinuxLab/711131565632001"><a href="https://www.facebook.com/pages/LinuxLab/711131565632001">LinuxLab</a></blockquote></div></div></div></span>
         		  	<div class="clearfix"></div>
         		  </ul>
         		</div>
         	</div>
         </div>      
     </div>
