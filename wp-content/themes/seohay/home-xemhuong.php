
<div class="formhuong">
					<form method="post" >
						<div class="titlehuong"><h3>Xem hướng nhà</h3></div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-12">
									<label for="exampleFormControlSelect1">Năm sinh</label>
									    <select type="text" name="namsinh" class="form-control" id="namsinh">

									    	<?php for ($i = 1960; $i < 1999 ; $i++) {
									    		echo ' <option value='.$i.'>'.$i.'</option>';
									    	} ?>
									    </select>
								</div>
								<div class="col-sm-12">
									<label for="exampleFormControlSelect1">Giới tính</label>
									<select type="text" name="gioitinh" class="form-control" id="gioitinh">
									      <option value="nam">Nam</option>
									      <option value="nu">Nữ</option>
									    </select>
								</div>
								<div class="col-sm-12">
									<label for="exampleFormControlSelect1">Hướng nhà</label>
										    <select type="text" name="huong" class="form-control" id="huong">
										      <option value="dong-bac">Đông Bắc</option>
										      <option value="tay">Hướng Tây</option>
										      <option value="tay-nam">Hướng Tây Nam</option>
										      <option value="tay-bac">Hướng Tây Bắc</option>
										      <option value="bac">Hướng Bắc</option>
										      <option value="nam">Hướng nam</option>
										      <option value="dong-nam">Hướng Đông Nam</option>
										      <option value="dong">Hướng Đông</option>
										    </select>
										    
							<div type="button" name="Tracuu" id="Tracuu" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >
											  &gt;&gt; Tra cứu &lt;&lt;
											</div>
									<!-- Modal -->
									<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h2 class="modal-title" id="exampleModalLabel">Xem Hướng Nhà </h2>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        <div id="loadpost1">
									      	
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



	