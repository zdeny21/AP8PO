<template>
    <h3>List of articles</h3>
    <div v-for="article in articles" :key="article.id">
        <Article :article="article" />
    </div>
</template>

<script>
import Article from "./compoments/Article";

export default {
    name: "ArticleList",
    components: { Article },
    data() {
        return {
            articles: [],
        }
    },
    mounted() {
        fetch('http://127.0.0.1:8000/api/articles')
            .then(res => res.json())
            .then(data => this.articles = data)
            .catch(err => console.log(err))
    }
}
</script>

<style scoped>
h3 {
    margin-left: 20px;
}
</style>
