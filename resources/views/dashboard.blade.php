<x-admin-layout>

    <nav class="dashboard-navigation">

        <x-nav-link
            :class="'comp-nav-link-dashboard-page'"
            :href="route('languages.index')"
            :value="__('common.languages')"
        />

        <x-nav-link
            :class="'comp-nav-link-dashboard-page'"
            :href="route('phrases.index')"
            :value="__('common.phrases')"
        />

        <x-nav-link
            :class="'comp-nav-link-dashboard-page'"
            :href="route('reserve')"
            :value="__('reserve')"
        /> 

    </nav>

</x-admin-layout>
