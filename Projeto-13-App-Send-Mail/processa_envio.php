<?php 
// ativar erros em ambiente de desenvolvimento local para depuração
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "./PHPMailer/Exception.php";
require "./PHPMailer/OAuth.php";
require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/POP3.php";
require "./PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//print_r($_POST);

class Mensagem{
  private $para = null;
  private $assunto = null;
  private $mensagem = null;

  public function __get($atributo){
    return $this->$atributo;
  }

  public function __set($atributo, $valor){
    $this->$atributo = $valor;
  }

  public function mensagemValida(){
    if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
      return false;
    }
    return true;
  }
}

$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para'] ?? '');
$mensagem->__set('assunto', $_POST['assunto'] ?? '');
$mensagem->__set('mensagem', $_POST['mensagem'] ?? '');

//print_r($mensagem);

if (!$mensagem->mensagemValida()){
  echo 'Mensagem invalida';
  die();
}

$mail = new PHPMailer(true);
try {
    //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '********';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
  $mail->setFrom('teste@jaype.com.br', 'Jaype');
    $mail->addAddress('teste@jaype.com.br', 'Jaype');     //Add a recipient
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Olá. Eu sou o assunto'; 
    $mail->Body    = 'Oi. Eu sou o conteúdo do <strong>e-mail</strong>';
    $mail->AltBody = 'Oi. Eu sou o conteúdo do e-mail';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
