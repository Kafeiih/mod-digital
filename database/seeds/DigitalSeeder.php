<?php

use Illuminate\Database\Seeder;

class DigitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //Documentacion
        DB::table('mod_digital')->insert([
            'name' => "Manual Normas Graficas SLEP Andalién Sur V5",
            'url' => "https://drive.google.com/file/d/11Rv0JA6QYpqkVGeS7YfcBA8rfV7JshiO/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 0
        ]);
        //Graficas
        DB::table('mod_digital')->insert([
            'name' => "Bolsa de regalo",
            'url' => "https://drive.google.com/file/d/1HimMB-NVPKRvOdfER74gnKKOKj5hLZwa/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Carpeta Oficio Modelo A",
            'url' => "https://drive.google.com/file/d/1JaXRVrI8Rn2wnICPxTeOme5v0PvruT_6/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Carpeta Oficio Modelo B",
            'url' => "https://drive.google.com/file/d/1_N0ETS9-yAYNCB3GpbX8wUFJ-6-PgX8D/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Chaquetas",
            'url' => "https://drive.google.com/file/d/1wb7YOHPKmqdlyyhCOWz9QnTx1SUKLNnL/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Credencial de Identificación v2",
            'url' => "https://drive.google.com/file/d/12Jd58kCM1XU_sFE2UNAGaXNuPLvRhchl/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Folleto base",
            'url' => "https://drive.google.com/file/d/1j18U2eU8q-6W2LTy31w-zvNcIHKrvvOw/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Hoja de Cálculo",
            'url' => "https://drive.google.com/file/d/1MoZ4xckwWHYLPMfJVYrqAD4oE-uqsy-f/view?usp=sharing",
            'formato_id' => 3,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Intructivo documentos establecimientos SLEP Andalien Sur",
            'url' => "https://drive.google.com/file/d/1R-N1c_aKnvNgMSmF7h_QkSnZb9YMzJ18/view?usp=sharing",
            'formato_id' => 2,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Libreta Modelo A",
            'url' => "https://drive.google.com/file/d/1cEBlcaDbwQaZtUR7_DBTgUASLTyFv26S/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Multimarca",
            'url' => "https://drive.google.com/file/d/1hghKh6uaTIMlb5zu9Nzww6sh_n47eb9E/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Panel araña",
            'url' => "https://drive.google.com/file/d/1206uGe_PiYUce0qsy9uFkPphhUSSbX6n/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Pendones",
            'url' => "https://drive.google.com/file/d/19-7pUs2XtpEUicA5gtyLypkmdcbpgLzL/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Pie de Firma",
            'url' => "https://drive.google.com/file/d/18LiBN-erUrUOYRFguKJqg76vcKTwtfU8/view?usp=sharing",
            'formato_id' => 2,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Plantilla Andalién Sur",
            'url' => "https://drive.google.com/file/d/1C8Bew2kydIV7b1s83NPhrXPrTaK5iPzR/view?usp=sharing",
            'formato_id' => 4,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Portada de CD editable",
            'url' => "https://drive.google.com/file/d/1Lnr0wSjPUJ_l5BtroomEqcWNMte8H-go/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Sobre Modelo A y B",
            'url' => "https://drive.google.com/file/d/1X2u2vGeeT3oT9Fd3evIyJEXdqNVLDnZZ/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Tarjeta de presentación Modelo A y B",
            'url' => "https://drive.google.com/file/d/11MJqEk6kBwtbYeG0_cgEKSzcs33c3M6j/view?usp=sharing",
            'formato_id' => 1,
            'descarga' => 1
        ]);
    }
}
