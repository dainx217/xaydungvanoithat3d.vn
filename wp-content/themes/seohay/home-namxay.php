<div class="formhuong">
					<form >
						<div class="titlehuong"><h3>Xem tuổi xây nhà</h3></div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label for="exampleFormControlSelect1">Năm sinh</label>
									    <select type="text" name="namsinhxay" class="form-control" id="namsinhxay">

									    	<?php for ($i = 1960; $i < 2020 ; $i++) {
									    		echo ' <option value='.$i.'>'.$i.'</option>';
									    	} ?>
									    </select>
								</div>
								<div class="col-sm-12">
									<label for="exampleFormControlSelect1">Giới tính</label>
								<select type="text" name="gioitinhxay" class="form-control" id="gioitinhxay">
									      <option value="nam">Nam</option>
									      <option value="nu">Nữ</option>
									    </select>
								</div>
								<div class="col-sm-12">
									<label for="exampleFormControlSelect1">Năm xây nhà</label>
									    <select type="text" name="namxay" class="form-control" id="namxay">

									    	<?php for ($i = 2017; $i < 2050 ; $i++) {
									    		echo ' <option value='.$i.'>'.$i.'</option>';
									    	} ?>
									    </select>
								

								<div type="button" name="Tracuu" id="xemnam" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" >
											  &gt;&gt; Tra cứu &lt;&lt;
											</div>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h2 class="modal-title" id="exampleModalLabel">Xem năm xây nhà </h2>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        <div id="xemnamxay">
									      	
													</div>
											      </div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											      </div>
											    </div>
											  </div>
											</div>
								</div>
							</div>
						</div>
					</form>
				</div>