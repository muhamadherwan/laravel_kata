<?php

/*
 |--------------------------------------------------------------------------
 | Controller Code Rules!
 |--------------------------------------------------------------------------
 |
 | Only use 7 default crud action. No custom method.
 | No biz logic. Only request and response logic.
 | Use inline format if possible.
 | Use form requests class for validation.
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreInvoiceRequest;
use App\Http\Requests\Admin\UpdateInvoiceRequest;
use App\Models\Customer;
use App\Models\Invoice;
use Illuminate\Http\RedirectResponse;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.invoices.index', [
            'invoices' => Invoice::with('customer')
                ->orderBy('created_at', 'desc')
                ->paginate(3)
        ]);
    }

    public function create()
    {
        $customers = Customer::all();

        return view('admin.invoices.create', compact('customers'));
    }

    public function store(StoreInvoiceRequest $request): RedirectResponse
    {
        $request->user()->invoices()->create([
            'invoice_number' => $request->invoice_number,
            'title'          => $request->title,
            'customer_id'    => $request->customer
        ]);

        return redirect()->route('admin.invoices.index')
            ->with('success', 'Your Invoice has been Created.');
    }

    public function edit(Invoice $invoice)
    {
        $customers = Customer::all();

        return view('admin.invoices.edit', compact('invoice', 'customers'));
    }

    public function update(UpdateInvoiceRequest $request, Invoice $invoice)
    {
        $invoice->update([
            'title' => $request->title,
            'customer_id' => $request->customer
        ]);

        return view('admin.invoices.show', compact('invoice'));
    }

    public function show(Invoice $invoice)
    {
        return view('admin.invoices.show', compact('invoice'));
    }

    public function destroy(Invoice $invoice): RedirectResponse
    {
        $invoice->delete();

        return redirect()->route('admin.invoices.index')
            ->with('success', 'Your Invoice has been Deleted.');
    }
}
