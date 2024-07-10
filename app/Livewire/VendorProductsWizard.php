<?php

namespace App\Livewire;

use Filament\Forms\Components\TextInput;
use Livewire\Component;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

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
        return $form
            ->schema([
                Wizard::make([
                    Step::make('General Information')
                        ->schema([
                            TextInput::make('name')
                                ->label('اسم المصنع')
                                ->required()
                                ->maxLength(255)
                                ->unique('factories', 'name'),
                        ]),
                        Step::make('General Information')
                        ->schema([
                            TextInput::make('name')
                                ->label('اسم المصنع')
                                ->required()
                                ->maxLength(255)
                                ->unique('factories', 'name'),
                        ]),
                ]),
            ]);
    }
    public function submit(): void
    {
        if (app()->hasDebugModeEnabled()) {
            logger($this->data);
        }

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
