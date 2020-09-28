<template>
    <div>
        <div v-bind:class="{'triangle':showTri,'hide-triangle':!showTri}"></div>
        <img alt="merik compass" class="compass"
             src="/images/comp.png" height="150"
             v-bind:class="{'compass-rotate-left':showTri,
             'compass-rotate-right':rotateBack}"
             @click="showTri=!showTri; rotateBack=!rotateBack"
        >
        <ul v-if="showTri" class="m-nav">
            <li><a href="/">Home</a> </li>
            <li><a href="/about">About Me</a></li>
            <li><a href="/projects">Projects</a></li>
            <li><a href="/resume">Resumé</a></li>
            <li><a href="https://github.com/lasko44" target="_blank">GitHub</a></li>
        </ul>
    </div>
</template>
<script>
export default {
    data:function (){
        return{
            showTri: false,
            rotateBack:true
        }
    },

}
</script>
