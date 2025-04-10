
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $curso = htmlspecialchars(trim($_POST['curso']));

    switch ($curso) {
        case 'Python':
            $mensagem = "Inscrição no curso de Python foi realizada com sucesso. Seu curso será dia 20/04/2025 às 09h00 no laboratório 13.";
            break;
        case 'Arduino':
            $mensagem = "Inscrição no curso de Arduino foi realizada com sucesso. Seu curso será dia 20/04/2025 às 09h00 no laboratório 16";
            break;
        case 'Robótica':
            $mensagem = "Inscrição no curso de Robótica foi realizada com sucesso. Seu curso se-rá dia 20/04/2025 às 09h00 no laboratório 15";
            break;
        default:
            $mensagem = "Curso não encontrado. Por favor, selecione uma opção válida.";
            break;
    }

    echo "<h2>Cadastro realizado com sucesso!</h2>";
    echo "<p><strong>Curso escolhido:</strong> $curso</p>";
    echo "<p>$mensagem</p>";
} else {
    echo "Requisição inválida.";
}
?>