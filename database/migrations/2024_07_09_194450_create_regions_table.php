<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('country_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
        DB::table('regions')->insert(array(
            array(
                "id" => 1,
                
                "country_id" => 195,
                "name" => "منطقة الرياض",
                
            ),
            array(
                "id" => 2,
                
                "country_id" => 195,
                "name" => "منطقة مكة المكرمة",
                
            ),
            array(
                "id" => 3,
                
                "country_id" => 195,
                "name" => "منطقة المدينة المنورة",
                
            ),
            array(
                "id" => 4,
                
                "country_id" => 195,
                "name" => "منطقة القصيم",
                
            ),
            array(
                "id" => 5,
                
                "country_id" => 195,
                "name" => "المنطقة الشرقية",
                
            ),
            array(
                "id" => 6,
                
                "country_id" => 195,
                "name" => "منطقة عسير",
                
            ),
            array(
                "id" => 7,
                
                "country_id" => 195,
                "name" => "منطقة تبوك",
                
            ),
            array(
                "id" => 8,
                
                "country_id" => 195,
                "name" => "منطقة حائل",
                
            ),
            array(
                "id" => 9,
                
                "country_id" => 195,
                "name" => "منطقة الحدود الشمالية",
                
            ),
            array(
                "id" => 10,
                
                "country_id" => 195,
                "name" => "منطقة جازان",
                
            ),
            array(
                "id" => 11,
                
                "country_id" => 195,
                "name" => "منطقة نجران",
                
            ),
            array(
                "id" => 12,
                
                "country_id" => 195,
                "name" => "منطقة الباحة",
                
            ),
            array(
                "id" => 13,
                
                "country_id" => 195,
                "name" => "منطقة الجوف",
                
            ),
        )
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
