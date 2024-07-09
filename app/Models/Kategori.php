<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    //Kolom(field) mana saja yang boleh di isi
    public $fillable = ['kategori_id', 'nama_kategori', 'gambar', 'deskripsi', 'harga', 'jumlah'];

    //Kolom(field) mana saja yang boleh di perlihatkan
    public $visible = ['kategori_id', 'nama_kategori', 'gambar', 'deskripsi', 'harga', 'jumlah'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(App\Http\Models\kategori::class, 'id_kategori');
    }
}
