<template>
  <div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
      <a href="#">
        <img class="card-img-top" :src="product.photo ? product.photo.thumbnail : 'http://placehold.it/700x400'" alt="">
      </a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="#">{{ product.name }}</a>
        </h4>
        <h5>$ {{ product.price }}</h5>
        <p class="card-text">{{ limitDescription(product.description, 50) }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    props: [
        'product'
    ],

    methods: {
        limitDescription: function (string, length) {
            return string.length > length ? string.substring(0, length) + "..." : string;
        }
    }
}
</script>
