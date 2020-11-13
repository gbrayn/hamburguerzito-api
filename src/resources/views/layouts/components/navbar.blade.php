<nav class="navbar">
    <ul class="navbar-top">
        <a href="#" class="navbar-brand">
            <img src="{{url('assets/images/brand.webp')}}" alt="" srcset="" width="100px" height="100px">
        </a>
        <li>
            <a href="#">
            <img src="{{url('assets/icons/home.png')}}" alt="" srcset="">
            </a>
        </li>
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

        min-height: 100vh;
        background: #fafafa;
        color: #C3C6CB;
    }

    .navbar .navbar-top {
        text-align: center
    }

    .navbar .navbar-bottom {
        padding-bottom: 1em;
    }
</style>
