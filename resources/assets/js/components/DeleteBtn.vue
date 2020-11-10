<template>
  <span class="col-2">
    <a class="delete-btn" @click="confirmDelete">Delete</a>
    <modal v-if="showModal == true" @close="showModal = false">
      <h3 slot="header">{{ dataTitle }}</h3>
      <div slot="body">{{ dataMessage }}</div>
      <div slot="footer">
        <button
          slot="footer"
          class="btn btn-danger"
          id="comments"
          @click="deleteNow()"
        >
          <i class="fas fa-flag" id="comment"></i>{{dataConfirm}}
        </button>
        <button class="modal-default-button btn btn-default" @click="showModal = false">{{dataCancel}}</button>
      </div>
    </modal>
  </span>
</template>

<script>
import Modal from "./Modal";

Vue.use(Modal);

export default {
  props: ["dataUrl", "title", "message", "confirm", "cancel"],
  components: {
    Modal
  },
  data: function() {
    return {
      showModal: false,
      url: "",
      dataTitle: "Delete",
      dataMessage: "Are you sure?",
      dataConfirm: "Yes",
      dataCancel: "Cancel"
    };
  },
  mounted() {
    if (this.dataUrl) {
      this.url = this.dataUrl
    }
    if (this.title) {
      this.dataTitle = this.title
    }
    if (this.message) {
      this.dataMessage = this.message
    }
    if (this.confirm) {
      this.dataConfirm = this.confirm
    }
    if (this.cancel) {
      this.dataCancel = this.cancel
    }
  },

  methods: {
    confirmDelete: function() {
      this.showModal = true
    },
    deleteNow: function() {
      axios.delete(this.url).then(response => {
        window.location.reload()
      })
    }
  }
};
</script>

<style scoped>
.delete-btn {
  cursor: pointer;
}
</style>