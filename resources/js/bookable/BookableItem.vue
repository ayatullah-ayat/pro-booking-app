<template>
        <div class="card mt-2 w-100">
            <div class="card-body">
                <h5 class="card-title">{{ item.title }}</h5>
                <p class="card-text">{{ item.description }}</p>
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