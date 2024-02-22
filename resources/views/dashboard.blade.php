<x-app-layout>
    <x-slot name="header">
<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
@if (!$cliente)
    <p class="text-red-500">Conclua seu cadastro para ter acesso a todas as funcionalidades.</p>
    <div class="mt-4">
        <a href="{{ route('cliente.create') }}"
            class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
            Cadastrar Dados
        </a>
    </div>
@else
    <p class="text-green-500">You're logged in! You are associated with a client</p>

    <!-- Exibir os dados do cliente aqui -->

@endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
