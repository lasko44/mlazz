<template>
    <div>
        <div v-show="triangleVisible" class="triangle"></div>
        <ul v-show ="navVisible" class="m-nav">
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
            setTimeout(() => this.triangleVisible = true, 4000);
            setTimeout(() => this.navVisible = true, 5500);
        }
    }
</script>
