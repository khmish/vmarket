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

        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('region_id')->constrained();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
        DB::table('cities')->insert(array(
            array(
                "id" => 1,
                
                "region_id" => 7,
                "name" => "تبوك",
                
            ),
            array(
                "id" => 2,
                
                "region_id" => 7,
                "name" => "نعمي",
                
            ),
            array(
                "id" => 3,
                
                "region_id" => 1,
                "name" => "الرياض",
                
            ),
            array(
                "id" => 4,
                
                "region_id" => 7,
                "name" => "حميط",
                
            ),
            array(
                "id" => 5,
                
                "region_id" => 2,
                "name" => "الطائف",
                
            ),
            array(
                "id" => 6,
                
                "region_id" => 2,
                "name" => "مكة المكرمة",
                
            ),
            array(
                "id" => 7,
                
                "region_id" => 7,
                "name" => "رجم الطيارة",
                
            ),
            array(
                "id" => 8,
                
                "region_id" => 7,
                "name" => "الثميد",
                
            ),
            array(
                "id" => 9,
                
                "region_id" => 7,
                "name" => "عسيلة",
                
            ),
            array(
                "id" => 10,
                
                "region_id" => 8,
                "name" => "حائل",
                
            ),
            array(
                "id" => 11,
                
                "region_id" => 4,
                "name" => "بريدة",
                
            ),
            array(
                "id" => 12,
                
                "region_id" => 5,
                "name" => "الهفوف",
                
            ),
            array(
                "id" => 13,
                
                "region_id" => 5,
                "name" => "الدمام",
                
            ),
            array(
                "id" => 14,
                
                "region_id" => 3,
                "name" => "المدينة المنورة",
                
            ),
            array(
                "id" => 15,
                
                "region_id" => 6,
                "name" => "ابها",
                
            ),
            array(
                "id" => 16,
                
                "region_id" => 7,
                "name" => "حالة عمار",
                
            ),
            array(
                "id" => 17,
                
                "region_id" => 10,
                "name" => "جازان",
                
            ),
            array(
                "id" => 18,
                
                "region_id" => 2,
                "name" => "جدة",
                
            ),
            array(
                "id" => 19,
                
                "region_id" => 7,
                "name" => "الشايب",
                
            ),
            array(
                "id" => 20,
                
                "region_id" => 7,
                "name" => "الفوهة",
                
            ),
            array(
                "id" => 21,
                
                "region_id" => 7,
                "name" => "اللوز",
                
            ),
            array(
                "id" => 22,
                
                "region_id" => 7,
                "name" => "عين الأخضر",
                
            ),
            array(
                "id" => 23,
                
                "region_id" => 7,
                "name" => "ذات الحاج",
                
            ),
            array(
                "id" => 24,
                
                "region_id" => 1,
                "name" => "المجمعة",
                
            ),
            array(
                "id" => 25,
                
                "region_id" => 7,
                "name" => "قيال",
                
            ),
            array(
                "id" => 26,
                
                "region_id" => 7,
                "name" => "الاخضر",
                
            ),
            array(
                "id" => 27,
                
                "region_id" => 7,
                "name" => "البديعة",
                
            ),
            array(
                "id" => 28,
                
                "region_id" => 7,
                "name" => "مغيرة",
                
            ),
            array(
                "id" => 29,
                
                "region_id" => 7,
                "name" => "الهوجاء",
                
            ),
            array(
                "id" => 30,
                
                "region_id" => 7,
                "name" => "البديع",
                
            ),
            array(
                "id" => 31,
                
                "region_id" => 5,
                "name" => "الخبر",
                
            ),
            array(
                "id" => 32,
                
                "region_id" => 7,
                "name" => "ابار قنا",
                
            ),
            array(
                "id" => 33,
                
                "region_id" => 7,
                "name" => "الجبعاوية",
                
            ),
            array(
                "id" => 34,
                
                "region_id" => 7,
                "name" => "الحميضة",
                
            ),
            array(
                "id" => 35,
                
                "region_id" => 7,
                "name" => "البيانة",
                
            ),
            array(
                "id" => 36,
                
                "region_id" => 7,
                "name" => "حقل",
                
            ),
            array(
                "id" => 37,
                
                "region_id" => 7,
                "name" => "الدرة",
                
            ),
            array(
                "id" => 38,
                
                "region_id" => 7,
                "name" => "الزيتة",
                
            ),
            array(
                "id" => 39,
                
                "region_id" => 7,
                "name" => "علقان",
                
            ),
            array(
                "id" => 40,
                
                "region_id" => 7,
                "name" => "الوادي الجديد",
                
            ),
            array(
                "id" => 41,
                
                "region_id" => 7,
                "name" => "مليح",
                
            ),
            array(
                "id" => 42,
                
                "region_id" => 7,
                "name" => "ابو الحنشان",
                
            ),
            array(
                "id" => 43,
                
                "region_id" => 7,
                "name" => "مقنا",
                
            ),
            array(
                "id" => 44,
                
                "region_id" => 5,
                "name" => "ابو قعر",
                
            ),
            array(
                "id" => 45,
                
                "region_id" => 5,
                "name" => "مركز العوجاء",
                
            ),
            array(
                "id" => 46,
                
                "region_id" => 5,
                "name" => "مركز العليمة",
                
            ),
            array(
                "id" => 47,
                
                "region_id" => 5,
                "name" => "حفر الباطن",
                
            ),
            array(
                "id" => 48,
                
                "region_id" => 5,
                "name" => "القلت",
                
            ),
            array(
                "id" => 49,
                
                "region_id" => 5,
                "name" => "النظيم",
                
            ),
            array(
                "id" => 50,
                
                "region_id" => 5,
                "name" => "ابن طوالة",
                
            ),
            array(
                "id" => 51,
                
                "region_id" => 5,
                "name" => "الصداوي",
                
            ),
            array(
                "id" => 52,
                
                "region_id" => 5,
                "name" => "ام قليب",
                
            ),
            array(
                "id" => 53,
                
                "region_id" => 5,
                "name" => "عريفج",
                
            ),
            array(
                "id" => 54,
                
                "region_id" => 5,
                "name" => "ابن شرار",
                
            ),
            array(
                "id" => 55,
                
                "region_id" => 5,
                "name" => "القيصومة",
                
            ),
            array(
                "id" => 56,
                
                "region_id" => 5,
                "name" => "الرقعي الجديدة",
                
            ),
            array(
                "id" => 57,
                
                "region_id" => 5,
                "name" => "ذبحة",
                
            ),
            array(
                "id" => 58,
                
                "region_id" => 5,
                "name" => "الصفيري",
                
            ),
            array(
                "id" => 59,
                
                "region_id" => 5,
                "name" => "الوايلية",
                
            ),
            array(
                "id" => 60,
                
                "region_id" => 5,
                "name" => "الفيوان",
                
            ),
            array(
                "id" => 61,
                
                "region_id" => 5,
                "name" => "الحماطيات",
                
            ),
            array(
                "id" => 62,
                
                "region_id" => 6,
                "name" => "خميس مشيط",
                
            ),
            array(
                "id" => 63,
                
                "region_id" => 5,
                "name" => "الجبو",
                
            ),
            array(
                "id" => 64,
                
                "region_id" => 5,
                "name" => "المسناة",
                
            ),
            array(
                "id" => 65,
                
                "region_id" => 6,
                "name" => "احد رفيده",
                
            ),
            array(
                "id" => 66,
                
                "region_id" => 5,
                "name" => "ام عشر الشرقية",
                
            ),
            array(
                "id" => 67,
                
                "region_id" => 5,
                "name" => "القطيف",
                
            ),
            array(
                "id" => 68,
                
                "region_id" => 7,
                "name" => "بوهان",
                
            ),
            array(
                "id" => 69,
                
                "region_id" => 7,
                "name" => "السنانيات",
                
            ),
            array(
                "id" => 70,
                
                "region_id" => 7,
                "name" => "حزايا",
                
            ),
            array(
                "id" => 71,
                
                "region_id" => 7,
                "name" => "أكباد",
                
            ),
            array(
                "id" => 72,
                
                "region_id" => 7,
                "name" => "بئر الحيز",
                
            ),
            array(
                "id" => 73,
                
                "region_id" => 7,
                "name" => "جريداء",
                
            ),
            array(
                "id" => 74,
                
                "region_id" => 7,
                "name" => "تيماء",
                
            ),
            array(
                "id" => 75,
                
                "region_id" => 7,
                "name" => "العسافية",
                
            ),
            array(
                "id" => 76,
                
                "region_id" => 3,
                "name" => "عردة",
                
            ),
            array(
                "id" => 77,
                
                "region_id" => 7,
                "name" => "الكتيب",
                
            ),
            array(
                "id" => 78,
                
                "region_id" => 7,
                "name" => "بئر فجر",
                
            ),
            array(
                "id" => 79,
                
                "region_id" => 7,
                "name" => "القليبة",
                
            ),
            array(
                "id" => 80,
                
                "region_id" => 4,
                "name" => "عنيزة",
                
            ),
            array(
                "id" => 81,
                
                "region_id" => 5,
                "name" => "الرافعية",
                
            ),
            array(
                "id" => 82,
                
                "region_id" => 5,
                "name" => "الكبريت",
                
            ),
            array(
                "id" => 83,
                
                "region_id" => 5,
                "name" => "رغوة",
                
            ),
            array(
                "id" => 84,
                
                "region_id" => 5,
                "name" => "حمى",
                
            ),
            array(
                "id" => 85,
                
                "region_id" => 5,
                "name" => "الزبر",
                
            ),
            array(
                "id" => 86,
                
                "region_id" => 5,
                "name" => "السفانية",
                
            ),
            array(
                "id" => 87,
                
                "region_id" => 5,
                "name" => "المحوى",
                
            ),
            array(
                "id" => 88,
                
                "region_id" => 5,
                "name" => "أم غور",
                
            ),
            array(
                "id" => 89,
                
                "region_id" => 5,
                "name" => "قرية العليا",
                
            ),
            array(
                "id" => 90,
                
                "region_id" => 5,
                "name" => "الرفيعة",
                
            ),
            array(
                "id" => 91,
                
                "region_id" => 5,
                "name" => "جرارة",
                
            ),
            array(
                "id" => 92,
                
                "region_id" => 5,
                "name" => "البويبيات",
                
            ),
            array(
                "id" => 93,
                
                "region_id" => 5,
                "name" => "السعيرة",
                
            ),
            array(
                "id" => 94,
                
                "region_id" => 5,
                "name" => "مناخ",
                
            ),
            array(
                "id" => 95,
                
                "region_id" => 5,
                "name" => "الحيرا",
                
            ),
            array(
                "id" => 96,
                
                "region_id" => 5,
                "name" => "ام الشفلح",
                
            ),
            array(
                "id" => 97,
                
                "region_id" => 5,
                "name" => "اللهابة",
                
            ),
            array(
                "id" => 98,
                
                "region_id" => 5,
                "name" => "الفريدة",
                
            ),
            array(
                "id" => 99,
                
                "region_id" => 5,
                "name" => "الشامية",
                
            ),
            array(
                "id" => 100,
                
                "region_id" => 1,
                "name" => "العيطلية",
                
            ),
            array(
                "id" => 101,
                
                "region_id" => 5,
                "name" => "سحمة",
                
            ),
            array(
                "id" => 102,
                
                "region_id" => 5,
                "name" => "الشملول / ام عقلا",
                
            ),
            array(
                "id" => 103,
                
                "region_id" => 5,
                "name" => "ام الهوشات",
                
            ),
            array(
                "id" => 104,
                
                "region_id" => 5,
                "name" => "الشيط",
                
            ),
            array(
                "id" => 105,
                
                "region_id" => 5,
                "name" => "العاذرية",
                
            ),
            array(
                "id" => 106,
                
                "region_id" => 5,
                "name" => "الشيحية",
                
            ),
            array(
                "id" => 107,
                
                "region_id" => 1,
                "name" => "حزوة / العمانية",
                
            ),
            array(
                "id" => 108,
                
                "region_id" => 5,
                "name" => "القرعاء",
                
            ),
            array(
                "id" => 109,
                
                "region_id" => 5,
                "name" => "اللصافة",
                
            ),
            array(
                "id" => 110,
                
                "region_id" => 5,
                "name" => "النقيرة",
                
            ),
            array(
                "id" => 111,
                
                "region_id" => 5,
                "name" => "هجرة أولاد حثلين",
                
            ),
            array(
                "id" => 112,
                
                "region_id" => 5,
                "name" => "الجبيل",
                
            ),
            array(
                "id" => 113,
                
                "region_id" => 5,
                "name" => "فرزان",
                
            ),
            array(
                "id" => 114,
                
                "region_id" => 5,
                "name" => "النعيرية",
                
            ),
            array(
                "id" => 115,
                
                "region_id" => 5,
                "name" => "ام ضليع",
                
            ),
            array(
                "id" => 116,
                
                "region_id" => 5,
                "name" => "مليجة",
                
            ),
            array(
                "id" => 117,
                
                "region_id" => 5,
                "name" => "الصرار",
                
            ),
            array(
                "id" => 118,
                
                "region_id" => 5,
                "name" => "حنيذ",
                
            ),
            array(
                "id" => 119,
                
                "region_id" => 5,
                "name" => "مغطي",
                
            ),
            array(
                "id" => 120,
                
                "region_id" => 5,
                "name" => "شفية",
                
            ),
            array(
                "id" => 121,
                
                "region_id" => 5,
                "name" => "عتيق",
                
            ),
            array(
                "id" => 122,
                
                "region_id" => 5,
                "name" => "الحسي",
                
            ),
            array(
                "id" => 123,
                
                "region_id" => 5,
                "name" => "ثاج",
                
            ),
            array(
                "id" => 124,
                
                "region_id" => 5,
                "name" => "الحناة",
                
            ),
            array(
                "id" => 125,
                
                "region_id" => 5,
                "name" => "الكهفة",
                
            ),
            array(
                "id" => 126,
                
                "region_id" => 5,
                "name" => "الصحاف",
                
            ),
            array(
                "id" => 127,
                
                "region_id" => 5,
                "name" => "العيينة",
                
            ),
            array(
                "id" => 128,
                
                "region_id" => 5,
                "name" => "القليب",
                
            ),
            array(
                "id" => 129,
                
                "region_id" => 5,
                "name" => "الونان",
                
            ),
            array(
                "id" => 130,
                
                "region_id" => 5,
                "name" => "غنوى",
                
            ),
            array(
                "id" => 131,
                
                "region_id" => 5,
                "name" => "الزغين",
                
            ),
            array(
                "id" => 132,
                
                "region_id" => 5,
                "name" => "نطاع",
                
            ),
            array(
                "id" => 133,
                
                "region_id" => 5,
                "name" => "ام ربيعة",
                
            ),
            array(
                "id" => 134,
                
                "region_id" => 5,
                "name" => "ابو حدرية",
                
            ),
            array(
                "id" => 135,
                
                "region_id" => 5,
                "name" => "منيفة",
                
            ),
            array(
                "id" => 136,
                
                "region_id" => 1,
                "name" => "الافلاج",
                
            ),
            array(
                "id" => 137,
                
                "region_id" => 4,
                "name" => "خيطان",
                
            ),
            array(
                "id" => 138,
                
                "region_id" => 1,
                "name" => "الوسيعة",
                
            ),
            array(
                "id" => 139,
                
                "region_id" => 1,
                "name" => "تمرية",
                
            ),
            array(
                "id" => 140,
                
                "region_id" => 1,
                "name" => "ابو خسيفاء",
                
            ),
            array(
                "id" => 141,
                
                "region_id" => 1,
                "name" => "النخيل",
                
            ),
            array(
                "id" => 142,
                
                "region_id" => 1,
                "name" => "السحيمي",
                
            ),
            array(
                "id" => 143,
                
                "region_id" => 1,
                "name" => "أم سديرة",
                
            ),
            array(
                "id" => 144,
                
                "region_id" => 1,
                "name" => "التنهاة",
                
            ),
            array(
                "id" => 145,
                
                "region_id" => 1,
                "name" => "قري التويم",
                
            ),
            array(
                "id" => 146,
                
                "region_id" => 1,
                "name" => "الشحمة",
                
            ),
            array(
                "id" => 147,
                
                "region_id" => 1,
                "name" => "جوي",
                
            ),
            array(
                "id" => 148,
                
                "region_id" => 1,
                "name" => "مقبلة",
                
            ),
            array(
                "id" => 149,
                
                "region_id" => 1,
                "name" => "حرمة",
                
            ),
            array(
                "id" => 150,
                
                "region_id" => 7,
                "name" => "المعظم",
                
            ),
            array(
                "id" => 151,
                
                "region_id" => 1,
                "name" => "جراب",
                
            ),
            array(
                "id" => 152,
                
                "region_id" => 1,
                "name" => "النغيق",
                
            ),
            array(
                "id" => 153,
                
                "region_id" => 1,
                "name" => "حويمضة",
                
            ),
            array(
                "id" => 154,
                
                "region_id" => 1,
                "name" => "البتيراء",
                
            ),
            array(
                "id" => 155,
                
                "region_id" => 1,
                "name" => "الفروثي",
                
            ),
            array(
                "id" => 156,
                
                "region_id" => 1,
                "name" => "جلاجل",
                
            ),
            array(
                "id" => 157,
                
                "region_id" => 1,
                "name" => "الدخيلة",
                
            ),
            array(
                "id" => 158,
                
                "region_id" => 1,
                "name" => "الحصون",
                
            ),
            array(
                "id" => 159,
                
                "region_id" => 1,
                "name" => "حوطة سدير",
                
            ),
            array(
                "id" => 160,
                
                "region_id" => 1,
                "name" => "روضة سدير",
                
            ),
            array(
                "id" => 161,
                
                "region_id" => 1,
                "name" => "تمير",
                
            ),
            array(
                "id" => 162,
                
                "region_id" => 1,
                "name" => "الارطاوية",
                
            ),
            array(
                "id" => 163,
                
                "region_id" => 1,
                "name" => "العمار",
                
            ),
            array(
                "id" => 164,
                
                "region_id" => 1,
                "name" => "المعشبة",
                
            ),
            array(
                "id" => 165,
                
                "region_id" => 1,
                "name" => "التويم",
                
            ),
            array(
                "id" => 166,
                
                "region_id" => 1,
                "name" => "الخطامة",
                
            ),
            array(
                "id" => 167,
                
                "region_id" => 1,
                "name" => "رويضة بوضاء",
                
            ),
            array(
                "id" => 168,
                
                "region_id" => 1,
                "name" => "الشعب",
                
            ),
            array(
                "id" => 169,
                
                "region_id" => 1,
                "name" => "عشيرة سدير",
                
            ),
            array(
                "id" => 170,
                
                "region_id" => 1,
                "name" => "الجنيفي",
                
            ),
            array(
                "id" => 171,
                
                "region_id" => 1,
                "name" => "العطار",
                
            ),
            array(
                "id" => 172,
                
                "region_id" => 1,
                "name" => "ام الجماجم",
                
            ),
            array(
                "id" => 173,
                
                "region_id" => 1,
                "name" => "مشلح",
                
            ),
            array(
                "id" => 174,
                
                "region_id" => 1,
                "name" => "ام رجوم",
                
            ),
            array(
                "id" => 175,
                
                "region_id" => 1,
                "name" => "بوضاء",
                
            ),
            array(
                "id" => 176,
                
                "region_id" => 1,
                "name" => "وشي",
                
            ),
            array(
                "id" => 177,
                
                "region_id" => 1,
                "name" => "عودة سدير",
                
            ),
            array(
                "id" => 178,
                
                "region_id" => 1,
                "name" => "مبايض",
                
            ),
            array(
                "id" => 179,
                
                "region_id" => 3,
                "name" => "دبدبة فضلاء",
                
            ),
            array(
                "id" => 180,
                
                "region_id" => 7,
                "name" => "الحجب",
                
            ),
            array(
                "id" => 181,
                
                "region_id" => 7,
                "name" => "الضلفة",
                
            ),
            array(
                "id" => 182,
                
                "region_id" => 3,
                "name" => "أبو طاقة",
                
            ),
            array(
                "id" => 183,
                
                "region_id" => 3,
                "name" => "العين الجديدة",
                
            ),
            array(
                "id" => 184,
                
                "region_id" => 3,
                "name" => "قعرة الدومة",
                
            ),
            array(
                "id" => 185,
                
                "region_id" => 3,
                "name" => "أم زرب",
                
            ),
            array(
                "id" => 186,
                
                "region_id" => 3,
                "name" => "هدية",
                
            ),
            array(
                "id" => 187,
                
                "region_id" => 3,
                "name" => "القعرة",
                
            ),
            array(
                "id" => 188,
                
                "region_id" => 3,
                "name" => "العلا",
                
            ),
            array(
                "id" => 189,
                
                "region_id" => 7,
                "name" => "الجهراء",
                
            ),
            array(
                "id" => 190,
                
                "region_id" => 7,
                "name" => "رحيب",
                
            ),
            array(
                "id" => 191,
                
                "region_id" => 3,
                "name" => "شلال",
                
            ),
            array(
                "id" => 192,
                
                "region_id" => 3,
                "name" => "ضاعا",
                
            ),
            array(
                "id" => 193,
                
                "region_id" => 3,
                "name" => "جيدة",
                
            ),
            array(
                "id" => 194,
                
                "region_id" => 3,
                "name" => "قلبان عشرة",
                
            ),
            array(
                "id" => 195,
                
                "region_id" => 7,
                "name" => "النجيل",
                
            ),
            array(
                "id" => 196,
                
                "region_id" => 3,
                "name" => "الرزيقية",
                
            ),
            array(
                "id" => 197,
                
                "region_id" => 3,
                "name" => "الحميدية",
                
            ),
            array(
                "id" => 198,
                
                "region_id" => 3,
                "name" => "صدر",
                
            ),
            array(
                "id" => 199,
                
                "region_id" => 3,
                "name" => "مغيراء",
                
            ),
            array(
                "id" => 200,
                
                "region_id" => 3,
                "name" => "قصيب ابو سيال",
                
            ),
            array(
                "id" => 201,
                
                "region_id" => 7,
                "name" => "ابو اراكة",
                
            ),
            array(
                "id" => 202,
                
                "region_id" => 3,
                "name" => "مدائن الصالح",
                
            ),
            array(
                "id" => 203,
                
                "region_id" => 3,
                "name" => "عورش",
                
            ),
            array(
                "id" => 204,
                
                "region_id" => 7,
                "name" => "النشيفة",
                
            ),
            array(
                "id" => 205,
                
                "region_id" => 3,
                "name" => "الزباير",
                
            ),
            array(
                "id" => 206,
                
                "region_id" => 3,
                "name" => "الضليعة",
                
            ),
            array(
                "id" => 207,
                
                "region_id" => 3,
                "name" => "متان العريقة",
                
            ),
            array(
                "id" => 208,
                
                "region_id" => 3,
                "name" => "الابرق",
                
            ),
            array(
                "id" => 209,
                
                "region_id" => 3,
                "name" => "اميرة",
                
            ),
            array(
                "id" => 210,
                
                "region_id" => 3,
                "name" => "الجديدة",
                
            ),
            array(
                "id" => 211,
                
                "region_id" => 3,
                "name" => "كتيفة مصادر",
                
            ),
            array(
                "id" => 212,
                
                "region_id" => 7,
                "name" => "الراس",
                
            ),
            array(
                "id" => 213,
                
                "region_id" => 7,
                "name" => "البيت",
                
            ),
            array(
                "id" => 214,
                
                "region_id" => 7,
                "name" => "بئر بحار",
                
            ),
            array(
                "id" => 215,
                
                "region_id" => 7,
                "name" => "سبحان",
                
            ),
            array(
                "id" => 216,
                
                "region_id" => 5,
                "name" => "الظهران",
                
            ),
            array(
                "id" => 217,
                
                "region_id" => 7,
                "name" => "أم الريح",
                
            ),
            array(
                "id" => 218,
                
                "region_id" => 7,
                "name" => "حرم",
                
            ),
            array(
                "id" => 219,
                
                "region_id" => 7,
                "name" => "عكوز",
                
            ),
            array(
                "id" => 220,
                
                "region_id" => 7,
                "name" => "السديد",
                
            ),
            array(
                "id" => 221,
                
                "region_id" => 7,
                "name" => "الحفيرة",
                
            ),
            array(
                "id" => 222,
                
                "region_id" => 7,
                "name" => "الوجه",
                
            ),
            array(
                "id" => 223,
                
                "region_id" => 7,
                "name" => "النابع",
                
            ),
            array(
                "id" => 224,
                
                "region_id" => 7,
                "name" => "عنتر",
                
            ),
            array(
                "id" => 225,
                
                "region_id" => 7,
                "name" => "المنجور",
                
            ),
            array(
                "id" => 226,
                
                "region_id" => 7,
                "name" => "ابا القزاز",
                
            ),
            array(
                "id" => 227,
                
                "region_id" => 7,
                "name" => "بداء",
                
            ),
            array(
                "id" => 228,
                
                "region_id" => 7,
                "name" => "خرباء",
                
            ),
            array(
                "id" => 229,
                
                "region_id" => 7,
                "name" => "الكر",
                
            ),
            array(
                "id" => 230,
                
                "region_id" => 5,
                "name" => "برق الأسيدية",
                
            ),
            array(
                "id" => 231,
                
                "region_id" => 5,
                "name" => "الفاضلي",
                
            ),
            array(
                "id" => 232,
                
                "region_id" => 5,
                "name" => "بقيق",
                
            ),
            array(
                "id" => 233,
                
                "region_id" => 5,
                "name" => "قرية",
                
            ),
            array(
                "id" => 234,
                
                "region_id" => 5,
                "name" => "ظلوم",
                
            ),
            array(
                "id" => 235,
                
                "region_id" => 5,
                "name" => "عين دار الجديده",
                
            ),
            array(
                "id" => 236,
                
                "region_id" => 5,
                "name" => "عين دار القديمة",
                
            ),
            array(
                "id" => 237,
                
                "region_id" => 5,
                "name" => "علاة",
                
            ),
            array(
                "id" => 238,
                
                "region_id" => 5,
                "name" => "فودة",
                
            ),
            array(
                "id" => 239,
                
                "region_id" => 5,
                "name" => "الكدادية",
                
            ),
            array(
                "id" => 240,
                
                "region_id" => 5,
                "name" => "يكرب",
                
            ),
            array(
                "id" => 241,
                
                "region_id" => 5,
                "name" => "الجابرية",
                
            ),
            array(
                "id" => 242,
                
                "region_id" => 5,
                "name" => "صلاصل",
                
            ),
            array(
                "id" => 243,
                
                "region_id" => 5,
                "name" => "شهيلاء",
                
            ),
            array(
                "id" => 244,
                
                "region_id" => 5,
                "name" => "عصيفرات",
                
            ),
            array(
                "id" => 245,
                
                "region_id" => 6,
                "name" => "طريب",
                
            ),
            array(
                "id" => 246,
                
                "region_id" => 5,
                "name" => "الدغيمية",
                
            ),
            array(
                "id" => 247,
                
                "region_id" => 1,
                "name" => "المنسف",
                
            ),
            array(
                "id" => 248,
                
                "region_id" => 1,
                "name" => "منسية الغربية",
                
            ),
            array(
                "id" => 249,
                
                "region_id" => 1,
                "name" => "عشيرة",
                
            ),
            array(
                "id" => 250,
                
                "region_id" => 1,
                "name" => "الثوير",
                
            ),
            array(
                "id" => 251,
                
                "region_id" => 1,
                "name" => "زليغف",
                
            ),
            array(
                "id" => 252,
                
                "region_id" => 1,
                "name" => "مزارع الاثلة",
                
            ),
            array(
                "id" => 253,
                
                "region_id" => 1,
                "name" => "مزارع الرحية",
                
            ),
            array(
                "id" => 254,
                
                "region_id" => 1,
                "name" => "قصيباء",
                
            ),
            array(
                "id" => 255,
                
                "region_id" => 1,
                "name" => "مزرعة بيضاء نثيل",
                
            ),
            array(
                "id" => 256,
                
                "region_id" => 1,
                "name" => "امارة المستوي",
                
            ),
            array(
                "id" => 257,
                
                "region_id" => 1,
                "name" => "الزلفي",
                
            ),
            array(
                "id" => 258,
                
                "region_id" => 1,
                "name" => "سمنان",
                
            ),
            array(
                "id" => 259,
                
                "region_id" => 1,
                "name" => "علقة",
                
            ),
            array(
                "id" => 260,
                
                "region_id" => 3,
                "name" => "العين",
                
            ),
            array(
                "id" => 261,
                
                "region_id" => 3,
                "name" => "المضاويح",
                
            ),
            array(
                "id" => 262,
                
                "region_id" => 3,
                "name" => "ابا البقر",
                
            ),
            array(
                "id" => 263,
                
                "region_id" => 3,
                "name" => "الحرضة",
                
            ),
            array(
                "id" => 264,
                
                "region_id" => 3,
                "name" => "الضرس",
                
            ),
            array(
                "id" => 265,
                
                "region_id" => 3,
                "name" => "الخريبة",
                
            ),
            array(
                "id" => 266,
                
                "region_id" => 3,
                "name" => "العرائد",
                
            ),
            array(
                "id" => 267,
                
                "region_id" => 3,
                "name" => "غمرة",
                
            ),
            array(
                "id" => 268,
                
                "region_id" => 3,
                "name" => "العدلة",
                
            ),
            array(
                "id" => 269,
                
                "region_id" => 3,
                "name" => "الديسة",
                
            ),
            array(
                "id" => 270,
                
                "region_id" => 3,
                "name" => "السليمي",
                
            ),
            array(
                "id" => 271,
                
                "region_id" => 3,
                "name" => "الجرف",
                
            ),
            array(
                "id" => 272,
                
                "region_id" => 3,
                "name" => "الهذلولي",
                
            ),
            array(
                "id" => 273,
                
                "region_id" => 3,
                "name" => "جدعاء",
                
            ),
            array(
                "id" => 274,
                
                "region_id" => 3,
                "name" => "خيبر",
                
            ),
            array(
                "id" => 275,
                
                "region_id" => 3,
                "name" => "اللحن",
                
            ),
            array(
                "id" => 276,
                
                "region_id" => 3,
                "name" => "العشاش",
                
            ),
            array(
                "id" => 277,
                
                "region_id" => 3,
                "name" => "الصلصلة",
                
            ),
            array(
                "id" => 278,
                
                "region_id" => 3,
                "name" => "الثمد",
                
            ),
            array(
                "id" => 279,
                
                "region_id" => 3,
                "name" => "العينية",
                
            ),
            array(
                "id" => 280,
                
                "region_id" => 1,
                "name" => "رماح",
                
            ),
            array(
                "id" => 281,
                
                "region_id" => 1,
                "name" => "حفر العتك",
                
            ),
            array(
                "id" => 282,
                
                "region_id" => 1,
                "name" => "المزيرع",
                
            ),
            array(
                "id" => 283,
                
                "region_id" => 1,
                "name" => "شوية",
                
            ),
            array(
                "id" => 284,
                
                "region_id" => 1,
                "name" => "الغيلانة",
                
            ),
            array(
                "id" => 285,
                
                "region_id" => 1,
                "name" => "الرمحية",
                
            ),
            array(
                "id" => 286,
                
                "region_id" => 5,
                "name" => "الراكة",
                
            ),
            array(
                "id" => 287,
                
                "region_id" => 7,
                "name" => "الخريطة",
                
            ),
            array(
                "id" => 288,
                
                "region_id" => 5,
                "name" => "الثقبة",
                
            ),
            array(
                "id" => 289,
                
                "region_id" => 5,
                "name" => "العزيزية",
                
            ),
            array(
                "id" => 290,
                
                "region_id" => 7,
                "name" => "شدوا",
                
            ),
            array(
                "id" => 291,
                
                "region_id" => 1,
                "name" => "الغاط",
                
            ),
            array(
                "id" => 292,
                
                "region_id" => 1,
                "name" => "مليح",
                
            ),
            array(
                "id" => 293,
                
                "region_id" => 7,
                "name" => "الشبعان",
                
            ),
            array(
                "id" => 294,
                
                "region_id" => 7,
                "name" => "الدقم",
                
            ),
            array(
                "id" => 295,
                
                "region_id" => 7,
                "name" => "القرص",
                
            ),
            array(
                "id" => 296,
                
                "region_id" => 7,
                "name" => "حراض",
                
            ),
            array(
                "id" => 297,
                
                "region_id" => 7,
                "name" => "الشبحة",
                
            ),
            array(
                "id" => 298,
                
                "region_id" => 7,
                "name" => "روضة الاغيدرات",
                
            ),
            array(
                "id" => 299,
                
                "region_id" => 7,
                "name" => "الخضراء الجديدة",
                
            ),
            array(
                "id" => 300,
                
                "region_id" => 7,
                "name" => "سمور",
                
            ),
            array(
                "id" => 301,
                
                "region_id" => 7,
                "name" => "الرويضات",
                
            ),
            array(
                "id" => 302,
                
                "region_id" => 7,
                "name" => "المهدرة",
                
            ),
            array(
                "id" => 303,
                
                "region_id" => 7,
                "name" => "بقيلة",
                
            ),
            array(
                "id" => 304,
                
                "region_id" => 7,
                "name" => "النعيلة",
                
            ),
            array(
                "id" => 305,
                
                "region_id" => 7,
                "name" => "الزغلية",
                
            ),
            array(
                "id" => 306,
                
                "region_id" => 7,
                "name" => "توله",
                
            ),
            array(
                "id" => 307,
                
                "region_id" => 7,
                "name" => "العين",
                
            ),
            array(
                "id" => 308,
                
                "region_id" => 7,
                "name" => "املج",
                
            ),
            array(
                "id" => 309,
                
                "region_id" => 7,
                "name" => "فم شثاث",
                
            ),
            array(
                "id" => 310,
                
                "region_id" => 7,
                "name" => "الحرة",
                
            ),
            array(
                "id" => 311,
                
                "region_id" => 7,
                "name" => "العمبجة",
                
            ),
            array(
                "id" => 312,
                
                "region_id" => 7,
                "name" => "الشدخ",
                
            ),
            array(
                "id" => 313,
                
                "region_id" => 3,
                "name" => "المرامية",
                
            ),
            array(
                "id" => 314,
                
                "region_id" => 1,
                "name" => "مزارع البدائع",
                
            ),
            array(
                "id" => 315,
                
                "region_id" => 1,
                "name" => "الخاتلة",
                
            ),
            array(
                "id" => 316,
                
                "region_id" => 1,
                "name" => "البلاد الوسطى",
                
            ),
            array(
                "id" => 317,
                
                "region_id" => 1,
                "name" => "الحسيان",
                
            ),
            array(
                "id" => 318,
                
                "region_id" => 1,
                "name" => "الضلعي",
                
            ),
            array(
                "id" => 319,
                
                "region_id" => 1,
                "name" => "تنيبيكة",
                
            ),
            array(
                "id" => 320,
                
                "region_id" => 1,
                "name" => "عبلية",
                
            ),
            array(
                "id" => 321,
                
                "region_id" => 1,
                "name" => "هجرة السلات",
                
            ),
            array(
                "id" => 322,
                
                "region_id" => 1,
                "name" => "معرج قليشة",
                
            ),
            array(
                "id" => 323,
                
                "region_id" => 1,
                "name" => "داغان",
                
            ),
            array(
                "id" => 324,
                
                "region_id" => 1,
                "name" => "الجرفية",
                
            ),
            array(
                "id" => 325,
                
                "region_id" => 1,
                "name" => "حشاشة",
                
            ),
            array(
                "id" => 326,
                
                "region_id" => 1,
                "name" => "المردمة",
                
            ),
            array(
                "id" => 327,
                
                "region_id" => 1,
                "name" => "لهدة الصياهد",
                
            ),
            array(
                "id" => 328,
                
                "region_id" => 1,
                "name" => "البرزاء",
                
            ),
            array(
                "id" => 329,
                
                "region_id" => 1,
                "name" => "الحمادة",
                
            ),
            array(
                "id" => 330,
                
                "region_id" => 1,
                "name" => "الداهمية",
                
            ),
            array(
                "id" => 331,
                
                "region_id" => 3,
                "name" => "الحمنة",
                
            ),
            array(
                "id" => 332,
                
                "region_id" => 3,
                "name" => "أم الغيران",
                
            ),
            array(
                "id" => 333,
                
                "region_id" => 3,
                "name" => "البراقية",
                
            ),
            array(
                "id" => 334,
                
                "region_id" => 3,
                "name" => "السراقي",
                
            ),
            array(
                "id" => 335,
                
                "region_id" => 3,
                "name" => "آبار دحمولة",
                
            ),
            array(
                "id" => 336,
                
                "region_id" => 3,
                "name" => "القويعية",
                
            ),
            array(
                "id" => 337,
                
                "region_id" => 3,
                "name" => "بدائع الهراسين",
                
            ),
            array(
                "id" => 338,
                
                "region_id" => 3,
                "name" => "مهد الذهب",
                
            ),
            array(
                "id" => 339,
                
                "region_id" => 3,
                "name" => "صفينة",
                
            ),
            array(
                "id" => 340,
                
                "region_id" => 3,
                "name" => "الرقابية",
                
            ),
            array(
                "id" => 341,
                
                "region_id" => 3,
                "name" => "الصلحانية",
                
            ),
            array(
                "id" => 342,
                
                "region_id" => 3,
                "name" => "الغاشية",
                
            ),
            array(
                "id" => 343,
                
                "region_id" => 3,
                "name" => "الاصيحر",
                
            ),
            array(
                "id" => 344,
                
                "region_id" => 3,
                "name" => "السويرقية",
                
            ),
            array(
                "id" => 345,
                
                "region_id" => 3,
                "name" => "ثرب",
                
            ),
            array(
                "id" => 346,
                
                "region_id" => 3,
                "name" => "حاذة",
                
            ),
            array(
                "id" => 347,
                
                "region_id" => 3,
                "name" => "العمق",
                
            ),
            array(
                "id" => 348,
                
                "region_id" => 3,
                "name" => "الصعبية",
                
            ),
            array(
                "id" => 349,
                
                "region_id" => 2,
                "name" => "الجحفة",
                
            ),
            array(
                "id" => 350,
                
                "region_id" => 3,
                "name" => "راين",
                
            ),
            array(
                "id" => 351,
                
                "region_id" => 2,
                "name" => "الزويراء",
                
            ),
            array(
                "id" => 352,
                
                "region_id" => 2,
                "name" => "النويبع",
                
            ),
            array(
                "id" => 353,
                
                "region_id" => 2,
                "name" => "رابغ",
                
            ),
            array(
                "id" => 354,
                
                "region_id" => 2,
                "name" => "مستورة",
                
            ),
            array(
                "id" => 355,
                
                "region_id" => 2,
                "name" => "الابواء",
                
            ),
            array(
                "id" => 356,
                
                "region_id" => 2,
                "name" => "شلوة",
                
            ),
            array(
                "id" => 357,
                
                "region_id" => 2,
                "name" => "كلية",
                
            ),
            array(
                "id" => 358,
                
                "region_id" => 2,
                "name" => "حجر",
                
            ),
            array(
                "id" => 359,
                
                "region_id" => 2,
                "name" => "صعبر",
                
            ),
            array(
                "id" => 360,
                
                "region_id" => 2,
                "name" => "التنضبية",
                
            ),
            array(
                "id" => 361,
                
                "region_id" => 2,
                "name" => "قويزة",
                
            ),
            array(
                "id" => 362,
                
                "region_id" => 2,
                "name" => "النزة",
                
            ),
            array(
                "id" => 363,
                
                "region_id" => 2,
                "name" => "المغاربة",
                
            ),
            array(
                "id" => 364,
                
                "region_id" => 2,
                "name" => "الكويسية",
                
            ),
            array(
                "id" => 365,
                
                "region_id" => 2,
                "name" => "ابو حليفاء",
                
            ),
            array(
                "id" => 366,
                
                "region_id" => 2,
                "name" => "محجوبة",
                
            ),
            array(
                "id" => 367,
                
                "region_id" => 1,
                "name" => "بئر الفيضة",
                
            ),
            array(
                "id" => 368,
                
                "region_id" => 1,
                "name" => "الهميج",
                
            ),
            array(
                "id" => 369,
                
                "region_id" => 1,
                "name" => "خضراء",
                
            ),
            array(
                "id" => 370,
                
                "region_id" => 1,
                "name" => "البدايع",
                
            ),
            array(
                "id" => 371,
                
                "region_id" => 1,
                "name" => "بطاحة",
                
            ),
            array(
                "id" => 372,
                
                "region_id" => 1,
                "name" => "الصقرة",
                
            ),
            array(
                "id" => 373,
                
                "region_id" => 1,
                "name" => "وبرة",
                
            ),
            array(
                "id" => 374,
                
                "region_id" => 1,
                "name" => "أبو عشرة",
                
            ),
            array(
                "id" => 375,
                
                "region_id" => 1,
                "name" => "المعلق",
                
            ),
            array(
                "id" => 376,
                
                "region_id" => 1,
                "name" => "الرميثي",
                
            ),
            array(
                "id" => 377,
                
                "region_id" => 1,
                "name" => "الهرانية",
                
            ),
            array(
                "id" => 378,
                
                "region_id" => 4,
                "name" => "الرضم",
                
            ),
            array(
                "id" => 379,
                
                "region_id" => 1,
                "name" => "الثعل",
                
            ),
            array(
                "id" => 380,
                
                "region_id" => 1,
                "name" => "الانسيات",
                
            ),
            array(
                "id" => 381,
                
                "region_id" => 1,
                "name" => "فرعة الرميثي",
                
            ),
            array(
                "id" => 382,
                
                "region_id" => 1,
                "name" => "البطين",
                
            ),
            array(
                "id" => 383,
                
                "region_id" => 1,
                "name" => "بديدة",
                
            ),
            array(
                "id" => 384,
                
                "region_id" => 1,
                "name" => "المجهلية",
                
            ),
            array(
                "id" => 385,
                
                "region_id" => 1,
                "name" => "البحرة",
                
            ),
            array(
                "id" => 386,
                
                "region_id" => 1,
                "name" => "بديعة",
                
            ),
            array(
                "id" => 387,
                
                "region_id" => 1,
                "name" => "الجثوم",
                
            ),
            array(
                "id" => 388,
                
                "region_id" => 1,
                "name" => "الشويطن",
                
            ),
            array(
                "id" => 389,
                
                "region_id" => 1,
                "name" => "المحامة",
                
            ),
            array(
                "id" => 390,
                
                "region_id" => 1,
                "name" => "عفيف",
                
            ),
            array(
                "id" => 391,
                
                "region_id" => 1,
                "name" => "الجمانية",
                
            ),
            array(
                "id" => 392,
                
                "region_id" => 1,
                "name" => "الاشعرية",
                
            ),
            array(
                "id" => 393,
                
                "region_id" => 1,
                "name" => "الخضارة",
                
            ),
            array(
                "id" => 394,
                
                "region_id" => 1,
                "name" => "بدائع العضيان",
                
            ),
            array(
                "id" => 395,
                
                "region_id" => 1,
                "name" => "أم أرطى",
                
            ),
            array(
                "id" => 396,
                
                "region_id" => 1,
                "name" => "المكلاة",
                
            ),
            array(
                "id" => 397,
                
                "region_id" => 1,
                "name" => "بعيثران",
                
            ),
            array(
                "id" => 398,
                
                "region_id" => 1,
                "name" => "أم قصور",
                
            ),
            array(
                "id" => 399,
                
                "region_id" => 1,
                "name" => "عبدة",
                
            ),
            array(
                "id" => 400,
                
                "region_id" => 1,
                "name" => "خريصة",
                
            ),
            array(
                "id" => 401,
                
                "region_id" => 1,
                "name" => "عجابة",
                
            ),
            array(
                "id" => 402,
                
                "region_id" => 1,
                "name" => "المديفع",
                
            ),
            array(
                "id" => 403,
                
                "region_id" => 1,
                "name" => "القدراوية",
                
            ),
            array(
                "id" => 404,
                
                "region_id" => 8,
                "name" => "أوبيرة",
                
            ),
            array(
                "id" => 405,
                
                "region_id" => 1,
                "name" => "أم أثلة",
                
            ),
            array(
                "id" => 406,
                
                "region_id" => 1,
                "name" => "الأخضر",
                
            ),
            array(
                "id" => 407,
                
                "region_id" => 1,
                "name" => "مطيعة",
                
            ),
            array(
                "id" => 408,
                
                "region_id" => 1,
                "name" => "المدارة",
                
            ),
            array(
                "id" => 409,
                
                "region_id" => 1,
                "name" => "الدبيجة",
                
            ),
            array(
                "id" => 410,
                
                "region_id" => 1,
                "name" => "ثادق",
                
            ),
            array(
                "id" => 411,
                
                "region_id" => 1,
                "name" => "الروبضة / رغبة",
                
            ),
            array(
                "id" => 412,
                
                "region_id" => 1,
                "name" => "رويضة السهول",
                
            ),
            array(
                "id" => 413,
                
                "region_id" => 1,
                "name" => "مشاش السهول",
                
            ),
            array(
                "id" => 414,
                
                "region_id" => 1,
                "name" => "الحسي",
                
            ),
            array(
                "id" => 415,
                
                "region_id" => 1,
                "name" => "الصفرات",
                
            ),
            array(
                "id" => 416,
                
                "region_id" => 1,
                "name" => "البير",
                
            ),
            array(
                "id" => 417,
                
                "region_id" => 1,
                "name" => "رويغب",
                
            ),
            array(
                "id" => 418,
                
                "region_id" => 3,
                "name" => "النجف",
                
            ),
            array(
                "id" => 419,
                
                "region_id" => 3,
                "name" => "السطيح",
                
            ),
            array(
                "id" => 420,
                
                "region_id" => 3,
                "name" => "الخيمة",
                
            ),
            array(
                "id" => 421,
                
                "region_id" => 5,
                "name" => "سيهات",
                
            ),
            array(
                "id" => 422,
                
                "region_id" => 3,
                "name" => "تفيدة",
                
            ),
            array(
                "id" => 423,
                
                "region_id" => 5,
                "name" => "تاروت",
                
            ),
            array(
                "id" => 424,
                
                "region_id" => 3,
                "name" => "ندياء",
                
            ),
            array(
                "id" => 425,
                
                "region_id" => 3,
                "name" => "مشرفة",
                
            ),
            array(
                "id" => 426,
                
                "region_id" => 3,
                "name" => "دوينه",
                
            ),
            array(
                "id" => 427,
                
                "region_id" => 3,
                "name" => "عدن",
                
            ),
            array(
                "id" => 428,
                
                "region_id" => 3,
                "name" => "الأحمر",
                
            ),
            array(
                "id" => 429,
                
                "region_id" => 3,
                "name" => "المثلث",
                
            ),
            array(
                "id" => 430,
                
                "region_id" => 3,
                "name" => "البقاع",
                
            ),
            array(
                "id" => 431,
                
                "region_id" => 3,
                "name" => "النجيل",
                
            ),
            array(
                "id" => 432,
                
                "region_id" => 3,
                "name" => "البثنة",
                
            ),
            array(
                "id" => 433,
                
                "region_id" => 3,
                "name" => "خيف حسين",
                
            ),
            array(
                "id" => 434,
                
                "region_id" => 3,
                "name" => "البقارية",
                
            ),
            array(
                "id" => 435,
                
                "region_id" => 3,
                "name" => "الفقعلي",
                
            ),
            array(
                "id" => 436,
                
                "region_id" => 3,
                "name" => "المشريف",
                
            ),
            array(
                "id" => 437,
                
                "region_id" => 3,
                "name" => "أم المسن",
                
            ),
            array(
                "id" => 438,
                
                "region_id" => 3,
                "name" => "البديع",
                
            ),
            array(
                "id" => 439,
                
                "region_id" => 3,
                "name" => "الدارة",
                
            ),
            array(
                "id" => 440,
                
                "region_id" => 3,
                "name" => "القري",
                
            ),
            array(
                "id" => 441,
                
                "region_id" => 3,
                "name" => "السليم",
                
            ),
            array(
                "id" => 442,
                
                "region_id" => 3,
                "name" => "المقنع",
                
            ),
            array(
                "id" => 443,
                
                "region_id" => 3,
                "name" => "ضفيان",
                
            ),
            array(
                "id" => 444,
                
                "region_id" => 3,
                "name" => "عضاد",
                
            ),
            array(
                "id" => 445,
                
                "region_id" => 3,
                "name" => "العدوة",
                
            ),
            array(
                "id" => 446,
                
                "region_id" => 3,
                "name" => "النباة",
                
            ),
            array(
                "id" => 447,
                
                "region_id" => 3,
                "name" => "البريدي",
                
            ),
            array(
                "id" => 448,
                
                "region_id" => 3,
                "name" => "ينبع",
                
            ),
            array(
                "id" => 449,
                
                "region_id" => 3,
                "name" => "القراصة",
                
            ),
            array(
                "id" => 450,
                
                "region_id" => 3,
                "name" => "العيص",
                
            ),
            array(
                "id" => 451,
                
                "region_id" => 3,
                "name" => "الجابرية",
                
            ),
            array(
                "id" => 452,
                
                "region_id" => 3,
                "name" => "ينبع النخل",
                
            ),
            array(
                "id" => 453,
                
                "region_id" => 3,
                "name" => "جراجر",
                
            ),
            array(
                "id" => 454,
                
                "region_id" => 3,
                "name" => "ترعة",
                
            ),
            array(
                "id" => 455,
                
                "region_id" => 3,
                "name" => "المربع",
                
            ),
            array(
                "id" => 456,
                
                "region_id" => 3,
                "name" => "نبط",
                
            ),
            array(
                "id" => 457,
                
                "region_id" => 3,
                "name" => "السليلة",
                
            ),
            array(
                "id" => 458,
                
                "region_id" => 1,
                "name" => "القرائن",
                
            ),
            array(
                "id" => 459,
                
                "region_id" => 1,
                "name" => "الشكيرة",
                
            ),
            array(
                "id" => 460,
                
                "region_id" => 1,
                "name" => "هجرة المغر",
                
            ),
            array(
                "id" => 461,
                
                "region_id" => 1,
                "name" => "مزارع المحتجبة",
                
            ),
            array(
                "id" => 462,
                
                "region_id" => 1,
                "name" => "الغرابة",
                
            ),
            array(
                "id" => 463,
                
                "region_id" => 1,
                "name" => "غسلة",
                
            ),
            array(
                "id" => 464,
                
                "region_id" => 1,
                "name" => "شقراء",
                
            ),
            array(
                "id" => 465,
                
                "region_id" => 1,
                "name" => "الهفوف",
                
            ),
            array(
                "id" => 466,
                
                "region_id" => 1,
                "name" => "حلوان",
                
            ),
            array(
                "id" => 467,
                
                "region_id" => 1,
                "name" => "حصرة",
                
            ),
            array(
                "id" => 468,
                
                "region_id" => 1,
                "name" => "الثمامية",
                
            ),
            array(
                "id" => 469,
                
                "region_id" => 1,
                "name" => "لبيدة",
                
            ),
            array(
                "id" => 470,
                
                "region_id" => 1,
                "name" => "العضيانية",
                
            ),
            array(
                "id" => 471,
                
                "region_id" => 1,
                "name" => "عجلة",
                
            ),
            array(
                "id" => 472,
                
                "region_id" => 1,
                "name" => "جفن ضب",
                
            ),
            array(
                "id" => 473,
                
                "region_id" => 1,
                "name" => "دلقان",
                
            ),
            array(
                "id" => 474,
                
                "region_id" => 1,
                "name" => "أم السباع",
                
            ),
            array(
                "id" => 475,
                
                "region_id" => 1,
                "name" => "الجله الأعلى",
                
            ),
            array(
                "id" => 476,
                
                "region_id" => 1,
                "name" => "الخفق الجنوبي",
                
            ),
            array(
                "id" => 477,
                
                "region_id" => 1,
                "name" => "الدحوة",
                
            ),
            array(
                "id" => 478,
                
                "region_id" => 1,
                "name" => "الخفق القديم",
                
            ),
            array(
                "id" => 479,
                
                "region_id" => 1,
                "name" => "الشرمية",
                
            ),
            array(
                "id" => 480,
                
                "region_id" => 1,
                "name" => "مراغان",
                
            ),
            array(
                "id" => 481,
                
                "region_id" => 1,
                "name" => "الجروية",
                
            ),
            array(
                "id" => 482,
                
                "region_id" => 1,
                "name" => "أبو رجوم",
                
            ),
            array(
                "id" => 483,
                
                "region_id" => 1,
                "name" => "القلتة",
                
            ),
            array(
                "id" => 484,
                
                "region_id" => 1,
                "name" => "لعلع",
                
            ),
            array(
                "id" => 485,
                
                "region_id" => 1,
                "name" => "الغريري",
                
            ),
            array(
                "id" => 486,
                
                "region_id" => 1,
                "name" => "الخنقة",
                
            ),
            array(
                "id" => 487,
                
                "region_id" => 1,
                "name" => "النسق القديم",
                
            ),
            array(
                "id" => 488,
                
                "region_id" => 1,
                "name" => "بيضاء نثيل",
                
            ),
            array(
                "id" => 489,
                
                "region_id" => 1,
                "name" => "أم الدباء",
                
            ),
            array(
                "id" => 490,
                
                "region_id" => 1,
                "name" => "الأمار",
                
            ),
            array(
                "id" => 491,
                
                "region_id" => 1,
                "name" => "عسيلان",
                
            ),
            array(
                "id" => 492,
                
                "region_id" => 1,
                "name" => "السدرية",
                
            ),
            array(
                "id" => 493,
                
                "region_id" => 1,
                "name" => "أم الشبرم",
                
            ),
            array(
                "id" => 494,
                
                "region_id" => 1,
                "name" => "الحجاجي",
                
            ),
            array(
                "id" => 495,
                
                "region_id" => 1,
                "name" => "الغبياء",
                
            ),
            array(
                "id" => 496,
                
                "region_id" => 1,
                "name" => "فيضة بن سعيدان",
                
            ),
            array(
                "id" => 497,
                
                "region_id" => 1,
                "name" => "أبو حميض",
                
            ),
            array(
                "id" => 498,
                
                "region_id" => 1,
                "name" => "النبيبيع",
                
            ),
            array(
                "id" => 499,
                
                "region_id" => 1,
                "name" => "النباع",
                
            ),
            array(
                "id" => 500,
                
                "region_id" => 1,
                "name" => "الملقى",
                
            ),
            array(
                "id" => 501,
                
                "region_id" => 1,
                "name" => "العبد",
                
            ),
            array(
                "id" => 502,
                
                "region_id" => 1,
                "name" => "أم الجثجاث",
                
            ),
            array(
                "id" => 503,
                
                "region_id" => 1,
                "name" => "أم جفر",
                
            ),
            array(
                "id" => 504,
                
                "region_id" => 1,
                "name" => "الخلفية",
                
            ),
            array(
                "id" => 505,
                
                "region_id" => 2,
                "name" => "الجدعان",
                
            ),
            array(
                "id" => 506,
                
                "region_id" => 2,
                "name" => "زنقاحة",
                
            ),
            array(
                "id" => 507,
                
                "region_id" => 2,
                "name" => "العمشان",
                
            ),
            array(
                "id" => 508,
                
                "region_id" => 2,
                "name" => "الجذية",
                
            ),
            array(
                "id" => 509,
                
                "region_id" => 2,
                "name" => "الفطيمة",
                
            ),
            array(
                "id" => 510,
                
                "region_id" => 2,
                "name" => "المحارزة",
                
            ),
            array(
                "id" => 511,
                
                "region_id" => 2,
                "name" => "الحمة",
                
            ),
            array(
                "id" => 512,
                
                "region_id" => 2,
                "name" => "صيادة",
                
            ),
            array(
                "id" => 513,
                
                "region_id" => 2,
                "name" => "الدفينة",
                
            ),
            array(
                "id" => 514,
                
                "region_id" => 2,
                "name" => "الوهط",
                
            ),
            array(
                "id" => 515,
                
                "region_id" => 2,
                "name" => "الغنم",
                
            ),
            array(
                "id" => 516,
                
                "region_id" => 2,
                "name" => "ابو غيل",
                
            ),
            array(
                "id" => 517,
                
                "region_id" => 2,
                "name" => "ام البكار",
                
            ),
            array(
                "id" => 518,
                
                "region_id" => 2,
                "name" => "الفعور",
                
            ),
            array(
                "id" => 519,
                
                "region_id" => 2,
                "name" => "الصخيرة",
                
            ),
            array(
                "id" => 520,
                
                "region_id" => 2,
                "name" => "السريح",
                
            ),
            array(
                "id" => 521,
                
                "region_id" => 2,
                "name" => "الملعب",
                
            ),
            array(
                "id" => 522,
                
                "region_id" => 2,
                "name" => "الغمير",
                
            ),
            array(
                "id" => 523,
                
                "region_id" => 2,
                "name" => "الوزير",
                
            ),
            array(
                "id" => 524,
                
                "region_id" => 2,
                "name" => "ثمالة",
                
            ),
            array(
                "id" => 525,
                
                "region_id" => 2,
                "name" => "النصبة",
                
            ),
            array(
                "id" => 526,
                
                "region_id" => 2,
                "name" => "عباسة",
                
            ),
            array(
                "id" => 527,
                
                "region_id" => 2,
                "name" => "غرابة",
                
            ),
            array(
                "id" => 528,
                
                "region_id" => 2,
                "name" => "الرخيلة",
                
            ),
            array(
                "id" => 529,
                
                "region_id" => 1,
                "name" => "القصب",
                
            ),
            array(
                "id" => 530,
                
                "region_id" => 1,
                "name" => "المشاش",
                
            ),
            array(
                "id" => 531,
                
                "region_id" => 1,
                "name" => "الصوح",
                
            ),
            array(
                "id" => 532,
                
                "region_id" => 1,
                "name" => "اشيقر",
                
            ),
            array(
                "id" => 533,
                
                "region_id" => 1,
                "name" => "الداهنة",
                
            ),
            array(
                "id" => 534,
                
                "region_id" => 1,
                "name" => "الجريفة",
                
            ),
            array(
                "id" => 535,
                
                "region_id" => 1,
                "name" => "الوقف",
                
            ),
            array(
                "id" => 536,
                
                "region_id" => 1,
                "name" => "العلوة",
                
            ),
            array(
                "id" => 537,
                
                "region_id" => 1,
                "name" => "فرحة",
                
            ),
            array(
                "id" => 538,
                
                "region_id" => 1,
                "name" => "عروى",
                
            ),
            array(
                "id" => 539,
                
                "region_id" => 1,
                "name" => "فردة",
                
            ),
            array(
                "id" => 540,
                
                "region_id" => 1,
                "name" => "مويسل",
                
            ),
            array(
                "id" => 541,
                
                "region_id" => 1,
                "name" => "الشاة",
                
            ),
            array(
                "id" => 542,
                
                "region_id" => 1,
                "name" => "السر",
                
            ),
            array(
                "id" => 543,
                
                "region_id" => 1,
                "name" => "مشرف",
                
            ),
            array(
                "id" => 544,
                
                "region_id" => 1,
                "name" => "بدائع سويقة",
                
            ),
            array(
                "id" => 545,
                
                "region_id" => 1,
                "name" => "الصلبية",
                
            ),
            array(
                "id" => 546,
                
                "region_id" => 1,
                "name" => "حدة (مشرفة]",
                
            ),
            array(
                "id" => 547,
                
                "region_id" => 1,
                "name" => "مزارع الروضة",
                
            ),
            array(
                "id" => 548,
                
                "region_id" => 4,
                "name" => "هرمولة",
                
            ),
            array(
                "id" => 549,
                
                "region_id" => 4,
                "name" => "فيضة ابان الاحمر",
                
            ),
            array(
                "id" => 550,
                
                "region_id" => 4,
                "name" => "الدارة",
                
            ),
            array(
                "id" => 551,
                
                "region_id" => 1,
                "name" => "رغلة",
                
            ),
            array(
                "id" => 552,
                
                "region_id" => 1,
                "name" => "ضبة",
                
            ),
            array(
                "id" => 553,
                
                "region_id" => 1,
                "name" => "العطاوي",
                
            ),
            array(
                "id" => 554,
                
                "region_id" => 1,
                "name" => "الحفائر",
                
            ),
            array(
                "id" => 555,
                
                "region_id" => 1,
                "name" => "مزارع طينان",
                
            ),
            array(
                "id" => 556,
                
                "region_id" => 1,
                "name" => "قويعان",
                
            ),
            array(
                "id" => 557,
                
                "region_id" => 1,
                "name" => "الحنابج",
                
            ),
            array(
                "id" => 558,
                
                "region_id" => 1,
                "name" => "الشفلحية",
                
            ),
            array(
                "id" => 559,
                
                "region_id" => 1,
                "name" => "روضة وثيلان",
                
            ),
            array(
                "id" => 560,
                
                "region_id" => 1,
                "name" => "ابو ركب",
                
            ),
            array(
                "id" => 561,
                
                "region_id" => 1,
                "name" => "الخالدية",
                
            ),
            array(
                "id" => 562,
                
                "region_id" => 1,
                "name" => "الحفنة",
                
            ),
            array(
                "id" => 563,
                
                "region_id" => 1,
                "name" => "أبو عرينة",
                
            ),
            array(
                "id" => 564,
                
                "region_id" => 1,
                "name" => "بحار الجديد",
                
            ),
            array(
                "id" => 565,
                
                "region_id" => 1,
                "name" => "حميان",
                
            ),
            array(
                "id" => 566,
                
                "region_id" => 6,
                "name" => "الجربوعية",
                
            ),
            array(
                "id" => 567,
                
                "region_id" => 1,
                "name" => "العقلة",
                
            ),
            array(
                "id" => 568,
                
                "region_id" => 1,
                "name" => "نميلين",
                
            ),
            array(
                "id" => 569,
                
                "region_id" => 1,
                "name" => "الدهاسية",
                
            ),
            array(
                "id" => 570,
                
                "region_id" => 1,
                "name" => "المصلوم",
                
            ),
            array(
                "id" => 571,
                
                "region_id" => 1,
                "name" => "سعدة",
                
            ),
            array(
                "id" => 572,
                
                "region_id" => 1,
                "name" => "السنارية",
                
            ),
            array(
                "id" => 573,
                
                "region_id" => 1,
                "name" => "الديرية",
                
            ),
            array(
                "id" => 574,
                
                "region_id" => 1,
                "name" => "المغزل",
                
            ),
            array(
                "id" => 575,
                
                "region_id" => 1,
                "name" => "جوباح",
                
            ),
            array(
                "id" => 576,
                
                "region_id" => 1,
                "name" => "وثيلان",
                
            ),
            array(
                "id" => 577,
                
                "region_id" => 1,
                "name" => "عين الصوينع",
                
            ),
            array(
                "id" => 578,
                
                "region_id" => 1,
                "name" => "الأرطاوي",
                
            ),
            array(
                "id" => 579,
                
                "region_id" => 1,
                "name" => "الثندوة",
                
            ),
            array(
                "id" => 580,
                
                "region_id" => 1,
                "name" => "أبو جلال",
                
            ),
            array(
                "id" => 581,
                
                "region_id" => 1,
                "name" => "جنوب البرود",
                
            ),
            array(
                "id" => 582,
                
                "region_id" => 1,
                "name" => "غرب البرود",
                
            ),
            array(
                "id" => 583,
                
                "region_id" => 1,
                "name" => "الريشية",
                
            ),
            array(
                "id" => 584,
                
                "region_id" => 1,
                "name" => "عبلة الرفايع",
                
            ),
            array(
                "id" => 585,
                
                "region_id" => 1,
                "name" => "مزرعة البيضة",
                
            ),
            array(
                "id" => 586,
                
                "region_id" => 1,
                "name" => "السليسية",
                
            ),
            array(
                "id" => 587,
                
                "region_id" => 1,
                "name" => "مزرعة سليسان",
                
            ),
            array(
                "id" => 588,
                
                "region_id" => 1,
                "name" => "العويجاء",
                
            ),
            array(
                "id" => 589,
                
                "region_id" => 1,
                "name" => "بدائع الهمجة",
                
            ),
            array(
                "id" => 590,
                
                "region_id" => 1,
                "name" => "فيضة القوازين",
                
            ),
            array(
                "id" => 591,
                
                "region_id" => 1,
                "name" => "مزارع مصيقرة",
                
            ),
            array(
                "id" => 592,
                
                "region_id" => 1,
                "name" => "الفيحاء",
                
            ),
            array(
                "id" => 593,
                
                "region_id" => 1,
                "name" => "الدسمة",
                
            ),
            array(
                "id" => 594,
                
                "region_id" => 1,
                "name" => "صفاقة",
                
            ),
            array(
                "id" => 595,
                
                "region_id" => 1,
                "name" => "قبيعة",
                
            ),
            array(
                "id" => 596,
                
                "region_id" => 1,
                "name" => "الشبرمية",
                
            ),
            array(
                "id" => 597,
                
                "region_id" => 1,
                "name" => "كويكبة",
                
            ),
            array(
                "id" => 598,
                
                "region_id" => 8,
                "name" => "الرعيلة",
                
            ),
            array(
                "id" => 599,
                
                "region_id" => 1,
                "name" => "الرقيبة",
                
            ),
            array(
                "id" => 600,
                
                "region_id" => 1,
                "name" => "بدع الصعكي",
                
            ),
            array(
                "id" => 601,
                
                "region_id" => 1,
                "name" => "سلطانة",
                
            ),
            array(
                "id" => 602,
                
                "region_id" => 1,
                "name" => "عبلة",
                
            ),
            array(
                "id" => 603,
                
                "region_id" => 1,
                "name" => "الملينية",
                
            ),
            array(
                "id" => 604,
                
                "region_id" => 1,
                "name" => "البديعة",
                
            ),
            array(
                "id" => 605,
                
                "region_id" => 1,
                "name" => "روضة جهام",
                
            ),
            array(
                "id" => 606,
                
                "region_id" => 1,
                "name" => "مزارع الجديدة",
                
            ),
            array(
                "id" => 607,
                
                "region_id" => 1,
                "name" => "منيفة المغايرة",
                
            ),
            array(
                "id" => 608,
                
                "region_id" => 1,
                "name" => "الرمحية",
                
            ),
            array(
                "id" => 609,
                
                "region_id" => 1,
                "name" => "حسو الحيد",
                
            ),
            array(
                "id" => 610,
                
                "region_id" => 1,
                "name" => "الدارة",
                
            ),
            array(
                "id" => 611,
                
                "region_id" => 1,
                "name" => "الدوادمي",
                
            ),
            array(
                "id" => 612,
                
                "region_id" => 1,
                "name" => "الدمثي",
                
            ),
            array(
                "id" => 613,
                
                "region_id" => 1,
                "name" => "أوضاخ",
                
            ),
            array(
                "id" => 614,
                
                "region_id" => 1,
                "name" => "كبشان",
                
            ),
            array(
                "id" => 615,
                
                "region_id" => 1,
                "name" => "حديجة",
                
            ),
            array(
                "id" => 616,
                
                "region_id" => 1,
                "name" => "العوشزية",
                
            ),
            array(
                "id" => 617,
                
                "region_id" => 1,
                "name" => "الجمش",
                
            ),
            array(
                "id" => 618,
                
                "region_id" => 1,
                "name" => "نجخ",
                
            ),
            array(
                "id" => 619,
                
                "region_id" => 1,
                "name" => "جريسة",
                
            ),
            array(
                "id" => 620,
                
                "region_id" => 1,
                "name" => "ام العثاكل",
                
            ),
            array(
                "id" => 621,
                
                "region_id" => 1,
                "name" => "عرجاء",
                
            ),
            array(
                "id" => 622,
                
                "region_id" => 1,
                "name" => "ساجر",
                
            ),
            array(
                "id" => 623,
                
                "region_id" => 1,
                "name" => "نفي",
                
            ),
            array(
                "id" => 624,
                
                "region_id" => 1,
                "name" => "مصدة",
                
            ),
            array(
                "id" => 625,
                
                "region_id" => 1,
                "name" => "الخفيفية",
                
            ),
            array(
                "id" => 626,
                
                "region_id" => 1,
                "name" => "عسيلة الوسطي",
                
            ),
            array(
                "id" => 627,
                
                "region_id" => 1,
                "name" => "أرطاوي الرقاص",
                
            ),
            array(
                "id" => 628,
                
                "region_id" => 1,
                "name" => "عشيران",
                
            ),
            array(
                "id" => 629,
                
                "region_id" => 1,
                "name" => "مزرعة الخفيسة",
                
            ),
            array(
                "id" => 630,
                
                "region_id" => 1,
                "name" => "عين القنور",
                
            ),
            array(
                "id" => 631,
                
                "region_id" => 1,
                "name" => "التسرير",
                
            ),
            array(
                "id" => 632,
                
                "region_id" => 1,
                "name" => "الاثلة",
                
            ),
            array(
                "id" => 633,
                
                "region_id" => 1,
                "name" => "عريفيجان",
                
            ),
            array(
                "id" => 634,
                
                "region_id" => 1,
                "name" => "السكران",
                
            ),
            array(
                "id" => 635,
                
                "region_id" => 1,
                "name" => "جفن",
                
            ),
            array(
                "id" => 636,
                
                "region_id" => 1,
                "name" => "البرود",
                
            ),
            array(
                "id" => 637,
                
                "region_id" => 1,
                "name" => "جفنا",
                
            ),
            array(
                "id" => 638,
                
                "region_id" => 1,
                "name" => "الصالحية (العرضان]",
                
            ),
            array(
                "id" => 639,
                
                "region_id" => 1,
                "name" => "العاذرية",
                
            ),
            array(
                "id" => 640,
                
                "region_id" => 1,
                "name" => "البجادية",
                
            ),
            array(
                "id" => 641,
                
                "region_id" => 1,
                "name" => "جهام",
                
            ),
            array(
                "id" => 642,
                
                "region_id" => 1,
                "name" => "الحزيمية",
                
            ),
            array(
                "id" => 643,
                
                "region_id" => 1,
                "name" => "خف",
                
            ),
            array(
                "id" => 644,
                
                "region_id" => 1,
                "name" => "المحمدية",
                
            ),
            array(
                "id" => 645,
                
                "region_id" => 1,
                "name" => "ماسل",
                
            ),
            array(
                "id" => 646,
                
                "region_id" => 1,
                "name" => "القاعية",
                
            ),
            array(
                "id" => 647,
                
                "region_id" => 1,
                "name" => "منيفة",
                
            ),
            array(
                "id" => 648,
                
                "region_id" => 1,
                "name" => "رضوى",
                
            ),
            array(
                "id" => 649,
                
                "region_id" => 1,
                "name" => "ارطاوي حليت",
                
            ),
            array(
                "id" => 650,
                
                "region_id" => 1,
                "name" => "عواضة",
                
            ),
            array(
                "id" => 651,
                
                "region_id" => 1,
                "name" => "شرارة",
                
            ),
            array(
                "id" => 652,
                
                "region_id" => 1,
                "name" => "صقرة",
                
            ),
            array(
                "id" => 653,
                
                "region_id" => 1,
                "name" => "العقيشية",
                
            ),
            array(
                "id" => 654,
                
                "region_id" => 1,
                "name" => "القرين",
                
            ),
            array(
                "id" => 655,
                
                "region_id" => 1,
                "name" => "عقلة الغويري",
                
            ),
            array(
                "id" => 656,
                
                "region_id" => 1,
                "name" => "ام زموع",
                
            ),
            array(
                "id" => 657,
                
                "region_id" => 1,
                "name" => "عين البراحة",
                
            ),
            array(
                "id" => 658,
                
                "region_id" => 1,
                "name" => "مغيراء",
                
            ),
            array(
                "id" => 659,
                
                "region_id" => 1,
                "name" => "الضحوي",
                
            ),
            array(
                "id" => 660,
                
                "region_id" => 1,
                "name" => "المغيب",
                
            ),
            array(
                "id" => 661,
                
                "region_id" => 1,
                "name" => "فيضة المفص",
                
            ),
            array(
                "id" => 662,
                
                "region_id" => 1,
                "name" => "عريدة",
                
            ),
            array(
                "id" => 663,
                
                "region_id" => 1,
                "name" => "الشعراء",
                
            ),
            array(
                "id" => 664,
                
                "region_id" => 1,
                "name" => "العازمية",
                
            ),
            array(
                "id" => 665,
                
                "region_id" => 1,
                "name" => "المحوي",
                
            ),
            array(
                "id" => 666,
                
                "region_id" => 1,
                "name" => "المدرع",
                
            ),
            array(
                "id" => 667,
                
                "region_id" => 1,
                "name" => "سرورة",
                
            ),
            array(
                "id" => 668,
                
                "region_id" => 1,
                "name" => "عصماء",
                
            ),
            array(
                "id" => 669,
                
                "region_id" => 1,
                "name" => "ام طليحة",
                
            ),
            array(
                "id" => 670,
                
                "region_id" => 1,
                "name" => "مشرفة نفي",
                
            ),
            array(
                "id" => 671,
                
                "region_id" => 1,
                "name" => "مساوي",
                
            ),
            array(
                "id" => 672,
                
                "region_id" => 1,
                "name" => "النقعة",
                
            ),
            array(
                "id" => 673,
                
                "region_id" => 1,
                "name" => "افقرا",
                
            ),
            array(
                "id" => 674,
                
                "region_id" => 1,
                "name" => "الفقارة",
                
            ),
            array(
                "id" => 675,
                
                "region_id" => 1,
                "name" => "الودي",
                
            ),
            array(
                "id" => 676,
                
                "region_id" => 1,
                "name" => "الخبة",
                
            ),
            array(
                "id" => 677,
                
                "region_id" => 1,
                "name" => "النبوان",
                
            ),
            array(
                "id" => 678,
                
                "region_id" => 1,
                "name" => "الرديفة",
                
            ),
            array(
                "id" => 679,
                
                "region_id" => 1,
                "name" => "الرشاوية",
                
            ),
            array(
                "id" => 680,
                
                "region_id" => 1,
                "name" => "مطربة",
                
            ),
            array(
                "id" => 681,
                
                "region_id" => 1,
                "name" => "المستجدة",
                
            ),
            array(
                "id" => 682,
                
                "region_id" => 1,
                "name" => "العامرية",
                
            ),
            array(
                "id" => 683,
                
                "region_id" => 1,
                "name" => "الحازمية (الرفيعة]",
                
            ),
            array(
                "id" => 684,
                
                "region_id" => 1,
                "name" => "الظلماوي",
                
            ),
            array(
                "id" => 685,
                
                "region_id" => 1,
                "name" => "شبيرمة",
                
            ),
            array(
                "id" => 686,
                
                "region_id" => 1,
                "name" => "عصام",
                
            ),
            array(
                "id" => 687,
                
                "region_id" => 1,
                "name" => "عبادة",
                
            ),
            array(
                "id" => 688,
                
                "region_id" => 1,
                "name" => "العبل",
                
            ),
            array(
                "id" => 689,
                
                "region_id" => 1,
                "name" => "ارطاوي الحماميد",
                
            ),
            array(
                "id" => 690,
                
                "region_id" => 1,
                "name" => "بدائع ابن نجم",
                
            ),
            array(
                "id" => 691,
                
                "region_id" => 3,
                "name" => "المرية",
                
            ),
            array(
                "id" => 692,
                
                "region_id" => 3,
                "name" => "الشقران",
                
            ),
            array(
                "id" => 693,
                
                "region_id" => 3,
                "name" => "الكريزية",
                
            ),
            array(
                "id" => 694,
                
                "region_id" => 3,
                "name" => "ذارة",
                
            ),
            array(
                "id" => 695,
                
                "region_id" => 3,
                "name" => "قصيباء",
                
            ),
            array(
                "id" => 696,
                
                "region_id" => 3,
                "name" => "رحبة علوش",
                
            ),
            array(
                "id" => 697,
                
                "region_id" => 3,
                "name" => "المقرن",
                
            ),
            array(
                "id" => 698,
                
                "region_id" => 3,
                "name" => "الرفائع",
                
            ),
            array(
                "id" => 699,
                
                "region_id" => 3,
                "name" => "صبحا",
                
            ),
            array(
                "id" => 700,
                
                "region_id" => 3,
                "name" => "حزرة",
                
            ),
            array(
                "id" => 701,
                
                "region_id" => 3,
                "name" => "غراب",
                
            ),
            array(
                "id" => 702,
                
                "region_id" => 3,
                "name" => "الحجرية",
                
            ),
            array(
                "id" => 703,
                
                "region_id" => 3,
                "name" => "أبو مغير",
                
            ),
            array(
                "id" => 704,
                
                "region_id" => 3,
                "name" => "العد",
                
            ),
            array(
                "id" => 705,
                
                "region_id" => 3,
                "name" => "الربثة",
                
            ),
            array(
                "id" => 706,
                
                "region_id" => 3,
                "name" => "النفازي",
                
            ),
            array(
                "id" => 707,
                
                "region_id" => 3,
                "name" => "الحناكية",
                
            ),
            array(
                "id" => 708,
                
                "region_id" => 3,
                "name" => "المحفر",
                
            ),
            array(
                "id" => 709,
                
                "region_id" => 3,
                "name" => "النخيل",
                
            ),
            array(
                "id" => 710,
                
                "region_id" => 3,
                "name" => "الصمد",
                
            ),
            array(
                "id" => 711,
                
                "region_id" => 3,
                "name" => "الضميرية",
                
            ),
            array(
                "id" => 712,
                
                "region_id" => 3,
                "name" => "المحامة",
                
            ),
            array(
                "id" => 713,
                
                "region_id" => 3,
                "name" => "الحسو",
                
            ),
            array(
                "id" => 714,
                
                "region_id" => 3,
                "name" => "الهميج",
                
            ),
            array(
                "id" => 715,
                
                "region_id" => 3,
                "name" => "صخيبرة",
                
            ),
            array(
                "id" => 716,
                
                "region_id" => 3,
                "name" => "هدبان",
                
            ),
            array(
                "id" => 717,
                
                "region_id" => 3,
                "name" => "بلغة",
                
            ),
            array(
                "id" => 718,
                
                "region_id" => 3,
                "name" => "الماوية",
                
            ),
            array(
                "id" => 719,
                
                "region_id" => 3,
                "name" => "قصيرة",
                
            ),
            array(
                "id" => 720,
                
                "region_id" => 3,
                "name" => "العوشزي",
                
            ),
            array(
                "id" => 721,
                
                "region_id" => 3,
                "name" => "عرجاء",
                
            ),
            array(
                "id" => 722,
                
                "region_id" => 3,
                "name" => "طلال",
                
            ),
            array(
                "id" => 723,
                
                "region_id" => 1,
                "name" => "الطوقي",
                
            ),
            array(
                "id" => 724,
                
                "region_id" => 1,
                "name" => "حريملاء",
                
            ),
            array(
                "id" => 725,
                
                "region_id" => 1,
                "name" => "ملهم",
                
            ),
            array(
                "id" => 726,
                
                "region_id" => 1,
                "name" => "سدوس",
                
            ),
            array(
                "id" => 727,
                
                "region_id" => 1,
                "name" => "حزوى",
                
            ),
            array(
                "id" => 728,
                
                "region_id" => 1,
                "name" => "دقلة",
                
            ),
            array(
                "id" => 729,
                
                "region_id" => 1,
                "name" => "حليفة",
                
            ),
            array(
                "id" => 730,
                
                "region_id" => 1,
                "name" => "صلبوخ",
                
            ),
            array(
                "id" => 731,
                
                "region_id" => 1,
                "name" => "العويند",
                
            ),
            array(
                "id" => 732,
                
                "region_id" => 1,
                "name" => "البويب",
                
            ),
            array(
                "id" => 733,
                
                "region_id" => 7,
                "name" => "عيينة",
                
            ),
            array(
                "id" => 734,
                
                "region_id" => 1,
                "name" => "إبن غنام",
                
            ),
            array(
                "id" => 735,
                
                "region_id" => 1,
                "name" => "الغنامية",
                
            ),
            array(
                "id" => 736,
                
                "region_id" => 1,
                "name" => "العماج",
                
            ),
            array(
                "id" => 737,
                
                "region_id" => 1,
                "name" => "هيت",
                
            ),
            array(
                "id" => 738,
                
                "region_id" => 1,
                "name" => "الحائر",
                
            ),
            array(
                "id" => 739,
                
                "region_id" => 1,
                "name" => "كهف برمة",
                
            ),
            array(
                "id" => 740,
                
                "region_id" => 1,
                "name" => "بنبان",
                
            ),
            array(
                "id" => 741,
                
                "region_id" => 1,
                "name" => "الثمامة",
                
            ),
            array(
                "id" => 742,
                
                "region_id" => 1,
                "name" => "لبن",
                
            ),
            array(
                "id" => 743,
                
                "region_id" => 1,
                "name" => "العريدية",
                
            ),
            array(
                "id" => 744,
                
                "region_id" => 1,
                "name" => "العباسية",
                
            ),
            array(
                "id" => 745,
                
                "region_id" => 1,
                "name" => "أم رضمة",
                
            ),
            array(
                "id" => 746,
                
                "region_id" => 1,
                "name" => "أم سليم",
                
            ),
            array(
                "id" => 747,
                
                "region_id" => 1,
                "name" => "ثرمداء",
                
            ),
            array(
                "id" => 748,
                
                "region_id" => 1,
                "name" => "مرات",
                
            ),
            array(
                "id" => 749,
                
                "region_id" => 1,
                "name" => "أثيثية",
                
            ),
            array(
                "id" => 750,
                
                "region_id" => 1,
                "name" => "لبخة",
                
            ),
            array(
                "id" => 751,
                
                "region_id" => 1,
                "name" => "روضة الفرس",
                
            ),
            array(
                "id" => 752,
                
                "region_id" => 1,
                "name" => "ام طلحة",
                
            ),
            array(
                "id" => 753,
                
                "region_id" => 1,
                "name" => "حويتة",
                
            ),
            array(
                "id" => 754,
                
                "region_id" => 1,
                "name" => "الطويلة",
                
            ),
            array(
                "id" => 755,
                
                "region_id" => 1,
                "name" => "أوبير",
                
            ),
            array(
                "id" => 756,
                
                "region_id" => 1,
                "name" => "الدرعية",
                
            ),
            array(
                "id" => 757,
                
                "region_id" => 1,
                "name" => "عرقة",
                
            ),
            array(
                "id" => 758,
                
                "region_id" => 1,
                "name" => "العيينة",
                
            ),
            array(
                "id" => 759,
                
                "region_id" => 1,
                "name" => "الوصيل",
                
            ),
            array(
                "id" => 760,
                
                "region_id" => 1,
                "name" => "أبا الكباش",
                
            ),
            array(
                "id" => 761,
                
                "region_id" => 1,
                "name" => "الجبيلة",
                
            ),
            array(
                "id" => 762,
                
                "region_id" => 1,
                "name" => "العمارية",
                
            ),
            array(
                "id" => 763,
                
                "region_id" => 1,
                "name" => "بوضة",
                
            ),
            array(
                "id" => 764,
                
                "region_id" => 1,
                "name" => "قصر القرينة",
                
            ),
            array(
                "id" => 765,
                
                "region_id" => 1,
                "name" => "قصر فيهق",
                
            ),
            array(
                "id" => 766,
                
                "region_id" => 1,
                "name" => "ضرما",
                
            ),
            array(
                "id" => 767,
                
                "region_id" => 1,
                "name" => "قصور المقبل",
                
            ),
            array(
                "id" => 768,
                
                "region_id" => 1,
                "name" => "الغطغط",
                
            ),
            array(
                "id" => 769,
                
                "region_id" => 1,
                "name" => "قصر ابن شهيل",
                
            ),
            array(
                "id" => 770,
                
                "region_id" => 1,
                "name" => "المغرفية",
                
            ),
            array(
                "id" => 771,
                
                "region_id" => 1,
                "name" => "جو",
                
            ),
            array(
                "id" => 772,
                
                "region_id" => 1,
                "name" => "الغزيز",
                
            ),
            array(
                "id" => 773,
                
                "region_id" => 1,
                "name" => "الثمامي",
                
            ),
            array(
                "id" => 774,
                
                "region_id" => 1,
                "name" => "وعلة",
                
            ),
            array(
                "id" => 775,
                
                "region_id" => 1,
                "name" => "الشامانية",
                
            ),
            array(
                "id" => 776,
                
                "region_id" => 1,
                "name" => "القصورية",
                
            ),
            array(
                "id" => 777,
                
                "region_id" => 1,
                "name" => "مزلة",
                
            ),
            array(
                "id" => 778,
                
                "region_id" => 1,
                "name" => "عصيلة",
                
            ),
            array(
                "id" => 779,
                
                "region_id" => 1,
                "name" => "الشواة",
                
            ),
            array(
                "id" => 780,
                
                "region_id" => 1,
                "name" => "عليان",
                
            ),
            array(
                "id" => 781,
                
                "region_id" => 1,
                "name" => "عيدان",
                
            ),
            array(
                "id" => 782,
                
                "region_id" => 1,
                "name" => "سيح الدبول",
                
            ),
            array(
                "id" => 783,
                
                "region_id" => 1,
                "name" => "الهمجة",
                
            ),
            array(
                "id" => 784,
                
                "region_id" => 4,
                "name" => "ابو سديرة",
                
            ),
            array(
                "id" => 785,
                
                "region_id" => 1,
                "name" => "الكدرة",
                
            ),
            array(
                "id" => 786,
                
                "region_id" => 1,
                "name" => "الخيس",
                
            ),
            array(
                "id" => 787,
                
                "region_id" => 1,
                "name" => "الدويرة",
                
            ),
            array(
                "id" => 788,
                
                "region_id" => 1,
                "name" => "أبو مروة",
                
            ),
            array(
                "id" => 789,
                
                "region_id" => 1,
                "name" => "سماح",
                
            ),
            array(
                "id" => 790,
                
                "region_id" => 1,
                "name" => "القرنة",
                
            ),
            array(
                "id" => 791,
                
                "region_id" => 1,
                "name" => "داحس",
                
            ),
            array(
                "id" => 792,
                
                "region_id" => 1,
                "name" => "دسمان",
                
            ),
            array(
                "id" => 793,
                
                "region_id" => 1,
                "name" => "العويسية",
                
            ),
            array(
                "id" => 794,
                
                "region_id" => 1,
                "name" => "العلياء",
                
            ),
            array(
                "id" => 795,
                
                "region_id" => 1,
                "name" => "مزرعة مزعلة",
                
            ),
            array(
                "id" => 796,
                
                "region_id" => 1,
                "name" => "القوسة",
                
            ),
            array(
                "id" => 797,
                
                "region_id" => 1,
                "name" => "الروغ",
                
            ),
            array(
                "id" => 798,
                
                "region_id" => 1,
                "name" => "البعيثية",
                
            ),
            array(
                "id" => 799,
                
                "region_id" => 1,
                "name" => "الشتلانية",
                
            ),
            array(
                "id" => 800,
                
                "region_id" => 1,
                "name" => "جدالة",
                
            ),
            array(
                "id" => 801,
                
                "region_id" => 1,
                "name" => "قفرة",
                
            ),
            array(
                "id" => 802,
                
                "region_id" => 1,
                "name" => "أجزالا",
                
            ),
            array(
                "id" => 803,
                
                "region_id" => 1,
                "name" => "الجفارة",
                
            ),
            array(
                "id" => 804,
                
                "region_id" => 1,
                "name" => "غودة",
                
            ),
            array(
                "id" => 805,
                
                "region_id" => 1,
                "name" => "القويعية",
                
            ),
            array(
                "id" => 806,
                
                "region_id" => 1,
                "name" => "حلبان",
                
            ),
            array(
                "id" => 807,
                
                "region_id" => 1,
                "name" => "سنام",
                
            ),
            array(
                "id" => 808,
                
                "region_id" => 1,
                "name" => "الرجع",
                
            ),
            array(
                "id" => 809,
                
                "region_id" => 1,
                "name" => "طحي",
                
            ),
            array(
                "id" => 810,
                
                "region_id" => 1,
                "name" => "الرويضة",
                
            ),
            array(
                "id" => 811,
                
                "region_id" => 1,
                "name" => "الخنيقية",
                
            ),
            array(
                "id" => 812,
                
                "region_id" => 1,
                "name" => "المثناة",
                
            ),
            array(
                "id" => 813,
                
                "region_id" => 1,
                "name" => "الجلة",
                
            ),
            array(
                "id" => 814,
                
                "region_id" => 1,
                "name" => "الربواء",
                
            ),
            array(
                "id" => 815,
                
                "region_id" => 1,
                "name" => "لجعة",
                
            ),
            array(
                "id" => 816,
                
                "region_id" => 1,
                "name" => "نخيلان",
                
            ),
            array(
                "id" => 817,
                
                "region_id" => 1,
                "name" => "عنان",
                
            ),
            array(
                "id" => 818,
                
                "region_id" => 1,
                "name" => "صبحاء",
                
            ),
            array(
                "id" => 819,
                
                "region_id" => 2,
                "name" => "ترعة",
                
            ),
            array(
                "id" => 820,
                
                "region_id" => 2,
                "name" => "ظلم",
                
            ),
            array(
                "id" => 821,
                
                "region_id" => 2,
                "name" => "الخفاشة",
                
            ),
            array(
                "id" => 822,
                
                "region_id" => 2,
                "name" => "براش",
                
            ),
            array(
                "id" => 823,
                
                "region_id" => 2,
                "name" => "الشريف",
                
            ),
            array(
                "id" => 824,
                
                "region_id" => 1,
                "name" => "الجلة وتبراك",
                
            ),
            array(
                "id" => 825,
                
                "region_id" => 2,
                "name" => "الفرع",
                
            ),
            array(
                "id" => 826,
                
                "region_id" => 2,
                "name" => "حرجل",
                
            ),
            array(
                "id" => 827,
                
                "region_id" => 2,
                "name" => "هديل",
                
            ),
            array(
                "id" => 828,
                
                "region_id" => 2,
                "name" => "ام الحصن",
                
            ),
            array(
                "id" => 829,
                
                "region_id" => 2,
                "name" => "اللحيان",
                
            ),
            array(
                "id" => 830,
                
                "region_id" => 2,
                "name" => "الاسراب",
                
            ),
            array(
                "id" => 831,
                
                "region_id" => 2,
                "name" => "العثرية",
                
            ),
            array(
                "id" => 832,
                
                "region_id" => 4,
                "name" => "غضي",
                
            ),
            array(
                "id" => 833,
                
                "region_id" => 4,
                "name" => "الحيطان",
                
            ),
            array(
                "id" => 834,
                
                "region_id" => 4,
                "name" => "الصريف",
                
            ),
            array(
                "id" => 835,
                
                "region_id" => 4,
                "name" => "الصعيبية",
                
            ),
            array(
                "id" => 836,
                
                "region_id" => 4,
                "name" => "نقرة العمارين",
                
            ),
            array(
                "id" => 837,
                
                "region_id" => 4,
                "name" => "رغيلة",
                
            ),
            array(
                "id" => 838,
                
                "region_id" => 4,
                "name" => "مزارع الدغمانيات",
                
            ),
            array(
                "id" => 839,
                
                "region_id" => 4,
                "name" => "مزارع الراشد",
                
            ),
            array(
                "id" => 840,
                
                "region_id" => 4,
                "name" => "أبلق",
                
            ),
            array(
                "id" => 841,
                
                "region_id" => 4,
                "name" => "ضراس",
                
            ),
            array(
                "id" => 842,
                
                "region_id" => 4,
                "name" => "أم مكرية",
                
            ),
            array(
                "id" => 843,
                
                "region_id" => 4,
                "name" => "الخناصة",
                
            ),
            array(
                "id" => 844,
                
                "region_id" => 4,
                "name" => "مزارع الصقيريات",
                
            ),
            array(
                "id" => 845,
                
                "region_id" => 4,
                "name" => "رياض الرماح",
                
            ),
            array(
                "id" => 846,
                
                "region_id" => 4,
                "name" => "روض ابن كميان",
                
            ),
            array(
                "id" => 847,
                
                "region_id" => 4,
                "name" => "القرو",
                
            ),
            array(
                "id" => 848,
                
                "region_id" => 4,
                "name" => "الحديدية",
                
            ),
            array(
                "id" => 849,
                
                "region_id" => 4,
                "name" => "البعيثة",
                
            ),
            array(
                "id" => 850,
                
                "region_id" => 4,
                "name" => "الصغيرية",
                
            ),
            array(
                "id" => 851,
                
                "region_id" => 4,
                "name" => "حويلان",
                
            ),
            array(
                "id" => 852,
                
                "region_id" => 4,
                "name" => "الصباخ",
                
            ),
            array(
                "id" => 853,
                
                "region_id" => 4,
                "name" => "اللسيب",
                
            ),
            array(
                "id" => 854,
                
                "region_id" => 4,
                "name" => "الدعيسة",
                
            ),
            array(
                "id" => 855,
                
                "region_id" => 4,
                "name" => "العاقول",
                
            ),
            array(
                "id" => 856,
                
                "region_id" => 4,
                "name" => "البصر",
                
            ),
            array(
                "id" => 857,
                
                "region_id" => 13,
                "name" => "المريشدية",
                
            ),
            array(
                "id" => 858,
                
                "region_id" => 4,
                "name" => "الطرفية",
                
            ),
            array(
                "id" => 859,
                
                "region_id" => 4,
                "name" => "القرعاء",
                
            ),
            array(
                "id" => 860,
                
                "region_id" => 4,
                "name" => "المليداء",
                
            ),
            array(
                "id" => 861,
                
                "region_id" => 4,
                "name" => "البطين",
                
            ),
            array(
                "id" => 862,
                
                "region_id" => 4,
                "name" => "محير الترمس",
                
            ),
            array(
                "id" => 863,
                
                "region_id" => 4,
                "name" => "شري",
                
            ),
            array(
                "id" => 864,
                
                "region_id" => 4,
                "name" => "الشقة العليا",
                
            ),
            array(
                "id" => 865,
                
                "region_id" => 4,
                "name" => "الشقة السفلى",
                
            ),
            array(
                "id" => 866,
                
                "region_id" => 4,
                "name" => "الزبيرة",
                
            ),
            array(
                "id" => 867,
                
                "region_id" => 4,
                "name" => "قصيباء",
                
            ),
            array(
                "id" => 868,
                
                "region_id" => 4,
                "name" => "القوارة",
                
            ),
            array(
                "id" => 869,
                
                "region_id" => 4,
                "name" => "الهدية",
                
            ),
            array(
                "id" => 870,
                
                "region_id" => 4,
                "name" => "الغماس",
                
            ),
            array(
                "id" => 871,
                
                "region_id" => 4,
                "name" => "مدرج",
                
            ),
            array(
                "id" => 872,
                
                "region_id" => 4,
                "name" => "قبة",
                
            ),
            array(
                "id" => 873,
                
                "region_id" => 1,
                "name" => "أم سريحة",
                
            ),
            array(
                "id" => 874,
                
                "region_id" => 1,
                "name" => "الخروعية",
                
            ),
            array(
                "id" => 875,
                
                "region_id" => 1,
                "name" => "المجذمية",
                
            ),
            array(
                "id" => 876,
                
                "region_id" => 1,
                "name" => "الحصاة",
                
            ),
            array(
                "id" => 877,
                
                "region_id" => 1,
                "name" => "الحرملية",
                
            ),
            array(
                "id" => 878,
                
                "region_id" => 1,
                "name" => "خبراء الثوير",
                
            ),
            array(
                "id" => 879,
                
                "region_id" => 1,
                "name" => "الرين",
                
            ),
            array(
                "id" => 880,
                
                "region_id" => 1,
                "name" => "محيرقة",
                
            ),
            array(
                "id" => 881,
                
                "region_id" => 1,
                "name" => "مرقان",
                
            ),
            array(
                "id" => 882,
                
                "region_id" => 1,
                "name" => "ام نخيلة",
                
            ),
            array(
                "id" => 883,
                
                "region_id" => 1,
                "name" => "ام الدبي",
                
            ),
            array(
                "id" => 884,
                
                "region_id" => 1,
                "name" => "خبراء حلوة",
                
            ),
            array(
                "id" => 885,
                
                "region_id" => 1,
                "name" => "حجيلا",
                
            ),
            array(
                "id" => 886,
                
                "region_id" => 1,
                "name" => "الفويلق",
                
            ),
            array(
                "id" => 887,
                
                "region_id" => 1,
                "name" => "القويع",
                
            ),
            array(
                "id" => 888,
                
                "region_id" => 1,
                "name" => "مزعل",
                
            ),
            array(
                "id" => 889,
                
                "region_id" => 1,
                "name" => "بدائع المشاعلة",
                
            ),
            array(
                "id" => 890,
                
                "region_id" => 1,
                "name" => "خبراء فاران",
                
            ),
            array(
                "id" => 891,
                
                "region_id" => 1,
                "name" => "خبيب الريم",
                
            ),
            array(
                "id" => 892,
                
                "region_id" => 1,
                "name" => "القرارة",
                
            ),
            array(
                "id" => 893,
                
                "region_id" => 1,
                "name" => "أم طليح",
                
            ),
            array(
                "id" => 894,
                
                "region_id" => 1,
                "name" => "المانعية",
                
            ),
            array(
                "id" => 895,
                
                "region_id" => 1,
                "name" => "الجديدة",
                
            ),
            array(
                "id" => 896,
                
                "region_id" => 1,
                "name" => "العدوة",
                
            ),
            array(
                "id" => 897,
                
                "region_id" => 1,
                "name" => "الذيبية",
                
            ),
            array(
                "id" => 898,
                
                "region_id" => 1,
                "name" => "الصدر",
                
            ),
            array(
                "id" => 899,
                
                "region_id" => 1,
                "name" => "ابرقية",
                
            ),
            array(
                "id" => 900,
                
                "region_id" => 1,
                "name" => "حجرفة",
                
            ),
            array(
                "id" => 901,
                
                "region_id" => 1,
                "name" => "معانيق",
                
            ),
            array(
                "id" => 902,
                
                "region_id" => 1,
                "name" => "الصيهد",
                
            ),
            array(
                "id" => 903,
                
                "region_id" => 1,
                "name" => "اللغفة",
                
            ),
            array(
                "id" => 904,
                
                "region_id" => 1,
                "name" => "الخفق الجديد",
                
            ),
            array(
                "id" => 905,
                
                "region_id" => 1,
                "name" => "ظلماء",
                
            ),
            array(
                "id" => 906,
                
                "region_id" => 1,
                "name" => "الخلائق الشرقية",
                
            ),
            array(
                "id" => 907,
                
                "region_id" => 1,
                "name" => "المزاحمية",
                
            ),
            array(
                "id" => 908,
                
                "region_id" => 1,
                "name" => "تبراك",
                
            ),
            array(
                "id" => 909,
                
                "region_id" => 1,
                "name" => "الفيضة",
                
            ),
            array(
                "id" => 910,
                
                "region_id" => 1,
                "name" => "الاوسط",
                
            ),
            array(
                "id" => 911,
                
                "region_id" => 1,
                "name" => "الحويرة",
                
            ),
            array(
                "id" => 912,
                
                "region_id" => 1,
                "name" => "خشم معضد",
                
            ),
            array(
                "id" => 913,
                
                "region_id" => 1,
                "name" => "البخرا",
                
            ),
            array(
                "id" => 914,
                
                "region_id" => 1,
                "name" => "اللغفية",
                
            ),
            array(
                "id" => 915,
                
                "region_id" => 1,
                "name" => "المسبر",
                
            ),
            array(
                "id" => 916,
                
                "region_id" => 1,
                "name" => "النظيم",
                
            ),
            array(
                "id" => 917,
                
                "region_id" => 1,
                "name" => "حفرة نساح",
                
            ),
            array(
                "id" => 918,
                
                "region_id" => 1,
                "name" => "عجاج",
                
            ),
            array(
                "id" => 919,
                
                "region_id" => 1,
                "name" => "المشاعلة",
                
            ),
            array(
                "id" => 920,
                
                "region_id" => 1,
                "name" => "قنيفذة",
                
            ),
            array(
                "id" => 921,
                
                "region_id" => 1,
                "name" => "عفرية",
                
            ),
            array(
                "id" => 922,
                
                "region_id" => 1,
                "name" => "الخلائق الغربية",
                
            ),
            array(
                "id" => 923,
                
                "region_id" => 1,
                "name" => "الجفير",
                
            ),
            array(
                "id" => 924,
                
                "region_id" => 3,
                "name" => "الأسطح",
                
            ),
            array(
                "id" => 925,
                
                "region_id" => 3,
                "name" => "الرجع",
                
            ),
            array(
                "id" => 926,
                
                "region_id" => 3,
                "name" => "دمان",
                
            ),
            array(
                "id" => 927,
                
                "region_id" => 3,
                "name" => "الغزلان",
                
            ),
            array(
                "id" => 928,
                
                "region_id" => 3,
                "name" => "الجديد",
                
            ),
            array(
                "id" => 929,
                
                "region_id" => 3,
                "name" => "وجمة",
                
            ),
            array(
                "id" => 930,
                
                "region_id" => 3,
                "name" => "عرقوص",
                
            ),
            array(
                "id" => 931,
                
                "region_id" => 3,
                "name" => "العنيق",
                
            ),
            array(
                "id" => 932,
                
                "region_id" => 3,
                "name" => "مرتجة",
                
            ),
            array(
                "id" => 933,
                
                "region_id" => 3,
                "name" => "الفقرة",
                
            ),
            array(
                "id" => 934,
                
                "region_id" => 3,
                "name" => "خلص",
                
            ),
            array(
                "id" => 935,
                
                "region_id" => 3,
                "name" => "القفاف",
                
            ),
            array(
                "id" => 936,
                
                "region_id" => 3,
                "name" => "أم البرك",
                
            ),
            array(
                "id" => 937,
                
                "region_id" => 3,
                "name" => "مريخة",
                
            ),
            array(
                "id" => 938,
                
                "region_id" => 3,
                "name" => "العبلا",
                
            ),
            array(
                "id" => 939,
                
                "region_id" => 3,
                "name" => "مرموماء",
                
            ),
            array(
                "id" => 940,
                
                "region_id" => 3,
                "name" => "قرظة",
                
            ),
            array(
                "id" => 941,
                
                "region_id" => 3,
                "name" => "أم فحي",
                
            ),
            array(
                "id" => 942,
                
                "region_id" => 3,
                "name" => "البركة",
                
            ),
            array(
                "id" => 943,
                
                "region_id" => 3,
                "name" => "الهدى",
                
            ),
            array(
                "id" => 944,
                
                "region_id" => 3,
                "name" => "الغور",
                
            ),
            array(
                "id" => 945,
                
                "region_id" => 3,
                "name" => "مثعر",
                
            ),
            array(
                "id" => 946,
                
                "region_id" => 3,
                "name" => "الحسينية",
                
            ),
            array(
                "id" => 947,
                
                "region_id" => 3,
                "name" => "السليمية",
                
            ),
            array(
                "id" => 948,
                
                "region_id" => 3,
                "name" => "أبو قرن",
                
            ),
            array(
                "id" => 949,
                
                "region_id" => 3,
                "name" => "المسجد",
                
            ),
            array(
                "id" => 950,
                
                "region_id" => 3,
                "name" => "اللهبان",
                
            ),
            array(
                "id" => 951,
                
                "region_id" => 3,
                "name" => "الجوابرة",
                
            ),
            array(
                "id" => 952,
                
                "region_id" => 3,
                "name" => "خرص",
                
            ),
            array(
                "id" => 953,
                
                "region_id" => 3,
                "name" => "عاصر",
                
            ),
            array(
                "id" => 954,
                
                "region_id" => 3,
                "name" => "الأثود",
                
            ),
            array(
                "id" => 955,
                
                "region_id" => 3,
                "name" => "ترجم",
                
            ),
            array(
                "id" => 956,
                
                "region_id" => 3,
                "name" => "كتيدة",
                
            ),
            array(
                "id" => 957,
                
                "region_id" => 3,
                "name" => "سفاء",
                
            ),
            array(
                "id" => 958,
                
                "region_id" => 3,
                "name" => "رحقان",
                
            ),
            array(
                "id" => 959,
                
                "region_id" => 3,
                "name" => "ثعيل",
                
            ),
            array(
                "id" => 960,
                
                "region_id" => 3,
                "name" => "المفرق",
                
            ),
            array(
                "id" => 961,
                
                "region_id" => 3,
                "name" => "الميث",
                
            ),
            array(
                "id" => 962,
                
                "region_id" => 3,
                "name" => "بئر الغنم",
                
            ),
            array(
                "id" => 963,
                
                "region_id" => 3,
                "name" => "المرتجة",
                
            ),
            array(
                "id" => 964,
                
                "region_id" => 3,
                "name" => "المعيزلة",
                
            ),
            array(
                "id" => 965,
                
                "region_id" => 3,
                "name" => "الحار",
                
            ),
            array(
                "id" => 966,
                
                "region_id" => 3,
                "name" => "الصديرة",
                
            ),
            array(
                "id" => 967,
                
                "region_id" => 3,
                "name" => "دريبس",
                
            ),
            array(
                "id" => 968,
                
                "region_id" => 3,
                "name" => "بدر",
                
            ),
            array(
                "id" => 969,
                
                "region_id" => 3,
                "name" => "بئر قيضي",
                
            ),
            array(
                "id" => 970,
                
                "region_id" => 3,
                "name" => "الواسطة",
                
            ),
            array(
                "id" => 971,
                
                "region_id" => 3,
                "name" => "الرايس",
                
            ),
            array(
                "id" => 972,
                
                "region_id" => 3,
                "name" => "المسيجيد",
                
            ),
            array(
                "id" => 973,
                
                "region_id" => 1,
                "name" => "العين",
                
            ),
            array(
                "id" => 974,
                
                "region_id" => 1,
                "name" => "خفس دغرة",
                
            ),
            array(
                "id" => 975,
                
                "region_id" => 1,
                "name" => "البياض",
                
            ),
            array(
                "id" => 976,
                
                "region_id" => 1,
                "name" => "الخرج",
                
            ),
            array(
                "id" => 977,
                
                "region_id" => 1,
                "name" => "اليمامة",
                
            ),
            array(
                "id" => 978,
                
                "region_id" => 1,
                "name" => "الرفاع",
                
            ),
            array(
                "id" => 979,
                
                "region_id" => 1,
                "name" => "البرة",
                
            ),
            array(
                "id" => 980,
                
                "region_id" => 1,
                "name" => "فرزان",
                
            ),
            array(
                "id" => 981,
                
                "region_id" => 1,
                "name" => "الرفيعة",
                
            ),
            array(
                "id" => 982,
                
                "region_id" => 1,
                "name" => "الرفائع",
                
            ),
            array(
                "id" => 983,
                
                "region_id" => 1,
                "name" => "العذار",
                
            ),
            array(
                "id" => 984,
                
                "region_id" => 1,
                "name" => "زميقة",
                
            ),
            array(
                "id" => 985,
                
                "region_id" => 1,
                "name" => "الحزم",
                
            ),
            array(
                "id" => 986,
                
                "region_id" => 1,
                "name" => "الهياثم",
                
            ),
            array(
                "id" => 987,
                
                "region_id" => 1,
                "name" => "البدع القديم",
                
            ),
            array(
                "id" => 988,
                
                "region_id" => 1,
                "name" => "الدلم",
                
            ),
            array(
                "id" => 989,
                
                "region_id" => 1,
                "name" => "نعجان",
                
            ),
            array(
                "id" => 990,
                
                "region_id" => 1,
                "name" => "حي القطار",
                
            ),
            array(
                "id" => 991,
                
                "region_id" => 1,
                "name" => "السلمية",
                
            ),
            array(
                "id" => 992,
                
                "region_id" => 1,
                "name" => "البدع",
                
            ),
            array(
                "id" => 993,
                
                "region_id" => 1,
                "name" => "السهباء",
                
            ),
            array(
                "id" => 994,
                
                "region_id" => 1,
                "name" => "الثليما",
                
            ),
            array(
                "id" => 995,
                
                "region_id" => 1,
                "name" => "التوضيحية",
                
            ),
            array(
                "id" => 996,
                
                "region_id" => 1,
                "name" => "المحطة",
                
            ),
            array(
                "id" => 997,
                
                "region_id" => 1,
                "name" => "الرغيب",
                
            ),
            array(
                "id" => 998,
                
                "region_id" => 1,
                "name" => "المحمدي",
                
            ),
            array(
                "id" => 999,
                
                "region_id" => 1,
                "name" => "الصحنة",
                
            ),
            array(
                "id" => 1000,
                
                "region_id" => 3,
                "name" => "الجريسية",
                
            ),
        )
    );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
