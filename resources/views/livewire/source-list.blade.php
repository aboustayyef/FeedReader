<div>
    <div class="flex flex-wrap w-full max-w-2xl">
        <h2 class="mb-4 mr-4 text-4xl font-bold text-gray-600 lg:mr-12">Sources</h2>
        <input type="text" placeholder="Filter Sources" wire:model="searchString" class="ir_input">
    </div>
    <hr class="mt-12">
    <div class="mt-12">
        @foreach ($sources as $source)
            @if ($this->matchSearchString($source))
                <x-source-item v-for="source in this.filtered_sources" v-if="appReady">
                    <x-slot name="title">{{$source->name}}</x-slot>
                    <x-slot name="description">{{$source->description}}</x-slot>
                    <x-slot name="category">{{$source->category? $source->category->description:"No Category"}}</x-slot>
                    <x-slot name="edit">/admin/source/{{$source->id}}/edit</x-slot>
                </x-source-item> 
            @endif
        @endforeach
    </div>
    {{-- Do your work, then step back. --}}
</div>
