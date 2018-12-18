<?php require_once 'header.php' ?>
	<div class="container">
		<div class="row">
			<h1 class="text-center">Cập nhật điểm cho thí sinh</h1>
			<div class="col-sm-6">
				<h2>Thông tin cá nhân thí sinh</h2>
				<p><span>Mã thí sinh : </span><?php echo $this->data->id ?></p>
				<p><span>Họ và tên : </span><?php echo $this->data->fullname ?></p>
				<p><span>Địa chỉ : </span><?php echo $this->data->address ?></p>
				<p><span>Điện ưu tiên : </span><?php echo ($this->data->prioritize) == 1 ? "Ưu tiên" : "Không ưu tiên" ?></p>
			</div>

			<div class="col-sm-6 text-center">
				<h2>Điểm thi</h2>
				<form method="POST" action="index.php?controller=score&action=setScore&student=<?php echo $this->data->id ?>">
					<?php
						$table1Select = null;
						$table2Select = null;
						$table3Select = null;
						$score11 = null;
						$score12 = null;
						$score13 = null;
						$score21 = null;
						$score22 = null;
						$score23 = null;
						$score31 = null;
						$score32 = null;
						$score33 = null;
						if(isset($this->score)){
							if($this->score->class_id == 1){
								$table1Select = 'selected';
								$score11 = $this->score->score1;
								$score12 = $this->score->score2;
								$score13 = $this->score->score3;
							}else if ($this->score->class_id == 2 ){
								$table2Select = 'selected';
								$score21 = $this->score->score1;
								$score22 = $this->score->score2;
								$score23 = $this->score->score3;
							}else{
								$table3Select = 'selected';
								$score31 = $this->score->score1;
								$score32 = $this->score->score2;
								$score33 = $this->score->score3;
							}
						}

						
					 ?>
					<select class="form-control" name="class" onchange="changeClass(this.value)">
					  <option value="table1" <?php echo $table1Select ?>>Khối A</option>
					  <option value="table2" <?php echo $table2Select ?>>Khối B</option>
					  <option value="table3" <?php echo $table3Select ?>>Khối C</option>
					</select>
					<br>
				<table class="table table-bordered" id="table1">
					<tr>
						<td>Điểm toán : </td>
						<td><input type="number" name="score11" placeholder="Nhập điểm toán" value="<?php echo $score11 ?>"></td>
					</tr>
					<tr>
						<td>Điểm lý : </td>
						<td><input type="number" name="score12" placeholder="Nhập điểm lý" value="<?php echo $score12 ?>"></td>
					</tr>

					<tr>
						<td>Điểm hóa : </td>
						<td><input type="number" name="score13" placeholder="Nhập điểm hóa" value="<?php echo $score13 ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Cập nhật điểm"></td>
					</tr>
				</table>
				<table class="table table-bordered" id="table2">
					<tr>
						<td>Điểm toán : </td>
						<td><input type="number" name="score21" placeholder="Nhập điểm toán" value="<?php echo $score21 ?>"></td>
					</tr>
					<tr>
						<td>Điểm hóa : </td>
						<td><input type="number" name="score22" placeholder="Nhập điểm hóa" value="<?php echo $score22 ?>"></td>
					</tr>

					<tr>
						<td>Điểm sinh : </td>
						<td><input type="number" name="score23" placeholder="Nhập điểm sinh" value="<?php echo $score23 ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Cập nhật điểm"></td>
					</tr>
				</table>
				<table class="table table-bordered" id="table3">
					<tr>
						<td>Điểm văn : </td>
						<td><input type="number" name="score31" placeholder="Nhập điểm văn" value="<?php echo $score31 ?>"></td>
					</tr>
					<tr>
						<td>Điểm sử : </td>
						<td><input type="number" name="score32" placeholder="Nhập điểm sử" value="<?php echo $score32 ?>"></td>
					</tr>

					<tr>
						<td>Điểm địa : </td>
						<td><input type="number" name="score33" placeholder="Nhập điểm địa" value="<?php echo $score33 ?>"></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Cập nhật điểm"></td>
					</tr>
				</table>
			</form>
			</div>
		</div>
	</div>
<?php require_once 'footer.php' ?>