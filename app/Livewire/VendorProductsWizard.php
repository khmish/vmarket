<?php

namespace App\Livewire;

use App\Models\City;
use App\Models\ProductType;
use App\Models\Region;
use App\Models\Vendor;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Blade;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Collection;

class VendorProductsWizard extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function render()
    {
        return view('livewire.vendor-products-wizard');
    }
    public function form(Form $form): Form
    {
        //     "name: string
        // email: string nullable
        // phone: string nullable
        // address: string nullable
        // city_id: foreign:cities
        // branch_id: foreign:vendors nullable"
        return $form
            ->schema([
                Wizard::make([
                    Step::make('معلومات عامة')
                        ->schema([
                            TextInput::make('name')
                                ->label('الاسم')
                                ->maxLength(255),
                            TextInput::make('email')
                                ->label('بريد الالكتروني')
                                ->maxLength(255),
                            TextInput::make('phone')
                                ->label('رقم الهاتف')
                                ->maxLength(255),
                            TextInput::make('address')
                                ->label('عنوان')
                                ->maxLength(255),
                            Select::make('region_id')
                                ->label('المنطقة')
                                ->options(Region::all()->pluck('name', 'id'))
                                ->afterStateUpdated(fn (Get $get, Set $set) => $set('city_id', null))
                                ->preload()
                                ->searchable()
                                ->reactive(),
                            Select::make('city_id')
                                ->label('المدينة')
                                ->options(fn (Get $get): Collection => City::query()->whereRegionId($get('region_id'))->pluck('name', 'id'))
                                ->searchable()
                                ->preload(),
                            Select::make('branch_id')
                                ->label('اختر الشركة التابعة')
                                ->options(Vendor::all()->pluck('name', 'id'))
                                ->preload()
                                ->searchable(),
                        ]),
                    //                     "name: string
                    // description: string nullable
                    // image: string nullable
                    // vendor_id: foreign:vendors
                    // product_type_id: foreign:product_types
                    // cost: float default:0.0"
                    Step::make(' الاصناف')
                        ->schema([
                            Repeater::make('products')
                                ->label('المنتجات')
                                ->minItems(1)
                                // ->columns([
                                //     'md' => 2
                                // ])
                                ->schema([
                                    TextInput::make('name')
                                        ->label('اسم المنتج')
                                        ->maxLength(255)
                                        ->required(),
                                    TextInput::make('description')
                                        ->label('')
                                        ->required(),
                                    Select::make('vendor_id')
                                        ->label('')
                                        ->options(Vendor::all()->pluck('name', 'id'))
                                        ->searchable()
                                        ->preload()
                                        ->required(),
                                    Select::make('product_type_id')
                                        ->label('')
                                        ->options(ProductType::all()->pluck('name', 'id'))
                                        ->searchable()
                                        ->preload()
                                        ->required(),
                                    TextInput::make('description')
                                        ->label('')
                                        ->required(),
                                ]),

                        ]),
                ])->submitAction(new HtmlString(Blade::render(<<<BLADE
                <x-filament::button  type="submit"  size="sm">
                    Submit
                </x-filament::button>
            BLADE)))->statePath('data'),
            ]);
    }
    public function submit(): void
    {
        // if (app()->hasDebugModeEnabled()) {
        dd($this->data);
        // }

        $this->validate();

        DB::transaction(function () {
            /** @var TemporaryUploadedFile $license_file */
            $license_file = Arr::first($this->data['license_file']);

            //     $factory = Factory::create([
            //         'name' => $this->data['name'],
            //         'license_number' => $this->data['license_number'],
            //         'license_file' => $license_file->store(),
            //         'city_id' => $this->data['city_id'],
            //         'lat' => $this->data['location']['lat'],
            //         'lng' => $this->data['location']['lng'],
            //         'area' => $this->data['area'],
            //         'max_production_capacity' => $this->data['max_production_capacity'],
            //     ]);

            //     $factory->managers()->createMany([
            //         [
            //             'name' => $this->data['general_manager_name'],
            //             'phone' => $this->data['general_manager_phone'],
            //             'email' => $this->data['general_manager_email'],

            //         ],
            //         [
            //             'name' => $this->data['production_manager_name'],
            //             'phone' => $this->data['production_manager_phone'],
            //             'email' => $this->data['production_manager_email'],

            //         ],
            //         [
            //             'name' => $this->data['quality_manager_name'],
            //             'phone' => $this->data['quality_manager_phone'],
            //             'email' => $this->data['quality_manager_email'],

            //         ],
            //     ]);

            //     $factory->productionHalls()->createMany($this->data['production_halls']);

            //     $factory->storages()->createMany($this->data['storages']);

            //     collect($this->data['factory_products'])
            //         ->each(function (array $item) use ($factory) {
            //             $product_packaging = $item['product_packaging'];

            //             $factory_product = $factory->factoryProducts()->create(Arr::except($item, 'product_packaging'));

            //             $factory_product->productPackaging()->createMany($product_packaging);
            //         });

            //     collect($this->data['production_lines'])
            //         ->each(function (array $item) use ($factory) {
            //             $machines = $item['machines'];

            //             $factory_products = $factory->factoryProducts()->whereIn('product_id', $item['factory_products'])->pluck('id');

            //             $production_line = $factory->productionLines()->create(Arr::except($item, ['machines', 'factory_products']));

            //             $production_line->machines()->attach(data_get($machines, '*.machine_id'));

            //             $production_line->factoryProducts()->attach($factory_products);
            //         });
        });

        // // session()->flash('message', 'تم إرسال البيانات بنجاح');

        // $this->redirectRoute('home');
    }
}
