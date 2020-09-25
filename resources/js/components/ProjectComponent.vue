<template>
    <div>
        <div class="m-card">
            <div class="row justify-content-center">
                <h4>{{title}}</h4>
            </div>
            <img class="img img-fluid" :src="image" alt="" >
            <div class="middle">
                <p class="btn btn-dark card-text"> View Details</p>
            </div>

        </div>
    </div>
</template>
<script>
export default {
    props:[
        'image',
        'title'
    ]
}
</script>
