<header class="header">
    <a href="{{ route('home') }}">
        <img class="header__logo" src="/images/logo.png" alt="logo">
    </a>
    <nav>
        <button class="burger" onclick="this.classList.toggle('burger--active');
        menu.classList.toggle('header__menu--opened')">
            <div class="burger__line"></div>
        </button>
        <ul class="header__menu" id="menu">
            <li class="header__menu-item">
                <a class="header__menu-link" href="{{ route('home') }}">Главная</a>
            </li>


            
        </ul>
    </nav>
</header>