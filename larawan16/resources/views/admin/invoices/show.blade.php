<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Invoice Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div class="mb-4 text-right">
                        <x-link :href="route('admin.invoices.index')">Back</x-link>
                        <x-link :href="route('admin.invoices.edit', $invoice->id)">Edit</x-link>
                        <form action="{{ route('admin.invoices.destroy', $invoice->id) }}" method="POST"
                              onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <x-button>Delete</x-button>
                        </form>
                        <x-link :href="route('admin.invoices.pdf.show', $invoice->id)">Preview</x-link>
                        <x-link :href="route('admin.invoices.pdf.create', $invoice->id)">PDF</x-link>
                    </div>

                    <div><b>Invoice Number:</b> {{ $invoice->invoice_number }}</div>
                    <div><b>Title:</b> {{ $invoice->title }}</div>
                    <div><b>Customer:</b> {{ $invoice->customer->name }}</div>
                    <div><b>Create By:</b> {{ $invoice->user->name }}</div>
                    <div><b>Create Date:</b> {{ $invoice->created_at->format('d/M/Y') }}</div>



{{--                    <table class="w-full text-left border-collapse">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">--}}
{{--                                #--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light">--}}
{{--                                Name--}}
{{--                            </th>--}}
{{--                            <th class="px-6 py-4 text-sm font-bold uppercase bg-gray-100 border-b text-gray-dark border-gray-light"></th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        @foreach ($categories as $category)--}}
{{--                            <tr class="hover:bg-gray-50">--}}
{{--                                <td class="px-6 py-4 border-b border-gray-200">{{ $category->id }}</td>--}}
{{--                                <td class="px-6 py-4 border-b border-gray-200">--}}
{{--                                    <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-info">--}}
{{--                                        {{ $category->name }}--}}
{{--                                    </a>--}}
{{--                                </td>--}}
{{--                                <td class="px-6 py-4 border-b border-gray-200">--}}
{{--                                    <x-link :href="route('admin.categories.edit', $category->id)">--}}
{{--                                        Edit--}}
{{--                                    </x-link>--}}

{{--                                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"--}}
{{--                                          onsubmit="return confirm('Are you sure?');" style="display: inline-block;">--}}
{{--                                        <input type="hidden" name="_method" value="DELETE">--}}
{{--                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
{{--                                        <x-button>Delete</x-button>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
