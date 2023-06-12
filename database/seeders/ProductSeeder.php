<?php

namespace Database\Seeders;

use Carbon\Carbon;
use GuzzleHttp\Client;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'name' => 'Telur 1 Kg',
                'stock' => '15',
                'cap_price' => '19000',
                'sell_price' => '25000',
                'photo' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2022/9/15/a1ac1192-e0a9-4da8-912f-32be047edacf.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Beras 1 Kg',
                'stock' => '20',
                'cap_price' => '12000',
                'sell_price' => '14000',
                'photo' => 'https://images.tokopedia.net/img/cache/700/hDjmkQ/2023/1/9/5d0135bc-b5a5-407a-a022-51fac3cf2927.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Gula Pasir 1 kg',
                'stock' => '30',
                'cap_price' => '11500',
                'sell_price' => '14000',
                'photo' => 'https://siplah-rajastore.oss-ap-southeast-5.aliyuncs.com/product/opVvpGrsWEpQ55rEugXhSMeaYs4bmYvwBynp11JM.jpg',
                'category_id' => 1,
            ],
            [

                'name' => 'Kapal Api mix 1 renteng',
                'stock' => '25',
                'cap_price' => '10500',
                'sell_price' => '12000',
                'photo' => 'https://images.tokopedia.net/img/cache/200-square/VqbcmM/2022/2/10/5953246b-c9ca-4db0-9900-3761aafd80d6.jpg',
                'category_id' => 1,
            ],
            [
                'name' => 'Signature 1 Bungkus',
                'stock' => '35',
                'cap_price' => '20000',
                'sell_price' => '23000',
                'photo' => 'https://images.tokopedia.net/img/cache/250-square/hDjmkQ/2023/4/1/e1390bde-f1f2-4b7d-9368-9d7129a70b24.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Sampoerna 1 Bungkus',
                'stock' => '25',
                'cap_price' => '16500',
                'sell_price' => '18000',
                'photo' => 'https://images.tokopedia.net/img/cache/250-square/hDjmkQ/2022/9/18/82847f68-ded8-44a8-881f-15c4f1bee170.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Djie Samsoe 1 Bungkus',
                'stock' => '20',
                'cap_price' => '18000',
                'sell_price' => '20000',
                'photo' => 'https://images.tokopedia.net/img/cache/700/hDjmkQ/2021/4/29/2e88f05d-9447-4f87-8094-b55a619aa9c3.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Marlboro 1 Bungkus',
                'stock' => '15',
                'cap_price' => '35000',
                'sell_price' => '39000',
                'photo' => 'https://s2.bukalapak.com/img/7753511812/large/ROKOKMARLBOROMERAH20RS013_1_scaledjpg_scaled.jpg',
                'category_id' => 2,
            ],
            [
                'name' => 'Bodrex 1 Strip',
                'stock' => '20',
                'cap_price' => '5000',
                'sell_price' => '6000',
                'photo' => 'https://images.tokopedia.net/img/cache/500-square/VqbcmM/2020/9/11/970aa04f-f2d8-45f9-a3a5-336f8d4bf6b3.jpg',
                'category_id' => 3,
            ],
            [
                'name' => 'Paramex 1 Pack',
                'stock' => '15',
                'cap_price' => '2000',
                'sell_price' => '3000',
                'photo' => 'https://images.tokopedia.net/img/cache/500-square/hDjmkQ/2020/11/3/9e19ebf4-f5a4-484d-a18a-4f4226b709ac.jpg',
                'category_id' => 3,
            ],
            [
                'name' => 'Ultraflu 1 Pack',
                'stock' => '15',
                'cap_price' => '2500',
                'sell_price' => '3500',
                'photo' => 'https://images.tokopedia.net/img/cache/700/VqbcmM/2021/9/24/73dae714-ed26-4f1a-b2eb-768b11628eee.jpg',
                'category_id' => 3,
            ],
            [
                'name' => 'Mixagrip 1 Pack',
                'stock' => '10',
                'cap_price' => '2500',
                'sell_price' => '3500',
                'photo' => 'https://images.k24klik.com/product/large/apotek_online_k24klik_20200807032235359225_MIXAGRIP-FLU---BATUK-TAB.jpg',
                'category_id' => 3,
            ],
        ];

        $client = new Client();

        foreach ($product as $item) {
            $response = $client->request('GET', $item['photo']);
            $extension = pathinfo($item['photo'], PATHINFO_EXTENSION);
            $photoName = uniqid() . '.' . $extension;
            Storage::put('public/' . $photoName, $response->getBody());

            Product::insert([
                'name' => $item['name'],
                'stock' => $item['stock'],
                'cap_price' => $item['cap_price'],
                'sell_price' => $item['sell_price'],
                'photo' => $photoName,
                'category_id' => $item['category_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
