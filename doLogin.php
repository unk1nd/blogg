<?

if((isset($_POST['username']) ? $_POST['password'] : ''))
	{
		if ($_POST['username'] == "admin")
			{
				if ($_POST['password'] == 'p4ssorD')
				{
					session_start();
					$_SESSION['bruker'] = "adminZ00rkonGe";
					header("location: index.php");
				}	
				else 
				{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
    				window.alert('Brukernavn eller passord er feil.')
    				window.location.href='loggin.php';
    				</SCRIPT>"); 
				}
			} 
		else 
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
    		window.alert('Brukernavn eller passord er feil.')
    		window.location.href='loggin.php';
    		</SCRIPT>"); 
		}
     }
else 
{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Du har ikke skrevet ut begge feltene..')
    window.location.href='loggin.php';
    </SCRIPT>"); 
}    
    


?>