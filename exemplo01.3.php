<?PHP 
    $nome = "Fulano";
    function getnome() {
        global $nome;
        echo $nome;
    }
    getNome ();
?>    