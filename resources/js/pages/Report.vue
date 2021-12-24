<template>
  <div>
    <div class="page-wrapper" style="min-height: 905px">
      <div class="container-fluid">
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
                <li class="breadcrumb-item active">Report</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Column -->
          <div class="col-lg-8 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="d-flex m-b-40 align-items-center no-block">
                  <h5 class="card-title">ສະຫຼຸບລາຍຮັບ-ລາຍຈ່າຍ</h5>
                  <div class="ms-auto">
                   
                  </div>
                </div>

                <div class="text-end">
                  <div
                    class="btn-group me-2"
                    role="group"
                    aria-label="Basic example"
                  >
                    <button
                      type="button"
                      class="btn btn-secondary"
                      @click="monthtype = 'm'"
                    >
                      <i class="mdi mdi-menu-right" v-if="monthtype == 'm'"></i>
                      ເດືອນ
                    </button>
                    <button
                      type="button"
                      class="btn btn-secondary"
                      @click="monthtype = 'y'"
                    >
                      <i class="mdi mdi-menu-right" v-if="monthtype == 'y'"></i>
                      ປີ
                    </button>
                  </div>
                  <input
                    type="date"
                    style="width: 180px"
                    v-model="dmy"
                    class="form-control me-2"
                  />
                  <button
                    class="btn btn-success text-white me-2"
                    @click="CreateReport()"
                  >
                    <i class="mdi mdi-view-list"></i> ສ້າງລາຍງານ
                  </button>
                </div>

                <linechart
                  :chartData="chdata"
                  :chartOptions="chdataop"
                  :update="update_chart"
                  :key="key"
                  v-if="ShChart"
                />
              </div>
            </div>

            <div>
              <canvas id="line-chart2" height="150"></canvas>
            </div>
          </div>
          <!-- Column -->
          <div class="col-lg-4 col-md-12">
            <div class="row">
              <!-- Column -->
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">SALES DIFFERENCE</h5>
                    <div class="row">
                      <div class="col-6 m-t-30">
                        <h1 class="text-primary">$647</h1>
                        <p class="text-muted">APRIL 2017</p>
                        <b>(150 Sales)</b>
                      </div>
                      <div class="col-6">
                        <div id="sales1" class="text-end">
                          <canvas
                            width="100"
                            height="100"
                            style="
                              display: inline-block;
                              width: 100px;
                              height: 100px;
                              vertical-align: top;
                            "
                          ></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Column -->
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">VISIT STATASTICS</h5>
                    <div class="row">
                      <div class="col-6 m-t-30">
                        <h1 class="text-info">$347</h1>
                        <p class="light_op_text">APRIL 2017</p>
                        <b class="">(150 Sales)</b>
                      </div>
                      <div class="col-6">
                        <div id="sales2" class="text-end">
                          <canvas
                            width="88"
                            height="154"
                            style="
                              display: inline-block;
                              width: 88px;
                              height: 154px;
                              vertical-align: top;
                            "
                          ></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Column -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import linechart from "../components/LineChart.vue";
import moment from "moment";

export default {
  name: "Myapp2Report",
  components: {
    linechart,
  },
  data() {
    return {
        ShChart:false,
      monthtype: "m",
      dmy: "",
      key: 0,
      update_chart: null,
      chdata: [],
      chdataop: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          yAxes: [
            {
              ticks: {
                display: true,
                beginAtZero: false,
                callback: function (value, index, values) {
                  return (
                    Number(value)
                      .toFixed(0)
                      .replace(/./g, function (c, i, a) {
                        return i > 0 && c !== "," && (a.length - i) % 3 === 0
                          ? "." + c
                          : c;
                      }) + " ກີບ"
                  );
                },
              },
              gridLines: {
                show: true,
              },
            },
          ],
        },
        tooltips: {
          callbacks: {
            label: function (tooltipItem, data) {
              return (
                Number(tooltipItem.yLabel)
                  .toFixed(0)
                  .replace(/./g, function (c, i, a) {
                    return i > 0 && c !== "," && (a.length - i) % 3 === 0
                      ? "." + c
                      : c;
                  }) + " ກີບ"
              );
            },
          },
          mode: "index",
          intersect: false,
        },
      },
      data_income: [],
      data_expense: [],
    };
  },

  mounted() {},

  methods: {
    CreateReport() {
      // console.log(this.dmy)
      this.$axios.get("/sanctum/csrf-cookie").then((response) => {
        axios
          .post("/api/report", {
            monthtype: this.monthtype,
            dmy: this.dmy,
          })
          .then((response) => {
            //if(response.data.success){
            this.data_income = response.data.income;
            this.data_expense = response.data.expense;
            // } else {
            //       this.loading =false
            // }

            this.GenGrap();
          })
          .catch((error) => {
            this.loading = false;
          });
      });
    },
    GenGrap() {
        this.ShChart = true;
      if (this.monthtype == "m") {
        this.key++;
        let re_income = [];
        let re_expense = [];
        let re_profit =[];

        let y = this.dmy.split("-")[0];
        let m = this.dmy.split("-")[1];
        let lastday = this.Getlastday(y, m);

        let chart_label = [];
        for (let i = 0; i < lastday; i++) {
          chart_label.push("ວັນທີ່ " + (i + 1));
        }

        re_income = this.Get_data_chart(lastday, this.data_income) || 0;
        re_expense = this.Get_data_chart(lastday, this.data_expense) || 0;
       // re_profit = this.Get_data_cahart_profit(lastday,this.data_income,this.data_expense)||0;

        this.chdata = {
          labels: chart_label,
          datasets: [
            {
              label: "ລາຍຮັບ",
              fill: false,
              borderColor: "#3366CC",
              data: re_income,
            },
            {
              label: "ລາຍຈ່າຍ",
              fill: false,
              borderColor: "#DC3912",
              data: re_expense,
            },
            // {
            //   label: "ກຳໄລ",
            //   fill: false,
            //   borderColor: "#FF9900",
            //   data: re_profit,
            // },
          ],
        };
        this.update_chart = Math.floor(Math.random() * 100);
      } else if (this.monthtype == "y") {
        this.key++;
        let re_income = [];
        let re_expense = [];
        let chart_label = [
          "ເດືອນ 1",
          "ເດືອນ 2",
          "ເດືອນ 3",
          "ເດືອນ 4",
          "ເດືອນ 5",
          "ເດືອນ 6",
          "ເດືອນ 7",
          "ເດືອນ 8",
          "ເດືອນ 9",
          "ເດືອນ 10",
          "ເດືອນ 11",
          "ເດືອນ 12",
        ];

        re_income = this.Get_data_chart_y(12, this.data_income) || 0;
        re_expense = this.Get_data_chart_y(12, this.data_expense) || 0;

        this.chdata = {
          labels: chart_label,
          datasets: [
            {
              label: "ລາຍຮັບ",
              fill: false,
              borderColor: "#3366CC",
              data: re_income,
            },
            {
              label: "ລາຍຈ່າຍ",
              fill: false,
              borderColor: "#DC3912",
              data: re_expense,
            },
          ],
        };
        this.update_chart = Math.floor(Math.random() * 100);
      }
    },
    Getlastday(y, m) {
      return new Date(y, m + 1, 0).getDate();
    },
    Getday(value) {
      return moment(value).format("DD");
    },
    Getmonth(value) {
      return moment(value).format("MM");
    },
    Getyear(value) {
      return moment(value).format("YYYY");
    },
    Get_data_chart(date, data) {
      let new_db_in = [];
      let databack = [];
      for (let y = 0; y < data.length; y++) {
        if (data[y] != "") {
          let day = this.Getday(data[y].created_at);

          new_db_in.push({ price: data[y].price, day: day });
        }
      }

      let update_db_in = new_db_in.reduce((a, c) => {
        let filtered = a.filter((el) => el.day === c.day);
        if (filtered.length > 0) {
          a[a.indexOf(filtered[0])].price =
            parseInt(a[a.indexOf(filtered[0])].price) + parseInt(c.price);
        } else {
          a.push(c);
        }
        return a;
      }, []);
      // console.log(update_db_in)
      for (let i = 0; i < date; i++) {
        let type = true;
        for (let k = 0; k < update_db_in.length; k++) {
          if (update_db_in[k].day == i + 1) {
            if (type) {
              databack.push(update_db_in[k].price);
              type = false;
            }
          }
        }
        if (type) {
          databack.push(0);
          type = false;
        }
      }
      return databack;
    },
    Get_data_chart_y(monthchart, data) {
      let new_db_in = [];
      let databack = [];
      for (let y = 0; y < data.length; y++) {
        if (data[y] != "") {
          let month = this.Getmonth(data[y].created_at);
          new_db_in.push({ price: data[y].price, month: month });
        }
      }

      let update_db_in = new_db_in.reduce((a, c) => {
        let filtered = a.filter((el) => el.month == c.month);
        if (filtered.length > 0) {
          a[a.indexOf(filtered[0])].price =
            parseInt(a[a.indexOf(filtered[0])].price) + parseInt(c.price);
        } else {
          a.push(c);
        }
        return a;
      }, []);

      for (let i = 0; i < monthchart; i++) {
        let type = true;
        for (let k = 0; k < update_db_in.length; k++) {
          if (update_db_in[k].month == i + 1) {
            if (type) {
              databack.push(update_db_in[k].price);
              type = false;
            }
          }
        }
        if (type) {
          databack.push(0);
          type = false;
        }
      }

      return databack;
    },
    Get_data_cahart_profit(date,income,expense){


            let new_profit = [];

             let new_db_in = [];
            for (let y = 0; y < income.length; y++) {
                if (income[y] != "") {
                let day = this.Getday(income[y].created_at);
                new_db_in.push({ price: income[y].price, day: day });
                }
            }

            let update_db_in = new_db_in.reduce((a, c) => {
                let filtered = a.filter((el) => el.day == c.day);
                if (filtered.length > 0) {
                a[a.indexOf(filtered[0])].price =
                    parseInt(a[a.indexOf(filtered[0])].price) + parseInt(c.price);
                } else {
                a.push(c);
                }
                return a;
            }, []);




            let new_db_ex = [];
            for (let y = 0; y < expense.length; y++) {
                if (expense[y] != "") {
                let day = this.Getday(expense[y].created_at);
                new_db_ex.push({ price: expense[y].price, day: day });
                }
            }

            let update_db_ex = new_db_ex.reduce((a, c) => {
                let filtered = a.filter((el) => el.day == c.day);
                if (filtered.length > 0) {
                a[a.indexOf(filtered[0])].price =
                    parseInt(a[a.indexOf(filtered[0])].price) + parseInt(c.price);
                } else {
                a.push(c);
                }
                return a;
            }, []);

            // console.log(update_db_ex)

            for (let i = 0; i < date; i++) {
                let type = true;
                for (let k = 0; k < update_db_in.length; k++) {
                if (update_db_in[k].day == i + 1) {
                    if (type) {

                    let new_price = parseInt(update_db_ex[k].price)
                   // if(new_price>0){  new_profit.push(new_price); } else { new_profit.push(0);}
                    new_profit.push(new_price);
                    type = false;
                    }
                }
                }
                if (type) {
                new_profit.push(0);
                type = false;
                }
            }

        console.log(new_profit)
        return new_profit;
    }
  },

  beforeRouteEnter(to, from, next) {
    if (!window.Laravel.isLoggedin) {
      window.location.href = "/login";
    }
    next();
  },
  created() {
    this.$axios.get(`/api/users/checkauth`).then((response) => {
      if (!response.data.isLogin) {
        window.location.href = "/";
      }
    });
  },
};
</script>

<style lang="scss" scoped>
</style>