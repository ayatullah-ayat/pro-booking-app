<template>
  <div class="mt-3">
    <h5>Review</h5>

    <div v-if="loading">Loading...</div>
    <div v-else class="mt-3" v-for="(review, index) in reviews" :key="'review' + index">
      <div class="row">
        <div class="col-6">
          <h5>Piotr Jura</h5>
          <p> {{ review.created_at }} </p>
        </div>
        <div class="col-6">
          <p class="text-end">START RATING</p>
        </div>
      </div>

      <div class="mt-2">
            <p>{{ review.content }}</p>
      </div>
    </div>


  </div>
</template>


<script>
export default {
  props: {
    bookableId: String, 
  },
  data() {
    return {
      loading: true,
      reviews: null,
    }
  },
  created() {
    axios.get('/api/bookables/' + this.bookableId + '/reviews').then(res => {
      this.reviews = res.data.data
    }).catch(err => {
      console.log(err);
    }).then(() => {
      this.loading = false
    })
  }

}

</script>

