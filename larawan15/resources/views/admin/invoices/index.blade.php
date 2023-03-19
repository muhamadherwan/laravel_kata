<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="mb-4">
                        <x-link :href="route('admin.invoices.create')">Create</x-link>
                    </div>

                    <table class="w-full text-left border-collapse">
                        <thead>
                        <tr>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                #
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                Invoice Number
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                Title
                            </th>
                            <th class   ="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                                Customer
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light text-center">
                                Date
                            </th>
                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($invoices as $key=> $invoice)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 border-b border-gray-200">{{ ($invoices->currentPage() - 1) * $invoices->perPage() + $loop->iteration }}.</td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    <a href="{{ route('admin.invoices.show', $invoice->id) }}" class="text-blue-500 underline">
                                        {{ $invoice->invoice_number }}
                                    </a>
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-black-500">
                                    {{ $invoice->title }}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200">
                                    {{ $invoice->customer->name }}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-black-500 text-center">
                                        {{ $invoice->created_at->format('d/M/Y') }}
                                </td>
                                <td class="px-6 py-4 border-b border-gray-200 text-right">
                                    <x-link :href="route('admin.invoices.edit', $invoice->id)">
                                        Edit
                                    </x-link>

                                    <form action="{{ route('admin.invoices.destroy', $invoice->id) }}" method="POST"
                                          onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <x-button>Delete</x-button>
                                    </form>

                                    <x-link :href="route('admin.invoices.pdf.create', $invoice->id)">PDF</x-link>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div style="padding-top:15px;">{{ $invoices->links() }}</div>
                    <x-flash class="mb-4" />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-flash/>

