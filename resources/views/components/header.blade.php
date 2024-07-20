{{-- 
<div class="relative isolate overflow-hidden bg-red-100  py-10 sm:py-12">
    
   
    <div class="mx-auto max-w-7xl px-5 lg:px-6">
    
      <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none ">
        <div class="grid grid-cols-1 text-base font-semibold text-black sm:grid-cols-2 md:flex lg:gap-x-10">
          <a href="{{route('vendor-product')}}">Vendor products </a>
          <a href="{{route('vendor-transportations')}}">Vendor transportations </a>
          <a href="{{route('home')}}">home </a>
        </div>
        
      </div>
    </div>
  </div>
   --}}

<!--  Header -->
<header class="bg-slate-900">
    <div class="container mx-auto px-6 py-3">
        <div class="flex items-center justify-between">
            <div class="hidden w-full text-gray-600 md:flex md:items-center">
                <i class="gg-profile"></i>
            </div>
            <div class="w-full text-blue-100 md:text-center font-mono text-4xl font-semibold uppercase tracking-widest">
                Vmarket
            </div>
            <div class="flex space-x-4 ">

                <a class="px-2" href="{{ route('locale', 'ar') }}">
                    <x-dynamic-component :component="'flag-country-sa'" class="w-6 h-6" />
                </a>
                <a href="{{ route('locale', 'en') }}">
                    <x-dynamic-component :component="'flag-country-us'" class="w-6 h-6" />
                </a>

            </div>
            <div class="flex items-center justify-end w-full">
                <button class="text-gray-100 focus:outline-none mx-4 sm:mx-0">
                    <i class="gg-shopping-cart"></i>
                </button>

                <div class="flex sm:hidden">
                    <button type="button"
                        class="text-gray-100 hover:text-gray-500 focus:outline-none focus:text-gray-500"
                        aria-label="toggle menu">
                        <i class="gg-menu-grid-r"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav :class="isOpen ? '' : 'hidden'" class="sm:flex sm:justify-center sm:items-center mt-4 ">
            <div class="flex flex-col sm:flex-row">
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0"
                    href="{{ route('home') }}">{{ __('home.home') }}</a>
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0"
                    href="{{ route('vendor-product') }}">{{ __('home.vendor_products') }}</a>
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0"
                    href="{{ route('vendor-transportations') }}">{{ __('home.vendor_transportations') }} </a>
                {{-- <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0" href="">Cart</a> --}}
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0"
                    href="/admin">{{ __('home.control_panel') }}</a>
            </div>
        </nav>

    </div>
</header>
<!--  Header -->
