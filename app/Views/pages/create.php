<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="/pages/save" method="post">
                <?= csrf_field(); ?>
                <!-- <div class="row mb-3">
                    <label for="id" class="col-sm-2 col-form-label">id</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                </div> -->
                <div class="row mb-3">
                    <label for="cabang_pengelola" class="col-sm-2 col-form-label">Cabang Pengelola</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cabang_pengelola" name="cabang_pengelola">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kota_kabupaten" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelurahan_desa" class="col-sm-2 col-form-label">Kelurahan/Desa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="latitude" name="latitude">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="longitude" name="longitude">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_agen_1" class="col-sm-2 col-form-label">Nama Agen 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_agen_1" name="nama_agen_1">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_agen_2" class="col-sm-2 col-form-label">Nama Agen 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_agen_2" name="nama_agen_2">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="b_kum_kur_NoA" class="col-sm-2 col-form-label">Booking KUM-KUR NoA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="b_kum_kur_NoA" name="b_kum_kur_NoA">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="b_kum_kur_limit" class="col-sm-2 col-form-label">Booking KUM-KUR Limit</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="b_kum_kur_limit" name="b_kum_kur_limit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="CASA_NoA" class="col-sm-2 col-form-label">CASA NoA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="CASA_NoA" name="CASA_NoA">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="CASA_NoM" class="col-sm-2 col-form-label">CASA NoM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="CASA_NoM" name="CASA_NoM">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Jumlah_KK" class="col-sm-2 col-form-label">Jumlah KK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Jumlah_KK" name="Jumlah_KK">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="CIF" class="col-sm-2 col-form-label">CIF</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="CIF" name="CIF">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Total_CIF" class="col-sm-2 col-form-label">Total CIF</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Total_CIF" name="Total_CIF">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Market_Share_Jan_24" class="col-sm-2 col-form-label">Market Share Jan-24</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="Market_Share_Jan_24" name="Market_Share_Jan_24">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Market _Share_Mar_23" class="col-sm-2 col-form-label">Market Share Mar-23</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="Market_Share_Mar_23" name="Market_Share_Mar_23">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
