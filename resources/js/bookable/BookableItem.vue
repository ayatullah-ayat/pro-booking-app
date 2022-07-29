<template>
    <div class="col-4">
        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">{{ item.title }}</h5>
                <p class="card-text">{{ item.body }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        item: Object
    }
}
</script>