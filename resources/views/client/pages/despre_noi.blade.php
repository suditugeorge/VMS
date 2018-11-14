@extends('client.layout')

@section('title', 'Despre noi')

@section('content')
    @include('client.components.company-description')
    <div class="wrapper">
        <div class="section section-team text-center">
            <div class="container">
                <h5 class="description">
                    <b>Clinica veterinară Tetravet</b> oferă servicii veterinare din anul 1999. În acest răstimp am înțeles
                    că această profesie este foarte solicitantă, trebuie să te perfecţionezi în permanenţă şi să-ţi asumi o
                    responsabilitate copleșitoare față de pacienti; vă stau la dispoziție medici cu peste 20 ani experiență
                    clinică, medici primari, cu doctorate în stiințe medicale, care participă în permanență la cursuri de
                    specialitate în țară şi în străinatate.
                </h5>
                <h5 class="description">
                    Răbdarea şi profesionalismul, ajutate de aparatura performantă, fac din echipa noastră de medici şi
                    asistenți o echipă de elită. Vă așteptăm cu drag să colaborăm pentru a-i ajuta pe prietenii noștri fără
                    grai să aibă o viață mai ușoară, mai frumoasă și mai sănătoasă!
                </h5>
            </div>

            <div class="about-team team-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Echipa Tetravet</h2></div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{URL::asset('/core_images/medic-veterinar-tudor-laura.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Tudor Laura</h4>
                                            <h6 class="category">Doctor</h6>
                                            <p class="card-description">
                                                Absolventă a Facultății de Medicină Veterinară București, a obţinut doctoratul în științe medicale cu o teza în domeniul imunologiei și microbiologiei; medic primar veterinar, specialist în obstetrică, ginecologie și andrologie veterinară, numeroase specializări prin pregătiri continue la workshop-uri și congrese naționale și internaționale (în Grecia, Portugalia, Italia, Spania, Elveția, Anglia, America, Noua Zeelandă, Luxembourg)
                                            </p>
                                            <div class="card-footer">
                                                <a href="https://www.facebook.com/laura.tudor.9235" class="btn btn-icon btn-neutral btn-facebook"><i class="fab fa-facebook-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 ml-auto mr-auto">
                            <div class="card card-profile card-plain">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{URL::asset('/core_images/medic-veterinar-tudor-laurentiu.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-body">
                                            <h4 class="card-title">Tudor Laurenţiu</h4>
                                            <h6 class="category">Doctor</h6>
                                            <p class="card-description">
                                                Conferențiar universitar Tudor Laurențiu are o experiență de peste 20 de ani în observarea și îngrijirea profesională a unor specii mai deosebite de animale. Acesta este responsabil cu tratarea șerpilor, iguanelor, papagalilor, țestoaselor, hamsterilor, cobailor (purceluși de guineea), chinchinelor, veverițelor, dihorilor etc. Este membru onorific și fondator a numeroase asociații de specialitate din țară și străinătate, medic primar veterinar, doctor în științe medicale.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
