<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda - GitHub</title>
    <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/128/5519/5519772.png" />
</head>

<body>
    <div class="box">
        <div class="box-img">
            <img id="img-box" src="https://www.genexus.com/media/images/github-logo-2-imagen.jpg?timestamp=20190527124425" alt="Logo GitHub">
        </div>
        <form method="POST" action="">
            <label id="label-username" for="username">Nome de usuário do GitHub:</label>
            <br>
            <br>
            <input id="input-username" type="text" name="username">
            <br>
            <input id="btn-seguidores" class="input" type="submit" value="Obter seguidores">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $resultado = obterQuantidadeSeguidores($username);
        ?>
            <div class="seguidores"><?php echo "O usuário <b>$username</b> possuí: <b>" . $resultado . "</b> seguidores."?> </div>
        <?php
        }
        ?>
    </div>
</body>
<style>
    body {
        background-color: #0e0b16;
        font-family: Arial, Helvetica, sans-serif;
    }

    .box {
        background-color: rgb(255, 255, 255);
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        bottom: 0;
        display: table;
        vertical-align: middle;
        padding: 25px;
        position: absolute;
        max-width: 370px;
        width: 100%;
        height: 100px;
        left: 0;
        margin: auto;
        top: 0;
        right: 0;
    }

    #img-box {
        text-align: center;
        width: 80%;
    }

    .box-img {
        display: flex;
        justify-content: center;
    }

    .title {
        text-align: center;
    }

    #input-username {
        display: block;
        width: 93.5%;
        height: calc(0.8em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    #input-username:hover {
        border-color: #b3b3b3;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    #input-username:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    #btn-seguidores {
        border: none;
        background: none;
        padding: 0;
        margin: 0;
        font: inherit;
        color: inherit;
        cursor: pointer;
        outline: none;

        width: 100%;
        background-color: #57E297;
        border-radius: 6px;
        color: rgb(255, 255, 255);
        font-weight: bold;
        padding: 10px;
        transition: 0.5s;
        margin-top: 10px !important;
        margin-bottom: 10px;
    }

    #btn-seguidores:hover {
        background-color: rgb(62, 179, 117);
        transition: 0.5s;
    }
</style>

</html>

<?php
function obterQuantidadeSeguidores($username)
{
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