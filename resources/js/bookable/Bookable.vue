<template>
    <div class="row">
        <div class="col-md-8">
            <div v-if="loader">
                <p>Loading...</p>
            </div>
            <div v-else>
                <div class="card">
                    <div class="card-header">
                        <h3>{{ bookable && bookable.title }}</h3>
                    </div>
                    <div class="card-body">
                        <p>{{ bookable && bookable.description }}</p>
                    </div>
                </div>
            </div>

            <Review :bookableId="$route.params.id" />

        </div>
        <div class="col-md-4">
            <Availability :bookableId="$route.params.id" />
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import Availability from './Availability.vue';
import Review from './Review.vue';

export default {
    components: {
        Availability,
        Review,
    },
    data() {
        return {
            bookable: null,
            loader: true
        }
    },

    created() {
        axios('/api/bookables/' + this.$route.params.id)
        .then(result => {
            this.bookable = result.data.data
            this.loader = false
        })
        .catch(rej => console.log(rej))
        // console.log(this.$route.params.id);
    }
}

</script>