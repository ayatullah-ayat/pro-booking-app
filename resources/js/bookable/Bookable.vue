<template>
  <div>
    <div v-if="loader">
      <p>Data is Loading....</p>
    </div>
    <div v-else>
      <div class="row" v-for="(row, indx) in rows" :key="'row' + indx">
        <div class="col d-flex align-items-stretch" v-for="(item, index) in bookablesInRow(row)" :key="index">
            <BookableItem :item="item" />
        </div>
        <div v-for="(placeholder,indx) in placeHoldersInRow(row)" :key="'placeholder' + indx" class="col"></div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import BookableItem from "./BookableItem.vue";

export default {
  components: {
    BookableItem
  },
  data() {
    return {
      bookables: null,
      loader: true,
      columns: 3
    };
  },
  methods: {
    bookablesInRow(row){
        return this.bookables.slice((row - 1) * this.columns, row * this.columns);
    },
    placeHoldersInRow(row) {
        return this.columns - this.bookablesInRow(row).length;
    }
  },
  created() {
    
    window.axios('api/bookables')
        .then(result => result.data)
        .then(data => {
          this.bookables = data;
          this.bookables.push({title: 'x', 'description': 'x'})
          this.loader = false;
          console.log(data);
        })
        .catch(rej => console.log(rej))
  },
  computed: {
    rows() {
      return this.bookables === null
        ? 0
        : Math.ceil(this.bookables.length / this.columns);
    }
  }
};
</script>