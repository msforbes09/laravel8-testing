<nav class="navbar is-fixed-top is-primary" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarContent">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a><!-- burger -->
    </div><!-- navbar-brand -->

    <div id="navbarContent" class="navbar-menu">
        <div class="navbar-end">
            <a class="navbar-item" href="{{ route('test.index') }}">Home</a>

            <a class="navbar-item" href="{{ route('test.mail') }}">Mail</a>

            <a class="navbar-item" href="{{ route('test.domPDF') }}">DomPDF</a>

            <a class="navbar-item" href="{{ route('test.image') }}">Image</a>

            <a class="navbar-item" href="{{ route('test.pusher') }}">Pusher</a>
        </div><!-- navbar-start -->
    </div><!-- navbar-menu -->
</nav><!-- navbar -->
