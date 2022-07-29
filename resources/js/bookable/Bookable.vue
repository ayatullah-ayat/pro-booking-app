<template>
    <div>
        <div v-if="loader">
            <p>Data is Loading....</p>
        </div>
        <div v-else class="row">
            <BookableItem
                :item="item" 
                v-for="(item, index) in bookables"
                :key="index" />
        </div>
    </div>
</template>

<script>

import BookableItem from './BookableItem.vue';

export default {
    components: {
        BookableItem
    },
    data() {
        return {
            bookables: null,
            loader: true,
            columns: 3
        }
    },
    created() {
        setTimeout(() => {

            this.bookables = [
                {
                title: 'Js Releases ECMA2015',
                body: 'good for developers',
                created_at : '2/jun/2018'
                },
                {
                title: 'Python is best for data manipulating',
                body: 'data science, ai, robotics, data visualization',
                created_at : '2/jun/2018'
                },
                {
                title: 'PHP IS !DEAD',
                body: 'Its not possible',
                created_at : '2/jun/2018'
                },
                {
                title: 'Looking for new career',
                body: 'cloud based solution',
                created_at : '2/jun/2018'
                },
                {
                title: 'Js Releases ECMA2015',
                body: 'good for developers',
                created_at : '2/jun/2018'
                },
                {
                title: 'Python is best for data manipulating',
                body: 'data science, ai, robotics, data visualization',
                created_at : '2/jun/2018'
                },
                {
                title: 'Python is best for data manipulating',
                body: 'data science, ai, robotics, data visualization',
                created_at : '2/jun/2018'
                }
            ];
            this.loader = false;
        }, 2000);
    },
    unmounted() {
        console.log('unmounted');
        console.log(this.bookables);
    }
}
</script>