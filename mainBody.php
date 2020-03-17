		<div id="controlpnl" class="mainbody">
			<div id="parent" class="mainbody">
				<div id="vid" class="mainbody">
					<iframe id="ytplayer" type="text/html" width="720" height="405" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<div id="snginput" class="mainbody">
					<div id="tchrsong" class="mainbody">
						<form action="playlist.php" id="playlist" class="snginput">
							<input type="text" name="playlist" placeholder="Playlist Link">
							<button type="submit">Play</button>
						</form>
						<form action="addsong.php" id="addsong" class="snginput">
							<input type="text" name="song" placeholder="Song Link">
							<button type="submit">Add</button>			
						</form>
					</div>

					<?php
					/*
						if ($_SESSION['userType'] == 'teacher')
						{
							echo '
';
						}else
						{
							echo '
							<div id="stdntsong" class="mainbody">
								<form action="rqstsong.php" id="addsong" class="mainbody">
									<input type="text" name="song">
									<button type="submit">Request</button>
								</form>					
							</div>';
						}
					*/
					?>
				</div>
			</div>
		</div>
		


		<div id="queue" class="mainbody">
			<div id="list" class="mainbody">
				<div class="queueitem">
					<div id="songinfo">
						<div id="parent">
							<div id="image">
							<img src="unnamed.jpg" height="50" width="50">								
							</div>
							<div id="songname">
								<p>Never Gonna Give you up</p><p>Rick Astley</p>
							</div>
						</div>
					</div>
					<div id="likeratio" align="right"><h4>69 likes <a href="">like </a><a href="">dislike</a></h4></div>
				</div>
			</div>
			<?php
			/*
				if ($_SESSION['userType'] == 'teacher')
				{
					echo '
					<div id="requests" class="mainbody">
						
					</div>';						
				}
			*/
			?>
		</div>
		<script type="text/javascript">
			// helper functions
			function getcookie(cname) 
			{
			  	var name = cname + "=";
			  	var ca = document.cookie.split(';');

				for(var i=0; i<ca.length; i++) 
				{
					var c = ca[i];

					while (c.charAt(0)==' ')
					{ 
						c = c.substring(1);
					}

					if (c.indexOf(name) == 0)
					{
						return c.substring(name.length,c.length);
					}
				}
			  	return "";
			}	
			function escapehtml(text) 
			{
			  return text
			      .replace(/&/g, "&amp;")
			      .replace(/</g, "&lt;")
			      .replace(/>/g, "&gt;")
			      .replace(/"/g, "&quot;")
			      .replace(/'/g, "&#039;");
			}			
			function updateQueue(youtubelink)
			{}
			function () 
			{}
			function () 
			{}
			setInterval(function(){/* add looping fucntions here */  }, 250);
		</script>


