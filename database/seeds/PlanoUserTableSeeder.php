<?php

use Illuminate\Database\Seeder;

class PlanoUserTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  $users  = App\User::all();
  $planos = App\Models\Plano::all();

  $planos->each(function ($plano) use ($users) {
   $plano->users()->attach(
    $users->random(rand(1, 5))->pluck('id')->toArray()
   );
  });
 }
}
