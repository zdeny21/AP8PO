<template>
    <div>
        <UserList />
        <ArticleList />
        <LoginPage />
    </div>
</template>

<script>
import UserList from "./UserList";
import ArticleList from "./ArticleList";
import LoginPage from "./LoginPage";

export default {
    name: "App",
    components: { UserList, ArticleList, LoginPage }
}
</script>

<style scoped>
body {
    margin: 0;
    background: #eee;
}
</style>
