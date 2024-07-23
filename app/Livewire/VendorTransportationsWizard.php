<?php

namespace App\Livewire;

use App\Models\CarType;
use App\Models\City;
use App\Models\ProductType;
use App\Models\RefrigeratingType;
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

class VendorTransportationsWizard extends Component  implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }
    public function render()
    {
        return view('livewire.vendor-transportations');
    }
    public function form(Form $form): Form
    {

        return $form
            ->schema([
                Wizard::make([
                    Step::make(__('home.vendor_info'))
                        ->schema([
                            TextInput::make('name')
                                ->label(__('Vendor.name'))
                                ->required()
                                ->maxLength(255),
                            TextInput::make('email')
                                ->label(__('Vendor.email'))
                                ->maxLength(255),
                            TextInput::make('phone')
                                ->label(__('Vendor.phone'))
                                ->maxLength(255),
                            TextInput::make('address')
                                ->label(__('Vendor.address'))
                                ->maxLength(255),
                            Select::make('region_id')
                                ->label(__('City.region'))
                                ->options(Region::all()->pluck('name', 'id'))
                                ->default(5)
                                ->afterStateUpdated(fn (Get $get, Set $set) => $set('city_id', null))
                                ->preload()
                                ->searchable()
                                ->reactive(),
                            Select::make('city_id')
                                ->label(__('Vendor.city'))
                                ->options(fn (Get $get): Collection => City::query()->whereRegionId($get('region_id'))->pluck('name', 'id'))
                                ->searchable()
                                ->default(12)
                                ->preload(),
                            Select::make('branch_id')
                                ->label(__('Vendor.branch'))
                                ->options(Vendor::all()->pluck('name', 'id'))
                                ->preload()
                                ->searchable(),
                        ]),
                    Step::make(__('VendorCar.vendor_cars'))
                        ->schema([
                            Repeater::make('vendorCars')
                                ->label(__('VendorCar.vendor_cars'))
                                ->minItems(1)
                                ->columns([
                                    'md' => 3
                                ])
                                ->schema([
                                    TextInput::make('name')
                                        ->label(__('VendorCar.name'))
                                        ->maxLength(255)
                                        ->columnSpanFull()
                                        ->required(),
                                    TextInput::make('capacity')
                                        ->label(__('VendorCar.capacity'))
                                        ->default(0.0)
                                        ->required(),
                                    Select::make('car_type_id')
                                        ->label(__('VendorCar.car_type'))
                                        ->options(CarType::all()->pluck('name', 'id'))
                                        ->searchable()
                                        ->preload()
                                        ->default(1)
                                        ->createOptionForm([
                                            TextInput::make('name')
                                                ->label(__('CarType.name'))

                                                ->maxLength(255)
                                                ->required(),
                                        ])
                                        ->createOptionUsing(function (array $data): int {
                                            return CarType::create($data)->getKey();
                                        })
                                        ->required(),
                                    Select::make('refrigerating_type_id')
                                        ->label(__('VendorCar.refrigerating_type'))
                                        ->options(RefrigeratingType::all()->pluck('name', 'id'))
                                        ->searchable()
                                        ->preload()
                                        ->default(1)
                                        ->createOptionForm([
                                            TextInput::make('name')
                                                ->label(__('RefrigeratingType.name'))

                                                ->maxLength(255)
                                                ->required(),
                                        ])
                                        ->createOptionUsing(function (array $data): int {
                                            return RefrigeratingType::create($data)->getKey();
                                        })
                                        ->required(),
                                ]),

                        ]),

                    Step::make(__('DeliveryZone.delivery_zones'))
                        ->schema([
                            Repeater::make('deliveryZones')
                                ->label(__('DeliveryZone.delivery_zones'))
                                ->minItems(1)
                                ->columns([
                                    'md' => 3
                                ])
                                ->schema([
                                    TextInput::make('cost')
                                ->label(__('DeliveryZone.cost'))
                                ->maxLength(255),
                            Select::make('region_id')
                                ->label(__('City.region'))
                                ->options(Region::all()->pluck('name', 'id'))
                                ->default(5)
                                ->afterStateUpdated(fn (Get $get, Set $set) => $set('city_id', null))
                                ->preload()
                                ->searchable()
                                ->reactive(),
                            Select::make('city_id')
                                ->label(__('DeliveryZone.city'))
                                ->options(fn (Get $get): Collection => City::query()->whereRegionId($get('region_id'))->pluck('name', 'id'))
                                ->searchable()
                                ->default(12)
                                ->preload(),
                                ])
                            

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
        $this->validate();
        // if (app()->hasDebugModeEnabled()) {
        // dd($this->data);
        // }


        DB::transaction(function () {

            $vendor = Vendor::create([
                "name" => $this->data['name'],
                "email" => $this->data['email'],
                "phone" => $this->data['phone'],
                "address" => $this->data['address'],
                "region_id" => $this->data['region_id'],
                "city_id" => $this->data['city_id'],
                "branch_id" => $this->data['branch_id'],
            ]);

            $vendor->cars()->createMany($this->data['vendorCars']);
            $vendor->deliveryZones()->createMany($this->data['deliveryZones']);
        });

        session()->flash('message', 'تم إرسال البيانات بنجاح');

        $this->redirect('home');
    }
}
