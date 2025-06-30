<?php

namespace App\Controllers;

use Dompdf\Dompdf;

class InvoiceController extends BaseController
{
    protected $cart;

    public function __construct()
    {
        $this->cart = \Config\Services::cart();
    }

    public function cetak()
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $items = $this->cart->contents();
        $total = $this->cart->total();

        $data = [
            'items' => $items,
            'total' => $total
        ];

        $html = view('v_invoice', $data);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream('invoice.pdf', ['Attachment' => true]);
    }
}
