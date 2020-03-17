<?php
	session_start(); 
	require 'header.php';
?>
	<div id="mainbody" class="mainbody">
		<?php
		//require'mainBody.php';
			if (isset($_SESSION['userId'])) 
			{
				require'mainBody.php';
			}
			else
			{
				require'signUpForm.php';
			}
		?>

	</div>
<?php
	//require 'footer.php';
?>