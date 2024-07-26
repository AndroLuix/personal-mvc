
<form action="/forgot" method="POST">
   <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Reset Password</h2>
                <p class="text-white-50 mb-5">Inserisci la tua Email</p>
                <p class="text-white-50 mb-5">{{message}}</p>

                <div class="form-outline form-white mb-4">
                  <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" />
                  <label class="form-label" for="typeEmailX">Email</label>
                </div>

                <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="/admin">Hai la password? Accedi</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Reset Password</button>

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
   </form>
   
  