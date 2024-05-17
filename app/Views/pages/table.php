<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <div class="table-responsive">
        <table class="table caption-top table-bordered">
          <thead>
            <tr>
              <th scope="col">Aksi</th>
              <th scope="col">Cabang Pengelola</th>
              <th scope="col">Kota/Kabupaten</th>
              <th scope="col">Kecamatan</th>
              <th scope="col">Kelurahan/Desa</th>
              <th scope="col">Koordinat</th>
              <th scope="col">Nama Agen 1</th>
              <th scope="col">Nama Agen 2</th>
              <th scope="col">Booking KUM- KUR NoA</th>
              <th scope="col">Booking KUM- KUR Limit</th>
              <th scope="col">CASA NoA</th>
              <th scope="col">CASA NoM</th>
              <th scope="col">Jumlah KK</th>
              <th scope="col">CIF</th>
              <th scope="col">Total CIF</th>
              <th scope="col">Market Share Jan 24%</th>
              <th scope="col">Market Share Jan 23%</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cabang as $m) : ?>
              <tr>
                <td>
                  <?php if (in_groups(['maker', 'admin' , 'approver'])) : ?>
                    <div class="d-flex align-items-center">
                      <a href="/pages/edit/<?= $m['id']; ?>" class="btn btn-warning btn-sm rounded-pill me-1">Edit</a>
                    </div>
                  <?php endif; ?>
                  <?php if (in_groups(['approver', 'admin'])) : ?>
                    <div class="d-flex align-items-center">
                      <form action="/pages/delete/<?= $m['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Are you sure?');">Delete</button>
                      </form>
                    </div>
                  <?php endif; ?>
                </td>
                <td><?= $m['cabang_pengelola']; ?></td>
                <td><?= $m['kota_kabupaten']; ?></td>
                <td><?= $m['kecamatan']; ?></td>
                <td><?= $m['kelurahan_desa']; ?></td>
                <td><?= $m['latitude'] ?>, <?= $m['longitude'] ?> </td>
                <td><?= $m['nama_agen_1']; ?></td>
                <td><?= $m['nama_agen_2']; ?></td>
                <td><?= $m['b_kum_kur_NoA']; ?></td>
                <td><?= $m['b_kum_kur_limit']; ?></td>
                <td><?= $m['CASA_NoA']; ?></td>
                <td><?= $m['CASA_NoM']; ?></td>
                <td><?= $m['Jumlah_KK']; ?></td>
                <td><?= $m['CIF']; ?></td>
                <td><?= $m['Total_CIF']; ?></td>
                <td><?= $m['Market_Share_Jan_24'];?>%</td>
                <td><?= $m['Market_Share_Mar_23']; ?>%</td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
      <?php if (in_groups(['admin'])) : ?>
        <caption>
          <a href="/pages/create" class="btn btn-primary" style="margin: 10px;">Tambah Data</a>
        </caption>
      <?php endif; ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
