<template>
    <div class="user" @click="showDetail = !showDetail">
        <div class="actions">
            <h3> {{ user.first_name + ", " + user.last_name}} </h3>
        </div>
        <div v-if="showDetail">
            <p>{{ "email: " + user.email }}</p>
            <p>{{ "mobile: " + user.mobile }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "User",
    props: ['user'],
    data() {
        return {
            showDetail: false,
        }
    }
}
</script>

<style scoped>
.user {
    margin: 20px;
    background: white;
    padding: 10px 20px;
    border-radius: 4px;
    box-shadow: 1px 2px 3px rgba(0,0,0,0.05);
    border-left: 4px solid #e90074;
    cursor: pointer;
}
.actions{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
