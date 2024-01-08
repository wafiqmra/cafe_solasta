<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('booking.index')->with([
            'bookings' => Booking::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('booking.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'party_size' => 'required|integer',
                'tanggal' => 'required|date',
                'waktu' => 'required|date_format:H:i',
                'nama' => 'required|string',
                'email' => 'required|string',
                'noTelp' => 'required|string',
            ]);

            $booking = Booking::create($validatedData);

            // Menyimpan data reservasi ke dalam session
            session([
                'name' => $request->input('nama'),
                'email' => $request->input('email'),
                'phone' => $request->input('noTelp'),
                'date' => $request->input('tanggal'),
                'time' => $request->input('waktu'),
                'partySize' => $request->input('party_size'),
            ]);

            return redirect()->route('booking.show', ['booking' => $booking])->with('success', 'Booking berhasil disimpan!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan. Silakan coba lagi.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        // Tampilkan detail booking berdasarkan instance Booking
        return view('booking.show')->with('reservationData', [
            'id' => $booking->id,
            'nama' => $booking->nama,
            'email' => $booking->email,
            'noTelp' => $booking->noTelp,
            'tanggal' => $booking->tanggal,
            'waktu' => $booking->waktu,
            'party_size' => $booking->party_size,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    // Tampilkan form edit booking berdasarkan ID
    $booking = Booking::find($id);

    return view('booking.edit')->with('booking', $booking);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'party_size' => 'required|integer',
        'tanggal' => 'required|date',
        'waktu' => 'required|date_format:H:i',
        'nama' => 'required|string',
        'email' => 'required|string',
        'noTelp' => 'required|string',
    ]);

    // Update data booking ke dalam database
    $booking = Booking::find($id);
    $booking->update($validatedData);

    // Redirect atau tampilkan pesan sukses
    return redirect()->route('booking.show', ['booking' => $booking])->with('success', 'Booking berhasil diperbarui!');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Hapus data booking dari database
        Booking::destroy($id);

        // Redirect atau tampilkan pesan sukses
        return redirect()->route('booking.index')->with('success', 'Booking berhasil dihapus!');
    }
}