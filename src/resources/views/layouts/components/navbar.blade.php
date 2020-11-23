<nav class="navbar">
    <ul class="navbar-top">
    <a href="{{ url('/') }}" class="navbar-brand">
            <img src="{{url('assets/images/burguer.svg')}}" alt="" srcset="" width="50px" height="50px">
        </a>
        <a href="{{ url('produtos') }}">
            <li class="navbar-item">
                <i class="fas fa-chart-pie fa-2x"></i>
                <label>Produtos</label>
            </li>
        </a>
        <a href="{{ url('categorias') }}">
            <li class="navbar-item">
                <i class="fas fa-chart-pie fa-2x"></i>
                <label>Categorias</label>
            </li>
        </a>
    </ul>
    <ul class="navbar-bottom">
        <li>fim</li>
    </ul>
</nav>
<style>
    .navbar {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;

        padding-top: 1em;
        position: fixed;

        min-height: 100vh;
        width: 8rem;
        background: #FFFFFF;
        color: #C3C6CB;
    }

    .navbar .navbar-top .navbar-brand img {
        margin-bottom: 4em;
    }

    .navbar .navbar-top {
        text-align: center
    }

    .navbar .navbar-bottom {
        padding-bottom: 1em;
    }

    .navbar-item {
        padding: .5em;
        height: 5em;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;

        border-radius: 1em;
        transition: all ease 0.5s;
        margin-bottom: 1em;
    }

    .navbar-item:hover {
        background: #F92351;
        color: #FAFAFA;
        transition: all ease 0.5s;
    }

    .navbar-item:hover, .navbar-item i:hover, .navbar-item label {
        cursor: pointer;
    }

    .navbar a {
        text-decoration: none;
        color: #C3C6CB;
    }
</style>
