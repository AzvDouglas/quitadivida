<x-guest-layout>
    <form method="POST" action="{{ route('cliente.store') }}">
        @csrf

        <!-- Nome -->
        <div>
            <x-input-label for="nome" :value="__('Nome Completo')" />
            <x-text-input id="nome" class="block w-full mt-1" type="text" name="nome" :value="old('nome')" required
                autofocus />
            <x-input-error :messages="$errors->get('nome')" class="mt-2" />
        </div>

        <!-- CPF -->
        <div class="mt-4">
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" class="block w-full mt-1" type="text" name="cpf" :value="old('cpf')" required />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Telefones -->
        <div class="mt-4">
            <x-input-label for="telefones" :value="__('Telefones')" />
            <x-text-input id="telefones" class="block w-full mt-1" type="text" name="telefones"
                :value="old('telefones')" required />
            <x-input-error :messages="$errors->get('telefones')" class="mt-2" />
        </div>

        <!-- Emails -->
        <div class="mt-4">
            <x-input-label for="emails" :value="__('Emails')" />
            <x-text-input id="emails" class="block w-full mt-1" type="text" name="emails" :value="old('emails')"
                required />
            <x-input-error :messages="$errors->get('emails')" class="mt-2" />
        </div>

        <!-- Data de Nascimento -->
        <div class="mt-4">
            <x-input-label for="nascimento" :value="__('Data de Nascimento')" />
            <x-text-input id="nascimento" class="block w-full mt-1" type="date" name="nascimento"
                :value="old('nascimento') ? old('nascimento') : ''" required />
            <x-input-error :messages="$errors->get('nascimento')" class="mt-2" />
        </div>


        <div class="flex items-center justify-center mt-4">
            <x-primary-button>
                {{ __('Cadastrar') }}
            </x-primary-button>
        </div>
    </form>
<!--Errro ao cadastrar-->
    @if ($message = Session::get('erro'))
    <p>{{$error}}</p>
    @endif
</x-guest-layout>
