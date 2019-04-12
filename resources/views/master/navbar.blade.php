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

            {{-- <a class="navbar-item" href="#">Documentation</a>

            <div class="navbar-item has-dropdown is-hoverable">
                <span class="navbar-link">More</span>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="#">About</a>

                    <a class="navbar-item" href="#">Jobs</a>

                    <a class="navbar-item" href="#">Contact</a>

                    <hr class="navbar-divider">
                    
                    <a class="navbar-item" href="#">Report an issue</a> --}}
                </div><!-- dropdown -->
            </div><!-- has-dropdown -->
        </div><!-- navbar-start -->
    </div><!-- navbar-menu -->
</nav><!-- navbar -->
