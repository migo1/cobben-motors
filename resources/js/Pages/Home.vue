<template>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">
                            Dashboard
                        </h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                </li>
                                <li class="breadcrumb-item active">
                                    Dashboard
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-body">
            <div class="container px-0">
                <div class="justify-content-center">
                    <div class="card">

                        <!-- <div class="card-body">
                            <h5 class="mb-3 text-center">SALES ORDERS, PURCHASES AND EXPENSES CHART FOR THE CURRENT YEAR</h5>
                            <Linegraph
                                :chartData="chData"
                                :height="150"
                                :chart-options="boptions"
                            ></Linegraph>
                        </div> -->
                    </div>

                    <!-- <div class="row mx-0">
                        <div class="col-6 pl-0">
                            <div class="card">
                                <div class="card-body">
                            <h5 class="mb-3 text-center">SALES ORDERS CURRENT WEEK</h5>

                                    <Bargraph
                                        :chartData="bhData"
                                        :height="200"
                                        :chart-options="options"
                                        :css-classes="'bar-chart-ex chartjs chartjs-render-monitor'"
                                    ></Bargraph>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pr-0">
                            <div class="card">
                                <div class="card-body">
                            <h5 class="mb-3 text-center">TOP SELLING MENUES FOR THE CURRENT WEEK</h5>

                                    <Doughnut
                                        :chartData="dhData"
                                        :height="313"
                                        :chart-options="dnoptions"
                                    ></Doughnut>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Shared/Layouts/Vertical.vue";

export default {
    layout: MainLayout,

};
</script>