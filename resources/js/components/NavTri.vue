<template>
    <div>
        <div v-show="triangleVisible" class="m-triangle"></div>
        <ul class="mm-nav">
            <li><a href="/about">About Me</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/resume">Resumé</a></li>
            <li><a href="https://github.com/lasko44" target="_blank">GitHub</a></li>
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
