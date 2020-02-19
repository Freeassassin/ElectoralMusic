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
				<div>f</div>
				<div>f</div>
				<div>j</div>
				<div>j</div>
				<div>j</div>

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
			 

		</script>


