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
                                <li class="breadcrumb-item active">Report </li>
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
                                    <h5 class="card-title ">SALES DIFFERENCE</h5>
                                    <div class="ms-auto">
                                        <ul class="list-inline font-12">
                                            <li><i class="fa fa-circle text-cyan"></i> SITE A</li>
                                            <li><i class="fa fa-circle text-primary"></i> SITE B</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="morris-area-chart2" style="height: 340px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="340" version="1.1" width="779" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.5625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="32.84765625" y="301" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34765625,301H753.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="232" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34765625,232H753.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="163" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">150</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34765625,163H753.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="94" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">225</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34765625,94H753.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="32.84765625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">300</tspan></text><path fill="none" stroke="#e0e0e0" d="M45.34765625,25H753.656" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="753.6559999999998" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text><text x="635.6584895167731" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan></text><text x="517.6609790335463" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="399.6634685503194" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="281.34267721645364" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="163.34516673322682" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="45.34765625" y="313.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><path fill="#e2e5ea" stroke="none" d="M45.34765625,301L163.34516673322682,181.39999999999998L281.34267721645364,227.39999999999998L399.6634685503194,236.6L517.6609790335463,135.4L635.6584895167731,204.39999999999998L753.6559999999998,71L753.6559999999998,301L45.34765625,301Z" fill-opacity="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.4;"></path><path fill="none" stroke="#b4becb" d="M45.34765625,301L163.34516673322682,181.39999999999998L281.34267721645364,227.39999999999998L399.6634685503194,236.6L517.6609790335463,135.4L635.6584895167731,204.39999999999998L753.6559999999998,71" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34765625" cy="301" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="163.34516673322682" cy="181.39999999999998" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="281.34267721645364" cy="227.39999999999998" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="399.6634685503194" cy="236.6" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="517.6609790335463" cy="135.4" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="635.6584895167731" cy="204.39999999999998" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="753.6559999999998" cy="71" r="0" fill="#b4becb" stroke="#b4becb" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#0ddbe4" stroke="none" d="M45.34765625,301L163.34516673322682,209L281.34267721645364,245.8L399.6634685503194,117L517.6609790335463,163L635.6584895167731,218.2L753.6559999999998,163L753.6559999999998,301L45.34765625,301Z" fill-opacity="0.4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.4;"></path><path fill="none" stroke="#01c0c8" d="M45.34765625,301L163.34516673322682,209L281.34267721645364,245.8L399.6634685503194,117L517.6609790335463,163L635.6584895167731,218.2L753.6559999999998,163" stroke-width="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="45.34765625" cy="301" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="163.34516673322682" cy="209" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="281.34267721645364" cy="245.8" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="399.6634685503194" cy="117" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="517.6609790335463" cy="163" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="635.6584895167731" cy="218.2" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="753.6559999999998" cy="163" r="0" fill="#01c0c8" stroke="#01c0c8" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 685.078px; top: 60px; display: none;"><div class="morris-hover-row-label">2016</div><div class="morris-hover-point" style="color: #b4becb">
  Site A:
  250
</div><div class="morris-hover-point" style="color: #01c0c8">
  Site B:
  150
</div></div></div>
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
                                            <div class="col-6  m-t-30">
                                                <h1 class="text-primary">$647</h1>
                                                <p class="text-muted">APRIL 2017</p>
                                                <b>(150 Sales)</b> </div>
                                            <div class="col-6">
                                                <div id="sales1" class="text-end"><canvas width="100" height="100" style="display: inline-block; width: 100px; height: 100px; vertical-align: top;"></canvas></div>
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
                                            <div class="col-6  m-t-30">
                                                <h1 class="text-info">$347</h1>
                                                <p class="light_op_text">APRIL 2017</p>
                                                <b class="">(150 Sales)</b> </div>
                                            <div class="col-6">
                                                <div id="sales2" class="text-end"><canvas width="88" height="154" style="display: inline-block; width: 88px; height: 154px; vertical-align: top;"></canvas></div>
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
</template>

<script>
export default {
    name: 'Myapp2Report',

    data() {
        return {
            
        };
    },

    mounted() {
        
    },

    methods: {
        
    },
    
};
</script>

<style lang="scss" scoped>

</style>