@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/register.css') }}">

    <div class="loginPage">
        <div class="form">
            <h2>انشاء حساب جديد </h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group text-right">
                    <label for="exampleInputEmail1">الاسم الثلاثي للباحث</label>
                    <input type="text" name="full_name" class="form-control" aria-describedby="emailHelp" @error('name')
                        is-invalid @enderror" name="full_name" value="{{ old('full_name') }}" required
                        autocomplete="full_name" autofocus />

                    @error('full_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="exampleInputEmail1">البريد الالكتروني</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Your answer"
                        name="email" value="{{ old('email') }}" autocomplete="email" />
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group text-right">
                    <label for="exampleInputEmail1">كلمة المرور</label>
                    <input type="password" class="form-control" id="password" aria-describedby="emailHelp"
                        v-model="password" name="password" autocomplete="new-password" />
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="exampleInputEmail1">الجامعة</label>
                    <input type="text" class="form-control" id="text" aria-describedby="emailHelp" v-model="text"
                        placeholder="Your answer" name="university" autocomplete="new-university" />
                    @error('university')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="exampleInputEmail1">الكلية</label>
                    <input type="text" class="form-control" id="text" aria-describedby="emailHelp" v-model="text"
                        placeholder="Your answer" name="collage" autocomplete="new-collage" />
                    @error('collage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group text-right">
                    <label for="exampleInputEmail1">القسم</label>
                    <input type="text" class="form-control" id="text" aria-describedby="emailHelp" v-model="text"
                        placeholder="Your answer" name="section" autocomplete="new-section" />
                    @error('section')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="exampleInputEmail1">القسم</label>
                    <input type="text" class="form-control" id="text" aria-describedby="emailHelp" v-model="text"
                        placeholder="Your answer" name="section" autocomplete="new-section" />
                    @error('section')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <div class="ss1">
                        <label for="exampleInputEmail1">اللقب العلمي ان ود</label>
                        <select class="form-control form-control-lg" name="scientific_title">
                            <option value="1">استاذ</option>
                            <option value="2">استاذ مساعد</option>
                            <option value="3">مدرس</option>
                            <option value="4">مدرس مساعد</option>
                            <option value="5">اخرى</option>
                        </select>
                    </div>
                </div>
                <div class="form-group text-right">
                    <div class="ss1">
                        <label for="exampleInputEmail1">نوع المعاملة</label>
                        <select name="type_research" class="form-control form-control-lg" required>
                            <option value="1">ترقية علمية</option>
                            <option value="2">طالب دراسات عليا</option>
                            <option value="3">اخرى</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block"> {{ __('Register') }}</button>


            </form>
            <div class="lotte">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_CgL682.json" background="transparent"
                    speed="1" style="width: 600px; height: 500px;" loop autoplay></lottie-player>
            </div>
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
    <script src="js/blagen1.js"></script>

@endsection
