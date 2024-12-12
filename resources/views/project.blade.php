<x-home>
<div class="container mt-5">
    <h1 class="text-center mb-5">Projects</h1>
    <div class="row g-4 justify-content-center align-items-center">
    @foreach ($projects as $project)
      <!-- Project Card 1 -->
      <div class="col-md-4">
        <div class="card h-100 shadow-sm justify-content-center align-items-center">
          <div class="card-body">
            <h5 class="card-title">{{$project->title}}</h5>
            <p class="card-text">{{$project->description}}</p>
            <a href="{{$project->link}}" class="btn btn-primary">View Project</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>
</x-home>