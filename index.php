<?php

    $pessoa = [
        "nome" => "Jon",
        "sobrenome" => "Snow",
        "idade" => 27,
        "passatempo" => ["Netflix", "futebol", "música"]
    ];
    
    // echo "<pre>";
    // var_dump($pessoa);

    // echo "=======";

    $pessoa["idade"] = 25;

    // echo "<pre>";
    // var_dump($pessoa);

    // echo "=======";

    $pessoa["endereço"] = "Winterfell";

    // echo "<pre>";
    // var_dump($pessoa);

    // echo "=======";

    $pessoa["passatempo"][] = "Programação";

    // echo "<pre>";
    // var_dump($pessoa);

    echo "Condicionais <br>";

    $a = 42;
    $b = 27;

    if($a > $b) {
        echo "O maior número é $a";
    } else {
        echo "O maior número é $b";
    }

    echo "<br> Exercício 2: <br>";

    $numeroAleatorio = rand(1,5);

    if($numeroAleatorio == 3 || $numeroAleatorio == 5) {
        echo "Número da sorte!";
    } else {
        echo "Não é número da sorte :(";
    }

    if($numeroAleatorio != 3) {
        echo "<br>O número não é 3! <br>";
    } else {
        echo "<br> $numeroAleatorio <br>";
    }

    $megaSena = rand(1,100);

    if($megaSena >= 50) {
        echo "Maior que 50 <br>";
    } else {
        echo "Menor que 50 <br>";
    }

    echo "=======";

    echo "<br> ---- Login ---- <br>";

    $usuario = "admin";
    $senha = "123";

    if($usuario == "admin" && $senha == "123") {
        echo "Bem-vindo!";
    } else {
        echo "Erro!";
    }

    $number = rand(1, 10);
    
    echo ($number % 2 == 0) ? "<br>O número é par!" : "<br>O número é ímpar!";

    echo "<br>=======<br>";

    $numero = rand(1, 10);

    switch ($numero) {
        case 1:
        echo "VERGONHA";
        break;
        case 2:
        echo "VERGONHA";
        break;
        case 3:
        echo "VERGONHA";
        break;
        case 4:
        echo "Deu pra passar";
        break;
        case 5:
        echo "Deu pra passar";
        break;
        case 6:
        echo "Ok";
        break;
        case 7:
        echo "Ok";
        break;
        case 8:
        echo "Ok";
        break;
        case 9:
        echo "Tá bom";
        break;
        case 10:
        echo "Não fez menos que a obrigação";
        break;
        default:
        echo "Número inválido";
        break;
    }

    echo "--- LOOPS --- <br>";
    
    echo "Exercício 1: <br>";
    
    for ($i = 1; $i <=10; $i++) {
        echo "2 x $i = ". (2 * $i). "<br>";
    }
    
    echo "Exercício 2: <br>";
    
    $num = 100;
    
    while ($num >= 85) {
        echo "$num <br>";
        $num--;
    }
    
    echo "Exercício 3: <br>";
    
    $counter = 1;
    
    while ($counter <= 5) {
        echo $counter * 2;
        $counter++;
    }
    
    echo "<br>Exercício 4: <br>";
    
    $cara = 0;
    $jogadas = 0;
    
    while ($cara < 5) {
        $moeda = rand(0,1);
        echo "<br> moeda: $moeda";
        if($moeda == 1) {
            $cara++;
        } else {
            $cara = 0;
        } $jogadas++;
    }
    
    echo "<br>Foram $jogadas jogadas<br>";
    
    echo "Exercício 5: <br>";
    
    $nomes = ["Ghost", "Nymeria", "Shaggydog", "Summer", "Grey Wind"];
    
    for($i = 0;$i < 5; $i++) {
        echo "$nomes[$i]<br>";
    }
    
    $nomes = ["Homer", "Marge", "Lisa", "Bart", "Maggie"];
    
    $i = 0;
    while($i < 5) {
        echo "$nomes[$i]<br>";
        $i++;
    }
    
    $nomes = ["Bob", "Helen", "Violet", "Dash", "Jack-Jack"];
    
    $i = 0;
    do {
        echo "$nomes[$i]<br>";
        $i++;
    } while ($i < 5);
    
    foreach($nomes as $lista) {
        echo "$lista<br>";
    }

?>