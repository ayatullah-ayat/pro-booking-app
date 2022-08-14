<template>
  <div class="mt-3">
    <h5>Review</h5>

    <div class="mt-3" v-for="(review, index) in 3" :key="index">
      <div class="row">
        <div class="col-6">
          <h5>Piotr Jura</h5>
          <p>Added 5 minuites ago</p>
        </div>
        <div class="col-6">
          <p class="text-end">START RATING</p>
        </div>
      </div>

      <div class="mt-2">
            <p>Content of the review</p>
      </div>
    </div>
  </div>
</template>

