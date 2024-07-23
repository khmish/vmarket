<div class="group relative rounded-md py-2 bg-gray-100">
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img src="https://www.healthyeating.org/images/default-source/home-0.0/nutrition-topics-2.0/general-nutrition-wellness/2-2-2-2foodgroups_vegetables_detailfeature.jpg?sfvrsn=226f1bc7_6"
            alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700  px-2">
                <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    <span
                        class="inline-block whitespace-nowrap rounded-full bg-info-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-info-800 dark:bg-[#2e2005] dark:text-info-500">
                        {{ $product?->name }}
                    </span>

                </a>
            </h3>
        </div>
        <p class="text-sm font-medium text-gray-900 px-2">

            <span
                class="inline-block whitespace-nowrap rounded-full bg-danger-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-danger-700 dark:bg-[#2c0f14] dark:text-danger-500 ">
                {{ $product?->cost }} @if (app()->getLocale()!='ar')
                SAR
                @else
                ريال
                @endif
            </span>
        </p>
    </div>
</div>

{{-- <div
    class="mx-3 mt-6 flex flex-col rounded-lg bg-white text-surface shadow-secondary-1 dark:bg-surface-dark dark:text-white sm:shrink-0 sm:grow sm:basis-0">
    <a href="#!">
      <img
        class="rounded-t-lg"
        src="https://www.healthyeating.org/images/default-source/home-0.0/nutrition-topics-2.0/general-nutrition-wellness/2-2-2-2foodgroups_vegetables_detailfeature.jpg"
        alt="Skyscrapers" />
    </a>
    <div class="p-6">
      <h5 class="mb-2 text-xl font-medium leading-tight">{{ $product?->name }}</h5>
      <p class="mb-4 text-base">
        {{ $product?->description }}
      </p>
    </div>
    <div
      class="mt-auto border-t-2 border-neutral-100 px-6 py-3 text-center text-surface/75 dark:border-white/10 dark:text-neutral-300">
      <small> {{ $product?->cost }}</small>
    </div>
  </div> --}}
