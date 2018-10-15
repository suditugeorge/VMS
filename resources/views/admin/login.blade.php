@extends('admin.layout')

@section('title', 'Admin Login VMS')

@section('content')
    <div class="wrapper wrapper-full-page ">
        <div class="full-page login-page">
            <div class="content">
                <div class="container">
                    <div class="col-md-4 ml-auto mr-auto">
                        <form>
                            <div class="card card-login card-plain">
                                <div class="card-header ">
                                    <div class="logo-container">
                                        <img src="{{URL::asset('/core_images/4-anial logo@3x.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body ">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-check mb-3 pl-0">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">
                                            Ținemă minte
                                            <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                        </label>
                                    </div>
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection