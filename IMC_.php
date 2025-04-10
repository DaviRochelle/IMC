
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .resultado { margin-top: 20px; font-size: 1.2em; font-weight: bold; }
        .voltar { margin-top: 20px; display: inline-block; padding: 10px; background: #007BFF; color: #fff; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>

    <h2>Resultado do IMC</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = floatval($_POST["peso"]);
        $altura = floatval($_POST["altura"]);

        if ($peso > 0 && $altura > 0) {
            $imc = $peso / ($altura * $altura);
            echo "<div class='resultado'>Seu IMC é: " . number_format($imc, 2) . "</div>";
            
            if ($imc < 25) {
                echo "<div class='resultado' style='color: red;'>Você está acima do peso!</div>";
            } 
            else{
                echo "<div class='resultado' style='color: green;'>Você está saudável</div>";
            } 
    }
}
    ?>

    <br>
    <a href="IMC_prova.html" class="voltar">Voltar</a>

</body>
</html>
