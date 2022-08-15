<template>
    <div>
        <h5>
            Check Availability
            <span v-if="hasAvailability" class="text-success">(Available)</span>
            <span v-if="hasNoAvailability" class="text-danger">(Not Available)</span>
        </h5>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="from">From</label>
                        <input 
                            class="form-control" 
                            type="text"
                            name="from"
                            v-model="from"
                            :class="{'is-invalid' : this.errorFor('from')}">
                            <small class="text-danger">{{ this.errorFor('from') ? this.errorFor('from')[0] :  '' }}</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="to">To</label>
                        <input 
                            class="form-control" 
                            type="text"
                            name="to"
                            v-model="to"
                            :class="{'is-invalid' : this.errorFor('to')}">
                            <small class="text-danger">{{ this.errorFor('from') ? this.errorFor('to')[0] :  '' }}</small>
                    </div>
                </div>
                <div class="row m-auto">
                    <button class="mt-3 btn btn-dark" @click="check" :disabled="loading">Check!</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    props: {
        bookableId: String,
    },
    data() {
        return {
            loading: false,
            from: '',
            to: '',
            status: null,
            errors: null,
        }
    },
    methods: {
        check(e){
            e.preventDefault()
            
            this.loading = true;

            axios.get(`/api/bookables/${this.$route.params.id}/availability?from=${this.from}&to=${this.to}`)
            .then(res => {
                this.status = res.status
            }).catch(err => {
                if(422 === err.response.status){
                    this.errors = err.response.data.errors;
                }
                this.status = err.response.status
            }).then(() => {
                this.loading = false;
            });

        },
        errorFor(field) {
            return this.hasErrors && this.errors[field] ? this.errors[field]: null
        }
    },
    computed: {
        hasErrors() {
            return 422 === this.status && this.errors
        },
        hasAvailability() {
            return this.status === 200;
        },
        hasNoAvailability() {
            return this.status === 404;
        }
    },
    created() {
        console.log('created');
    },  
    updated() {
        console.log('status:');
        console.log(this.status);
    }
    
}
</script>