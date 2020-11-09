<template>
  <div
    class="modal fade"
    id="checkoutModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="checkoutModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="checkoutModalLabel">Checkout</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form>
          <div class="modal-body">
            <div class="form-group">
              <label for="customerName">Customer Name</label>
              <input
                type="text"
                class="form-control"
                id="customerName"
                placeholder="Customer Name"
              />
            </div>
            <div class="form-group">
              <label for="checkoutDateTime">Checkout Date & Time</label>
              <DatePicker
                v-model="value1"
                type="datetime"
                placeholder="Select datetime"
                :show-time-panel="showTimePanel"
                @close="handleOpenChange"
              >
                <template v-slot:footer>
                  <button class="mx-btn mx-btn-text" @click="toggleTimePanel">
                    {{ showTimePanel ? "select date" : "select time" }}
                  </button>
                </template>
              </DatePicker>
            </div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
import DatePicker from "vue2-datepicker";
import "vue2-datepicker/index.css";

export default {
  name: "Checkout",
  data() {
    return {
      value1: null,
      value2: [],
      showTimePanel: false,
      showTimeRangePanel: false
    };
  },
  methods: {
    toggleTimePanel() {
      this.showTimePanel = !this.showTimePanel;
    },
    toggleTimeRangePanel() {
      this.showTimeRangePanel = !this.showTimeRangePanel;
    },
    handleOpenChange() {
      this.showTimePanel = false;
    },
    handleRangeClose() {
      this.showTimeRangePanel = false;
    }
  },
  components: { DatePicker }
};
</script>
