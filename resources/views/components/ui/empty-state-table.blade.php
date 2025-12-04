<tr>
    <td colspan="{{ $colspan }}" class="px-6 py-16 text-center">
        <div class="flex flex-col items-center justify-center">
            @if($icon)
                <div class="mb-4">
                    <i class="{{ $icon }} text-6xl text-gray-400"></i>
                </div>
            @else
                <div class="mb-4">
                    <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                </div>
            @endif
            
            <h3 class="mt-2 text-sm font-semibold text-gray-900">
                {{ $message ?? 'Nenhum registro encontrado' }}
            </h3>
            
            @if($description)
                <p class="mt-1 text-sm text-gray-500">
                    {{ $description }}
                </p>
            @endif
            
            @if(isset($slot) && trim($slot))
                <div class="mt-4">
                    {{ $slot }}
                </div>
            @endif
        </div>
    </td>
</tr>