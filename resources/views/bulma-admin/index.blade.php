<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Developer!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body class="has-navbar-fixed-top">

    @include ('master.navbar')

    <div class="columns">
        <div class="column is-2 has-background-dark">
            @include ('bulma-admin.menu')
        </div><!-- column -->
    
        <div class="column">
            <section class="section">
                {{ Breadcrumbs::render('dashboard') }}
                
                Second column
            </section><!-- section -->
        </div><!-- column -->
    </div><!-- columns -->
</body>
</html>
