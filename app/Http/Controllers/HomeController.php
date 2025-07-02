<?php

namespace App\Http\Controllers;

use App\Mail\HubungiKami;
use App\Mail\HubungiKamiPengirim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function kontakKami()
    {
        return view('home.pages.contact');
    }

    public function sendMessageEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ], [
            'name.required' => 'Nama harus diisi.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'subject.required' => 'Subjek harus diisi.',
            'message.required' => 'Pesan harus diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        $validated = $validator->validated();

        $MAIL_FROM_ADDRESS = config('mail.from.address');
        Mail::to($MAIL_FROM_ADDRESS)->send(new HubungiKami($validated));
        // Kirim email ke pengirim
        Mail::to($validated['email'])->send(new HubungiKamiPengirim($validated));

        return response()->json([
            'message' => 'Pesan berhasil dikirim.'
        ]);
    }

    // Layanan Kami ==============================================================================
    // Proyek Pembangunan
    public function proyekBangunan()
    {
        $title = 'Proyek Pembangunan';

        return view('home.pages.layanan-kami.proyek_pembangunan', compact('title'));
    }

    // Proyek Baja Ringan
    public function proyekBajaRingan()
    {
        $title = 'Proyek Baja Ringan';

        return view('home.pages.layanan-kami.proyek_baja_ringan', compact('title'));
    }

    // Proyek Urugan
    public function proyekUrugan()
    {
        $title = 'Proyek Urugan';

        return view('home.pages.layanan-kami.proyek_urugan', compact('title'));
    }

    // Proyek Tambang
    public function proyekTambang()
    {
        $title = 'Proyek Tambang';

        return view('home.pages.layanan-kami.proyek_tambang', compact('title'));
    }

    // Konsultan Properti
    public function konsultanProperti()
    {
        $title = 'Konsultan Properti';

        return view('home.pages.layanan-kami.konsultan_properti', compact('title'));
    }

    // Konsultan Pertambangan
    public function konsultanPertambangan()
    {
        $title = 'Konsultan Pertambangan';

        return view('home.pages.layanan-kami.konsultan_pertambangan', compact('title'));
    }
    // End of Layanan Kami ==============================================================================

    public function portfolio(Request $request)
    {
        $title = 'Portfolio';
        $allProjects = collect([
            // Baja Ringan Projects
            [
                'category' => 'Baja Ringan',
                'image' => asset('assets/img/jas_pro_land/proyek_baja_ringan_1.png'),
                'alt' => 'Proyek Rangka Baja Ringan Rajeg Ciry Mansion',
                'filter' => 'baja'
            ],
            [
                'category' => 'Baja Ringan',
                'image' => asset('assets/img/jas_pro_land/proyek_baja_ringan_2.png'),
                'alt' => 'Proyek Rangka Baja Ringan Garden City Balaraja',
                'filter' => 'baja'
            ],
            [
                'category' => 'Baja Ringan',
                'image' => asset('assets/img/jas_pro_land/proyek_baja_ringan_3.png'),
                'alt' => 'Proyek Rangka Baja Ringan Granada Rajeg City',
                'filter' => 'baja'
            ],
            [
                'category' => 'Baja Ringan',
                'image' => asset('assets/img/jas_pro_land/proyek_baja_ringan_4.png'),
                'alt' => 'Proyek Rangka Baja Ringan Puri Sepatan',
                'filter' => 'baja'
            ],
            [
                'category' => 'Baja Ringan',
                'image' => asset('assets/img/jas_pro_land/proyek_baja_ringan_5.png'),
                'alt' => 'Proyek Rangka Baja Garden City Solear',
                'filter' => 'baja'
            ],
            [
                'category' => 'Baja Ringan',
                'image' => asset('assets/img/jas_pro_land/proyek_baja_ringan_6.png'),
                'alt' => 'Proyek Rangka Baja Sukamahan Asri',
                'filter' => 'baja'
            ],
            // Pembangunan Projects
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serang.png'),
                'alt' => 'Proyek Pembangunan Rumah Klasik Modern Serang',
                'filter' => 'pembangunan'
            ],
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serangg.png'),
                'alt' => 'Proyek Pembangunan Rumah Klasik Modern Serang',
                'filter' => 'pembangunan'
            ],
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serang_2.png'),
                'alt' => 'Proyek Pembangunan Rumah Klasik Modern Serang 2',
                'filter' => 'pembangunan'
            ],
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_rumah_klasik_modern_serangg_2.png'),
                'alt' => 'Proyek Pembangunan Rumah Klasik Modern Serang 2',
                'filter' => 'pembangunan'
            ],
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_cafe_saung_serang.png'),
                'alt' => 'Proyek Pembangunan Cafe Saung Serang',
                'filter' => 'pembangunan'
            ],
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_cafe_saung_serangg.png'),
                'alt' => 'Proyek Pembangunan Cafe Saung Serang',
                'filter' => 'pembangunan'
            ],
            [
                'category' => 'Pembangunan',
                'image' => asset('assets/img/jas_pro_land/proyek_pembangunan_ruko_dan_rumah_subsidi_mitra_garden_serang.png'),
                'alt' => 'Proyek Pembangunan Ruko dan Rumah Subsidi Mitra Garden Serang',
                'filter' => 'pembangunan'
            ],
            // Tambang Projects
            [
                'category' => 'Tambang',
                'image' => asset('assets/img/jas_pro_land/proyek_tambang_pasir_1.png'),
                'alt' => 'Proyek Tambang Pasir dan Batu Serang',
                'filter' => 'tambang'
            ],
            [
                'category' => 'Tambang',
                'image' => asset('assets/img/jas_pro_land/proyek_tambang_pasir_2.png'),
                'alt' => 'Proyek Tambang Pasir dan Batu Serang 2',
                'filter' => 'tambang'
            ],
            [
                'category' => 'Tambang',
                'image' => asset('assets/img/jas_pro_land/proyek_tambang_pasir_3.png'),
                'alt' => 'Proyek Tambang Pasir dan Batu Serang 3',
                'filter' => 'tambang'
            ],
            [
                'category' => 'Tambang',
                'image' => asset('assets/img/jas_pro_land/proyek_tambang_pasir_4.png'),
                'alt' => 'Proyek Tambang Pasir dan Batu Serang 4',
                'filter' => 'tambang'
            ],
            [
                'category' => 'Tambang',
                'image' => asset('assets/img/jas_pro_land/proyek_tambang_pasir_5.png'),
                'alt' => 'Proyek Tambang Pasir dan Batu Serang 5',
                'filter' => 'tambang'
            ],
            // Urugan Projects
            [
                'category' => 'Urugan',
                'image' => asset('assets/img/jas_pro_land/proyek_urugan_1.png'),
                'alt' => 'Proyek Urugan Tanah Grand Harmony Balaraja',
                'filter' => 'urugan'
            ],
            [
                'category' => 'Urugan',
                'image' => asset('assets/img/jas_pro_land/proyek_urugan_2.png'),
                'alt' => 'Proyek Urugan Tanah Grand Harmony Balaraja 2',
                'filter' => 'urugan'
            ],
            [
                'category' => 'Urugan',
                'image' => asset('assets/img/jas_pro_land/proyek_urugan_3.png'),
                'alt' => 'Proyek Urugan Tanah Grand City The Extention',
                'filter' => 'urugan'
            ],
            [
                'category' => 'Urugan',
                'image' => asset('assets/img/jas_pro_land/proyek_urugan_4.png'),
                'alt' => 'Proyek Urugan Tanah Grand City The Extention 2',
                'filter' => 'urugan'
            ],
        ]);

        return view('home.pages.portfolio', compact('title', 'allProjects'));
    }
}
