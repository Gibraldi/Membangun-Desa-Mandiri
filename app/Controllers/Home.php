<?php

namespace App\Controllers;

use App\Models\MdmModel;

class Home extends BaseController
{
    protected $mDM;

    public function __construct(){
        $this->mDM = new MdmModel();
    }

    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $mdm = $this->mDM->search($keyword);
        } else {
            $mdm = $this->mDM->findAll();
        }
    
        // Ambil latitude dan longitude dari hasil pencarian pertama jika ada
        $firstResult = $keyword ? reset($mdm) : null;
    
        $data = [
            'pemetaan' => $mdm,
            'keyword' => $keyword,
            'latitude' => $firstResult['latitude'] ?? null,
            'longitude' => $firstResult['longitude'] ?? null
        ];
    
        return view('pages/maps', $data);
    }
    
    

    public function table()
    {
        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $desa = $this->mDM->search($keyword);
        }else{
            $desa = $this->mDM->findAll();
        }
    
        $data = [
            'cabang' => $desa,
            'keyword' => $keyword
        ];
    
        return view('pages/table', $data);
    }
    
public function create()
{
    

    $data = [
        
    ];

    return view('pages/create', $data);
}

public function save()
{
    $this->mDM->save ([
        // 'id' => $this->request->getVar('id'),
        'cabang_pengelola' => $this->request->getVar('cabang_pengelola'),
        'kota_kabupaten' => $this->request->getVar('kota_kabupaten'),
        'kecamatan' => $this->request->getVar('kecamatan'),
        'kelurahan_desa' => $this->request->getVar('kelurahan_desa'),
        'latitude' => $this->request->getVar('latitude'),
        'longitude' => $this->request->getVar('longitude'),
        'nama_agen_1' => $this->request->getVar('nama_agen_1'),
        'nama_agen_2' => $this->request->getVar('nama_agen_2'),
        'b_kum_kur_NoA' => $this->request->getVar('b_kum_kur_NoA'),
        'b_kum_kur_limit' => $this->request->getVar('b_kum_kur_limit'),
        'CASA_NoA' => $this->request->getVar('CASA_NoA'),
        'CASA_NoM' => $this->request->getVar('CASA_NoM'),
        'Jumlah_KK' => $this->request->getVar('Jumlah_KK'),
        'CIF' => $this->request->getVar('CIF'),
        'Total_CIF' => $this->request->getVar('Total_CIF'),
        'Market_Share_Jan_24' => $this->request->getVar('Market_Share_Jan_24'),
        'Market_Share_Mar_23' => $this->request->getVar('Market_Share_Mar_23')
    ]);

    return redirect()->to('/table');
}




public function delete($id){
    $this->mDM-> delete($id);
    return redirect()->to('/table');
}

public function edit($id)
{
    $data = [
        'cabang' => $this->mDM->getCabang($id)
    ];

    return view('pages/edit', $data);
}

public function update($id){
    $this->mDM->save ([
        'id' => $id,
        'cabang_pengelola' => $this->request->getVar('cabang_pengelola'),
        'kota_kabupaten' => $this->request->getVar('kota_kabupaten'),
        'kecamatan' => $this->request->getVar('kecamatan'),
        'kelurahan_desa' => $this->request->getVar('kelurahan_desa'),
        'latitude' => $this->request->getVar('latitude'),
        'longitude' => $this->request->getVar('longitude'),
        'nama_agen_1' => $this->request->getVar('nama_agen_1'),
        'nama_agen_2' => $this->request->getVar('nama_agen_2'),
        'b_kum_kur_NoA' => $this->request->getVar('b_kum_kur_NoA'),
        'b_kum_kur_limit' => $this->request->getVar('b_kum_kur_limit'),
        'CASA_NoA' => $this->request->getVar('CASA_NoA'),
        'CASA_NoM' => $this->request->getVar('CASA_NoM'),
        'Jumlah_KK' => $this->request->getVar('Jumlah_KK'),
        'CIF' => $this->request->getVar('CIF'),
        'Total_CIF' => $this->request->getVar('Total_CIF'),
        'Market_Share_Jan_24' => $this->request->getVar('Market_Share_Jan_24'),
        'Market_Share_Mar_23' => $this->request->getVar('Market_Share_Mar_23')
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/table');
}


}
