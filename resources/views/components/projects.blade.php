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
          @foreach ( $itemProject->projectImages as $image )
            <div class="col-md-4 mb-3">
              <div class="card border-0 overflow-hidden">
                <img src="{{ $image->image_path }}" alt="" class="card-img"/>
              </div>
            </div>
          @endforeach
        @endforeach
      </div>
    </div>
  </section>
  <!--End project -->
