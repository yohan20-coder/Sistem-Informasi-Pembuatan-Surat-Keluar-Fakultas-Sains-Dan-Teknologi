<?php
require_once APPPATH .'third_party/dompdf/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Konfigurasi Dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true); // Mengizinkan gambar eksternal

$dompdf = new Dompdf($options);

$img1_path = FCPATH .'assets/images/img1.png';
$img2_path = FCPATH .'assets/images/img2.png';

// Ubah gambar lokal menjadi base64
$img1 = 'data:image/png;base64,' . base64_encode(file_get_contents($img1_path));
$img2 = 'data:image/png;base64,' . base64_encode(file_get_contents($img2_path));

// HTML dengan gambar base64
$html = "<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta http-equiv='Content-Style-Type' content='text/css' />
    <title></title>
    <style>
        body { font-family:'Times New Roman'; font-size:12pt }p { margin:0pt }li, table { margin-top:0pt; margin-bottom:0pt }.BalloonText { margin-bottom:0pt; line-height:normal; font-family:Tahoma; font-size:8pt; -aw-style-name:balloon-text }.Footer { margin-bottom:0pt; line-height:normal; font-family:'Times New Roman'; font-size:12pt; -aw-style-name:footer }.Header { margin-bottom:0pt; line-height:normal; font-family:'Times New Roman'; font-size:12pt; -aw-style-name:header }.ListParagraph { margin-left:36pt; margin-bottom:0pt; line-height:normal; font-family:'Times New Roman'; font-size:12pt; -aw-style-name:list-paragraph }span.BalloonTextChar { font-family:Tahoma; font-size:8pt }span.FooterChar { font-family:'Times New Roman'; font-size:12pt }span.HeaderChar { font-family:'Times New Roman'; font-size:12pt }span.Hyperlink { text-decoration:underline; color:#0000ff; -aw-style-name:hyperlink }.TableGrid {  }
    </style>
</head>

<body>
    <div>
        <div style='-aw-headerfooter-type:header-primary; clear:both'>
            <p class='Header' style='margin-left:70.9pt; font-size:14pt'><span style='height:0pt; display:block; position:absolute; z-index:-65536'><img src='" . $img1 . "' width='80' height='103' alt='' style='margin-top:15.67pt; margin-left:-64.97pt; -aw-left-pos:5.93pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:15.67pt; -aw-wrap-type:none; position:absolute' /></span>
                <span
                style='font-family:'Bookman Old Style'; font-weight:bold'>UNIVERSITAS FLORES</span>
            </p>
            <p class='Header' style='margin-left:70.9pt; font-size:14pt'><span style='font-family:'Bookman Old Style'; font-weight:bold'>FAKULTAS SAINS DAN TEKNOLOGI</span></p>
            <p class='Header' style='margin-left:70.9pt; font-size:10pt'><span style='font-family:'Baskerville Old Face'; font-weight:bold'>TERAKREDITASI BAN-PT</span></p>
            <p class='Header' style='margin-left:70.9pt; font-size:8pt'><span style='font-family:'Baskerville Old Face'; font-weight:bold'>No. 6069/SK/BAN-PT/Akred/S/IX/2020 (Program Studi Teknik Sipil)</span></p>
            <p class='Header' style='margin-left:70.9pt; font-size:8pt'><span style='font-family:'Baskerville Old Face'; font-weight:bold'>No. 1571/SK/BAN-PT/Ak-PPJ/S/III/2022 (Program Studi Arsitektur)</span></p>
            <p class='Header' style='margin-left:70.9pt; font-size:8pt'><span style='font-family:'Baskerville Old Face'; font-weight:bold'>No. 11681/SK/BAN-PT/Akred/S/X/2021 (Program Studi Agroteknologi)</span></p>
            <p class='Header' style='margin-left:70.9pt; font-size:8pt'><span style='font-family:'Baskerville Old Face'; font-weight:bold'>No. 160/SK/LAM-INFOKOM/Ak/S/VIII/2024 (Program Studi Sistem Informasi)</span></p>
            <p class='Header' style='margin-left:70.9pt; font-size:8pt'><span style='font-family:'Baskerville Old Face'; font-weight:bold'>Jln. </span><span style='font-family:'Baskerville Old Face'; font-weight:bold; -aw-import:spaces'>&#xa0;</span><span style='font-family:'Baskerville Old Face'; font-weight:bold'>Sam </span>
                <span
                style='font-family:'Baskerville Old Face'; font-weight:bold; -aw-import:spaces'>&#xa0;</span><span style='font-family:'Baskerville Old Face'; font-weight:bold'>Ratulangi No. XX , Kel. Paupire,Kec. Ende Tengah, Kab. Ende-Flores-NTT Kode Pos 86318 <br> Telp.(0381) 23874, Fax. (0381) 21536 Website <span style='color:blue'>www.uniflor.ac.id</span> email <span style='color:blue'>
                universitasflores@uniflor.ac.id</span></p>
                
          
            <p class='Header'><span style='height:0pt; display:block; position:absolute; z-index:-65535'><img src='" . $img2 . " width='936' height='14' alt='' style='margin-top:9.5pt; margin-left:7.5pt; -aw-left-pos:12pt; -aw-rel-hpos:column; -aw-rel-vpos:paragraph; -aw-top-pos:15.5pt; -aw-wrap-type:none; position:absolute' /></span>
                <span
                style='-aw-import:ignore'>&#xa0;</span>
            </p>
            <p class='Header'><span style='-aw-import:ignore'>&#xa0;</span></p>
        </div>
        <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD''>Nomor</span><span style='width:34.95pt; font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span><span style='font-family:'Maiandra GD''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: ".$sm['kode1']."/".$sm['kode2']."/".$sm['kode3']."/".$sm['kode4']."/".$sm['kode5']."/".$sm['kode6']."/".$sm['kode7']." </span><span style='width:12.95pt; font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span>
            <span
            style='font-family:'Maiandra GD'; -aw-import:spaces'>&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span><span style='width:14.32pt; font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span><span style='font-family:'Maiandra GD''> </span><span style='width:33.29pt; font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span>
                <span
                style='width:36pt;font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span><span style='font-family:'Maiandra GD'; margin-left: 7pt; '>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ende, ".tanggal_indo($sm['tgl_surat'])."</span></p>
        <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD''>Lampiran</span><span style='width:22.51pt; font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span><span style='font-family:'Maiandra GD''>&nbsp;: ".$sm['lampiran']."</span></p>
        <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD''>Perihal</span><span style='width:35.76pt; font-family:'Maiandra GD'; display:inline-block'>&#xa0;</span><span style='font-family:'Maiandra GD''>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </span><span style='font-family:'Maiandra GD'; font-weight:bold'>".$sm['perihal']."</span>
        <p
        style='font-size:12.5pt'><span style='font-family:'Maiandra GD'; font-weight:bold; -aw-import:ignore'>&#xa0;</span></p>
            <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD''>Kepada Yth.</span></p>
            <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD''> ".$sm['kepada']."</span></p>
            <p class='ListParagraph' style='margin-left:0pt; text-align:justify; font-size:12.5pt'><span style='font-family:'Maiandra GD''>di – </span></p>
            <p style='text-indent:42.55pt; font-size:12.5pt'><span style='font-family:'Maiandra GD''>Tempat</span><span style='font-family:'Maiandra GD'; -aw-import:spaces'>&#xa0; </span></p>
            <p style='text-align:justify; font-size:12.5pt'><span style='font-family:'Maiandra GD'; -aw-import:ignore'>&#xa0;</span></p>
            
            <p style='text-align:justify; font-size:12.5pt'><span style='font-family:'Maiandra GD'; -aw-import:ignore'>&#xa0;</span></p>
            <p style='text-align:justify; font-size:12.5pt'><span style='font-family:'Maiandra GD''>".$sm['isi']."</span>
                </p>
            <br>


            <table cellspacing='0' cellpadding='0' style='width:274.5pt; margin-left:225pt; border-collapse:collapse'>
                <tr>
                    <td style='width:263.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top'>
                        <p style='text-align:center; font-size:12.5pt'><span style='font-family:'Maiandra GD''>".$sm['jabatan']."</span></p>
                      
                </tr>
                <tr>
                    <td style='width:263.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top'>
                        <p style='font-size:5pt'><span style='font-family:'Maiandra GD'; -aw-import:ignore'>&#xa0;</span></p>
                        <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD'; -aw-import:spaces'>&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0; </span></p>
                        <p style='font-size:12.5pt'><span style='font-family:'Maiandra GD'; -aw-import:ignore'>&#xa0;</span></p>
                        <p style='font-size:1pt'><span style='font-family:'Maiandra GD'; -aw-import:ignore'>&#xa0;</span></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:263.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top'>
                        <p style='text-align:center; line-height:115%; font-size:12.5pt'><span style='font-family:'Maiandra GD'; font-weight:bold; text-decoration:underline; -aw-import:spaces'>&#xa0;</span><span style='font-family:'Maiandra GD'; font-weight:bold; -aw-import:spaces'>&#xa0;&#xa0;&#xa0; </span><span style='font-family:'Maiandra GD'; font-weight:bold; text-decoration:underline'><span style ='text-decoration:underline;text-decoration-color:#000;text-decoration-style:solid;'>".$sm['ttd']."</span></span></p>
                    </td>
                </tr>
                <tr>
                    <td style='width:263.7pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top'>
                        <p style='text-align:center; line-height:115%; font-size:12.5pt'><span style='font-family:'Maiandra GD''>NIPY : ".$sm['nipy']."</span></p>
                    </td>
                </tr>
            </table>



            <p style='text-align:justify; font-size:12.5pt'><span style='font-family:'Maiandra GD'; -aw-import:ignore'>&#xa0;</span></p>
            <p style='text-align:justify; font-size:12.5pt'><span style='font-family:'Maiandra GD''><span style ='text-decoration:underline;text-decoration-color:#000;text-decoration-style:solid;'>Tembusan :</span></span>
            
                <p text-align:justify; padding-left:5.48pt; font-family:'Maiandra GD'; font-size:12.5pt'><span>".$sm['tembusan']."</span></p>
                
               
          
            
    </div>
</body>

</html>";

// Muat HTML ke Dompdf
$dompdf->loadHtml($html);

// Set ukuran halaman
$dompdf->setPaper('A4', 'portrait');

// Render HTML menjadi PDF
$dompdf->render();

// Tampilkan PDF di browser
$dompdf->stream('Surat_Keluar.pdf', ['Attachment' => false]);
?>