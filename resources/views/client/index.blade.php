<x-app-layout>
	<x-slot name="header">
		<h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
			{{ __('Clientes Cadastrados') }}
		</h2>
	</x-slot>
	<table
		class="w-3/4 p-40 pt-12 mx-auto my-8 border border-gray-300 divide-y shadow-md rounded-3xl divide-slate-200 dark:divide-slate-500 dark:border-gray-700 ">
		<caption>Listagem de Clientes</caption>
		<thead class="bg-slate-50 dark:bg-slate-700">
			<tr>
				<th class="px-4 py-2 text-base font-bold text-left text-slate-900 dark:text-slate-100">CPF</th>
				<th class="px-4 py-2 text-base font-bold text-left text-slate-900 dark:text-slate-100">Cliente</th>
				<th class="px-4 py-2 text-base font-bold text-left text-slate-900 dark:text-slate-100">Actions</th>
			</tr>
		</thead>
		<tbody class="divide-y divide-slate-200 dark:bg-slate-800 dark:divide-slate-500">
			@forelse ($clientes as $cliente)
			<tr class="{{ $loop->index % 2 == 0 ? 'bg-gray-100 dark:bg-gray-800' : 'bg-white dark:bg-slate-700' }}">
				<td class="px-4 py-2 text-base text-slate-900 dark:text-slate-100">{{ $cliente->nome }}</td>
				<td class="px-4 py-2 text-base text-slate-900 dark:text-slate-100">{{ $cliente->cpf }}</td>
				<td class="px-4 py-2 text-base whitespace-nowrap">
					<button class="mr-2 btn btn--secondary">
						<i class="text-sm fas fa-eye"></i>
					</button>
					<button class="mr-2 btn btn--primary">
						<i class="fas fa-pencil-alt"></i>
					</button>
					<button class="btn btn--danger">
						<i class="fas fa-trash"></i>
					</button>
				</td>
			</tr>
			@empty
			<tr>
				<td colspan="3" class="px-4 py-2 text-sm text-center text-slate-500 dark:text-slate-400">No clientes
					found.</td>
			</tr>
			@endforelse
		</tbody>
	</table>
</x-app-layout>
