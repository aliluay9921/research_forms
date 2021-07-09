@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <div class="loginPage">
        <div class="form">
            <h2> تسجيل الدخول </h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group text-right">
                    <label for="exampleInputEmail1 ">اسم المستخدم</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" v-model="UserName"
                        placeholder="البريد الالكتروني" @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group text-right">
                    <label for="exampleInputEmail1">كلمة المرور</label>
                    <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                        v-model="password" placeholder="كلمة المرور" @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-5">
                    {{ __('Login') }}
                </button>

                <button type="submit" class="btn btn-success btn-block mt-5"><a href="{{ route('register') }}">انشاء
                        حساب</a></button>
            </form>
        </div>
        <div class="lotte">
            <img src="image/66833e07d6fb9eb5d724e47d0c814285.gif">
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>

@endsection
