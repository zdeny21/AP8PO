<template>
    <h3>List of users</h3>
    <div v-for="user in users" :key="user.id">
        <User :user="user" />
    </div>
</template>

<script>
import User from "./compoments/User";

export default {
    name: "UserList",
    components: { User },
    data() {
        return {
            users: [],
        }
    },
    mounted() {
        fetch('http://127.0.0.1:8000/api/users')
            .then(res => res.json())
            .then(data => this.users = data)
            .catch(err => console.log(err))
    }
}
</script>

<style scoped>
h3 {
    margin-left: 20px;
}
</style>
