<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Start Trial</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<form action="/Send" method='post'>
					<div class="modal-body ">
						<div class="mt-3" id="result">
							<div class="input-group mb-3 d-flex flex-column">
									<div class="p-2">
										<input autocomplete="off" id="nameinput" placeholder="Name"  name="name" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
									</div>
									<br>
									<div class="p-2">
										<input autocomplete="off"  id="phoneinput"  placeholder="Phone"  name="phonenumber" value="" class=" form-control tel">
									</div>
								</form>
								<div class="mt-3" id="error">
								</div>		
							</div>
						</div>
						<?= \Config\Services::validation()->listErrors(); ?>
						<?= csrf_field() ?>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" value="Send" class="btn btn-primary" />
						</div>
					</div>
				</form>
			</div>
  		</div>
	</div>