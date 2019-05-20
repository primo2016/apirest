<template>
	<div>
		<hr>
		<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Phone</th>
		      <th>Site</th>
		      <th>Created</th>
		      <th>Actions</th>
		    </tr>
		  </thead>
		  <tbody>
			    <tr v-for="(user, index) in users">
			      	<td>{{ doMath(index) }}</td>
			      	<td>{{ user.username }}</td>
			      	<td>{{ user.site }}</td>
			      	<td>{{ user.created_at }}</td>
			      	<td>
			      		<a :href="user.link" class="btn btn-primary">Pagos</a>
						<button class="btn btn-danger" @click="deleteUser(user)">Eliminar</button>
			      	</td>
			    </tr>
		  </tbody>
		</table>
	</div>
</template>


<script>
	export default {
		data() {
			return {
				users: [],
				cantidad: 0,
			}
		},
		mounted() {
			//template strings
			axios.get('/api/user/getAllUser')
				.then(res => {
					this.users = res.data;
				})
				.catch(err => {
					console.log(err.msg);
				});
		},
		methods: {
		    doMath: function (index) {
		      return index+1;
		    },
		    deleteUser: function (user) {
		      	axios.delete(`/api/user/deleteUser/${user._id}`)
                    .then(res => {
                    	this.users = res.data;
                    	alert('Usuario eliminado con exito.');
                    })
                    .catch(err => {
                        this.working = false;
                    })
		    }
		}
	}

</script>