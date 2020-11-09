<template>
  <div>
    <h1>Vehicles List</h1>
    <table class="table">
      <thead>
        <tr>
          <th>Make</th>
          <th>Vehicle Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in list" v-bind:key="item.id">
          <td>{{ item.MakeName }}</td>
          <td>{{ item.VehicleTypeName }}</td>
          <td>
            <button
              type="button"
              class="btn btn-primary"
              data-toggle="modal"
              data-target="#checkoutModal"
            >
              Checkout
            </button>
            <Checkout />
            <button type="button" class="btn btn-primary">Borrow Logs</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
import Vue from "vue";
import axios from "axios";
import VueAxios from "vue-axios";
import Checkout from "./Checkout";

Vue.use(VueAxios, axios);

export default {
  name: "VehiclesList",
  data() {
    return { list: undefined };
  },
  mounted() {
    Vue.axios.get("http://127.0.0.1:8000/api/vehicle").then(resp => {
      this.list = resp.data.Results;
      console.warn(resp);
    });
  },
  components: {
    Checkout
  }
};
</script>
