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
                                       <button type="button" class="btn btn-success text-white me-2" @click="AddNew()" v-if="!FromShow" > <i class="ti ti-plus"></i> ເພີ່ມໃໝ່</button>
                                       <button type="button" class="btn btn-info text-white me-2" :class="checkFrom" v-if="FromShow" @click="SaveFrom()" > <i class="ti ti-save"></i> ບັນທຶກ</button>
                                       <button type="button" class="btn btn-danger text-white" v-if="FromShow" @click="Cancel()"> <i class="ti ti-close"></i> ຍົກເລີກ</button>
                                    </div>
                                </div>
                            </div>
                            {{ FromData }}
                            <div class="from-add p-4 row" v-if="FromShow">
                                <div class="col-md-4">
                                        <img src="assets/images/big/img4.jpg" class="img-responsive radius">
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                                    <label class="form-label">ຊື່ສິນຄ້າ</label>
                                                    <input type="text"  class="form-control" placeholder="..." v-model="FromProduct.name">
                                                    </div>
                                    <div class="form-group">
                                                    <label class="form-label">ຈຳນວນ</label>
                                                    <input type="number"  class="form-control" placeholder="..." v-model="FromProduct.amount">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                    <label class="form-label">ລາຄາຊື້</label>
                                                    <input type="number"  class="form-control" placeholder="..." v-model="FromProduct.price_buy">
                                                    </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                                <div class="form-group">
                                                    <label class="form-label">ລາຄາຂາຍ</label>
                                                    <input type="number"  class="form-control" placeholder="..." v-model="FromProduct.price_sell">
                                                    </div>
                                                        </div>
                                                    </div>

                                </div>

                            </div>
                            <div class="table-responsive"  v-if="!FromShow">
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
                                        <tr v-for="list in FromData" :key="list.id">
                                            <td class="text-center">{{list.id}}</td>
                                            <td  width="150"><img src="assets/images/big/img4.jpg" class="img-responsive radius"></td>
                                            <td><span class="badge bg-success rounded-pill">{{list.name}}</span> </td>
                                            <td class="text-center" >{{list.amount}}</td>
                                            <td class="text-right"><span class="text-success">{{list.price_buy}}</span></td>
                                            <td class="text-center">
                                                <button class="pull-right btn btn-circle btn-info text-white me-2" @click="EditProduct(list.id)" ><i class="ti-pencil"></i></button>
                                                <button class="pull-right btn btn-circle btn-danger text-white" @click="DelProduct(list.id)" ><i class="ti-trash"></i></button>
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
        return {
            FromData:[{ "id": 25, "name": "ເກີບ", "amount": 20, "price_buy": 20000, "price_sell": 30000 }, { "id": 339, "name": "ໄມ້ຖູແຂ້ວ", "amount": 12, "price_buy": 35000, "price_sell": 45000 }, { "id": 417, "name": "ແຟ້ມ ໂອໂມ້", "amount": 60, "price_buy": 30000, "price_sell": 55000 }],
            FromShow:false,     //  ສະແດງແບບຟອມ
            FromType:true,      // ປະເພດຂອງຟອມ true = ບັນທຶກໃໝ່, false = ອັບເດດ
            FromID:'',          // id ສຳລັບອັບເດດ
            FromProduct:{
                name:'',
                amount:'',
                price_buy:'',
                price_sell:''
            },
        };
    },

    mounted() {},
    computed:{
            checkFrom(){
                if(this.FromProduct.name=='' || this.FromProduct.amount=='' || this.FromProduct.price_buy == '' || this.FromProduct.price_sell=='')
                {
                    return 'disabled';
                } else {
                    return ''
                }
            }
    },
    methods: {
        AddNew(){
            this.FromShow = true
        },
        Cancel(){
            this.FromProduct.name = ''
            this.FromProduct.amount = ''
            this.FromProduct.price_buy = ''
            this.FromProduct.price_sell = ''
            this.FromShow = false
        },
        SaveFrom(){
             //console.log(this.FromProduct)

            if(this.FromType){      // ບັນທຶກໃໝ່
                this.FromData.push({
                    id: Math.floor(Math.random() * 1000),
                    name:this.FromProduct.name,
                    amount: this.FromProduct.amount,
                    price_buy: this.FromProduct.price_buy,
                    price_sell: this.FromProduct.price_sell
                });

                this.FromProduct.name = ''
                this.FromProduct.amount = ''
                this.FromProduct.price_buy = ''
                this.FromProduct.price_sell = ''
                this.FromShow = false

            } else {    // ອັບເດດ

                // var item = {...}
                // var items = [{id:2}, {id:2}, {id:2}];
                // var foundItem = items.filter((x) => x.id ==  item.id).pop();
                // foundItem = item;


                /// update array
                this.FromData.find((i)=>i.id==this.FromID).name = this.FromProduct.name
                this.FromData.find((i)=>i.id==this.FromID).amount = this.FromProduct.amount
                this.FromData.find((i)=>i.id==this.FromID).price_buy = this.FromProduct.price_buy
                this.FromData.find((i)=>i.id==this.FromID).price_sell = this.FromProduct.price_sell

                this.FromShow = false
                this.FromType = true
                this.FromID = ''
                this.FromProduct.name = ''
                this.FromProduct.amount = ''
                this.FromProduct.price_buy = ''
                this.FromProduct.price_sell = ''

            }

        },
        EditProduct(id){
               // console.log('ແກ້ໄຂ ID:'+id)
                this.FromShow = true
                this.FromType = false
                this.FromID = id
               let item = this.FromData.find((i)=>i.id == id);
            //    console.log(item.id+ ' - '+ item.name+' - '+ item.amount)

                this.FromProduct.name = item.name
                this.FromProduct.amount = item.amount
                this.FromProduct.price_buy = item.price_buy
                this.FromProduct.price_sell = item.price_sell

        },
        DelProduct(id){
              //  console.log('ລຶບ ID:'+id)
            // ຄົ້ນຫາ id ຂອງລາຍການ ໂດຍນິຍາມ i.id ໃຊ້ຟັງຊັ່ນ map ຄົ້ນຫາ ແລະ ຈັບໂຕແປ ໂດຍປຽບທຽບກັບ id ຈາກຟັງຊັ່ນ indexOf ຈະໄດ້ index 
            let index = this.FromData.map(i=>i.id).indexOf(id) 
            this.FromData.splice(index,1)                       //ແລະນຳເອົາໂຕເລກ index ໄປລຶບອອກໂດຍ ຟັງຊັ່ນ splice

            // ຂຽນແບບຫຍໍ້ໆ this.FromData.splice(this.FromData.map(i=>i.id).indexOf(id),1)
        }

    },
    watch:{

    }
};
</script>

<style></style>