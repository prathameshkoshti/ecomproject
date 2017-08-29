
<div class="form-group">
	<form  method="post" action="/admin/registrations/store" class="form form-group box-body">
		{{csrf_field()}}
		{{method_field('PUT')}}
		<table class="table">
			<tr>
				<td>
					<span class="">Name</span>
				</td>
				<td>
					<input class="form-control" type="text" name="name" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Date</span>
				</td>
				<td>
					<input type="date" class="form-control" name="date" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Occassion</span>
				</td>
				<td>
					<input class="form-control" type="text" name="occassion" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-In</span>
				</td>
				<td>
					<input class="form-control" type="text" name="check_in" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Check-Out</span>
				</td>
				<td>
					<input class="form-control" type="text" name="check_out" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Phone No.</span>
				</td>
				<td>
					<input class="form-control" type="tel" name="phone" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Email Id</span>
				</td>
				<td>
					<input class="form-control" type="text" name="email" class="" required>
				</td>
			</tr>
			<tr>
				<td>
					<span class="">Address</span>
				</td>
				<td>
					<textarea class="form-control" name="address" rows="5" cols="40" required></textarea>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td style="align-items: right">
					<input type="submit" class="btn-lg btn btn-primary" value="Create" name="submit">
					<a class="btn btn-default btn-lg" href="/admin/registrations/">Cancel</a>
				</td>
			</tr>
		</table>
	</form>
</div>
