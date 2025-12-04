@props([
    'columns'        => [],
    'rows'           => [],
    'filter'         => true,
    'has_pagination' => false
])

<div class="flex flex-col mt-12">
    <div class="-m-1.5 overflow-x-hidden">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="rounded-lg">
                @if($filter)
                    <div class="py-8 px-4">
                        <div class="col-3">
                            <x-ts-input label="Pesquisar" wire:model.live="search" icon="magnifying-glass" />
                        </div>
                    </div>
                @endif
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 border-t border-gray-200">
                            <tr>
                                @foreach($columns as $column)

                                    @if($loop->first)
                                        <th scope="col" class="py-3 px-4 pl-12 pe-0 text-xs font-medium text-gray-500">
                                            <div class="flex items-center h-5">
                                                {{ $column }}
                                            </div>
                                        </th>
                                    @elseif($loop->last)
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">{{ $column }}</th>
                                    @else
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">{{ $column }}</th>
                                    @endif

                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            {{ $slot }}
                        </tbody>
                    </table>
                </div>

                @if($has_pagination && $rows->lastPage() > 1)
                    <div class="py-4 px-4 border-t border-gray-200">
                        {{ $rows->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
