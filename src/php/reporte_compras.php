<?php
require_once 'fpdf/fpdf.php';
require_once '../../Public/db.php';
require_once '../../app/models/model_adminCompra.php';

$ca = new CompraAdmin();
$compras = $ca->getCompra();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 18);
$pdf->SetTextColor(34, 139, 34); // Verde
$pdf->Cell(0, 15, utf8_decode('Reporte de Compras'), 0, 1, 'C');
$pdf->Ln(2);
$pdf->SetTextColor(0, 0, 0);

// Encabezados de la tabla con fondo
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(34, 139, 34); // Verde
$pdf->SetTextColor(255,255,255);
$pdf->Cell(30, 10, 'Usuario', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Productos', 1, 0, 'C', true);
$pdf->Cell(28, 10, 'Fecha', 1, 0, 'C', true);
$pdf->Cell(20, 10, 'Monto', 1, 0, 'C', true);
$pdf->Cell(32, 10, 'Estado', 1, 1, 'C', true);

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0,0,0);

foreach ($compras as $compra) {
    // Procesar productos como lista
    $productos = explode(',', $compra['Productos']);
    $productos = array_map('trim', $productos);
    $productos_str = "";
    foreach ($productos as $prod) {
        $productos_str .= 
"- " . utf8_decode($prod) . "\n";
    }
    $productos_str = trim($productos_str);

    // Calcular la altura necesaria para la celda de productos
    $lineas = substr_count($productos_str, "\n") + 1;
    $cellHeight = 6; // altura de línea
    $rowHeight = max($cellHeight * $lineas, 8);

    $x = $pdf->GetX();
    $y = $pdf->GetY();

    // Usuario
    $pdf->MultiCell(30, $rowHeight, utf8_decode($compra['Usuario']), 1, 'C');
    $pdf->SetXY($x + 30, $y);
    // Productos
    $pdf->MultiCell(60, $cellHeight, $productos_str, 0, 'L');
    $pdf->SetXY($x + 30 + 60, $y);
    // Fecha
    $pdf->MultiCell(28, $rowHeight, $compra['Fecha'], 1, 'C');
    $pdf->SetXY($x + 30 + 60 + 28, $y);
    // Monto
    $pdf->MultiCell(20, $rowHeight, $compra['Monto'], 1, 'C');
    $pdf->SetXY($x + 30 + 60 + 28 + 20, $y);
    // Estado
    $pdf->MultiCell(32, $rowHeight, utf8_decode($compra['EstadoNombre']), 1, 'C');

    // Dibujar borde para productos
    $pdf->SetXY($x + 30, $y);
    $pdf->Cell(60, $rowHeight, '', 1);

    // Mover a la siguiente fila
    $pdf->SetY($y + $rowHeight);
}

$pdf->Output('D', 'reporte_compras.pdf');
exit; 