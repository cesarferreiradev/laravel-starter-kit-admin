@props([
    'value'  => null,
    'first'  => false,
    'action' => false,
    'wrap'   => false
])

<div>
    @if($first)
        <td class="py-3 ps-4 pl-12 pe-0 text-xs font-medium text-gray-500">
            <div class="flex items-center h-5">
                {{ $value }}
            </div>
        </td>
    @elseif($action)
        <td class="px-6 py-3 whitespace-nowrap text-end text-sm font-medium">
            {{ $value ?? $slot }}
        </td>
    @else
        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
            {{ $value ?? $slot }}
        </td>
    @endif
</div>
