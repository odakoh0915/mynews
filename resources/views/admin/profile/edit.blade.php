@extends(layouts, profile);
@section('title', 'プロフィールの編集画面');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール編集画面</h2>
                <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-date">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <lable class="col-md-2">氏名</lable> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-2">性別</lable> 
                        <div class="col-md-10">
                            <input type="radio" name="gender" value="男性">男性{{ old('gender') }}
                            <input type="radio" name="gender" value="女性">女性{{ old('gender') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-2">趣味</lable> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <lable class="col-md-2">自己紹介欄</lable> 
                        <div class="col-md-10">
                            <textarea class="form-control" name="introbuction" row="20">{{ old('introbuction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection