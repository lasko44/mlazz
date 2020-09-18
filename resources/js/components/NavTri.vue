<template>
    <div>
        <div v-show="triangleVisible" class="triangle"></div>
        <ul class="m-nav">
            <li><a href="/about">About Me</a></li>
            <li>Projects</li>
            <li>Resumé</li>
            <li>GitHub</li>
        </ul>
    </div>
</template>
<script>
    export default {
        data: function () {
            return{
                triangleVisible: false,
                navVisible: false
            }
        },
        created() {
            setTimeout(() => this.triangleVisible = true, 500);

        }
    }
</script>
