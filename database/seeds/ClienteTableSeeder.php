<?php

use Illuminate\Database\Seeder;
use MyFirstApp\Cliente;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	factory(Cliente::class, 80)->create();
    }
}
