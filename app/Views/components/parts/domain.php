
<style>
  .text-orange {
    color: #ff9800 !important;
  }
  .btn-orange {
    background-color: #ff9800 !important;
    color: #fff !important;
    border: none;
  }
  .btn-orange:hover {
    background-color: #e68a00 !important;
  }
</style>

<div class="bg-dark text-white" style="background-color: #222;">
  <div class="container-lg py-5">
    
    <!-- Title + Subtitle, centered -->
    <div class="text-center mb-5" style="max-width: 700px; margin: 0 auto;">
      <h2 class="fw-bold text-orange mb-3">Cari Nama Domainmu</h2>
      <p class="text-white-50">
        Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. 
        Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.
      </p>
    </div>

    <!-- Domain Search Form -->
    <div class="row justify-content-center mb-5">
      <div class="col-12 col-lg-8">
        <div class="d-flex flex-wrap gap-2 justify-content-center align-items-center">
          <!-- Domain Name Input -->
          <input 
            type="text" 
            class="form-control form-control-lg" 
            style="max-width: 360px;"
            placeholder="Cari Nama Domain Anda">
          
          <!-- TLD Dropdown with visible arrow -->
          <select class="form-select form-select-lg" style="max-width: 120px;">
            <option>.id</option>
            <option>.com</option>
            <option>.net</option>
          </select>
          
          <!-- Search Button -->
          <button class="btn btn-orange btn-lg fw-bold px-4 rounded-pill">
            Cari
          </button>
        </div>
      </div>
    </div>

    <!-- TLD Pricing -->
    <div class="row justify-content-center text-center">
      <!-- .com -->
      <div class="col-12 col-sm-4 border-end border-white-50 mb-4 mb-sm-0">
        <span class="bg-secondary rounded px-3 py-1 fs-6 fw-bold text-white">
          .com
        </span>
        <p class="fs-4 fw-semibold mt-3 text-white">
          Rp 200.000,-
        </p>
      </div>
      
      <!-- .id -->
      <div class="col-12 col-sm-4 border-end border-white-50 mb-4 mb-sm-0">
        <span class="bg-secondary rounded px-3 py-1 fs-6 fw-bold text-white">
          .id
        </span>
        <p class="fs-4 fw-semibold mt-3 text-white">
          Rp 80.000,-
        </p>
      </div>
      
      <!-- .xyz -->
      <div class="col-12 col-sm-4">
        <span class="bg-secondary rounded px-3 py-1 fs-6 fw-bold text-white">
          .xyz
        </span>
        <p class="fs-4 fw-semibold mt-3 text-white">
          Rp 10.000,-
        </p>
      </div>
    </div>

  </div>
</div>
