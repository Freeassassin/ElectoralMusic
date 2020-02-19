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





 
function sendmsg() 
{
  //Send new messages to the database
	var message = msginput.value;
  	var threadid = getcookie("ThreadId");
	if (message != "") 
    {
		var username = getcookie("messengerUname");
		var xmlhttp=new XMLHttpRequest();
    	msginput.value = "";
	  	xmlhttp.open("GET","update-messages.php?username="+username+"&message=" + message+"&ThreadId="+threadid,true);
    	xmlhttp.send();
	}
}
function change_chatroom(threadid)
{
  //Change the the chatroom to a diffrent one
  document.cookie="ThreadId=" + threadid;
  update();
}
setInterval(function(){ update(); update_requests();update_chatrooms();}, 250);
</script>
<script>
	/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;
	for (i = 0; i < dropdown.length; i++) 
	{
	  dropdown[i].addEventListener("click", function() 
	  {
	    this.classList.toggle("active");
	    var dropdownContent = this.nextElementSibling;
	    if (dropdownContent.style.display === "block") 
	    {
	      dropdownContent.style.display = "none";
	    } 
	    else 
	    {
	      dropdownContent.style.display = "block";
	    }
	  });
	}
</script>
<script type="text/javascript">
	//Show/hide the sidebar
	$(".sidehide").on('click',function()
	{
	  $('.doc').toggleClass("show");
	});
	//Hide the sidebar
	$(".ff").on('click',function()
	{
	  $('.doc').toggleClass("show");
	});
</script>