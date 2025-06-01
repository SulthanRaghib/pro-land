<?php

namespace App\Http\Controllers;

use App\Mail\HubungiKami;
use App\Mail\HubungiKamiPengirim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

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
}
