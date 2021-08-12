<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           
            [
                'name'=>'LG mobile',
                'price'=>'$400',
                'category'=>'Mobile',
                'discription'=>'A smartphones with 4gb ram ',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.samsung.com%2Fpk%2Fsmartphones%2Fgalaxy-s21-5g%2Fbuy%2F&psig=AOvVaw1rnSCJmv-XRe4CvEn9_Y8G&ust=1628235783385000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCMCJ3JCxmfICFQAAAAAdAAAAABAD',
    
            ],
            [
                'name'=>'Iphon x',
                'price'=>'$800',
                'category'=>'Mobile',
                'discription'=>'A smartphones with 16gb ram ',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gizmochina.com%2Fproduct%2Fapple-iphone-12-pro-max%2F&psig=AOvVaw3tBxPCZ_iSQ92r5nvSPGwO&ust=1628236366756000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCLjoi6SzmfICFQAAAAAdAAAAABAD'
    
            ],
            [
                'name'=>'oppo',
                'price'=>'$500',
                'category'=>'Mobile',
                'discription'=>'A smartphones with 8gb ram ',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.gadgetsnow.com%2Fmobile-phones%2FOPPO-A31-2020&psig=AOvVaw0B1JYBZgVWzLzdy-WzESGk&ust=1628236485440000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPij39yzmfICFQAAAAAdAAAAABAD',
    
            ],
            [
                'name'=>'panasonic Tv',
                'price'=>'$200',
                'category'=>'Tv',
                'discription'=>'A Tv with good display',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.tcl.com%2Fth%2Fen%2Fproducts%2Fs65a%2FS65A-40.html&psig=AOvVaw2Jz8fm8A3rRF9QdzcGfDZm&ust=1628236642892000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCIDEmKy0mfICFQAAAAAdAAAAABAD',
    
            ],
            [
                'name'=>'Orient',
                'price'=>'$300',
                'category'=>'frezer',
                'discription'=>'A cool prezer ',
                'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fpriceoye.pk%2Ffridge%2Forient%2Forient-12-cu-ft-or-5554gl&psig=AOvVaw2HxhKMRtzxfJT9kVt5ySPY&ust=1628236784165000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCKjGwuu0mfICFQAAAAAdAAAAABAD',
    
            ]

        ]);
    }
}
