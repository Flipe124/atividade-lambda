<?php
phpinfo();

echo "<br>";

echo "\nHello wolrd\n";

echo "<br>";

$event = [
    'username' => 'Flipe124'
];

$context = [];

$resultado = obterQuantidadeSeguidores($event, $context);

echo "A quantidade de seguidores é: " . $resultado;

function obterQuantidadeSeguidores($event, $context) {
    // Obtenha o nome de usuário do Git a partir do evento de entrada
    $username = $event['username'];
    
    // Faça uma requisição para a API do Git para obter os dados do usuário
    $url = "https://api.github.com/users/" . $username;
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Decodifique a resposta JSON
    $data = json_decode($response, true);
    
    // Verifique se a requisição foi bem-sucedida
    if ($data && isset($data['followers'])) {
        $followersCount = $data['followers'];
        
        // Retorne a quantidade de seguidores
        return $followersCount;
    } else {
        // Se ocorrer algum erro, retorne um valor padrão ou uma mensagem de erro
        return "Erro ao obter a quantidade de seguidores do usuário.";
    }
}

?>
