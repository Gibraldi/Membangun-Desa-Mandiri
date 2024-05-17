<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <form action="/pages/update/<?= $cabang['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $cabang['id']; ?>">
                <div class="row mb-3">
                    <label for="cabang_pengelola" class="col-sm-2 col-form-label">Cabang Pengelola</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cabang_pengelola" name="cabang_pengelola" value="<?= $cabang['cabang_pengelola']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kota_kabupaten" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kota_kabupaten" name="kota_kabupaten" value="<?= $cabang['kota_kabupaten']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="<?= $cabang['kecamatan']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="kelurahan_desa" class="col-sm-2 col-form-label">Kelurahan/Desa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="kelurahan_desa" name="kelurahan_desa" value="<?= $cabang['kelurahan_desa']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $cabang['latitude']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $cabang['longitude']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_agen_1" class="col-sm-2 col-form-label">Nama Agen 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_agen_1" name="nama_agen_1" value="<?= $cabang['nama_agen_1']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nama_agen_2" class="col-sm-2 col-form-label">Nama Agen 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_agen_2" name="nama_agen_2" value="<?= $cabang['nama_agen_2']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="b_kum_kur_NoA" class="col-sm-2 col-form-label">Booking KUM-KUR NoA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="b_kum_kur_NoA" name="b_kum_kur_NoA" value="<?= $cabang['b_kum_kur_NoA']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="b_kum_kur_limit" class="col-sm-2 col-form-label">Booking KUM-KUR Limit</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="b_kum_kur_limit" name="b_kum_kur_limit" value="<?= $cabang['b_kum_kur_limit']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="CASA_NoA" class="col-sm-2 col-form-label">CASA NoA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="CASA_NoA" name="CASA_NoA" value="<?= $cabang['CASA_NoA']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="CASA_NoM" class="col-sm-2 col-form-label">CASA NoM</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="CASA_NoM" name="CASA_NoM" value="<?= $cabang['CASA_NoM']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Jumlah_KK" class="col-sm-2 col-form-label">Jumlah KK</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Jumlah_KK" name="Jumlah_KK" value="<?= $cabang['Jumlah_KK']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="CIF" class="col-sm-2 col-form-label">CIF</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="CIF" name="CIF" value="<?= $cabang['CIF']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Total_CIF" class="col-sm-2 col-form-label">Total CIF</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="Total_CIF" name="Total_CIF" value="<?= $cabang['Total_CIF']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Market_Share_Jan_24" class="col-sm-2 col-form-label">Market Share Jan-24</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="Market_Share_Jan_24" name="Market_Share_Jan_24" value="<?= $cabang['Market_Share_Jan_24']; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="Market _Share_Mar_23" class="col-sm-2 col-form-label">Market Share Mar-23</label>
                    <div class="col-sm-10">
                        <input type="number" step="0.01" class="form-control" id="Market_Share_Mar_23" name="Market_Share_Mar_23" value="<?= $cabang['Market_Share_Mar_23']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
