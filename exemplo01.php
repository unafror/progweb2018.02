<?php

    # 1.1 - variaveis básicas (inteiro, real, booleano, string)
    // string
    $frase = "Treine sua mente para ver o lado bom de qualquer situação.";
    $letra = 'L';
    // float
    $salario = 9999.99;
    // int
    $numero = 31;
    // bool
    $bloqueado = false;

    // Exibir os valores das variaveis
    echo $frase . "<br>";
    echo $letra . '<br>';
    echo "O salário da Shirley é: $salario<br>";
    echo $numero . '<br>';
    var_dump($bloqueado);

    echo '<br><br>=========================================================<br><br>';

    # 1.2 - variaveis compostas (arrays, objetos)
    // array
    $alunos = array("Shirley", "Joyce", "Daniel A", "Daniel B", "Pedro", 
    "Luiz", "Rayane", "Rafael", "Vinicius", "Helio");

    // Exibir os valores do array
    print_r($alunos);

    // objeto
    $data = new DateTime();

    // Exibir os valores do objeto
    var_dump($data);

    echo '<br><br>=========================================================<br><br>';
    
    # 1.3 - variaveis especiais (resource, NULL)

    // resource
    $arquivoTxT = fopen("C://xampp//htdocs//php//variaveis//exemplo01.php","r");
    var_dump($arquivoTxT);

    echo "<br><br>";

    // NULL
    $variavel = NULL;
    var_dump($variavel);
    