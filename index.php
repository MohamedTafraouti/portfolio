<?php 
	//extract($_POST);

	/*$server='localhost';
    $user='root';
    $pass='';
    $db='portfolio';
    $cnx= mysqli_connect($server,$user,$pass,$db);

	
	if (!$cnx) 
    {
        echo "erreur";
    }
    if(isset($_POST['ajouter']))
    {
    	echo "1";
 
        $req="insert into message(nameVisiteur,emailVisiteur,subjectMsg,contenuMsg) values ('$name','$email','$subject','$message')";
        
    }

    if (mysqli_query($cnx,$req)) 
    {
        echo "Message sent"; 
        echo "
        <script language=javascript>
            document.location.replace('inde.html');
        </script>"; 
        //redirection('./inde.html');
    }
    else 
    {
        echo "Error: " . $req . "<br>" . mysqli_error($cnx);
    }*/



    

require 'PHPMailer/PHPMailerAutoload.php';
$mail = new PHPMailer();

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'mohammad.tafraouti@gmail.com';                     // SMTP username
$mail->Password   = 'SoubhanaAllah'; 
$mail->setFrom('no-reply@howcode.org');                          // SMTP password
$mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->Port       = 465;  
$mail->Subject=$subject;
$mail->Body='Nom : ' . $name .'<br>' . 'Email : ' . $email . '<br>Message : ' . $message ;
$mail->addAddress('tafraouti.mohamed96@gmail.com');                          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

// Content
$mail->isHTML(true); 
$mail->Charset="UTF-8";

if ($mail->send()) 
{
    echo "

        <script language=javascript>
            sessionStorage.setItem('send','oui');
            document.location.replace('index.html');
        </script>"; 
}
else
{
    echo "
        <script language=javascript>
            sessionStorage.setItem('send','non');
            document.location.replace('index.html');
        </script>"; 
}





?>