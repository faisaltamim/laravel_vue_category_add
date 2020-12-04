<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div id="app" class="container">
            <router-link class="navbar-brand" :to="{ name: 'home' }"
                >Navbar</router-link
            >

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <router-link :to="{ name: 'home' }" class="nav-link"
                            >Home</router-link
                        >
                    </li>
                    <li class="nav-item">
                        <router-link
                            :to="{ name: 'category-list' }"
                            class="nav-link"
                            >Category</router-link
                        >
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {};
</script>
