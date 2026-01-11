@php use Carbon\Carbon; @endphp
<div>
    <x-ui.breadcrumb
        :items="[
            [
                'item'   => 'Usuários',
                'link'   => route('users.index'),
                'icon'   => 'square-chart-gantt'
            ]
        ]"
    />

    <x-ui.section-header
        :title="'Usuários'"
        :description="'Gerencie e acompanhe todos os usuários da plataforma.'"
    >
        <div class="flex items-center gap-2 w-full md:w-auto">
            <x-ui.button-import-link :text="'Importar via planilha'"/>
            <x-ui.button-register-link
                :link="route('users.index')"
                :text="'Adicionar usuário'"
            />
        </div>
    </x-ui.section-header>

    <div class="row mt-10">
        <div class="col-3">
            <x-ts-input placeholder="Buscar por usuário" wire:model.live="search" icon="magnifying-glass"/>
        </div>
    </div>

    <div class="overflow-hidden">
        <x-ui.table
            :columns="[
                '#',
                'Nome',
                'Email',
                'Email verificado?',
                'Data de cadastro',
                'Ações'
            ]"
            :rows="$users ?? []"
            :filter="false"
            :has_pagination="true"
            :padding-x-filter="false"
        >
            @forelse($users as $user)
                <tr class="hover:bg-gray-50 transition-colors">
                    <x-ui.td-table value="{{ $user->id }}" :first="true"/>
                    <x-ui.td-table value="{{ $user->name }}"/>
                    <x-ui.td-table value="{{ $user->email }}"/>
                    <x-ui.td-table
                        value="{{ $user->email_verified_at
                                ? Carbon::parse($user->email_verified_at)->format('d/m/Y H:i:s')
                                : '-' }}"
                    />
                    <x-ui.td-table value="{{ Carbon::parse($user->created_at)->format('d/m/Y H:i:s') }}"/>
                </tr>
            @empty

            @endforelse


        </x-ui.table>

    </div>

</div>
