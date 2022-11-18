<div class="p-4 container mx-auto">
    <div class="grid grid-cols-12 gap-8">
        @for ($i = 0 ; $i < $count; $i++) <div class="shadow col-span-3 rounded cursor-pointer p-4"
            wire:click='add'>
            <img src="{{ asset('assets/images/IconDealer.png') }}" alt="">
            <span>Dealership & Workshop</span>
    </div>
    @endfor
</div>
</div>
