<template>
    <div v-bind:class="defineCor">
                    <div class="panel-heading">{{titulo}}</div>

                    <div class="panel-body">
                        <slot></slot>
                    </div>
                </div>
</template>

<script>
    export default {
        props:['titulo','cor'],
        computed:{
            defineCor: function(){
                return "panel "+ (this.cor || "panel-default");
            }
        }
        }
    
</script>
<style media="screen">
    .blue {
    border-color: #103eb1;
}

.blue > .panel-heading {
    color: #f0f5f1;
    background-color: #103eb1;
    border-color: #103eb1;
}

    .orange {
    border-color: #f57511;
}

.orange > .panel-heading {
    color: #f0f5f1;
    background-color: #f57511;
    border-color: #f57511;
}

</style>
