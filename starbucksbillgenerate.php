

<?php

// download composer reuire dompdf/dompdf
// require_once 'vendor/autoload.php';
// use Dompdf\Dompdf;
// use Dompdf\Options;
// use Dompdf\Adapter\CPDF;
// use Mpdf\Tag\Option;

// $html = file_get_contents('starbuckspdf.php');
?>

<?php
     // $option=new Options();
     // $option->set('isRemoteEnabled',TRUE);
     // $dompdf = new Dompdf($option);

     // $dompdf->loadHtml($html);
     // // (Optional) Setup tde paper size and orientation
     // $dompdf->setPaper('A4', 'portrait');
     // // Render tde HTML as PDF
     // $dompdf->render();

     // // Output tde generated PDF to Browser -->
     // $dompdf->stream();
     //
     ?>
     <?php include 'starbuckspdf.php';?>

<script>
     function printDiv(divName) {
          var printContents = document.getElementById(divName).innerHTML;
          var originalContents = document.body.innerHTML;

          document.body.innerHTML = printContents;
          window.print();
          document.body.innerHTML = originalContents;
     }
</script>
