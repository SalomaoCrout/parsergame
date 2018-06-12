# Quake log parser

## Task 1 - Construa um parser para o arquivo de log games.log e exponha uma API de consulta.

O arquivo games.log é gerado pelo servidor de quake 3 arena. Ele registra todas as informações dos jogos, quando um jogo começa, quando termina, quem matou quem, quem morreu pq caiu no vazio, quem morreu machucado, entre outros.

O parser deve ser capaz de ler o arquivo, agrupar os dados de cada jogo, e em cada jogo deve coletar as informações de morte.

### Observações

1. Quando o `<world>` mata o player ele perde -1 kill.
2. `<world>` não é um player e não deve aparecer na lista de players e nem no dicionário de kills.
3. `total_kills` são os kills dos games, isso inclui mortes do `<world>`.

----------

## Task 2 - Após construir o parser construa uma API que faça a exposição de um método de consulta que retorne um relatório de cada jogo.

----------

## Requisitos

1. Use a linguagem que você tem mais habilidade (temos preferência por nodejs, java ou python, mas pode ser usado qualquer linguagem desde que explicado a prefência).
2. As APIs deverão seguir o modelo RESTFul  com formato JSON  
3. Faça testes unitários, suite de testes bem organizados. (Dica. De uma atenção especial a esse item!)
4. Use git e tente fazer commits pequenos e bem descritos.
5. Faça pelo menos um README explicando como fazer o setup, uma explicação da solução proposta, o mínimo de documentação para outro desenvolvedor entender seu código
6. Siga o que considera boas práticas de programação, coisas que um bom desenvolvedor olhe no seu código e não ache "feio" ou "ruim".
7. Após concluir o teste suba em um repositório privado e nos mande o link

HAVE FUN :)

----------

## Desenvolvimento

### Parser
Criei um gamelog em json e recebido em  index.php, realizando o parse de log. Dentro de index.php coloquei Doctype html para linkar bootstrap.  
gamelog é o principal, onde é definido os dados.


**Chamada:**
Para executar, é necessário que o PHP esteja instalado.

    http://localhost/parsergame/index.php





----------

## Sugestões não implementadas

Não desenvolvi o API por ainda nao ter conhecimento apropriado.
