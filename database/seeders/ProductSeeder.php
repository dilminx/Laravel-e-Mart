<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Db::table('products')->insert([
            "name" => "redmi 9",
            "price"=>"30 000 LKR",
            "category"=>"mobile",
            "description"=>"this is lates xiomi phone 4gb ram, 128gb storage",
            "image"=>"https://th.bing.com/th/id/R.a6fa054cf92859bb050f3ac609f4d138?rik=km9qfYqdZWb7AA&pid=ImgRaw&r=0"


        ]);
        Db::table('products')->insert([
            "name" => "Dell latitude 99",
            "price"=>"80 000 LKR",
            "category"=>"computers",
            "description"=>"this is lates laptop 8gb ram, 256gb storage",
            "image"=>"https://th.bing.com/th/id/OIP.h4dqsCKfV3NNdY_kZIUR8wHaHq?rs=1&pid=ImgDetMain"


        ]);
        Db::table('products')->insert([
            "name" => "ezviz indoor camera",
            "price"=>"20 000 LKR",
            "category"=>"cctv",
            "description"=>"this is lates cctv 4mp 128gb storage",
            "image"=>"https://th.bing.com/th/id/R.98583e3b91377aca9d75025207fe72c5?rik=J59kES%2bdSQzJqA&pid=ImgRaw&r=0"


        ]);
        Db::table('products')->insert([
            "name" => "oppo 7",
            "price"=>"40 000 LKR",
            "category"=>"mobile",
            "description"=>"this is lates oppo phone 4gb ram, 128gb storage",
            "image"=>"https://th.bing.com/th/id/R.8829883a576c63be780a1dcf1d46cf37?rik=jcB609OWfvzjag&pid=ImgRaw&r=0"


        ]);
        Db::table('products')->insert([
            "name" => "lenavo",
            "price"=>"120 000 LKR",
            "category"=>"laptop",
            "description"=>"this is lates laptop 4gb ram, 128gb storage",
            "image"=>"https://th.bing.com/th/id/OIP.lS1fBqoSzgsyJNESlEVhaQHaHa?w=1920&h=1920&rs=1&pid=ImgDetMain"


        ]);
        Db::table('products')->insert([
            "name" => "v380 dual lense",
            "price"=>"10 000 LKR",
            "category"=>"cctv",
            "description"=>"this is lates dual lense wifi camera",
            "image"=>"https://th.bing.com/th/id/OIP.eW6D--tGbwMKdZfRWgNnFQHaHa?rs=1&pid=ImgDetMain"


        ]);
    }
}
