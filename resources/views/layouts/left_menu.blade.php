<nav id="sidebar">
    <div class="sidebar-header">
        <h3>bases.khm.kz</h3>
        <strong>BS</strong>
    </div>
    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle collapsed">
                <i class="fas fa-database"></i>
                База
            </a>
            <ul class="collapse list-unstyled show" id="homeSubmenu">

                <li @if( \Request::route()->getName() == 'main' ) class="active" @endif>
                    <a href="{{route('main')}}"><i class="fas fa-home"></i> <span>Главная</span></a>
                </li>
                <li @if( \Request::route()->getName() == 'server' ) class="active" @endif>
                    <a href="{{route('server')}}"><i class="fas fa-server"></i> <span>Серверная</span></a>
                </li>
                <li @if( \Request::route()->getName() == 'sklad' ) class="active" @endif>
                    <a href="{{route('sklad')}}"><i class="fas fa-store-alt"></i> <span>Склад</span></a>
                </li>
                <li @if( \Request::route()->getName() == 'spisania' ) class="active" @endif>
                    <a href="{{route('spisania')}}"><i class="fas fa-file-alt"></i> <span>Списание</span></a>
                </li>
                <li @if( \Request::route()->getName() == 'utilizatsia' ) class="active" @endif>
                    <a href="{{route('utilizatsia')}}"><i class="fas fa-recycle"></i> <span>Утилизация</span></a>
                </li>
            </ul>
        </li>
        <li>
            @if($form)
                <a href="{{ route('users') }}">
                    <i class="fas fa-user"></i>
                    <span>Пользователи</span>
                </a>
            @endif
            <a href="#">
                <i class="fas fa-sort-numeric-up"></i>
                <span>Инвентаризация</span>
            </a>
        </li>
    </ul>
</nav>
