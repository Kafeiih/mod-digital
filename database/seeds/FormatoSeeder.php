<?php

use Illuminate\Database\Seeder;

class FormatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mod_digital_formato')->insert([
            'name' => "Documento PDF",
            'url' => "pdf.svg"
        ]);
        DB::table('mod_digital_formato')->insert([
            'name' => "Documento Word",
            'url' => "doc.svg"
        ]);
        DB::table('mod_digital_formato')->insert([
            'name' => "Documento Excel",
            'url' => "xls.svg"
        ]);
        DB::table('mod_digital_formato')->insert([
            'name' => "Documento PowerPoint",
            'url' => "ppt.svg"
        ]);
        DB::table('mod_digital_formato')->insert([
            'name' => "Formato Zip",
            'url' => "zip.svg"
        ]);
    }
}
