<template>
  <div>
    <div v-if="loader">
      <p>Data is Loading....</p>
    </div>
    <div v-else>
      <div class="row" v-for="(row, indx) in rows" :key="'row' + indx">
        <div class="col" v-for="(item, index) in bookablesInRow(row)" :key="index">
            <BookableItem :item="item" />
        </div>
        <div v-for="(placeholder,indx) in placeHoldersInRow(row)" :key="'placeholder' + indx" class="col"></div>
      </div>
    </div>
  </div>
</template>

<script>
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
    setTimeout(() => {
      this.bookables = [
        {
          title: "Js Releases ECMA2015",
          body: "good for developers",
          created_at: "2/jun/2018"
        },
        {
          title: "Python is best for data manipulating",
          body: "data science, ai, robotics, data visualization",
          created_at: "2/jun/2018"
        },
        {
          title: "PHP IS !DEAD",
          body: "Its not possible",
          created_at: "2/jun/2018"
        },
        {
          title: "Looking for new career",
          body: "cloud based solution",
          created_at: "2/jun/2018"
        },
        {
          title: "Js Releases ECMA2015",
          body: "good for developers",
          created_at: "2/jun/2018"
        },
        {
          title: "Python is best for data manipulating",
          body: "data science, ai, robotics, data visualization",
          created_at: "2/jun/2018"
        },
        {
          title: "Python is best for data manipulating",
          body: "data science, ai, robotics, data visualization",
          created_at: "2/jun/2018"
        }
      ];
      this.loader = false;
    }, 2000);
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