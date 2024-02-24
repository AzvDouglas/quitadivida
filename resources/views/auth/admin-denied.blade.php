<x-guest-layout>
    <div class="flex items-center justify-center bg-white">
        <div class="text-center">
            <h1 class="text-2xl font-semibold text-red-800 dark:text-red-200">Acesso Negado</h1>

            <img src="{{ asset('images/NotAnAdmin.jpeg') }}" alt="Access Denied Image" class="mx-auto mb-4">
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Você não tem permissão para acessar esta página.
            </p>
        </div>
    </div>
</x-guest-layout>
