<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores do formulário
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    // Destinatário do e-mail
    $destinatario = "serranegramc@redenets.com.br";

    // Assunto do e-mail
    $assunto = "Novo contato de $nome";

    // Conteúdo do e-mail
    $conteudo = "Nome: $nome\n";
    $conteudo .= "E-mail: $email\n";
    $conteudo .= "Telefone: $telefone\n";
    $conteudo .= "Mensagem:\n$mensagem\n";

    // Cabeçalhos do e-mail
    $headers = "De: $nome <$email>\r\n";
    $headers .= "Responder para: $email\r\n".
    "X-Mailer: PHP/" . phpversion();



    // Envia o e-mail
    if (mail($destinatario, $assunto, $conteudo, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail. Por favor, tente novamente mais tarde.";
    }
}
?>
