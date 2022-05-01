<template>
    <div v-for="user in users" :key="user.id">
        <p> {{ user.first_name }} </p>
    </div>
</template>

<script>
export default {
    name: "UserList",
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

</style>
