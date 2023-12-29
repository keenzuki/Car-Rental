<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\VModel;
use App\Models\Make;
use App\Models\Customer;
use App\Models\Vehicle;
use App\Models\Payment;
use App\Models\Booking;
use Hash;
use Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user1=User::create([
            'first_name' => 'Francis',
            'last_name' => 'Nzuki',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'phone' => '254701723886',
            'status' => 1,
            'is_admin' => 1,
            'role' => 1,
            'photo' => 'passport.jpg',
            // 'email_verified_at' => Carbon::now(),
        ]);

        $pay1 = Payment::create([
            'user_id' => $user1->id,
            'receipt_no' => 'RH67F4F43S',
            'checkoutRequestID' => 'rteyhs6q86',
            'transamount' => 15000,
            'phone_no' => '254701723886'
        ]);
        $pay2 = Payment::create([
            'user_id' => $user1->id,
            'receipt_no' => 'RH74DR3ES3',
            'checkoutRequestID' => 'u8ueht4fr5',
            'transamount' => 5000,
            'phone_no' => '254700876546'
        ]);

        $customer1 = Customer::create([
            'user_id' => $user1->id,
            'd_l' => 'DL07Y54R',
            'n_id' => '1223445'
        ]);

        $make1 = Make::create([
            'name' => 'Subaru'
        ]);
        $make2 = Make::create([
            'name' => 'Mercedes'
        ]);
        $make3 = Make::create([
            'name' => 'Toyota'
        ]);
        $make4 = Make::create([
            'name' => 'Isuzu'
        ]);
        $make5 = Make::create([
            'name' => 'Mazda'
        ]);

        $model1=VModel::create([
            'make_id' => $make1->id,
            'name' => 'Forester'
        ]);
        $model2=VModel::create([
            'make_id' => $make2->id,
            'name' => 'S550'
        ]);
        $model3=VModel::create([
            'make_id' => $make3->id,
            'name' => 'Hilux'
        ]);
        $model4=VModel::create([
            'make_id' => $make4->id,
            'name' => 'D-Max'
        ]);
        $model5=VModel::create([
            'make_id' => $make1->id,
            'name' => 'Legacy'
        ]);
        $model6=VModel::create([
            'make_id' => $make5->id,
            'name' => 'Atenza'
        ]);

        $vehicle1 = Vehicle::create([
            'plate' => 'KBD 966F',
            'make_id' => $make1->id,
            'model_id' => $model1->id,
            'price' => 5000,
            'seats' => 5,
            'fuel' => 1,
            'transmission' => 0,
            'image_1' => 'car1.jpg',
            'image_2' => 'car2.jpg',
            'image_3' => 'car3.jpg',
            'image_4' => 'car4.jpg',
        ]);
        $vehicle2 = Vehicle::create([
            'plate' => 'KCJ 966F',
            'make_id' => $make5->id,
            'model_id' => $model6->id,
            'price' => 4000,
            'seats' => 5,
            'fuel' => 0,
            'transmission' => 1,
            'image_1' => 'car1.jpg',
            'image_2' => 'car2.jpg',
            'image_3' => 'car3.jpg',
            'image_4' => 'car4.jpg',
        ]);
        $book1 = Booking::create([
            'user_id' => $user1->id,
            'vehicle_id' => $vehicle1->id,
        ]);

    }
}
