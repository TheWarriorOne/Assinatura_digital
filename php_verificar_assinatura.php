<?php
// Gerar uma chave privada e pública para o gestor
$private_key = openssl_pkey_new();
openssl_pkey_export($private_key, $private_key_pem);

// Salvar a chave privada em algum lugar seguro (por exemplo, em um arquivo ou no banco de dados)

// Obter a chave pública correspondente
$details = openssl_pkey_get_details($private_key);
$public_key_pem = $details['key'];

// Assinar digitalmente um texto (por exemplo, o ID do relatório de despesas)
$text = "123"; // Exemplo: ID do relatório de despesas
openssl_sign($text, $signature, $private_key, OPENSSL_ALGO_SHA256);

// Verificar a assinatura digital
$valid = openssl_verify($text, $signature, $public_key_pem, OPENSSL_ALGO_SHA256);

if ($valid == 1) {
    echo "Assinatura digital válida";
} elseif ($valid == 0) {
    echo "Assinatura digital inválida";
} else {
    echo "Erro ao verificar assinatura digital";
}
?>
