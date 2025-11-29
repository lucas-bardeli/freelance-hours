<div x-data="{ showModal: @entangle('modal') }">

    <!-- Overlay -->
    <div x-show="showModal" x-transition.opacity class="fixed inset-0 bg-black/60 backdrop-blur-sm z-40">
    </div>

    <!-- Modal -->
    <div x-show="showModal" x-transition.scale class="fixed inset-0 flex items-center justify-center z-50"
        style="display: none;">
        <div
            class="
            bg-[#181826] text-white shadow-lg border border-[#1E1E2C]
            rounded-lg p-8 w-full max-w-md flex flex-col gap-6
        ">
            <button class="bg-[#1E1E2C] hover:bg-[#313145] p-2 rounded-md transition w-fit inline-flex"
                wire:click="$set('modal', false)">
                <x-ui.icons.x class="w-8 h-8 text-white" />
            </button>

            {{ $slot }}
        </div>
    </div>

</div>
