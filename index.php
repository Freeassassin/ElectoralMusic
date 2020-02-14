<?php
	session_start(); 
	require 'header.php';
?>
	<div id="mainbody" class="mainbody">
		<?php
		require'mainBody.php';
			if (isset($_SESSION['userId'])) 
			{
				require'mainBody.php';
			}else
			{
				require'singUpForm.php';
			}
		?>

	</div>
<?php
	//require 'footer.php';
?>