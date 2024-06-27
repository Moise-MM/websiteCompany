<!-- SERVICES-->
<section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto text-center">
          <h2>{{ $service->title }}</h2>
          <p>
            {{ $service->description }}
          </p>
        </div>
      </div>
      
    
      <div class="row">
        @foreach ($service->itemServices as $itemService)
        <div class="col-md-4 pt-2 pb-2">
          <div class="card border-0 p-4">
            <div class="card-body">
              <i class="bi bi-activity"></i>
              <h4 class="card-title text-bold">{{ $itemService->name }}</h4>
              <p class="card-text">
                {{ $itemService->description }}
              </p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  <!-- End SERVICES -->