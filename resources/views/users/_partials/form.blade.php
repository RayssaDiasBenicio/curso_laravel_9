<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8"/>
            <title>Cadastro</title>
        </head>
    <body> 
        <form>
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2.5 text-sm font-medium text-heading">Nome completo</label>
                    <input type="text" name="name" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
                </div>
                <div>
                    <label for="last_name" class="block mb-2.5 text-sm font-medium text-heading">E-mail</label>
                    <input type="text" name="email" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}">
                </div>
                <div>
                    <label for="company" class="block mb-2.5 text-sm font-medium text-heading">Senha</label>
                    <input type="password" name="password" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Senha:">
                </div> 
            </div>
            <button type="submit" class="text-black bg-brand box-border border hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Enviar</button>
        </form>
    </body>
</html>



