<template>
    <div>

        <div class="m-card">
            <div class="row justify-content-center">
                <h4>{{title}}</h4>
            </div>
            <a class="m-card-link" :href="link">
            <img  style="margin-top: 10px;" class="m-card-img img img-fluid" :src="image" alt="" >
            </a>
        </div>

    </div>
</template>
<script>
export default {
    props:[
        'image',
        'title',
        'link'
    ]
}
</script>
