<template>
	<div>
		<h1>Payments</h1>
		<hr>
		<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>amount</th>
		      <th>Created</th>
		      <th>Actions</th>
		    </tr>
		  </thead>
		  <tbody>
			    <tr v-for="(payment, index) in payments">
			      	<td>{{ doMath(index) }}</td>
			      	<td>{{ payment.amount }}</td>
			      	<td>{{ payment.created_at }}</td>
			      	<td>
						<button class="btn btn-danger" @click="deletePayment(payment)">Eliminar</button>
			      	</td>
			    </tr>
		  </tbody>
		</table>
	</div>
</template>


<script>
	export default {
		props:['payments'],
		data() {
			return {

				// payments: []
			}
		},
		// mounted() {
		// 	//template strings
		// 	axios.get(`/api/payment/getPaymentByIdUser/${user}`)
		// 		.then(res => {
		// 			this.payments = res.data;
		// 		})
		// 		.catch(err => {
		// 			console.log(err.msg);
		// 		});
		// },
		methods: {
		    doMath: function (index) {
		      return index+1;
		    },
		    deletePayment: function (payment) {
		      	axios.delete(`/api/payment/deletePayment/${payment._id}`)
                    .then(res => {
                    	this.payments = res.data;
                    	alert('Pago eliminado con exito.');
                    })
                    .catch(err => {
                        this.working = false;
                    });
		    }
		}
	}

</script>