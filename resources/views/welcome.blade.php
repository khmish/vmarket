<x-layouts.app>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">All Products</h1>
    
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            @livewire('components.view-product')
            @livewire('components.view-product')
            @livewire('components.view-product')
            @livewire('components.view-product')
            @livewire('components.view-product')
          
      </div>
</x-layouts.app>