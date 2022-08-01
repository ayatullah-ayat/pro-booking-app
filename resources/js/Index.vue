<template>
    <div class="container w-75 m-auto">
        <ul class="nav">
            <li class="nav-item">
                <router-link to="/" class="nav-link activ">Link 1</router-link>
            </li>
            <li class="nav-item">
                <router-link to="/bookables/2" class="nav-link">link 2</router-link>
            </li>
        </ul>
        <div class="mt-5">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Index'
    }
</script>