<template>
    <div class="home">
        <div class="home-title">
            <h1 id="home-name">Matt Laszkiewicz</h1>
        </div>
        <div v-show="visible" class="sub">
            <h4 class="title">Full Stack Web Developer</h4>
        </div>
    </div>

</template>
<script>
    export default {
        data: function () {
            return{
                visible: false
            }
        },
      created() {
          setTimeout(() => this.visible = true, 500);
      }
    }
</script>
