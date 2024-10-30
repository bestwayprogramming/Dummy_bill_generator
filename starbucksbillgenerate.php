<?php
// Include the Dompdf library
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

// Capture the content of 'starbuckspdf.php'
ob_start();
include 'starbuckspdf.php';
$html = ob_get_clean();

// Set up Dompdf options
$options = new Options();
$options->set('isRemoteEnabled', true); // Enable for external resources if needed
$dompdf = new Dompdf($options);

// Load HTML content into Dompdf
$dompdf->loadHtml($html);

// Set a custom paper size for a receipt format (e.g., 3 inches by 8 inches)
$dompdf->setPaper('A3'); // Width and height in points for a receipt format

// Render the HTML as PDF
$dompdf->render();

// Output PDF to the browser
$dompdf->stream('starbucks_receipt.pdf', ["Attachment" => true]); // `Attachment => true` prompts download
?>

<script>
    // Automatically open the generated PDF in a new window
    window.onload = function() {
        window.open('starbucksbillgenerate.php', '_blank');
    };
</script>
