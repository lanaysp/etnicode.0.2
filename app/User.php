<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Province;
use App\Models\Regency;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'roles', 'store_name', 'categories_id', 'store_status',
        'address_one', 'address_two', 'provinces_id', 'regencies_id', 'zip_code', 'country', 'phone_number', 'photo'
    ];


    public function provinsi()
    {
        return $this->belongsTo(Province::class,'provinces_id','id');
    }
    // lagi
    public function kota()
    {
        return $this->belongsTo(Regency::class,'regencies_id','id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // wait brarti pas login nanti muncul provinsii nya ?
    // bukan mas jadi setiap user yang upload barang nanti ke ambil namanay siapa alamat sama privinsi
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
        ->format('l, d F Y H:i');
    }
      // Tambahan profile
    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id');
    }

}
