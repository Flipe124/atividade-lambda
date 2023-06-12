<h1> Lambda no Google Cloud <img width="30px" src="https://cdn-icons-png.flaticon.com/128/8575/8575900.png"></h1>

<img src="./img/Interface.png">

<br>

![](https://img.shields.io/badge/-introdução-blueviolet?style=for-the-badge)

Esse código representa uma página web com uma funcionalidade básica: obter a quantidade de seguidores de um usuário do GitHub.

A funcionalidade é implementada da seguinte forma:

- O usuário insere um nome de usuário do GitHub em um campo de entrada de texto.
- Ao clicar no botão "Obter seguidores", o formulário é enviado para a mesma página.
- Quando o formulário é enviado, o código PHP é executado.
- O código PHP utiliza a função obterQuantidadeSeguidores($username) para fazer uma requisição à API do GitHub e obter informações sobre o usuário, incluindo o número de seguidores.
- Se a requisição for bem-sucedida e os dados retornados incluírem o número de seguidores, o valor é exibido na página.
- Caso ocorra algum erro durante a requisição ou se os dados não contiverem o número de seguidores, uma mensagem de erro é exibida.
A função obterQuantidadeSeguidores($username) utiliza a função file_get_contents() para fazer uma solicitação GET à API do GitHub, passando o nome de usuário fornecido como parte da URL. Em seguida, os dados retornados são decodificados do formato JSON para um array associativo usando a função json_decode(). Se os dados contiverem o número de seguidores, ele é retornado pela função. Caso contrário, uma mensagem de erro é retornada.

No geral, essa implementação permite que o usuário insira um nome de usuário do GitHub, obtenha a quantidade de seguidores desse usuário e exiba o resultado na página

<br>

![](https://img.shields.io/badge/-link%20da%20lambda-green?style=for-the-badge)
```
https://cloud.google.com/
```

![](https://img.shields.io/badge/-ferramentas%20utilizadas-orange?style=for-the-badge)

<div>
    <a href="https://cloud.google.com/">
        <img align="center" alt="Cloud Google" height="35" width="45" src="https://static-00.iconduck.com/assets.00/google-cloud-icon-512x412-8rnz6wkz.png">
    </a>
    <a href="https://www.php.net/">
        <img align="center" alt="HTML" height="40" width="50" src="https://cdn-icons-png.flaticon.com/128/5968/5968332.png">
    </a>
    <a  href="https://developer.mozilla.org/pt-BR/docs/Web/HTML">
        <img align="center" alt="HTML" height="35" width="45" src="https://cdn-icons-png.flaticon.com/128/1051/1051277.png">
    </a>
    <a  href="https://developer.mozilla.org/pt-BR/docs/Web/CSS">
        <img align="center" alt="HTML" height="35" width="45" src="https://cdn-icons-png.flaticon.com/128/732/732190.png">
    </a>
</div>
