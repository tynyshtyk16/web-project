<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        //
        DB::table('product')->insert([
            [
            "name"=>'leather tote',
            'price'=>'130$',
            'description'=>'The design, completed by the detachable leather shoulder strap, can be worn in several ways.',
            'category'=>'bag',
            'gallery'=>'https://www.prada.com/content/dam/pradanux_products/1/1BA/1BA331/ZO6F0591/1BA331_ZO6_F0591_V_OOO_SLR.png/_jcr_content/renditions/cq5dam.web.white.800.1000.webp'
            ],
            [
                "name"=>'Prada Cleo brushed leather shoulder bag',
                'price'=>'120$',
                'description'=>'The Prada Cleo bag with sophisticated allure reinterprets an iconic design of the brand from the 1990s',
                'category'=>'bag',
                'gallery'=>'https://www.prada.com/content/dam/pradanux_products/1/1BC/1BC499/ZO6F0F24/1BC499_ZO6_F0F24_V_OOO_SLF.png/_jcr_content/renditions/cq5dam.web.white.800.1000.webp'
            ],
                [
                "name"=>'Prada Galleria brushed leather bag',
                'price'=>'170$',
                'description'=>'Thanks to the removable shoulder strap and pouch, the bag can transform and adapt to different occasions.',
                'category'=>'bag',
                'gallery'=>'https://www.prada.com/content/dam/pradanux_products/1/1BA/1BA896/ZO6F0002/1BA896_ZO6_F0002_V_N8M_SLF.png/_jcr_content/renditions/cq5dam.web.white.800.1000.webp'
                ],
                [
                "name"=>'prada',
                'price'=>'100$',
                'description'=>'Small brushed leather tote ',
                'category'=>'bag',
                'gallery'=>'https://www.prada.com/content/dam/pradanux_products/1/1BA/1BA331/ZO6F0E18/1BA331_ZO6_F0E18_V_OOO_SLF.png/_jcr_content/renditions/cq5dam.web.white.800.1000.webp'
                ]
            ]);
         
        //
    }
}
