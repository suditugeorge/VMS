
<nav class="navbar navbar-expand-lg bg-white fixed-top navbar-transparent" color-on-scroll="500">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-logo" href="{{URL::to('/')}}">
                <img class="img-fluid-small navbar-logo" src="{{URL::asset('/core_images/4-anial logo@3x.png')}}"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar top-bar"></span>
                <span class="navbar-toggler-bar middle-bar"></span>
                <span class="navbar-toggler-bar bottom-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/despre-noi')}}">Despre noi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/tarife')}}">Tarife</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>