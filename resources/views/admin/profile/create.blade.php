
@extends('layouts.profile') 

@section('title', 'Myprofile')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                
                <h2>Myプロフィール</h2>
                        <form action="{{ action('Admin\ProfileController@create') }}" 
                         method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="title"> 名前（name） </label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                    
            　　　　<div class="form-group row">
                        <label class="col-md-2" for="title"> 性別 (gender) </label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="gender"  value="{{ old('gender')}}">
                    </div>
                    
        　　　    　　　<div class="form-group row">
                        <label class="col-md-2" for="title"> 趣味 (hobby) </label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="hobby"  value="{{ old('hobby') }}">
                    </div>
        　　　
        　　     　　　<div class="form-group row">
                        <label class="col-md-2" for="title"> 自己紹介欄 (introduction) </label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="introduction" value="{{ old('introduction')}}">
                    </div>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
              
               　　　　 　　 </form>
             </div>
         </div>
    </div>
    
@endsection






