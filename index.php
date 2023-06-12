<?php
echo "<br>";
echo "\nHello world\n";
echo "<br>";

$username = 'Flipe124';
$resultado = obterQuantidadeSeguidores($username);

echo "A quantidade de seguidores é: " . $resultado;

function obterQuantidadeSeguidores($username) {
    $url = "https://api.github.com/users/" . $username;
    $options = [
        'http' => [
            'method' => 'GET',
            'header' => 'User-Agent: PHP'
        ]
    ];
    $context = stream_context_create($options);
    $response = file_get_contents($url, false, $context);
    
    $data = json_decode($response, true);
    
    if ($data && isset($data['followers'])) {
        $followersCount = $data['followers'];
        return $followersCount;
    } else {
        return "Erro ao obter a quantidade de seguidores do usuário.";
    }
}


?>
