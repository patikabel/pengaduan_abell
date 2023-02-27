@extends('layout.layoutlogin')
@section('kontent')

    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 20rem; background-color: #E5E0FF">
                    <div class="card-body">
                        <form action="/datalogin" method="POST">
                            @csrf
                            <h2 class="text-center">Log-In</h2><hr>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="inputkan email anda..." name="email">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="inputkan password anda..." name="password">
                            </div>
                            <p>Belum punya akun? <a href="#">Sign-In</a></p>
                            <button type="submit" class="btn" style="background-color: #BDCDD6; width: 18rem">Submit</button><br>
                            <hr><p class="text-center">atau</p>
                            <hr>
                            <button type="submit" class="btn" style="background-color: #BDCDD6; width: 18rem">Log-In With Google</button>
                          </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection
