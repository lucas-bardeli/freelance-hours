@props(['position', 'status'])


<div @class([
    'flex items-center justify-center rounded-full w-10 h-10',
    'bg-[#FEF3C7] text-[#F59E0B]' => $position == 0,
    'bg-[#F1F5F9] text-[#94A3B8]' => $position == 1,
    'bg-[#FFEDD5] text-[#B45309]' => $position == 2,
    'bg-[#F1F5F9]' => $position > 2,
])>
    @if ($position < 3)
        <x-ui.icons.trophy class="w-6 h-6" />
    @else
        @if ($status == 'up')
            <x-ui.icons.arrow-up class="w-6 h-6" />
        @elseif ($status == 'down')
            <x-ui.icons.arrow-down class="w-6 h-6" />
        @else
            <x-ui.icons.minus class="w-6 h-6" />
        @endif
    @endif
</div>
