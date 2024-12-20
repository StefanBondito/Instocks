<x-app title="Login - InStocks">
    <style>
        @media (max-width: 768px) {
            :root {
                --docsearch-spacing: 10px;
                --docsearch-footer-height: 40px;
            }
        }

    body {
      margin: 0;
    }

    .content {
      padding: var(--docsearch-spacing);
    }

    .footer {
      height: var(--docsearch-footer-height);
      background-color: #f1f1f1;
      text-align: center;
      line-height: var(--docsearch-footer-height); /* Center text vertically */
    }
  </style>

  <div class="d-flex align-items-center py-2 bg-body-tertiary login-bg">
    <main style="max-width: 330px; padding: 1rem;" class="content w-100 m-auto">
      <form>
        @csrf
        {{-- @if(session()->has('success'))
          <div class="alert alert-success alert-dismissable fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if(session()->has('loginError'))
          <div class="alert alert-danger alert-dismissable fade show" role="alert">
            <strong>{{ session('loginError') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif --}}
        <div class="card px-4 py-2" style="width: 20rem">
            <div class="text-center">
                <img class="my-2" src="/storage/images/assets/Logo.png" alt="" width="100">
            </div>
            <h1 class="h3 mb-3 mt-1 fw-normal text-center">Welcome to InStocks</h1>
            <div class="form-floating my-1">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
            <label for="email">Email address</label>
            @error('email')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form-floating my-1">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            </div>

            <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="remember-me">
            <label class="form-check-label" for="remember-me">Remember me</label>
            </div>
            <a href="/home_user" class="btn btn-primary w-100 py-2">Login
            </a>
            <p style="text-align: center" class="mt-3 mb-3 text-body-secondary">
            Don't have an account?
            <a href="\signup">Sign up</a>
            </p>
            <p class="mt-3 mb-3 text-body-secondary">© 2024 - InStocks</p>
        </div>
      </form>
    </main>
  </div>
</x-app>
