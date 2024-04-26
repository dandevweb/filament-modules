<div class="w-1/2 bg-gray-300 mx-auto p-8 mt-20 rounded-lg">
    <form wire:submit="create">
        {{ $this->form }}

        <button class="px-4 py-2 bg-green-400 hover:bg-gray-400 rounded-full my-4" type="submit">
            Enviar dados
        </button>
    </form>

    <x-filament-actions::modals />
</div>
