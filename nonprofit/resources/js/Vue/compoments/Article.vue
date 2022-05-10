<template>
    <div class="article" @click="showDetail = !showDetail">
        <div class="actions">
            <h3> {{ article.title }} </h3>
        </div>
        <div v-if="showDetail">
            <p>{{ article.text }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: "Article",
    props: ['article'],
    data() {
        return {
            showDetail: false,
        }
    }
}
</script>

<style scoped>
.article {
    margin: 20px;
    background: white;
    padding: 10px 20px;
    border-radius: 4px;
    box-shadow: 1px 2px 3px rgba(0,0,0,0.05);
    border-left: 4px solid #00ce89;
    cursor: pointer;
}
.actions{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
</style>
