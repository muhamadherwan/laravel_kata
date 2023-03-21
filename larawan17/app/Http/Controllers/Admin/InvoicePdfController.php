<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoicePdfController extends Controller
{
    public function show(Invoice $invoice)
    {
        $pdf = PDF::loadView('admin.invoices.templates.show_invoice', compact('invoice'));

        return $pdf->stream("$invoice->invoice_number.pdf");
    }

    public function create(Invoice $invoice)
    {
        $pdf = PDF::loadView('admin.invoices.templates.download_invoice', compact('invoice'));

        return $pdf->download("$invoice->invoice_number.pdf");
    }
}
