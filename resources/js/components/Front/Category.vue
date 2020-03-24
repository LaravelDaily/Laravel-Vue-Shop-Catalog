<template>
    <a
        class="list-group-item"
        :class="{ 'active': this.$parent.selectedCategory == category.id }"
        @click="$parent.loadProducts(category.id, 1)"
    >
        {{ category.name }}
    </a>
</template>

<script>
export default {
    props: [
        'category'
    ]
}
</script>

<style scoped>
a {
    cursor: pointer;
}

a.active, a.active:hover {
    color: #fff;
}

a.active:hover {
    text-decoration: underline;
}
</style>
