<v-navigation-drawer app v-model="mini" clipped>
    <v-list dense class="pt-0">
        <v-list-tile
            v-for="item in items" :key="item.title" href="#">
            <v-list-tile-action>
                <v-icon>@{{ item.icon }}</v-icon>
            </v-list-tile-action>
                
            <v-list-tile-content>
                <v-list-tile-title>@{{ item.title }}</v-list-tile-title>
            </v-list-tile-content>
        </v-list-tile>
    </v-list>
</v-navigation-drawer>
