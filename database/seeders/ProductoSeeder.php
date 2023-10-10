<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            array(
                'name'=>'Hamburgesas de pollo',
                'cantidad'=>20,
                'precio'=>7.5,
                'imagen'=>'Hamburgesa Pollo.png',
                'estatus'=>true,
                'categoria_id'=>1,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Hamburgesas de Carne',
                'cantidad'=>20,
                'precio'=>45.5,
                'imagen'=>'Hamburgesa Carne.png',
                'estatus'=>false,
                'categoria_id'=>1,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Hamburgesas de Pescado',
                'cantidad'=>20,
                'precio'=>10.2,
                'imagen'=>'Hamburgesa Pescado.png',
                'estatus'=>true,
                'categoria_id'=>1,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Pizza de Peperoni',
                'cantidad'=>20,
                'precio'=>16.5,
                'estatus'=>true,
                'imagen'=>'Peperoni.png',
                'categoria_id'=>2,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Pizza de Jamon',
                'cantidad'=>20,
                'precio'=>12.5,
                'estatus'=>true,
                'imagen'=>'Jamon.png',
                'categoria_id'=>2,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Pizza de Maiz',
                'cantidad'=>20,
                'precio'=>16.9,
                'estatus'=>true,
                'imagen'=>'Maiz.png',
                'categoria_id'=>2,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

            array(
                'name'=>'Pepito de queso',
                'cantidad'=>20,
                'precio'=>12.2,
                'estatus'=>true,
                'imagen'=>'pepitodequeso.png',
                'categoria_id'=>3,
                'created_at'=>Carbon::now(),
                'update_at'=>Carbon::now(),
            ),

        ];

        DB::table('productos')->insert($data);
    }
}
