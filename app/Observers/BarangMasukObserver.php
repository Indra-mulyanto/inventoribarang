<?php

namespace App\Observers;

use App\Models\Barang;
use App\Models\BarangMasuk;

class BarangMasukObserver
{
    /**
     * Handle the BarangMasuk "created" event.
     */
    public function created(BarangMasuk $barangMasuk): void
    {
        $barang =Barang::where('id_barang', $barangMasuk->id_barang)->first();
        if ($barang) {
            $barang->stok += $barangMasuk->jumlah;
            $barang->save();
        }
    }

    /**
     * Handle the BarangMasuk "updated" event.
     */
    public function updated(BarangMasuk $barangMasuk): void
    {
        //
    }

    /**
     * Handle the BarangMasuk "deleted" event.
     */
    public function deleted(BarangMasuk $barangMasuk): void
    {
        $barang =Barang::where('id_barang', $barangMasuk->id_barang)->first();
        if ($barang) {
            $barang->stok -= $barangMasuk->jumlah;
            $barang->save();
        }
    }

    /**
     * Handle the BarangMasuk "restored" event.
     */
    public function restored(BarangMasuk $barangMasuk): void
    {
        //
    }

    /**
     * Handle the BarangMasuk "force deleted" event.
     */
    public function forceDeleted(BarangMasuk $barangMasuk): void
    {
        //
    }
}
