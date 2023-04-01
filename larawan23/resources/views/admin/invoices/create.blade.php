<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Invoice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if ($errors->any())
                    <div class="mb-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="font-medium text-red-600">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('admin.invoices.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <x-label for="invoice_number">Invoice Number:</x-label>
                            <x-input id="invoice_number" class="block w-full mt-1" name="invoice_number" value="{{ old('invoice_number') }}" type="text"/>
                            @error('invoice_number')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <x-label for="title">Title:</x-label>
                            <x-input id="title" class="block w-full mt-1" name="title" type="text" value="{{ old('title') }}"/>
                            @error('title')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <x-label for="customer">Customer</x-label>
                            <select name="customer" id="customer" class="block w-full mt-1">
                                <option value="0">--- Select Customer ---</option>
                                @foreach ($customers as $customer)
                                    <option value="{{ $customer->id }}"
                                            @if ($customer->id == old('customer')) selected @endif>{{ $customer->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('customer')
                            <span class="font-medium text-red-600" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-6">
                            <x-button>Submit</x-button>
                            <x-link :href="route('admin.invoices.index')">Cancel</x-link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

