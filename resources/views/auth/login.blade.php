  @extends('layouts.welcome')
  @section('content')
      <div class="card-body">
          <div class="card-title">Login to your account</div>
          <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                      aria-describedby="emailHelp" placeholder="Enter email" name="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-group">
                  <label class="form-label">Password<a href="{{ route('password.request') }}" class="float-right small">I
                          forgot password</a></label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror"
                      id="exampleInputPassword1" placeholder="Password" name="password" required
                      autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="form-footer">
                  <button type="submit" class="btn btn-primary btn-block">Sign in</button>
              </div>
          </form>
      </div>
      <div class="text-center text-muted">
          Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
      </div>
  @endsection
