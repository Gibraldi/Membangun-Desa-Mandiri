<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      
      <!-- Search Form -->
      <form action="/" method="get">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search by Kelurahan/Desa" name="keyword" value="<?= $keyword ?? '' ?>">
          <button class="btn btn-outline-secondary" type="submit">Search</button>
        </div>
      </form>

      <div id="map" style="width: 1600px; height: 800px;"></div>

      <script>
        const map = L.map('map').setView([-2.9667423111027107, 104.75058677482954], 13);

        const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
          attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        <?php if (!empty($latitude) && !empty($longitude)) : ?>
          map.setView([<?= $latitude; ?>, <?= $longitude; ?>], 15);
        <?php endif; ?>

        <?php if (!empty($pemetaan)) : ?>
          <?php foreach ($pemetaan as $p) : ?>
            L.marker([<?= $p['latitude']; ?>, <?= $p['longitude']; ?>]).addTo(map)
              .bindPopup("Cabang Pengelola: <?= $p['cabang_pengelola']; ?><br />" + 
                         "Kota/Kabupaten: <?= $p['kota_kabupaten']; ?><br/> " + 
                         "Kecamatan: <?= $p['kecamatan']; ?><br/> " + 
                         "Kelurahan/Desa: <?= $p['kelurahan_desa']; ?><br/> " + 
                         "Nama Agen 1: <?= $p['nama_agen_1']; ?><br/> " + 
                         "Nama Agen 2: <?= $p['nama_agen_2']; ?><br/> " + 
                         "Booking KUM-KUR NoA: <?= $p['b_kum_kur_NoA']; ?><br/> " + 
                         "Booking KUM-KUR Limit: <?= $p['b_kum_kur_limit']; ?><br/> " +  
                         "CASA NoA: <?= $p['CASA_NoA']; ?><br/> " +  
                         "CASA NoM: <?= $p['CASA_NoM']; ?><br/> " +  
                         "Jumlah KK: <?= $p['Jumlah_KK']; ?><br/> " +  
                         "CIF: <?= $p['CIF']; ?><br/> " +  
                         "Total CIF: <?= $p['Total_CIF']; ?><br/> " +  
                         "Market Share Jan-24: <?= $p['Market_Share_Jan_24']; ?>% <br/> " +  
                         "Market Share Mar-23: <?= $p['Market_Share_Mar_23']; ?>% <br/> ");
          <?php endforeach; ?>
        <?php else : ?>
          alert('No data found for the search keyword.');
        <?php endif; ?>
      </script>
      
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection(); ?>
