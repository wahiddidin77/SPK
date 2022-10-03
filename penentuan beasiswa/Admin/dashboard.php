				<!-- DASHBOARD -->
				<div class = "container-fluid">
					<h4 class = "page-title">Dashboard</h4>
					<!-- ROW -->
					<div class="row">
							
							<div class="col-md-3">
								<div class="card card-stats card-warning">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-code"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Teknik Elektronik</p>
													<h4 class="card-title"><?php echo count_pegawai(1); ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-3">
								<div class="card card-stats card-success">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-file-code-o"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Teknik Kendaraan</p>
													<h4 class="card-title"><?php echo count_pegawai(2); ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-danger">
									<div class="card-body">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-line-chart"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Manajemen Perhotelan</p>
													<h4 class="card-title"><?php echo count_pegawai(3); ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-unlock"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Desain Grafis / Multimedia</p>
													<h4 class="card-title"><?php echo count_pegawai(4); ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="card card-stats card-primary">
									<div class="card-body ">
										<div class="row">
											<div class="col-5">
												<div class="icon-big text-center">
													<i class="la la-support"></i>
												</div>
											</div>
											<div class="col-7 d-flex align-items-center">
												<div class="numbers">
													<p class="card-category">Teknik Jaringan Komputer</p>
													<h4 class="card-title"><?php echo count_pegawai(5); ?></h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
							<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Profil</h4>
								</div>
								<div class="card-body">
									<p>Nama</p>
									<input type="text" class="form-control" id="disableinput" value="<?php echo $data_admin['nm_lengkap']; ?>" disabled>
									<br>
									<p>Jenis Kelamin</p>
									<input type="text" class="form-control" id="disableinput" value="<?php echo $data_admin['jeniskelamin']; ?>" disabled>
									<br>
									<p>Jurusan</p>
									<input type="text" class="form-control" id="disableinput" value="Administrator" disabled>
									<br>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card card-tasks">
									<div class="card-header ">
										<h4 class="card-title">Calon Siswa</h4>
									</div>
									<div class="card-body ">
										<div class="table-full-width">
											<table class="table">
												<thead>
													<tr>
														<th>
															<!-- <div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input  select-all-checkbox" type="checkbox" data-select="checkbox" data-target=".task-select">
																	<span class="form-check-sign"></span>
																</label>
															</div> -->
															<center>No</center>
														</th>
														<th>Nama Siswa</th>
														<th>Aksi</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$halaman = 3;
													$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
													$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
													$total = mysqli_num_rows($koneksi->query('SELECT * FROM pegawai WHERE id_posisi=6'));
													$pages = ceil($total/$halaman);
													
													$result = $koneksi->query("SELECT * FROM pegawai WHERE id_posisi=6 LIMIT $mulai, $halaman");
													$no = $mulai+1;
													while($data = $result->fetch_array()) {
													?>
													<tr>
														<td>
															<!-- <div class="form-check">
																<label class="form-check-label">
																	<input class="form-check-input task-select" type="checkbox">
																	<span class="form-check-sign"></span>
																</label>
															</div> -->
															<center><?php echo $no++; ?></center>
														</td>
														<td><?php echo $data['nm_pegawai']; ?></td>
														<td class="td-actions text-right">
															<div class="form-button-action">
																<a type="button" data-toggle="tooltip" title="Edit Posisi" class="btn btn-link <btn-simple-primary" href="?page=EditPosisiPegawai&id=<?php echo $data['id_pegawai'];?>">
																	<i class="la la-edit"></i>
																</a>
																<a type="button" data-toggle="tooltip" title="Hapus" class="btn btn-link btn-simple-danger" href="hapus.php?id=<?php echo $data['id_pegawai'];?>">
																	<i class="la la-times"></i>
																</a>
															</div>
														</td>
													</tr>
													<?php 
													}
													?>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer">
										<ul class="pagination pg-primary">
											<?php
											for($i= 1; $i <= $pages; $i++) {
											?>
											<li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i;?></a></li>
											<?php } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				<!-- DASHBOARD -->
