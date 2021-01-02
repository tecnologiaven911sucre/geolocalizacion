/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { functionsIn } = require('lodash');

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

$(document).ready(function(){

        let optionReport = $("#tipo");
        
        optionReport.change(function(){
            let valueOpt = optionReport.val();
                if(valueOpt == 1){
                    $("#textReport").css("display","block")
                    $("#camerasReport").css("display","none")
                    $("#drawersReport").css("display","none")
                }else if(valueOpt == 2){
                    $("#textReport").css("display","block")
                    $("#camerasReport").css("display","block")
                    $("#drawersReport").css("display","none")
                }else {
                    $("#textReport").css("display","block")
                    $("#camerasReport").css("display","none")
                    $("#drawersReport").css("display","block")
                }              
                
                
                
                // $.ajax({
                //     url: "/reportes/ajax",
                //     type:'POST',
                //     data: {id: valueOpt,
                //         _token: $('input[name="_token"]').val() 
                //     },
                //     success: function(response){
                //         console.log(response);
                //     }
                // })
        
        })
})