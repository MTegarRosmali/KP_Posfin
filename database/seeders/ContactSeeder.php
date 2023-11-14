<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'name' => 'POSFIN',
            'description' => 'Lorem ipsum',
            'logo' => 'logo.png',
            'alamat' => 'Jl. Jamuju No.2, Cihapit, Kec. Bandung Wetan, Kota Bandung',
            'email' => 'helpdesk@posfin.id',
            'telepon' => '123456789',
            'maps_embed' => 'maps.com',
        ]);
    }
}
