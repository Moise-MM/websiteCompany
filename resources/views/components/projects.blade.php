<!--Project -->
<section id="project" class="pb-5">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-8 offset-md-2 text-center">
          <h2 class="title-md">{{ $project->title }}</h2>
          <p>
            {{ $project->description }}
          </p>
        </div>
      </div>
      <div class="row">
        @foreach ($project->itemProjects as $itemProject)
          <div class="col-md-4 mb-3">
            <div class="card border-0 overflow-hidden">
              <a href=""
                ><img src="{{ $itemProject->image_project }}" alt="" class="card-img"
              /></a>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
  <!--End project -->
