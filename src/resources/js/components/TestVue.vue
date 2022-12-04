<template>
  <label :for="name" class="form-label">{{ lavel }}</label>
  <input :type="type" :name="name" :value="value" :placeholder="placeholder" class="form-control" />
</template>

<script>
export default {
  name: "input",
  props: {
    value: { type: String, required: true },
    type: { type: String, required: true },
    name: { type: String, required: true },
    lavel: { type: String, required: true },
    placeholder: { type: String, required: false }
  },
  methods: {
  }
};
</script>