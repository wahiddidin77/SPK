				<div class = "container-fluid">
					<h4 class = "page-title">Siswa</h4>
					<div class="row">
						<div class="col-md-9">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Nilai Kelolosan</h4>
								</div>
								<div class="card-body">
									<p>Kecerdana Logis Matematis</p>
									<div class="progress-card">
										<div class="d-flex justify-content-between mb-1">
											<span class="text-muted"></span>
											<span class="text-muted fw-bold"> Value : <?php $value = $nilai != null ? $nilai[0]['nilai'] : 1; echo $value; ?></span>
										</div>
										<div class="progress mb-2" style="height: 7px;">
											<div class="progress-bar bg-info" role="progressbar" style="width: <?php $value = $nilai != null ? $nilai[0]['nilai'] : 1; echo $value; ?>%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="78%"></div>
										</div>
									</div>
									<br>
									<p>Kecerdasan Spasial Ruang</p>
									<div class="progress-card">
										<div class="d-flex justify-content-between mb-1">
											<span class="text-muted"></span>
											<span class="text-muted fw-bold"> Value : <?php $value = $nilai != null ? $nilai[1]['nilai'] : 1; echo $value; ?></span>
										</div>
										<div class="progress mb-2" style="height: 7px;">
											<div class="progress-bar bg-success" role="progressbar" style="width: <?php $value = $nilai != null ? $nilai[1]['nilai'] : 1; echo $value; ?>%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="78%"></div>
										</div>
									</div>
									<br>
									<p>Tingkat Kecocokan</p>
									<div class="progress-card">
										<div class="d-flex justify-content-between mb-1">
											<span class="text-muted"></span>
											<span class="text-muted fw-bold"> Value : <?php $value = $nilai != null ? $nilai[2]['nilai'] : 1; echo $value; ?></span>
										</div>
										<div class="progress mb-2" style="height: 7px;">
											<div class="progress-bar bg-danger" role="progressbar" style="width: <?php $value = $nilai != null ? $nilai[2]['nilai'] : 1; echo $value; ?>%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="78%"></div>
										</div>
									</div>
									<br>
									<p>Kepribadian</p>
									<div class="progress-card">
										<div class="d-flex justify-content-between mb-1">
											<span class="text-muted"></span>
											<span class="text-muted fw-bold"> Value : <?php $value = $nilai != null ? $nilai[3]['nilai'] : 1; echo $value; ?></span>
										</div>
										<div class="progress mb-2" style="height: 7px;">
											<div class="progress-bar bg-warning" role="progressbar" style="width: <?php $value = $nilai != null ? $nilai[3]['nilai'] : 1; echo $value; ?>%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" data-toggle="tooltip" data-placement="top" title="" data-original-title="78%"></div>
										</div>
									</div>
									<br>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="card">
							<?php $value = $nilai != null ? Fuzzy($nilai[0]['nilai'], $nilai[1]['nilai'], $nilai[2]['nilai'], $nilai[3]['nilai']) : 1; ?>
								<div class="card-header">
									<h4 class="card-title">Penilaian Beasiswa</h4>
								</div>
								<div class="card-body">
									<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
								</div>
								<div class="card-footer">
									<?php kinerja($value); ?>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-3">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Kinerja Pegawai</h4>
								</div>
								<div class="card-body">
									<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
								</div>
								<div class="card-footer">
									<center><legend class="btn-rounded btn-success btn-lg">Sangat Baik</legend></center>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			