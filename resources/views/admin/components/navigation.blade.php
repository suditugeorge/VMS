<div class="sidebar" data-color="orange">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
    <div class="logo">
        <a href="{{URL::to('/vms-admin')}}" class="simple-text logo-mini">
            <img class="img-fluid-small navbar-logo" src="{{URL::asset('/core_images/4-anial logo@3x.png')}}"/>
        </a>
        <a href="{{URL::to('/vms-admin')}}" class="simple-text logo-normal">
            Tetravet
        </a>
        <div class="navbar-minimize">
            <button id="minimizeSidebar" class="btn btn-simple btn-icon btn-neutral btn-round">
                <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
                <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
            </button>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            {{--In caz ca are poza de profil--}}
            <div class="photo">
                <img src="{{URL::asset('/core_images/default_user.svg')}}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
              <span>
                {{$general_data['sidebar']['auth_user']['nume']}}
                <b class="caret"></b>
              </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        @foreach ($general_data['sidebar']['auth_user']['submeniu'] as $submeniu)
                            <li>
                                <a href="{{$submeniu['url']}}">
                                    @if(array_key_exists('small_text', $submeniu))
                                        <span class="sidebar-mini-icon">{{$submeniu['small_text']}}</span>
                                    @endif
                                    <span class="sidebar-normal">{{$submeniu['text']}}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            @foreach($general_data['sidebar']['other_items'] as $nav)
                @if(array_key_exists('submeniu', $nav))
                    <li>
                        <a data-toggle="collapse" href="#{{$nav['collapse_id']}}">
                            <i class="{{$nav['icon']}}"></i>
                            <p>
                                {{$nav['text']}}
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="{{$nav['collapse_id']}}">
                            <ul class="nav">
                                @foreach($nav['submeniu'] as $submeniu_item)
                                    <li>
                                        <a href="{{$submeniu_item['url']}}">
                                            <span class="sidebar-mini-icon">{{$submeniu_item['small_text']}}</span>
                                            <span class="sidebar-normal"> {{$submeniu_item['text']}} </span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @else
                    <li>
                        <a href="{{$nav['url']}}">
                            <i class="{{$nav['icon']}}"></i>
                            <p>{{$nav['text']}}</p>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
