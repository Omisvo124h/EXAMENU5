<?php
// Datos del problema
$precio_colector = 2600; // en €
$costo_kwh = 0.08; // en €/KWh
$energia_generada_diaria = 2006.4; // KWh generados al día
$dias_anuales = 150; // días de operación al año

// Cálculo del costo anual
$costo_anual = $energia_generada_diaria * $dias_anuales * $costo_kwh;

// Cálculo del tiempo en años para amortizar el capital
$tiempo_amortizacion = $precio_colector / $costo_anual;

// Convertir el tiempo de amortización a días
$tiempo_amortizacion_dias = ($precio_colector * $dias_anuales) / $costo_anual;

// Imprimir los resultados
echo "<p>El colector solar se amortiza en aproximadamente <strong>" . round($tiempo_amortizacion, 2) . " años</strong> o <strong>" . round($tiempo_amortizacion_dias, 0) . " días</strong>.</p>";
?>
