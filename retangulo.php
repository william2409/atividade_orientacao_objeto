<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Área de Retângulo</title>
</head>
<body>
    <?php
        $largura = $_POST['largura'] ?? '';
        $altura = $_POST['altura'] ?? '';
        $area = '';

        if (isset($_POST['calcula'])) {
            if (!empty($largura) && !empty($altura)) {
                $area = $largura * $altura;
            } else {
                echo "<p style='color: red;'>Por favor, informe a largura e a altura do retângulo.</p>";
            }
        }
    ?>

    <h1>Calculadora de Área de Retângulo</h1>

    <?php if ($area): ?>
        <p>A área do retângulo é: <?php echo $area; ?></p>
    <?php else: ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="largura">Informe a largura:</label>
            <input type="number" id="largura" name="largura" step="0.01" value="<?php echo $largura; ?>" required>
            <br><br>
            <label for="altura">Informe a altura:</label>
            <input type="number" id="altura" name="altura" step="0.01" value="<?php echo $altura; ?>" required>
            <br><br>
            <input type="submit" name="calcula" value="Calcula Área">
        </form>
    <?php endif; ?>
</body>
</html>