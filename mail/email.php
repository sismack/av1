<?php
      include_once('../webservice/Mysql.php');
      require_once('PhpMailer/PHPMailerAutoload.php');

      $mysql = new MySQL('host', 'user', 'password', 'database');
      
      $nome = $_POST['nome'];
      $email = $_POST['mail'];
      $mensagem = $_POST['mensagem'];
      $opcao = $_POST['opcao'];
      $mailto = "";
      $depto = "";
      
      switch ($opcao) {
          case 'Dúvidas':
            $mailto = "duvida@mackenzie.br";
            $depto = "Dúvidas";
            break;
          case 'Elogios':
            $mailto = "elogio@mackenzie.br";
            $depto = "Elogios";
            break;
          case 'Sugestões':
            $mailto = "sugestao@mackenzie.br";
            $depto = "Sugestões";
            break;
          case 'Reclamações':
            $mailto = "reclamacao@mackenzie.br";
            $depto = "Reclamações";
            break;
          default:
          	$mailto = "geral@mackenzie.br";
            $depto = "Educação";
          	break;
      }
      
      $corpo = "Formulário de ".$opcao." enviado pelo sistema.<hr>
      em: ".date("d/m/Y h:i:s")."<br>
      ".$nome."<br>
      ".$email."<p>
      ".$mensagem;
      
      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->IsHTML(true);
      $mail->Host = 'smtp.mackenzie.br';
      $mail->Port = 495;
      $mail->Username = 'usuario';
      $mail->Password = 'senha';
      $mail->SMTPAuth = true;
      $mail->CharSet = "ISO-8859-1";
      $mail->SMTPDebug = 0;
      $mail->Debugoutput = 'html';      
      $mail->ClearAddresses();
      $mail->setFrom($email, $nome);
      $mail->addAddress($mailto, $depto);
      $mail->Subject = 'Formulário de '.$opcao.' enviado pelo sistema.';
      $mail->Body = ($corpo);
      if(!$mail->send()) {
        echo "<b><font color=#ff0000>Erro no envio: " . $mail->ErrorInfo."</b></font><br>";
      } else {
        echo 'Email enviado.<br>';
      }
      $mail->ClearAddresses();
      
      echo $corpo;
      
      try{
          $mysql->insert('mensagens', array('nome' => $nome, 'email' => $email, 'mensagem' => $mensagem, 'opcao' => $opcao));
          $result = $mysql->insert_id(); 
      }catch(Exception $e){
          echo 'Erro: ', $e->getMessage();
      }

?>