@extends('layouts')
@section('title')
    Index
@endsection
@section('content')
    <div class="row justify-content-center align-items-center h-100">
        <div class="col col-7">
            <div class="card shadow">
                <div class="card-body">

                    <div class="row justify-content-center">
                        <div class="col col-5">
                            <a href="{{route('new')}}" class="btn btn-primary w-100">New User</a>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-center mt-3 text-center" style="height: 50px;">
                        <div class="col col-7 pt-2" >
                            <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                <h5>Name</h5>
                            </div>
                        </div>
                        <div class="col col-5 pt-2">
                            <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                <h5>Contact</h5>
                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col col-7">
                            <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                <h5>{{$name}}</h5>
                            </div>
                        </div>
                        <div class="col col-5">
                            <div style="width: auto; height:auto; background-color:rgb(92, 116, 174); color:white; border-radius:5px;">
                                <h5>{{$contact}}</h5>
                            </div>
                        </div>
                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
@endsection