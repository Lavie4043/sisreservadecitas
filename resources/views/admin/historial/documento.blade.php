use Mpdf\Mpdf;

public function generarPDF($id)
{
    $documento = Documento::findOrFail($id);

    $html = view('documento.pdf', compact('documento'))->render();

    $mpdf = new Mpdf();
    $mpdf->WriteHTML($html);

    return response($mpdf->Output('', 'S'), 200)
        ->header('Content-Type', 'application/pdf');
}