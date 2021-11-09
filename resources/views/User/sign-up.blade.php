@extends('Layout.master')


@section('content')
@php
    // dd(session()->all());
//  dd(Session::get('introducer_id'))


    // dd($introducer_id);




@endphp
<div class="row no-gutters margin-bottom-20">
    <div class="col-12 bg-white">
        <p class="box__title text-center">ثبت نام</p>


        <form action="{{ route('user.singUp.store')}}" class="p-4 " method="post" enctype="multipart/form-data">
            @csrf
            <div class="profile__info border cursor-pointer text-center">
                <div class="avatar__img">
                    <img src="/panel/img/profile.jpg" class="avatar___img">
                    <input type="file" class="hidden avatar-img__input" name="user_image">
                    <div class="v-dialog__container" style="display: block;"></div>
                    <div class="box__camera default__avatar"></div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <label>
                        <p class="mb-1">نام و نام خانوادگی: <span class="text-danger">*</span></p>
                    </label>
                        <input class="form-control" type="text" name="name" placeholder="نام و نام خانوادگی" value="{{ old('name') }}" required>
                        @error('name')
                            اینجا مورد داره
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <label>
                        <p class="mb-1">ایمیل: <span class="text-danger">*</span></p>
                    </label>
                        <input class="form-control" type="text" name="email" placeholder="ایمیل" value="{{ old('email') }}" required>
                        @error('email')
                            اینجا مورد داره
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <label>
                        <p class="mb-1">شماره تلفن همراه: <span class="text-danger">*</span></p>
                    </label>
                        <input class="form-control" type="text" name="phone_number" placeholder="شماره تلفن همراه" value="{{ old('phone_number') }}" required>

                        @error('phone_number')
                            اینجا مورد داره
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <label>
                        <p class="mb-1">سن:</p>
                    </label>
                        <input class="form-control" type="text" name="age" placeholder="سن" value="{{ old('age') }}">
                        @error('age')
                            اینجا مورد داره
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <label>
                        <p class="mb-1">کد معرف: </p>
                    </label>
                        <input class="form-control" type="text" name="introducer_id" placeholder="کد معرف" value="{{ Session::get('introducer_id') || old('introducer_id') }}" {{ Session::get('introducer_id') ? 'readonly' : ''}}>



                        @error('introducer_id')
                            اینجا مورد داره
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <label>
                        <p class="mb-1">رمز عبور: </p>
                    </label>
                        <input class="form-control" type="password" name="password" placeholder="رمز عبور" value="{{ old('password') }}">
                        @error('password')
                            اینجا مورد داره
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <p class="rules mt-1"><span class="text-danger">نکته: </span>

                            رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک، اعداد و کاراکترهای
                            غیر الفبا مانند <strong>!@#$%^&amp;*()</strong> باشد.</p>
                </div>
            </div>


            <br>
            <button type="submit" class="btn btn-blue">ثبت نام</button>
        </form>
    </div>
</div>
@endsection

@section('js')

@endsection
