@extends('layouts.company.main')

@section('title', "Contact")
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Contact</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div>
          <!-- <iframe style="border:0; width: 100%; height: 340px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe> -->
          {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63372.42102183473!2d107.610112!3d-6.9173248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e64c5e8866e5%3A0x37be7ac9d575f7ed!2sGedung%20Sate!5e0!3m2!1sid!2sid!4v1682231867616!5m2!1sid!2sid" width="100%" height="340px" style="border:0;" allowfullscreen=""></iframe> --}}
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d247.39369826541946!2d107.89606074931883!3d-7.206669859333567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1682259783587!5m2!1sid!2sid" width="100%" height="340px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Google Maps -->

        <div class="row gy-4 mt-4">

          <div class="col-lg-4">

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>2106100@itg.ac.id</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>+1 5589 55488 55</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            {{-- <form action="https://api.whatsapp.com/send/?phone=6281222828906#text={{ urlencode(Request::input('message')) }}" method="get" role="form" class=""> --}}
            {{-- <form action="https://wa.me/6281222828906?text={{ urlencode(Request::input('message')) }}" method="get" role="form" class=""> --}}
            {{-- <form id="my-form" method="post" role="form" class=""> --}}
                {{-- @method("GET")
                @csrf --}}
            <form action="{{route('send.message') }}" method="post" role="form" class="">
                @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                {{-- <div class="loading">Loading</div>
                {{-- <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center"><button type="submit" class="btn btn-coklat">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  {{-- <script>
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var subject = document.getElementById("subject").value;
    var message = document.getElementById("message").value;

    var url = "https://api.whatsapp.com/send/?text=" + encodeURIComponent(message) + "&email=" + encodeURIComponent(email) + "&subject=" + encodeURIComponent(subject) + "&message=" + encodeURIComponent(message);

  </script> --}}
  <script>
    // Memilih elemen formulir dan menambahkan event listener pada saat formulir dikirim
    var form = document.querySelector('#my-form');
    form.addEventListener('submit', function(event) {
    // Menghentikan pengiriman formulir secara default
    event.preventDefault();

    // Mendapatkan nilai-nilai input dari formulir
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    // Mengirim data formulir ke server menggunakan AJAX
    var xhr = new XMLHttpRequest();
    var url = 'https://wa.me/6281222828906?text='; // Ganti dengan URL endpoint Anda
    var data = new FormData();
    data.append('name', name);
    data.append('email', email);
    data.append('subject', subject);
    data.append('message', message);

    xhr.open('POST', url, true);
    xhr.send(data);

    // Menangani respon dari server
    xhr.onload = function() {
        if (xhr.status === 200) {
        // Tampilkan pesan sukses jika pengiriman berhasil
        alert('Pesan berhasil dikirim!');
        } else {
        // Tampilkan pesan error jika pengiriman gagal
        alert('Terjadi kesalahan saat mengirim pesan. Silakan coba lagi nanti.');
        }
    };
    });

  </script>
@endsection
