@extends('client.layout')

@section('title', 'Contact')

@section('content')
    @include('client.components.company-description')
    <div class="wrapper contact-page">
        <div class="main">
            <div class="contact-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="info info-horizontal mt-5">
                                <div class="icon icon-primary">
                                    <i class="now-ui-icons location_pin"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Ne găsiți la adresa</h4>
                                    <p> Cartier Militari, Bd. Uverturii, nr. 16, bl. A2, ap. 64, sector 6
                                        <br> <strong>Reper: </strong>Teatrul Masca
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="now-ui-icons tech_mobile"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Sau ne puteți contacta la</h4>
                                    <p><a href="mailto:mailto:cabinet@tetravet.ro"
                                          class="btn btn-primary btn-simple btn-round">cabinet@tetravet.ro</a>
                                        <br> 021.430.54.15
                                        <br> 0744.655.798
                                        <br> 0744.585.321
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title">Program</h4>
                                    <p> Luni – Vineri : 9 – 20
                                        <br> Sambata : 9 – 15
                                        <br> Duminica : Inchis
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="contactUs2Map" class="big-map"></div>
    </div>
@endsection

@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv0ZKqPunSBzVZHYRJ_HqCesY7OuOlrMU"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script>
        $(document).ready(function() {
            // the body of this function is in assets/js/now-ui-kit.js
            nowuiKit.initContactUs2Map();
        });
    </script>
@endpush
