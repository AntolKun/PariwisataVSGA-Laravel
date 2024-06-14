<?php

use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Booking::create([
            'nama' => 'John Doe',
            'notelp' => '08123456789',
            'tanggal' => '2024-06-13',
            'durasi' => 3,
            'tipe_kamar' => 'Deluxe',
            'smoking_room' => true,
            'breakfast' => true,
            'harga_paket' => 900000,
            'jumlah_tagihan' => 2700000
        ]);
    }
}

