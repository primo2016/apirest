<template>

  <div class="col-lg-6">
    <hr>
    <form  @submit.prevent="submit">
        <div class="form-group">
            <label for="username">Phone:</label>
            <input type="number" class="form-control" v-model="form.phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" v-model="form.password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="site">Site:</label>
            <input type="text" class="form-control" v-model="form.site" placeholder="Site">
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
        data() {
            return {
                working: false,
                form: {
                    phone: '',
                    password: '',
                    site: '',
                }
            }
        },
        methods: {
            submit() {
                this.working = true,
                axios.post('/api/user/addUser', this.form)
                    .then(res => {
                        if(res.message) {
                            alert(res.message);
                        }
                        this.working = false;
                        this.form = {};
                    })
                    .catch(err => {
                        this.working = false;
                    })
            }
        }
    }
</script>