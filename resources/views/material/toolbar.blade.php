<v-toolbar app dark color="blue">
    <v-toolbar-side-icon @click="mini = !mini"></v-toolbar-side-icon>
    <v-toolbar-title>Hello Vuetify</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
        <v-btn icon>
            <v-icon>search</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>apps</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>refresh</v-icon>
        </v-btn>

        <v-btn icon>
            <v-icon>more_vert</v-icon>
        </v-btn>
    </v-toolbar-items>
</v-toolbar>
