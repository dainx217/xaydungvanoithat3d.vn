
<div class="formhuong">
					<form  action="<?php echo home_url( '/' ); ?>">
						<div class="titlehuong"><h3>Dự toán chi phí xây dựng trọn gói</h3></div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-6">
										<label for="formGroupExampleInput">Loại nhà</label>
									    <select type="text" class="form-control" name="loainha" id="loainha">
									      <option value="3000000">Nhà phố 1 mặt tiền</option>
									      <option value="4500000">Nhà phố 2 mặt tiền</option>
									      <option value="5000000">Biệt thự Hiện đại</option>
									      <option value="5000000">Biệt thự cổ điển</option>
									    </select>
								</div>
								<div class="col-sm-6">
									<label for="formGroupExampleInput">Dịch vụ</label>
									<select type="text" class="form-control" name="giaidoan" id="giaidoan">
									      <option value="3200000">Xây thô</option>
									      <option value="3200000">Xây thô hoàn thiện trung bình</option>
									      <option value="3500000">Xây thô hoàn thiện tốt</option>
									      <option value="5800000">Xây thô cao cấp</option>
									    </select>
								</div>
								<div class="col-sm-6">
									<label for="formGroupExampleInput">Diện tích (m2)</label>
    									<input type="text" class="form-control" name="dientich" id="dientich"  placeholder="Nhập diện tích (m2)">
    									
								</div>
								
								<div class="col-sm-6">
									<label for="formGroupExampleInput">Số tầng</label>
    									<input type="text" class="form-control" name="sotang" id="sotang" placeholder="Nhập số tầng">
								</div>
								<div class="col-sm-6">
									<label for="formGroupExampleInput">Huyện thành phố</label>
									 <select type="text" class="form-control"name="tinh_tp"id="tinh_tp">
									      <?php 
									            echo '<option value="all" data-idp="-1">Chọn Huyện/Thành Phố</option>';
									            $terms = get_terms( array(
									              'taxonomy' => 'dia_diem',
									              'hide_empty' => false ,
									              'parent' => 0
									            ) );  
									            foreach ($terms  as $term ) {
									              ?>
									              <option data-idp="<?=$term->term_id?>" value="<?php echo $term->slug ?>"><?php echo $term->name ?></option>
									              <?php 
									            }
									            ?>
									  </select>
									  <div type="button" name="dutoan" id="dutoan" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >
											  &gt;&gt; Tra cứu &lt;&lt;
								</div>
								</div>
							<div class="col-sm-6">
									<label for="formGroupExampleInput">Huyện thành phố</label>
									 <select type="text" class="form-control"name="xa_huyen"id="xa_huyen">
									      <?php 
								            echo '<option value="all">Chọn xã phường</option>';
								            ?>
									  </select>
							</div>
							<div class="alert alert-danger hide">
 
							</div>
							<div class="alert alert-success hide">
 
							</div>
									

									<!-- Modal -->
									<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h3 class="modal-title" id="exampleModalLabel">Xem dự toán công trình</h3>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div id="indutoan">
									        
									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									      </div>
									    </div>
									  </div>
									</div>
								
							</div>
						</div>
					</form>
				</div>
				