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

class VendorTransportations extends Component  implements HasForms
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
                    Step::make('معلومات عامة')
                        ->schema([
                            TextInput::make('name')
                                ->label('الاسم')
                                ->required()
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
                                ->default(5)
                                ->afterStateUpdated(fn (Get $get, Set $set) => $set('city_id', null))
                                ->preload()
                                ->searchable()
                                ->reactive(),
                            Select::make('city_id')
                                ->label('المدينة')
                                ->options(fn (Get $get): Collection => City::query()->whereRegionId($get('region_id'))->pluck('name', 'id'))
                                ->searchable()
                                ->default(12)
                                ->preload(),
                            Select::make('branch_id')
                                ->label('اختر الشركة التابعة')
                                ->options(Vendor::all()->pluck('name', 'id'))
                                ->preload()
                                ->searchable(),
                        ]),
                    Step::make('السيارات')
                        ->schema([
                            Repeater::make('cars')
                                ->label('المنتجات')
                                ->minItems(1)
                                ->columns([
                                    'md' => 3
                                ])
                                ->schema([
                                    TextInput::make('name')
                                        ->label('اسم المنتج')
                                        ->maxLength(255)
                                        ->required(),
                                    TextInput::make('cost')
                                        ->label('السعر')
                                        ->default(0.0)
                                        ->required(),
                                    Select::make('product_type_id')
                                        ->label('نوع الخضار')
                                        ->options(ProductType::all()->pluck('name', 'id'))
                                        ->searchable()
                                        ->preload()
                                        ->default(1)
                                        ->createOptionForm([
                                            TextInput::make('name')
                                                ->label('نوع الخضار')

                                                ->maxLength(255)
                                                ->required(),
                                        ])
                                        ->createOptionUsing(function (array $data): int {
                                            return ProductType::create($data)->getKey();
                                        })
                                        ->required(),
                                    TextInput::make('description')
                                        ->columnSpanFull()
                                        ->label('التفاصيل'),
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
        $this->validate();
        // if (app()->hasDebugModeEnabled()) {
        dd($this->data);
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

            $vendor->products()->createMany($this->data['products']);

        });

        session()->flash('message', 'تم إرسال البيانات بنجاح');

        $this->redirectRoute('home');
    }
}
