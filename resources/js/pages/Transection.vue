<template>
  <div>
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard 1</h4>
      </div>
      <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb justify-content-end">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active">Transection</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h4 class="card-title">ການເຄື່ອນໄຫວ</h4>
              <div class="">
                <div class="btn-group me-2" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-secondary"> <i class="mdi mdi-menu-right"></i> ວັນ</button>
                  <button type="button" class="btn btn-secondary"> ເດືອນ </button>
                  <button type="button" class="btn btn-secondary">ປີ</button>
                </div>
                <input type="date" style="width:180px"  class="form-control me-2">
                <button type="button" class="btn btn-success text-white me-2"> <i class="mdi mdi-view-list"></i> ສະແດງທຸລະກຳ</button>
              </div>
            </div>
            <div class="table-responsive mt-4">
              <table class="table color-table info-table border">
                <thead>
                  <tr>
                    <th width="120">ວັນທີ່</th>
                    <th width="120">ເລກທີ່ທຸລະກຳ</th>
                    <th width="120">ປະເພດທຸລະກຳ</th>
                    <th>ລາຍລະອຽດ</th>
                    <th width="150">ມູນຄ່າ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>
                  <tr>
                    <td>12/09/2021</td>
                    <td>TR0000021</td>
                    <td> income </td>
                    <td> ຂາຍຄອມພິວເຕີ້ Acer</td>
                    <td>
                      3.500.000
                    </td>
                  </tr>


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Myapp2Transection",

  data() {
    return {};
  },

  mounted() {},

  methods: {},
};
</script>

<style lang="scss" scoped>
</style>