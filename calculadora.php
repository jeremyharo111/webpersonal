<?php
header('Content-Type: application/json');

$input = json_decode(file_get_contents('php://input'), true);

$num1 = floatval($input['num1']);
$num2 = floatval($input['num2']);
$operador = $input['operador'];

$resultado = 0;

switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        $resultado = ($num2 != 0) ? $num1 / $num2 : 'Error';
        break;
    case '%':
        $resultado = $num1 % $num2;
        break;
    default:
        $resultado = 'Error';
}

echo json_encode(['resultado' => $resultado]);
?>
