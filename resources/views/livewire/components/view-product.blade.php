<div class="group relative rounded-md py-2 bg-gray-100">
  <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
    <img src="https://www.healthyeating.org/images/default-source/home-0.0/nutrition-topics-2.0/general-nutrition-wellness/2-2-2-2foodgroups_vegetables_detailfeature.jpg?sfvrsn=226f1bc7_6" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
  </div>
  <div class="mt-4 flex justify-between">
    <div>
      <h3 class="text-sm text-gray-700  px-2">
        <a href="#">
          <span aria-hidden="true" class="absolute inset-0"></span>
          {{ $product?->name }}
        </a>
      </h3>
    </div>
    <p class="text-sm font-medium text-gray-900 px-2">{{ $product?->cost }} SAR</p>
  </div>
</div>