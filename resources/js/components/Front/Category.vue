<template>
    <a
        class="list-group-item"
        :class="{ 'active': selectedCategory == category.id }"
        @click="$emit('load-products', category.id)"
    >
        {{ category.name }}
    </a>
</template>

<script>
export default {
    props: [
        'category',
        'selectedCategory'
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
