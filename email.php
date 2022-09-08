<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'email/vendor/autoload.php';
require 'conexao.php';
if (isset($_POST['enviar']))
{
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Configurações do Servidor
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cebolinhacebola69@gmail.com';                     //SMTP username
        $mail->Password   = 'qjcsmpjlwyfxjxwn';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recebimento
        $mail->setFrom('cebolinhacebola69@gmail.com', 'Site');
        $mail->addAddress('cebolinhacebola69@gmail.com', 'Devid');     //Add a recipient
        //$mail->addAddress('ellen@example.com');  //Pode colocar varios emails que vão receber a mensagem do cliente, ai no caso foi só um cebolinhacebola69@gmail.com             
        //$mail->addReplyTo('info@example.com', 'Information');
       //$mail->addCC('cc@example.com');
       //$mail->addBCC('bcc@example.com');

        //Anexo
        //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Conteúdo
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem recebida do Site kibeleza';

        $corpo = "Enviado pelo site:<br>
        Nome: ".$_POST['nome']."<br>
        Tel: ".$_POST['tel']."<br>
        E-Mail: ".$_POST['email']."<br>
        Mensagem:<br>".$_POST['mensagem'];//Esse nome é o que esta la no contato no input do nome
        

        $mail->Body    = $corpo;
        $mail->AltBody = 'Mensagem recebida pelo site: consultar sistema';

        $mail->send();
        echo 'Mensagem enviada com sucesso!';

        require_once("index.php");

        //***********RESPOSTA AUTOMÁTICA - CLIENTE******** */
        $mailResposta = new PHPMailer(true);
            $mailResposta->isSMTP();                                            //Send using SMTP
            $mailResposta->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mailResposta->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mailResposta->Username   = 'cebolinhacebola69@gmail.com';                     //SMTP username
            $mailResposta->Password   = 'qjcsmpjlwyfxjxwn';                               //SMTP password
            $mailResposta->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mailResposta->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recebimento
            $mailResposta->setFrom('cebolinhacebola69@gmail.com', 'KIBELEZA CLÍNICA DE ESTÉTICA');
            $mailResposta->addAddress($_POST['email'], 'CONTATO DO SITE');//email do cliente destinatário

            $mailResposta->isHTML(true);                                  //Set email format to HTML
        $mailResposta->Subject = 'Resposta do site Kibeleza';

        $corpoResposta = "Em breve entraremos em contato<br>
        Nome: ".$_POST['nome']."<br>
        Mensagem:<br>".$_POST['mensagem'];//Esse nome é o que esta la no contato no input do nome
        
        $mailResposta->Body    = $corpoResposta;
        $mailResposta->AltBody = 'Em breve entreremos em contato - CLINICA KIBELEZA';

        $mailResposta->send();

        /***************************************************/

        /********************BANCO DE DADOS********************/

        $nome = $_POST['nome'];
        $fone = $_POST['tel'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        $inserir = "INSERT INTO `contato`(`idContato`, `nomeContato`, `emailContato`, `foneContato`, `mensagemContato`) VALUES (DEFAULT,'$nome','$email','$fone','$mensagem')";
        mysqli_query($con, $inserir);

        /******************************************************/

    } catch (Exception $e) {
        echo "Mensagem não pode ser enviada.\n Erro: {$mail->ErrorInfo}";
    }
}
