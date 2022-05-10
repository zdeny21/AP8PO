<template>
    <h3>Login page</h3>
    <LoginForm />
</template>

<script>
import LoginForm from "./compoments/LoginForm";

export default {
    name: "LoginPage",
    components: { LoginForm },

}
</script>

<style scoped>
h3 {
    padding-left: 20px;
}
</style>
