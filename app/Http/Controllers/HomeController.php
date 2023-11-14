<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Berita;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $services = Service::all();
        $beritas = Berita::all();
        $clients = Client::all();



        return view('home.index', compact(
            'sliders',
            'services',
            'beritas',
            'clients',
        ));
    }

    public function profil()
    {
        return view('home.profil');
    }

    public function kontak()
    {
        $contact = Contact::first();

        return view('home.kontak', compact('contact'));
    }

    public function berita()
    {
        $beritas = Berita::all();

        return view('home.berita', compact('beritas'));
    }

    public function produk()
    {
        $services = Service::all();

        return view('home.produk', compact('services'));
    }
    
    public function direksi()
    {
        return view('home.direksi');
    }

    public function core()
    {
        return view('home.core');
    }
}
