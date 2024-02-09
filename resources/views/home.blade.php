<!DOCTYPE html <html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport"="width=devicewidth, initial-=1.0">
	<title>Quitação de Dívidas</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css">
	<style>
		.bg-custom-blue {
			background-color: #0070f3;
		}

		.bg-custom-gray {
			background-color: #f5f5f5;
		}
	</style>
</head>

<body>
	<header class="py-16 text-center text-white bg-custom-blue">
		<img src="logo.png" alt="Logo do Site" class="w-32 mx-auto">
		<h1 class="mt-8 text-4xl font-bold">Transforme Sua Vida Financeira Hoje!</h1>
		<h2 class="mt-4 text-xl">Negocie suas dívidas com os melhores descontos e condições de pagamento.</h2>
	</header>
	<main class="px-4 py-16 bg-custom-gray">
		<section class="content-center mb-16">
			<input type="text" id="cpf-cnpj" placeholder="Insira seu CPF ou CNPJ"
				class="w-1/3 px-4 py-3 mb-4 border border-gray-300 rounded-lg">
			<button onclick="verificarDividas()"
				class="items-center w-1/3 py-3 text-white rounded-lg bg-custom-blue">Verificar
				Minhas Dívidas</button>
		</section>

		<section class="mb-16">
			<h3 class="mb-4 text-2xl font-bold">Benefícios</h3>
			<ul class="pl-8 list-disc">
				<li>Descontos exclusivos</li>
				<li>Melhores condições de pagamento</li>
				<li>Negociação rápida e segura</li>
				<li>Suporte personalizado</li>
			</ul>
		</section>

	</main>
	<footer class="py-8 text-center text-white bg-custom-blue">
		<p>&copy; 2024 - Quitação de Dívidas</p>
	</footer>
</body>

</html>
