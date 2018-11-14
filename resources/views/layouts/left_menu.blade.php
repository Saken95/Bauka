<nav id="sidebar" class="active">
    <div class="sidebar-header">
        <h3>bases.khm.kz</h3>
        <strong>BS</strong>
    </div>

    <ul class="list-unstyled components">
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class="fas fa-home"></i>
                База
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{route('main')}}">Главная</a>
                </li>
                <li>
                    <a href="{{route('server')}}">Серверная</a>
                </li>
                <li>
                    <a href="#">Склад</a>
                </li>
                <li>
                    <a href="#">Списание</a>
                </li>
                <li>
                    <a href="#">Утилизация</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class="fas fa-user"></i>
                Пользователи
            </a>
            <a href="#">
                <i class="fas fa-file-invoice"></i>
                Инвентаризация
            </a>
        </li>
    </ul>
</nav>
