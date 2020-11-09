import Vue from "vue";
import App from "./App.vue";
import "bootstrap";
import jQuery from "jquery";
import "popper.js";
import "./assets/app.scss";

window.$ = window.jQuery = jQuery;

new Vue({
  el: "#app",
  render: h => h(App)
});
