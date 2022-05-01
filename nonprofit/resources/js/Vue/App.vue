<template>
    <div>
        <h1>hello laravel</h1>
        <UserList />
    </div>
</template>

<script>
import UserList from "./UserList";

export default {
    name: "App",
    components: { UserList }
}
</script>

<style scoped>
div {
    background: yellowgreen;
}
</style>
