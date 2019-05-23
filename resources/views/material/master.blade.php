<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <title>Hello Vuetify</title>
</head>
<body>
    <div id="app">
        <v-app>
            @include ('material.toolbar')
            @include ('material.drawer')
            <v-content>
                <v-container>
                    @yield ('main')
                </v-container>
            </v-content>
        </v-app>
    </div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
<script src="{{ mix('js/vue.js') }}"></script>
</body>
</html>
