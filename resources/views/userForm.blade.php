@extends('layouts')
@section('title')
    Form | Create User
@endsection
@section('content')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-7 border">
            <div class="card shadow">
                <div class="card-body">

                    <div class="row justify-content-center text-center">
                        <div class="col col-5">
                            <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                <h3>Create New User</h3>
                            </div>
                        </div>
                    </div>

                    <form action="{{route('add')}}" method="post">
                        @csrf
                        <div class="row mt-3 text-center" >
                            <div class="col col-6 pt-2" >
                                <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                    <h5>Name</h5>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                                @error('name')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col col-6 pt-2">
                                <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                    <h5>Contact</h5>
                                </div>
                                <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                                @error('contact')
                                    <span>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col col-6">
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </div>
                            <div class="col col-6">
                                <a href="{{route('index')}}" class="btn btn-dark w-100">Cancel</a>
                            </div>
                        </div>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
@endsection