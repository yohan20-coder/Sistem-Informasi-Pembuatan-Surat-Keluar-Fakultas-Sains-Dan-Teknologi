<?php
require 'dompdf/vendor/autoload.php';


use Dompdf\Dompdf;
use Dompdf\Options;


// Inisialisasi Dompdf dengan opsi
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);

$dompdf = new Dompdf($options);

// Baca konten HTML dari file
$html = file_get_contents('file.php'); // Gantilah '/path/to/your/uploaded/file.html' dengan path ke file yang diunggah

// Memuat HTML ke Dompdf
$dompdf->loadHtml($html);

// Set ukuran dan orientasi halaman
$dompdf->setPaper('A4', 'portrait');

// Render HTML sebagai PDF
$dompdf->render();

// Output PDF ke browser
$dompdf->stream("Surat_Permohonan.pdf", ["Attachment" => false]);
?>
