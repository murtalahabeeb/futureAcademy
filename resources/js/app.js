/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

const { default: Axios } = require('axios');
const { isEmpty } = require('lodash');

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

$("#login-form").on('submit',function(e){
    e.preventDefault();
    console.log("form submitted");
    Axios.post($(this).attr('action'),{

        email:$("#email").val(),
        
        password:$("#password").val(),
        remember:$("#remember").isChecked()

    }).then(function(response) {
        console.log(response.StatusCode);
        window.location.href="/home";
    }).catch(function(error) {
        $("#password-error-list").html("");
        $("#email-error-list").html("");
        if(!isEmpty(error.response.data.errors.email)){
        error.response.data.errors.email.forEach(element => {
            $("#email-error-list").append("<li>"+element+"</li>");;
        });
    }
    else{
        $("#email-error-list").html("");
    }
    if(!isEmpty(error.response.data.errors.password)){
        error.response.data.errors.password.forEach(element => {
            $("#password-error-list").append("<li>"+element+"</li>");

        });
    }else{
        $("#password-error-list").html("");
    }

        // console.log([0]);
        
    });
});

$("#reg-form").on('submit',function(e){
    e.preventDefault();
    console.log("form submitted");
    Axios.post($(this).attr('action'),{
        name:$("#name").val(),
        email:$("#reg-email").val(),
        dob:$("#dob").val(),
        password:$("#reg-password").val(),
        password_confirmation:$("#password_confirmation").val()

    }).then(function(response) {
        console.log(response.StatusCode);
        window.location.href="/home";
    }).catch(function(error) {
        
        if(!isEmpty(error.response.data.errors.email)){
            console.log(error.response.data.errors.email);
        }
        else{
            $("#email-error-list").html("");
        }
        if(!isEmpty(error.response.data.errors.password)){
        
         }else{
            $("#password-error-list").html("");
        }

        // console.log([0]);
        
    });
});