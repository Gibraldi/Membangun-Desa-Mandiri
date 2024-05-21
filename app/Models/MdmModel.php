<?php

namespace App\Models;

use CodeIgniter\Model;

class MdmModel extends Model
{
    protected $table = 'mdm';
    protected $allowedFields = [
        'cabang_pengelola', // Changed from 'Cabang Pengelola'
        'kota_kabupaten',    // Changed from 'Kota/Kabupaten'
        'kecamatan',
        'kelurahan_desa',    // Changed from 'Kelurahan/Desa'
        'latitude',
        'longitude',
        'nama_agen_1',       // Changed from 'Nama Agen 1'
        'nama_agen_2',       // Changed from 'Nama Agen 2'
        'b_kum_kur_NoA',  // Changed from 'Booking KUM-KUR NoA'
        'b_kum_kur_limit', // Changed from 'Booking KUM-KUR Limit'
        'CASA_NoA',
        'CASA_NoM',
        'Jumlah_KK',          // Changed from 'Jumlah KK'
        'CIF',
        'Total_CIF',          // Changed from 'Total CIF'
        'Market_Share_Jan_24', // No changes needed
        'Market_Share_Mar_23'  // Corrected from 'Market Share JMar-23'
    ];

    public function getCabang($id)
    {
        return $this->find($id);
    }

    public function search($keyword)
    {
        return $this->table('mdm')->like('cabang_pengelola', $keyword)->findAll();
    }
}