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
            <x-ui.button-import-link :text="'Importar via planilha'" />
            <x-ui.button-register-link
                :link="route('users.index')"
                :text="'Adicionar usuário'"
            />
        </div>
    </x-ui.section-header>
</div>
