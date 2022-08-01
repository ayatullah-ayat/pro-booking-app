<template>
    <div>
        <h5>Check Availability</h5>
        <form>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="from">From</label>
                        <input 
                            class="form-control" 
                            type="text"
                            name="from"
                            v-model="from">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="to">To</label>
                        <input 
                            class="form-control" 
                            type="text"
                            name="to"
                            v-model="to">
                    </div>
                </div>
                <div class="row m-auto">
                    <button class="mt-3 btn btn-dark" @click="check">Check!</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            from: null,
            to: null
        }
    },
    methods: {
        check(e){
            e.preventDefault()
            console.log(e)
        }
    }
}
</script>