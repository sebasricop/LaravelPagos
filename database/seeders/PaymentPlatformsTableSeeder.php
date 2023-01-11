<?php

namespace Database\Seeders;

use App\Models\PaymentPlatform;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Seeder;

class PaymentPlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlatform::create([  //Crear Instancias para las plataformas de pago
            'name' => 'Paypal',
            'image' => 'img/payment-platforms/paypal.jpg',

        ]);

        PaymentPlatform::create([  //Crear Instancias para las plataformas de pago
            'name' => 'Stripe',
            'image' => 'img/payment-platforms/stripe.jpg',

        ]);
    }
}
