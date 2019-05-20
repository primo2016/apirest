<template>

  <div class="col-lg-6">
    <hr>
    <form @submit.prevent="submit">
        <div class="form-group">
            <label for="username">Amount:</label>
            <input type="number" class="form-control" v-model="form.amount" placeholder="Amount">
        </div>

        <button type="submit" class="btn btn-primary" :disable="working">
            <span v-if="working">Guardando...</span>
            <span v-else>Guardar</span>
        </button>
      <!-- <button class="btn btn-primary" @click="addUser()">Guardar</button> -->
    </form>
  </div>

</template>


<script>
    export default {
        props: ['phone'],
        data() {
            return {
                working: false,
                form: {
                    phone: this.phone,
                    amount: ''
                }
            }
        },
        methods: {
            submit() {
                this.working = true;
                axios.post('/api/payment/addPayment', this.form)
                    .then(res => {
                        this.working = false;
                        this.form.amount = '';
                    })
                    .catch(err => {
                        this.working = false;
                    })
            }
        }
    }
</script>