<template>
    <div>
        <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Store</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
					<div class="col-lg-3 col-md-6">
						<div class="card border">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="d-flex no-block align-items-center">
											<div>
												<h3><i class="ti-stats-up"></i></h3>
												<p class="text-muted">ລາຍຮັບ</p>
											</div>
											<div class="ms-auto">
												<h2 class="counter text-primary">12.000.000</h2>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="progress">
											<div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card border">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="d-flex no-block align-items-center">
											<div>
												<h3><i class="ti-stats-down"></i></h3>
												<p class="text-muted">ລາຍຈ່າຍ</p>
											</div>
											<div class="ms-auto">
												<h2 class="counter text-cyan">8.500.000</h2>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="progress">
											<div class="progress-bar bg-cyan" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card border">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="d-flex no-block align-items-center">
											<div>
												<h3><i class="ti-pie-chart"></i></h3>
												<p class="text-muted">ກຳໄລ</p>
											</div>
											<div class="ms-auto">
												<h2 class="counter text-purple">4.500.000</h2>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="progress">
											<div class="progress-bar bg-purple" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="card border">
							<div class="card-body">
								<div class="row">
									<div class="col-md-12">
										<div class="d-flex no-block align-items-center">
											<div>
												<h3><i class="ti-package"></i></h3>
												<p class="text-muted">ສ໋ອກສິນຄ້າ</p>
											</div>
											<div class="ms-auto">
												<h2 class="counter text-success">431</h2>
											</div>
										</div>
									</div>
									<div class="col-12">
										<div class="progress">
											<div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <div>
                                        <h3 class="card-title">ລາຍການ ສະຕ໋ອກສິນຄ້າ</h3>
                                    </div>
                                    <div class="ms-auto">
                                       <button type="button" class="btn btn-success text-white me-2"> <i class="ti ti-plus"></i> ເພີ່ມໃໝ່</button>
                                       <button type="button" class="btn btn-info text-white me-2"> <i class="ti ti-save"></i> ບັນທຶກ</button>
                                       <button type="button" class="btn btn-danger text-white"> <i class="ti ti-close"></i> ຍົກເລີກ</button>
                                    </div>
                                </div>
                            </div>
                            <div class="from-add p-4 row">
                                <div class="col-md-4">
                                        <img src="assets/images/big/img4.jpg" class="img-responsive radius">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                                    <label class="form-label">ຊື່ສິນຄ້າ</label>
                                                    <input type="text"  class="form-control" placeholder="...">
                                                    </div>
                                    <div class="form-group">
                                                    <label class="form-label">ຈຳນວນ</label>
                                                    <input type="number"  class="form-control" placeholder="...">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                    <label class="form-label">ລາຄາຊື້</label>
                                                    <input type="number"  class="form-control" placeholder="...">
                                                    </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                    <label class="form-label">ລາຄາຂາຍ</label>
                                                    <input type="number"  class="form-control" placeholder="...">
                                                    </div>
                                                        </div>
                                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap footable footable-1 footable-paging footable-paging-center">
                                    <thead>
                                        <tr>
                                            <th width="40" class="text-center">#</th>
                                            <th  width="150">ຮູບສິນຄ້າ</th>
                                            <th>ຊື່ສິນຄ້າ</th>
                                            <th width="50" class="text-center">ຈຳນວນ</th>
                                            <th width="180" class="text-right">ລາຄາ</th>
                                            <th width="50" class="text-center">ຈັດການ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td  width="150"><img src="assets/images/big/img4.jpg" class="img-responsive radius"></td>
                                            <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                            <td class="text-center" >12</td>
                                            <td class="text-right"><span class="text-success">$24</span></td>
                                            <td class="text-center">
                                                <button class="pull-right btn btn-circle btn-info text-white me-2" ><i class="ti-pencil"></i></button>
                                                <button class="pull-right btn btn-circle btn-danger text-white" ><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td  width="150"><img src="assets/images/big/img4.jpg" class="img-responsive radius"></td>
                                            <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                            <td class="text-center" >10</td>
                                            <td class="text-right"><span class="text-success">$24</span></td>
                                            <td class="text-center">
                                                <button class="pull-right btn btn-circle btn-info text-white me-2" ><i class="ti-pencil"></i></button>
                                                <button class="pull-right btn btn-circle btn-danger text-white" ><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td  width="150"><img src="assets/images/big/img4.jpg" class="img-responsive radius"></td>
                                            <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                            <td class="text-center" >10</td>
                                            <td class="text-right"><span class="text-success">$24</span></td>
                                            <td class="text-center">
                                                <button class="pull-right btn btn-circle btn-info text-white me-2" ><i class="ti-pencil"></i></button>
                                                <button class="pull-right btn btn-circle btn-danger text-white" ><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td  width="150"><img src="assets/images/big/img4.jpg" class="img-responsive radius"></td>
                                            <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                            <td class="text-center" >10</td>
                                            <td class="text-right"><span class="text-success">$24</span></td>
                                            <td class="text-center">
                                                <button class="pull-right btn btn-circle btn-info text-white me-2" ><i class="ti-pencil"></i></button>
                                                <button class="pull-right btn btn-circle btn-danger text-white" ><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td  width="150"><img src="assets/images/big/img4.jpg" class="img-responsive radius"></td>
                                            <td><span class="badge bg-success rounded-pill">sale</span> </td>
                                            <td class="text-center" >10</td>
                                            <td class="text-right"><span class="text-success">$24</span></td>
                                            <td class="text-center">
                                                <button class="pull-right btn btn-circle btn-info text-white me-2" ><i class="ti-pencil"></i></button>
                                                <button class="pull-right btn btn-circle btn-danger text-white" ><i class="ti-trash"></i></button>
                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
</template>

<script>
export default {
    name: "Home",

    data() {
        return {};
    },

    mounted() {},

    methods: {},
};
</script>

<style></style>