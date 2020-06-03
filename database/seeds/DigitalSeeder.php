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
            'name' => "Manual Normas Graficas SLEP Andalién Sur",
            'url' => "https://drive.google.com/file/d/11Rv0JA6QYpqkVGeS7YfcBA8rfV7JshiO/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 1
        ]);
        //Graficas
        DB::table('mod_digital')->insert([
            'name' => "Bolsa de regalo",
            'url' => "https://drive.google.com/uc?id=1iucQ_R49XoQK3lsDRFp7BE0f2bVnmVP_&export=download",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Plantilla Andalién Sur",
            'url' => "https://drive.google.com/file/d/1C8Bew2kydIV7b1s83NPhrXPrTaK5iPzR/view?usp=sharing",
            'formato_id' => 4,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Carpeta Oficio Modelo A",
            'url' => "https://drive.google.com/uc?id=1_WC-CI_9wl_Arj6-FNr33J31viDHtuRa&export=download",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Hoja de Cálculo",
            'url' => "https://drive.google.com/file/d/1MoZ4xckwWHYLPMfJVYrqAD4oE-uqsy-f/view?usp=sharing",
            'formato_id' => 3,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Intructivo documentos establecimientos SLEP Andalien Sur",
            'url' => "https://drive.google.com/file/d/1R-N1c_aKnvNgMSmF7h_QkSnZb9YMzJ18/view?usp=sharing",
            'formato_id' => 2,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Carpeta Oficio Modelo B",
            'url' => "https://drive.google.com/uc?id=1TSt-s-CbBfuKcNK6Kc8mHAiPahFcX01n&export=download",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Iconos - Otros",
            'url' => "https://drive.google.com/file/d/1CcBFyE34btYGvGeg3NfvF3IkShyhMbym/view?usp=sharing",
            'formato_id' => 5,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Chaquetas",
            'url' => "https://drive.google.com/uc?id=1GVKzqs3DDWn6ZBqgusRBIGZB4a0D05yI&export=download",
            'formato_id' => 1,
            'estado' => 0
        ]);
        
        DB::table('mod_digital')->insert([
            'name' => "Credencial de Identificación",
            'url' => "https://drive.google.com/uc?id=1Xf1Awstt7-2DLerKEYSxRJQqroHZ48Hd&export=download",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Folleto base",
            'url' => "https://drive.google.com/uc?id=16XYhUP-WVEsBw7Hsnl6lHtlD5RyozwAn&export=download",
            'formato_id' => 1,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Libreta Modelo A",
            'url' => "https://drive.google.com/file/d/1cEBlcaDbwQaZtUR7_DBTgUASLTyFv26S/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 0
        ]);

        DB::table('mod_digital')->insert([
            'name' => "Marcos",
            'url' => "https://drive.google.com/file/d/1Sy5OFUjTQ1FT9pZoDkhKCexBD2EZvl_X/view?usp=sharing",
            'formato_id' => 5,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Iconos Separados",
            'url' => "https://drive.google.com/file/d/1Iq521HbEtHP0sXI7bhmRjEqw4ltDuS90/view?usp=sharing",
            'formato_id' => 5,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Franjas",
            'url' => "https://drive.google.com/file/d/1Wk-eCyCp2-U-AQOGS4Pc7fqdJLAj_ViO/view?usp=sharing",
            'formato_id' => 5,
            'estado' => 1
        ]);

        DB::table('mod_digital')->insert([
            'name' => "Multimarca",
            'url' => "https://drive.google.com/file/d/1hghKh6uaTIMlb5zu9Nzww6sh_n47eb9E/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Panel araña",
            'url' => "https://drive.google.com/file/d/1206uGe_PiYUce0qsy9uFkPphhUSSbX6n/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Pendones",
            'url' => "https://drive.google.com/file/d/19-7pUs2XtpEUicA5gtyLypkmdcbpgLzL/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Pie de Firma",
            'url' => "https://drive.google.com/file/d/18LiBN-erUrUOYRFguKJqg76vcKTwtfU8/view?usp=sharing",
            'formato_id' => 2,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Portada de CD editable",
            'url' => "https://drive.google.com/file/d/1Lnr0wSjPUJ_l5BtroomEqcWNMte8H-go/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 0
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Sobre Modelo A y B",
            'url' => "https://drive.google.com/file/d/1X2u2vGeeT3oT9Fd3evIyJEXdqNVLDnZZ/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 1
        ]);
        DB::table('mod_digital')->insert([
            'name' => "Tarjeta de presentación Modelo A y B",
            'url' => "https://drive.google.com/file/d/11MJqEk6kBwtbYeG0_cgEKSzcs33c3M6j/view?usp=sharing",
            'formato_id' => 1,
            'estado' => 0
        ]);
    }
}
