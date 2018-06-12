<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title></title>
  </head>
  <body>
    <div class="jumbotron">

      <h1>GAMELOG Quake 3 Arena</h1>


    <?php
        $jsondata = file_get_contents("gamelog.json");
        $json = json_decode($jsondata,true);
        $output = "<ul>";
        // Neste foreach sera feito uma busca na classe jogos na variavel jogo(cod) e gerando saida das atribuições
        foreach($json['jogo'] as $jogo) {
          $output .= "<h4>" ."<br> Servidor ".$jogo['titulo']. "</h4>";
          $output .= "<li>" ."<strong> Ínicio de jogo </strong> <br> ".$jogo['inicio_jogo']. "</li>";
          $output .= "<li>" ."<strong>Fim de jogo</strong> <br>".$jogo['fim_jogo']. "</li>";
          $output .= "<li>" ."<strong>Total de mortes</strong> <br> ".$jogo['total_mortes']. "</li>";
          $output .= "<li>" ."<strong>Jogadores</strong> <br>".$jogo['jogadores']. "</li>";
          $output .= "<li>" ."<strong>Mortes</strong> <br> ".$jogo['mortes']. "</li>";
          $output .= "<li>" ."<strong>Jeito da morte</strong> <br>".$jogo['jeito_morreu'].  "</li>";
        }
        $output .= "</ul>";
        echo $output;
     ?>
   </div>
  </body>
</html>
