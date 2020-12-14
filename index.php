<?php 
	/*extract($_POST);


	$server='localhost';
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



    /*$mail = 'tafraouti.mohamed@outlook.fr'; // Déclaration de l'adresse de destination.
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
    {
        $passage_ligne = "\r\n";
    }
    else
    {
        $passage_ligne = "\n";
    }
    //=====Déclaration des messages au format texte et au format HTML.
    
    //==========
     
    //=====Définition du sujet.
    $sujet = "Hey mon ami !";
    //=========
     
    //=====Création du header de l'e-mail.
    $header= "MIME-Version: 1.0\r\n";
    $header.= 'From:"WeaponsB"<support@primfx.com>'."\n";
    $header.= 'Content-Type: text/html; charset="utf-8"'."\n";
    $header.= 'Content-Transfer-Encoding: 8bit';
    //==========
     
    //=====Création du message.

    //=====Ajout du message au format texte.
    $message='
        <html>
        <head>
        </head>
        <body>
            <p>Salut à tous, voici un e-mail envoyé par un <i>script PHP</i>.
            </p>
        </body>
        </html>
    ';
    //==========
     
    //=====Envoi de l'e-mail.
    mail("tafraouti.mohamed96@gmail.com",$sujet,$message,$header);
*/



/*$mail = 'tafraouti.mohamed96@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"WeaponsB\"<tafraouti.mohamed96@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"WeaponsB\" <tafraouti.mohamed96@gmail.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);*/

/*require_once 'mail.php';
$mail->setFrom('mohammad.tafraouti@gmail.com', 'Mailer');
$mail->addAddress('tafraouti.mohamed96@gmail.com');

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->send();*/

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
$mail->Subject='hello';
$mail->Body='body';
$mail->addAddress('tafraouti.mohamed96@gmail.com');                          // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

// Content
$mail->isHTML(true); 
$mail->Charset="UTF-8";

$mail->send();





?>