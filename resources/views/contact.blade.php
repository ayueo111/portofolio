<x-home>
<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact</h2>
</div><!-- End Section Title -->
<div class="container" data-aos="fade">
  <div class="row gy-5 gx-lg-5">
    @foreach ($contacts as $contact)
    <div class="col-lg-12">
      <div class="info" style="max-width: 800px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h3>Contact Me!!</h3>
        <p>Jika ada hal yang ingin ditanyakan bisa hubungi saya melalui:</p>

        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Name</h4>
            <p>{{ $contact->name }}</p>
          </div>
        </div>

        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>Location:</h4>
            <p>{{ $contact->alamat }}</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>Email:</h4>
            <p>{{ $contact->email }}</p>
          </div>
        </div><!-- End Info Item -->

        <div class="info-item d-flex">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>Call:</h4>
            <p>{{ $contact->phone }}</p>
          </div>
        </div><!-- End Info Item -->
      </div>
    </div>
    @endforeach
  </div>
</div>


</section><!-- /Contact Section -->
</x-home>