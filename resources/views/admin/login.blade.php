@extends('admin.layout')

@section('title', 'Admin Login VMS')

@section('content')
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page section-image" filter-color="blue"
         data-image="{{ URL::asset('/core_images/Pets.jpg') }}">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <div class="card-header ">
                            <div class="logo-container">
                                <img src="{{ URL::asset('/core_images/4-anial logo@3x.png') }}" alt="">
                            </div>
                        </div>
                        <div class="card-body ">
                            <div class="input-group no-border form-control-lg">
                                <input type="email" class="form-control" placeholder="Adresă email" id="email">
                            </div>
                            <div class="input-group no-border form-control-lg">
                                <input type="password" placeholder="Parolă" class="form-control" id="password">
                            </div>
                            <div class="form-check mt-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" id="remember_me">
                                    <span class="form-check-sign"></span>
                                    Ține-mă minte!
                                </label>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <button class="btn btn-primary btn-round btn-lg btn-block mb-3" id="login_user">
                                <i class="fas fa-spinner fa-spin hidden"></i><span class="button-text">Trimite cerere</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="full-page-background login-page"></div>
    </div>
</div>
@endsection

@push('scripts')
    <script async type="text/javascript" src="{{ URL::asset('/admin/js/features/login.js') }}"></script>
@endpush
