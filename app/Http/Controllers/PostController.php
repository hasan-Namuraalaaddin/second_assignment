<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
class PostController extends Controller
{
    
  public function index(){

   $faker = Faker::create();
   $posts= [];

   for($i=0; $i<10;$i++)
   {
    $posts[] = [
      'id' => $i + 1,
      'title' => $faker->sentence,
      'content'=>$faker->paragraph,
    ];
   }
   return response()->json($posts);
   
  }
  public function show($id){

    $faker = Faker::create();
    $posts= [];
 
    for($i=0; $i<10;$i++)
    {
     $posts[] = [
       'id' => $i + 1,
       'title' => $faker->sentence,
       'content'=>$faker->paragraph,
     ];
    }
    return response()->json($posts[$id-1]);
    
   }
 

}
