    <!-- CONTACT area -->
    <section id="contact">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
              <h3>{{ $contact->title }}</h3>
              <p>
               {{ $contact->description }}
              </p>
            </div>
          </div>
  
          <form action="" class="row g-3 justify-content-center">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Full Name" />
            </div>
            <div class="col-md-5">
              <input
                type="text"
                class="form-control"
                placeholder="Enter E-mail"
              />
            </div>
            <div class="col-md-10">
              <input
                type="text"
                class="form-control"
                placeholder="Enter Subject"
              />
            </div>
            <div class="col-md-10">
              <textarea
                name=""
                id=""
                cols="30"
                rows="5"
                class="form-control"
                placeholder="Enter Message"
              ></textarea>
            </div>
            <div class="col-md-10 d-grid">
              <button class="btn btn-primary">Contact</button>
            </div>
          </form>
        </div>
      </section>
      <!-- End CONTACT area-->