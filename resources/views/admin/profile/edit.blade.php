@extends('layouts.profile')
@section('title', 'プロフィールの編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-date">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <lable class="col-md-2" for="name">氏名</lable> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name',$profile_form->name) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-2" for="gender">性別</lable> 
                        <div class="col-md-10">
                            <?php $gender_val = old('gender', $profile_form->gender); ?>
                            <input type="radio" name="gender" value="男性" @if($gender_val =='男性') checked="checked" @endif >男性
                            <input type="radio" name="gender" value="女性" @if($gender_val =='女性') checked="checked" @endif >女性
                        </div>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-2" for="hobby">趣味</lable> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby', $profile_form->hobby) }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-2" for="introduction">自己紹介欄</lable> 
                        <div class="col-md-10">
                            <textarea class="form-control" name="introduction" rows="20">{{ old('introduction', $profile_form->introduction) }}</textarea>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection