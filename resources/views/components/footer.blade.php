
    <!-- FOOTER area-->
    <footer>
        <div class="footer-top">
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-4">
                <img class="logo" src="img/logo.png" alt="" width="250" />
              </div>
              <div class="col-lg-4">
                <h5 class="text-white">Menu</h5>
                <ul class="list-unstyled">
                  <li><a href="#">A propos de nous</a></li>
                  <li><a href="#">Nos services</a></li>
                  <li><a href="#">Nos projets</a></li>
                  <li><a href="#">Nous contacter</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h5 class="text-white">{{ $company->name_company }}</h5>
                <ul class="list-unstyled">
                  <li>Address: {{ $company->address }}</li>
                  <li>Email: {{ $company->email }}</li>
                  <li>Phone: {{ $company->phone_number }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End FOOTER area-->