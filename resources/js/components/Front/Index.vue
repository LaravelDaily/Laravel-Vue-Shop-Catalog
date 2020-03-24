<template>
  <div class="container" :class="{ 'loading': loading }">
    <div class="row" v-if="!loading">
      <div class="col-lg-3">
        <h1 class="my-4">Shop Catalog</h1>
        <div class="list-group">
          <category v-for="category in categories" :key="category.id" :category="category"></category>
        </div>

      </div>
      <div class="col-lg-9">
        <div class="row mt-4">
          <product v-for="product in products" :key="product.id" :product="product"></product>
        </div>
        <div class="row">
            <!-- {{ $products->appends(request()->query())->links() }} -->
            <the-pagination></the-pagination>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    data: function () {
        return {
            categories: [],
            products: [],
            paginationData: {},
            selectedCategory: null,
            currentPage: 1,
            loading: true
        };
    },

    mounted () {
        this.loadCategories();
        this.loadProducts();
    },

    methods: {
        loadCategories: function () {
            axios.get('/api/categories')
                .then((response) => {
                    this.categories = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadProducts: function (category = null, page = 1) {
            this.loading = true;
            this.selectedCategory = category;
            this.currentPage = page;

            axios.get('/api/products', {
                    params: {
                        category,
                        page
                    }
                })
                .then((response) => {
                    const {data, ...pagination} = response.data;
                    this.products = data;
                    this.paginationData = pagination;
                    this.loading = false;
                })
                .catch(function (error) {
                    console.log(error);
                });
        }
    }
}
</script>

<style>

</style>
