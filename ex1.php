<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedro aula de PHP</title>

    <link rel="stylesheet" href="styles.css">

    <script>
        alert ("Primeiro programa em PHP")
    </script>

</head>
    <body bgcolor="#FFEBCD">
        <div id="texto">
            <h1> RA: 8127726 - Nome: Pedro Henrique Jacobucci </h1>
            
            <img src="https://lh3.googleusercontent.com/nGyO8e_boZtSoGuG42jY2A7rF8uUCSOv72ElkOtcft1vER5k8oCykhX9f2Lmvm_xorDy8Iw=s85" alt="image" height="120" width="120" />  
            <br>
            <br>
            <br>

                <?php
                    $consumoCombustivel = 12.0;
                    $velocidadeMedia = 85.0;
                    $tempoViagem = 10.0;
                    $custoLitroGasolina = 4.0;

                    $distanciaPercorrida = $velocidadeMedia * $tempoViagem;
                    $litrosGastos = $distanciaPercorrida / $consumoCombustivel;
                    $custoViagem = $litrosGastos * $custoLitroGasolina;

                    printf ('Cosumo de Combustível do veículo: %s Km/1', number_format($consumoCombustivel, 1) );
                    printf ('<br>Velocidade média da viagem: %s Km/h', number_format($velocidadeMedia, 1) );
                    printf ('<br>Tempo de viagem: %s horas', number_format($tempoViagem, 1) );
                    printf ('<br>Custo de Combustível: R$ %s /litro', number_format($custoLitroGasolina, 2) );

                    printf ('<br><hr></hr>');
                    printf ('<br>Custo do Combustível na viagem = R$ %s', number_format($custoViagem, 2) );
                ?>
        </div>

            <br>   

    </body>
</html> 