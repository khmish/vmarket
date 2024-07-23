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
                {{-- <filament-language-switch/> --}}
                {{-- <livewire:filament-language-switch /> --}}
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
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0" href="{{ route('home') }}">
                    <div class="flex">
                        <span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor"
                                class="size-6">
                                <path
                                    d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                <path
                                    d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                            </svg>
                        </span>
                        {{ __('home.home') }}
                    </div>
                </a>
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0" href="{{ route('vendor-product') }}">
                    <div class="flex">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="size-6">
                            <path
                                d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 0 0 7.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 0 0 4.902-5.652l-1.3-1.299a1.875 1.875 0 0 0-1.325-.549H5.223Z" />
                            <path fill-rule="evenodd"
                                d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 0 0 9.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 0 0 2.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3Zm3-6a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75v-3Zm8.25-.75a.75.75 0 0 0-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-5.25a.75.75 0 0 0-.75-.75h-3Z"
                                clip-rule="evenodd" />
                        </svg>

                        {{ __('home.vendor_products') }}
                    </div>
                </a>
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0"
                    href="{{ route('vendor-transportations') }}">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="size-6">
                            <path
                                d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25ZM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 1 1 6 0h3a.75.75 0 0 0 .75-.75V15Z" />
                            <path
                                d="M8.25 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0ZM15.75 6.75a.75.75 0 0 0-.75.75v11.25c0 .087.015.17.042.248a3 3 0 0 1 5.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 0 0-3.732-10.104 1.837 1.837 0 0 0-1.47-.725H15.75Z" />
                            <path d="M19.5 19.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                        </svg>

                        {{ __('home.vendor_transportations') }}
                    </div>
                </a>
                {{-- <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0" href="">Cart</a> --}}
                <a class="mt-3 text-gray-100 hover:underline sm:mx-3 sm:mt-0" href="/admin">
                    <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M12 6.75a5.25 5.25 0 0 1 6.775-5.025.75.75 0 0 1 .313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 0 1 1.248.313 5.25 5.25 0 0 1-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 1 1 2.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0 1 12 6.75ZM4.117 19.125a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z"
                                clip-rule="evenodd" />
                            <path
                                d="m10.076 8.64-2.201-2.2V4.874a.75.75 0 0 0-.364-.643l-3.75-2.25a.75.75 0 0 0-.916.113l-.75.75a.75.75 0 0 0-.113.916l2.25 3.75a.75.75 0 0 0 .643.364h1.564l2.062 2.062 1.575-1.297Z" />
                            <path fill-rule="evenodd"
                                d="m12.556 17.329 4.183 4.182a3.375 3.375 0 0 0 4.773-4.773l-3.306-3.305a6.803 6.803 0 0 1-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 0 0-.167.063l-3.086 3.748Zm3.414-1.36a.75.75 0 0 1 1.06 0l1.875 1.876a.75.75 0 1 1-1.06 1.06L15.97 17.03a.75.75 0 0 1 0-1.06Z"
                                clip-rule="evenodd" />
                        </svg>

                        {{ __('home.control_panel') }}
                    </div>
                </a>
            </div>
        </nav>

    </div>
</header>
<!--  Header -->
