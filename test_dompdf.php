<?php
use Dompdf\Dompdf;

// Menyertakan autoload
require 'vendor/autoload.php';

// Inisialisasi dompdf
$dompdf = new Dompdf();

// Load HTML content
$html = '<h1>Test DOMPDF!</h1>';
$dompdf->loadHtml($html);

// (Optional) Set properti ukuran kertas dan orientasi
$dompdf->setPaper('A4', 'portrait');

// Render halaman sebagai PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("file.pdf", array("Attachment" => false)); // Set Attachment => true untuk download