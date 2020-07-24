<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Pdf
{
		function PDFprint($html,$filename,$kertas,$orientasi)
		{
			$dompdf = new Dompdf\Dompdf();
			//apa yang akan di print
			$dompdf->loadHtml($html);
			//untuk mengeset kertas
			$dompdf->setPaper($kertas,$orientasi);
			//render untuk pdf
			$dompdf->render();
			//output file pdf
			$dompdf->stream($filename, array("Attachment" => false));
		}
}
