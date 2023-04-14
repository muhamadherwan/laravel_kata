<!DOCTYPE html>
<html lang='en'>
<head>
    <title>{{ $invoice->invoice_number }}</title>
</head>
<body>
<x-link :href="route('admin.invoices.show', $invoice->id)">Back</x-link>
<h1>{{ $invoice->title }}</h1>
<p>Invoice Number: {{ $invoice->invoice_number }}</p>
<p>Customer: {{ $invoice->customer->name }}</p>
<p>Author: {{ $invoice->user->name }}</p>
<p>Date:{{ $invoice->created_at->format('d/M/Y') }}</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
</p>
</body>
</html>
