<x-home>
  <div class="container mt-5">
    <h1 class="text-center mb-5">Certificates</h1>
    <div class="row g-4 justify-content-center align-items-center">
      @foreach($certificates->take(3) as $row)
      <!-- Certificate Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <!-- Displaying the Certificate File -->
          <div class="card-body">
          <h5 class="card-title">{{$row->name}}</h5>
          <h5 class="card-text">{{$row->desciption}}</h5>
          <!-- Container for centering the file -->
          <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
            <!-- Display the certificate file -->
            @if ($row->file)
          @if (strpos($row->file, '.pdf') !== false)
        <iframe src="{{ asset('storage/' . $row->file) }}" width="80%" height="100%"
        style="border: none;"></iframe>
      @else
      <img src="{{ asset('storage/' . $row->file) }}" alt="Certificate Image" class="img-fluid"
      style="max-width: 100%; height: auto;">
    @endif
        @else
        <span>No file uploaded</span>
      @endif
          </div>
          </div>

        </div>
      </div>
    @endforeach
    </div>
  </div>
</x-home>