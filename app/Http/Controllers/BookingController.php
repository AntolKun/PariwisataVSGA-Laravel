<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return view('pesan');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'notelp' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'durasi' => 'required|integer|min:1',
            'tipe_kamar' => 'required|string|in:Deluxe,Standard',
            'smoking_room' => 'nullable|boolean',
            'breakfast' => 'nullable|boolean',
        ]);

        // Hitung harga kamar berdasarkan tipe
        $hargaKamar = $request->tipe_kamar === 'Deluxe' ? 1000000 : 800000;

        // Hitung harga fasilitas
        $hargaFasilitas = 0;

        if ($request->has('smoking_room')) {
            $hargaFasilitas += 200000;
        }

        if ($request->has('breakfast')) {
            $hargaFasilitas += 100000;
        }

        // Hitung harga paket dan jumlah tagihan
        $hargaPaket = $hargaKamar + $hargaFasilitas;
        $jumlahTagihan = $hargaPaket * $request->durasi;

        // Simpan data pemesanan
        $booking = Booking::create([
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'tanggal' => $request->tanggal,
            'durasi' => $request->durasi,
            'tipe_kamar' => $request->tipe_kamar,
            'smoking_room' => $request->has('smoking_room'),
            'breakfast' => $request->has('breakfast'),
            'harga_paket' => $hargaPaket,
            'jumlah_tagihan' => $jumlahTagihan,
        ]);

        // Cek jika pemesanan berhasil disimpan
        if ($booking) {
            return back()->with('success', 'Pesanan berhasil dibuat!');
        } else {
            return back()->with("error", "Pesanan Gagal Dipesan");
        }
    }

    public function getBooking() {
        $data["booking"] = Booking::get();
        return view("riwayat", $data);
    }

    public function destroy($id)
    {
        //Delete data dari database
        $booking = Booking::findOrFail($id);
        $booking->delete();

        if ($booking) {
            //redirect to index
            return back()->with("success", "Data Berhasil Terhapus");
        } else {
            return back()->with("error", "Data Gagal Terhapus");
        }
    }

    public function edit($id) {
        $pesanan = Booking::findOrFail($id);
        return view('editPesan', compact('pesanan'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari form
        $request->validate([
            'nama' => 'required|string|max:255',
            'notelp' => 'required|string|max:20',
            'tanggal' => 'required|date',
            'durasi' => 'required|integer|min:1',
            'tipe_kamar' => 'required|string|in:Deluxe,Standard',
            'smoking_room' => 'nullable|boolean',
            'breakfast' => 'nullable|boolean',
        ]);

        // Proses penyimpanan data setelah validasi sukses
        $pesanan = Booking::findOrFail($id); // Temukan pesanan berdasarkan $id
        $pesanan->nama = $request->nama;
        $pesanan->notelp = $request->notelp;
        $pesanan->tanggal = $request->tanggal;
        $pesanan->durasi = $request->durasi;
        $pesanan->tipe_kamar = $request->tipe_kamar;
        $pesanan->smoking_room = $request->has('smoking_room');
        $pesanan->breakfast = $request->has('breakfast');
        $updated = $pesanan->save();

        if ($updated) {
            //redirect to index
            return back()->with("success", "Data Berhasil Terupdate");
        } else {
            return back()->with("error", "Data Gagal Update");
        }
    }
}


