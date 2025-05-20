<?php

namespace App\Observers;

use App\Models\Barang;
use App\Models\BarangKeluar;

class BarangKeluarObserver
{
    /**
     * Handle the BarangKeluar "created" event.
     */
    public function created(BarangKeluar $barangKeluar): void
    {
        $barang = Barang::where('id_barang', $barangKeluar->barang)->first();
        if ($barang) {
            $barang->stok -= $barangKeluar->jumlah;
            $barang->save();
            # code...
        }
    }

    /**
     * Handle the BarangKeluar "updated" event.
     */
    public function updated(BarangKeluar $barangKeluar): void
    {
        //
    }

    /**
     * Handle the BarangKeluar "deleted" event.
     */
    public function deleted(BarangKeluar $barangKeluar): void
    {
        $barang = Barang::where('id_barang', $barangKeluar->barang)->first();
        if ($barang) {
            $barang->stok += $barangKeluar->jumlah;
            $barang->save();
        }
    }

    /**
     * Handle the BarangKeluar "restored" event.
     */
    public function restored(BarangKeluar $barangKeluar): void
    {
        //
    }

    /**
     * Handle the BarangKeluar "force deleted" event.
     */
    public function forceDeleted(BarangKeluar $barangKeluar): void
    {
        //
    }
}
