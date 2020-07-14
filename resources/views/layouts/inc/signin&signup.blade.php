@guest
    <a href="#" class="header-wrapicon1 dis-block "  data-toggle="modal" data-target="#modalLRForm">
        {{__('navbar.signin')}} <span class="fa fa-sign-in large" class="header-icon1"></span>
    </a>
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

        <a class=" m-2 header-wrapicon1 dis-block" href="{{url('/myprofile')}}">
                <span class="fa fa-user"></span> {{ __('singin&signup.my_account') }}
        </a>

            <a class="m-2 header-wrapicon1 dis-block" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <span class="fa fa-sign-out"></span> {{ __('singin&signup.logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest