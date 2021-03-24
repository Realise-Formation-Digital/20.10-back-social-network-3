<!-- Header.vue -->
<template>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Echo-comunications</a>
        <router-link to="/about" class="nav-link" exact>A propos</router-link>
        <router-link to="/favoris" class="nav-link" exact>Favoris</router-link>
        <router-link to="/login" class="nav-link" exact>Login</router-link>
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Rechercher" aria-label="Search" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>
    </nav>
</template>
<script>
    export default {
        name: 'Header',
    }
</script>