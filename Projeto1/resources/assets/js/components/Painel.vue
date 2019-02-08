




















<template>
 
        <div v-bind:class="defineCor">
          <div class="panel-heading">
             {{ titulo }}
          </div>

          <div class="panel-body">
              <slot>

              </slot>
          </div>

        </div>
      </div>
   
</template>

<script>
export default {
  props: ["titulo", "cor"],
    computed:{
        defineCor: function(){
            return "panel "+ (this.cor || "panel-default");
        }
    }

};
</script>

<style>
.panel-purple{
    border-color:purple;
}
.panel-purple > .panel-heading{
    color:white;
    background-color:purple;
    border-color:purple;
    
}

.panel-orange{
    border-color:orange;
}
.panel-orange > .panel-heading{
    color:white;
    background-color:orange;
    border-color:orange;
}
</style>