<h1> Lambda no Google Cloud <img width="30px" src="https://cdn-icons-png.flaticon.com/128/8575/8575900.png"></h1>

![](https://img.shields.io/badge/-introdução-blueviolet?style=for-the-badge)

 Este código em PHP é um exemplo simples de como obter a quantidade de seguidores de um usuário do GitHub usando a API do GitHub.

Na primeira parte do código, temos a impressão de algumas mensagens, como "Hello world", apenas para fins de demonstração.

Em seguida, definimos o nome de usuário para o qual queremos obter a quantidade de seguidores. Neste exemplo, usamos o nome de usuário "Flipe124", mas você pode alterá-lo para qualquer outro nome de usuário do GitHub.

Depois disso, chamamos a função obterQuantidadeSeguidores($username) para obter a quantidade de seguidores desse usuário. Essa função realiza uma requisição GET para a API do GitHub, passando o nome de usuário fornecido na URL. Em seguida, ela utiliza a função file_get_contents() juntamente com o contexto criado por stream_context_create() para obter a resposta da API.

Em seguida, decodificamos a resposta JSON usando json_decode() e verificamos se os dados e o campo 'followers' estão presentes. Se estiverem, retornamos a quantidade de seguidores. Caso contrário, retornamos uma mensagem de erro.

Por fim, exibimos a quantidade de seguidores obtida ou a mensagem de erro, dependendo do resultado da requisição.

Este código ilustra uma maneira simples de fazer a chamada à API do GitHub em PHP e extrair informações específicas do resultado.

<br>

![](https://img.shields.io/badge/-link%20da%20lambda-green?style=for-the-badge)
```
<linkdalambda :)>
```

![](https://img.shields.io/badge/-ferramentas%20utilizadas-orange?style=for-the-badge)

- ![](https://img.shields.io/badge/Google-Cloud-blue)
<br>
- ![](https://img.shields.io/badge/-PHP-blueviolet)
