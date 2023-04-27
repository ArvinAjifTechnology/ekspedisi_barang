@extends('layouts.company.main')

@section('title', "Tracking")

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Tracking List</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Tracking</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="service" class="services pt-0">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <span>Tracking</span>
          <h2>Tracking</h2>

        </div>
        <div class="row gy-4 d-flex justify-content-between">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <form action="#" class="form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                <input type="text" class="form-control" placeholder="Masukan Nomor Resi">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            </div>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="col-lg-4">Nomor Resi : 2023042300001</div>
            <div class="col-lg-4">Dari : Garut</div>
            <div class="col-lg-4">Tujuan : Jakarta</div>
        </div>
        <div class="row gy-4">
            <table class="table table-primary table-hover">
                <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>2023-04-20</td>
                      <td>Diterima Agen Garut</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>2023-04-20</td>
                      <td>Packing</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>2023-04-21</td>
                      <td>Agen Bandung</td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>2023-04-22</td>
                      <td>Agen Jakarta</td>
                    </tr>
                  </tbody>
            </table>
      </div>
    </section><!-- End Frequently Asked Questions Section -->

</main><!-- End #main -->
@endsection
