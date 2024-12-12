<x-home>
  <section id="featured-services" class="featured-services section">

    <div class="container">
      <div class="container section-title" data-aos="fade-up">
        <h2>My Skill</h2>
        <p>Berikut adalah kemampuan saya dalam memahami beberapa bahasa pemrograman</p>
      </div><!-- End Section Title -->

      <div class="row gy-4">
      @foreach($skill->take(4) as $row)

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-activity icon"></i></div>
            <h4><a href="" class="stretched-link">{{$row->title}}</a></h4>
            <p>{{$row->description}}</p>
          </div>
        </div><!-- End Service Item -->

      @endforeach
      </div>
    </div>

  </section>
</x-home>
