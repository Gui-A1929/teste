<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calcular'])) {
    $num1 = (float) $_POST['num1'];
    $num2 = (float) $_POST['num2'];

    class Calculadora {
        private $num1;
        private $num2;

        public function __construct($num1, $num2) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }

        public function somar() {
            return $this->num1 + $this->num2;
        }

        public function subtrair() {
            return $this->num1 - $this->num2;
        }

        public function multiplicar() {
            return $this->num1 * $this->num2;
        }

        public function dividir() {
            if ($this->num2 == 0) {
                return "Não tem como dividir por 0";
            }
            return $this->num1 / $this->num2;
        }
    }

    $calculadora = new Calculadora($num1, $num2);

    $resultado = "
        <h2>Resultados:</h2>

        <p>$num1 + $num2 = " . $calculadora->somar() . "</p>

        <p>$num1 - $num2 = " . $calculadora->subtrair() . "</p>

        <p>$num1 * $num2 = " . $calculadora->multiplicar() . "</p>

        <p>$num1 / $num2 = " . $calculadora->dividir() . "</p>
    ";
} else {
    $resultado = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora)(</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <button type="submit" name="calcular">Calcular Resultados</button>
    </form>

    <?= $resultado; ?>
</body>
</html>
