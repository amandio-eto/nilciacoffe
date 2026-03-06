@extends('Master.Master')
@section('title','Dashboard')
@section('content')

<div class="main-content">
                <div class="row">
                    <!-- [Invoices Awaiting Payment] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-dollar-sign"></i>
                                        </div>
                                        <div>
                                             <i class="bi bi-people"></i>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">{{ $user }}</span></div>
                                            <h6 class="fs-13 fw-semibold text-truncate-1-line">Total Users</h6>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!-- [Invoices Awaiting Payment] end -->
                    <!-- [Converted Leads] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-cast"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">48</span>/<span class="counter">86</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Converted Leads</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Converted Leads </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">52 Completed</span>
                                            <span class="fs-11 text-muted">(63%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Converted Leads] end -->
                    <!-- [Projects In Progress] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-briefcase"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">16</span>/<span class="counter">20</span></div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Projects In Progress</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">Projects In Progress </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">16 Completed</span>
                                            <span class="fs-11 text-muted">(78%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Projects In Progress] end -->
                    <!-- [Conversion Rate] start -->
                    <div class="col-xxl-3 col-md-6">
                        <div class="card stretch stretch-full">
                            <div class="card-body">
                                <div class="d-flex align-items-start justify-content-between mb-4">
                                    <div class="d-flex gap-4 align-items-center">
                                        <div class="avatar-text avatar-lg bg-gray-200">
                                            <i class="feather-activity"></i>
                                        </div>
                                        <div>
                                            <div class="fs-4 fw-bold text-dark"><span class="counter">46.59</span>%</div>
                                            <h3 class="fs-13 fw-semibold text-truncate-1-line">Conversion Rate</h3>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                </div>
                                <div class="pt-4">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line"> Conversion Rate </a>
                                        <div class="w-100 text-end">
                                            <span class="fs-12 text-dark">$2,254</span>
                                            <span class="fs-11 text-muted">(46%)</span>
                                        </div>
                                    </div>
                                    <div class="progress mt-2 ht-3">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Conversion Rate] end -->
                    <!-- [Payment Records] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Payment Record</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0" style="position: relative;">
                                <div id="payment-records-chart" style="min-height: 395px;"><div id="apexchartsat65rg1w" class="apexcharts-canvas apexchartsat65rg1w light" style="width: 968px; height: 380px;"><svg id="SvgjsSvg1366" width="968" height="380" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1368" class="apexcharts-inner apexcharts-graphical" transform="translate(56.578125, 30)"><defs id="SvgjsDefs1367"><clipPath id="gridRectMaskat65rg1w"><rect id="SvgjsRect1373" width="904.421875" height="314.39300000000003" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskat65rg1w"><rect id="SvgjsRect1374" width="903.421875" height="313.39300000000003" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1372" x1="0" y1="0" x2="0" y2="311.39300000000003" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="311.39300000000003" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1410" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1411" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1412" font-family="Helvetica, Arial, sans-serif" x="37.559244791666664" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1413" style="font-family: Helvetica, Arial, sans-serif;">JAN/23</tspan><title>JAN/23</title></text><text id="SvgjsText1414" font-family="Helvetica, Arial, sans-serif" x="112.677734375" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1415" style="font-family: Helvetica, Arial, sans-serif;">FEB/23</tspan><title>FEB/23</title></text><text id="SvgjsText1416" font-family="Helvetica, Arial, sans-serif" x="187.79622395833334" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1417" style="font-family: Helvetica, Arial, sans-serif;">MAR/23</tspan><title>MAR/23</title></text><text id="SvgjsText1418" font-family="Helvetica, Arial, sans-serif" x="262.91471354166663" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1419" style="font-family: Helvetica, Arial, sans-serif;">APR/23</tspan><title>APR/23</title></text><text id="SvgjsText1420" font-family="Helvetica, Arial, sans-serif" x="338.03320312499994" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1421" style="font-family: Helvetica, Arial, sans-serif;">MAY/23</tspan><title>MAY/23</title></text><text id="SvgjsText1422" font-family="Helvetica, Arial, sans-serif" x="413.15169270833326" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1423" style="font-family: Helvetica, Arial, sans-serif;">JUN/23</tspan><title>JUN/23</title></text><text id="SvgjsText1424" font-family="Helvetica, Arial, sans-serif" x="488.2701822916666" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1425" style="font-family: Helvetica, Arial, sans-serif;">JUL/23</tspan><title>JUL/23</title></text><text id="SvgjsText1426" font-family="Helvetica, Arial, sans-serif" x="563.388671875" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1427" style="font-family: Helvetica, Arial, sans-serif;">AUG/23</tspan><title>AUG/23</title></text><text id="SvgjsText1428" font-family="Helvetica, Arial, sans-serif" x="638.5071614583334" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1429" style="font-family: Helvetica, Arial, sans-serif;">SEP/23</tspan><title>SEP/23</title></text><text id="SvgjsText1430" font-family="Helvetica, Arial, sans-serif" x="713.6256510416667" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1431" style="font-family: Helvetica, Arial, sans-serif;">OCT/23</tspan><title>OCT/23</title></text><text id="SvgjsText1432" font-family="Helvetica, Arial, sans-serif" x="788.7441406250001" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1433" style="font-family: Helvetica, Arial, sans-serif;">NOV/23</tspan><title>NOV/23</title></text><text id="SvgjsText1434" font-family="Helvetica, Arial, sans-serif" x="863.8626302083335" y="340.39300000000003" text-anchor="middle" dominant-baseline="auto" font-size="10px" fill="#a0acbb" class="apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1435" style="font-family: Helvetica, Arial, sans-serif;">DEC/23</tspan><title>DEC/23</title></text></g></g><g id="SvgjsG1446" class="apexcharts-grid"><g id="SvgjsG1447" class="apexcharts-gridlines-horizontal"></g><g id="SvgjsG1448" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1450" x1="0" y1="311.39300000000003" x2="901.421875" y2="311.39300000000003" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1449" x1="0" y1="1" x2="0" y2="311.39300000000003" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1376" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1377" class="apexcharts-series" rel="1" seriesName="PaymentxRejected" data:realIndex="0"><path id="undefined-0" d="M 26.291471354166664 311.39300000000003L 26.291471354166664 211.39510050223214Q 31.425358072916666 206.76121378348213 36.559244791666664 211.39510050223214L 36.559244791666664 311.39300000000003L 25.791471354166664 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 26.291471354166664 311.39300000000003L 26.291471354166664 211.39510050223214Q 31.425358072916666 206.76121378348213 36.559244791666664 211.39510050223214L 36.559244791666664 311.39300000000003L 25.791471354166664 311.39300000000003" pathFrom="M 26.291471354166664 311.39300000000003L 26.291471354166664 311.39300000000003L 36.559244791666664 311.39300000000003L 36.559244791666664 311.39300000000003L 25.791471354166664 311.39300000000003" cy="209.07815714285715" cx="100.90996093749999" j="0" val="23" barHeight="102.31484285714286" barWidth="11.2677734375"></path><path id="undefined-0" d="M 101.40996093749999 311.39300000000003L 101.40996093749999 264.7767576450893Q 106.54384765625 260.1428709263393 111.67773437499999 264.7767576450893L 111.67773437499999 311.39300000000003L 100.90996093749999 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 101.40996093749999 311.39300000000003L 101.40996093749999 264.7767576450893Q 106.54384765625 260.1428709263393 111.67773437499999 264.7767576450893L 111.67773437499999 311.39300000000003L 100.90996093749999 311.39300000000003" pathFrom="M 101.40996093749999 311.39300000000003L 101.40996093749999 311.39300000000003L 111.67773437499999 311.39300000000003L 111.67773437499999 311.39300000000003L 100.90996093749999 311.39300000000003" cy="262.4598142857143" cx="176.0284505208333" j="1" val="11" barHeight="48.93318571428572" barWidth="11.2677734375"></path><path id="undefined-0" d="M 176.5284505208333 311.39300000000003L 176.5284505208333 215.8435719308036Q 181.6623372395833 211.20968521205359 186.79622395833331 215.8435719308036L 186.79622395833331 311.39300000000003L 176.0284505208333 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 176.5284505208333 311.39300000000003L 176.5284505208333 215.8435719308036Q 181.6623372395833 211.20968521205359 186.79622395833331 215.8435719308036L 186.79622395833331 311.39300000000003L 176.0284505208333 311.39300000000003" pathFrom="M 176.5284505208333 311.39300000000003L 176.5284505208333 311.39300000000003L 186.79622395833331 311.39300000000003L 186.79622395833331 311.39300000000003L 176.0284505208333 311.39300000000003" cy="213.5266285714286" cx="251.14694010416662" j="2" val="22" barHeight="97.86637142857144" barWidth="11.2677734375"></path><path id="undefined-0" d="M 251.64694010416662 311.39300000000003L 251.64694010416662 193.60121478794645Q 256.7808268229166 188.96732806919644 261.91471354166663 193.60121478794645L 261.91471354166663 311.39300000000003L 251.14694010416662 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 251.64694010416662 311.39300000000003L 251.64694010416662 193.60121478794645Q 256.7808268229166 188.96732806919644 261.91471354166663 193.60121478794645L 261.91471354166663 311.39300000000003L 251.14694010416662 311.39300000000003" pathFrom="M 251.64694010416662 311.39300000000003L 251.64694010416662 311.39300000000003L 261.91471354166663 311.39300000000003L 261.91471354166663 311.39300000000003L 251.14694010416662 311.39300000000003" cy="191.28427142857146" cx="326.26542968749993" j="3" val="27" barHeight="120.10872857142857" barWidth="11.2677734375"></path><path id="undefined-0" d="M 326.76542968749993 311.39300000000003L 326.76542968749993 255.87981478794643Q 331.8993164062499 251.24592806919642 337.03320312499994 255.87981478794643L 337.03320312499994 311.39300000000003L 326.26542968749993 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 326.76542968749993 311.39300000000003L 326.76542968749993 255.87981478794643Q 331.8993164062499 251.24592806919642 337.03320312499994 255.87981478794643L 337.03320312499994 311.39300000000003L 326.26542968749993 311.39300000000003" pathFrom="M 326.76542968749993 311.39300000000003L 326.76542968749993 311.39300000000003L 337.03320312499994 311.39300000000003L 337.03320312499994 311.39300000000003L 326.26542968749993 311.39300000000003" cy="253.56287142857144" cx="401.38391927083325" j="4" val="13" barHeight="57.830128571428574" barWidth="11.2677734375"></path><path id="undefined-0" d="M 401.88391927083325 311.39300000000003L 401.88391927083325 215.8435719308036Q 407.0178059895832 211.20968521205359 412.15169270833326 215.8435719308036L 412.15169270833326 311.39300000000003L 401.38391927083325 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 401.88391927083325 311.39300000000003L 401.88391927083325 215.8435719308036Q 407.0178059895832 211.20968521205359 412.15169270833326 215.8435719308036L 412.15169270833326 311.39300000000003L 401.38391927083325 311.39300000000003" pathFrom="M 401.88391927083325 311.39300000000003L 401.88391927083325 311.39300000000003L 412.15169270833326 311.39300000000003L 412.15169270833326 311.39300000000003L 401.38391927083325 311.39300000000003" cy="213.5266285714286" cx="476.50240885416656" j="5" val="22" barHeight="97.86637142857144" barWidth="11.2677734375"></path><path id="undefined-0" d="M 477.00240885416656 311.39300000000003L 477.00240885416656 149.11650050223216Q 482.13629557291654 144.48261378348215 487.2701822916666 149.11650050223216L 487.2701822916666 311.39300000000003L 476.50240885416656 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 477.00240885416656 311.39300000000003L 477.00240885416656 149.11650050223216Q 482.13629557291654 144.48261378348215 487.2701822916666 149.11650050223216L 487.2701822916666 311.39300000000003L 476.50240885416656 311.39300000000003" pathFrom="M 477.00240885416656 311.39300000000003L 477.00240885416656 311.39300000000003L 487.2701822916666 311.39300000000003L 487.2701822916666 311.39300000000003L 476.50240885416656 311.39300000000003" cy="146.79955714285717" cx="551.6208984374999" j="6" val="37" barHeight="164.59344285714286" barWidth="11.2677734375"></path><path id="undefined-0" d="M 552.1208984374999 311.39300000000003L 552.1208984374999 220.29204335937501Q 557.2547851562499 215.658156640625 562.3886718749999 220.29204335937501L 562.3886718749999 311.39300000000003L 551.6208984374999 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 552.1208984374999 311.39300000000003L 552.1208984374999 220.29204335937501Q 557.2547851562499 215.658156640625 562.3886718749999 220.29204335937501L 562.3886718749999 311.39300000000003L 551.6208984374999 311.39300000000003" pathFrom="M 552.1208984374999 311.39300000000003L 552.1208984374999 311.39300000000003L 562.3886718749999 311.39300000000003L 562.3886718749999 311.39300000000003L 551.6208984374999 311.39300000000003" cy="217.97510000000003" cx="626.7393880208333" j="7" val="21" barHeight="93.4179" barWidth="11.2677734375"></path><path id="undefined-0" d="M 627.2393880208333 311.39300000000003L 627.2393880208333 117.97720050223215Q 632.3732747395833 113.34331378348215 637.5071614583333 117.97720050223215L 637.5071614583333 311.39300000000003L 626.7393880208333 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 627.2393880208333 311.39300000000003L 627.2393880208333 117.97720050223215Q 632.3732747395833 113.34331378348215 637.5071614583333 117.97720050223215L 637.5071614583333 311.39300000000003L 626.7393880208333 311.39300000000003" pathFrom="M 627.2393880208333 311.39300000000003L 627.2393880208333 311.39300000000003L 637.5071614583333 311.39300000000003L 637.5071614583333 311.39300000000003L 626.7393880208333 311.39300000000003" cy="115.66025714285715" cx="701.8578776041667" j="8" val="44" barHeight="195.73274285714288" barWidth="11.2677734375"></path><path id="undefined-0" d="M 702.3578776041667 311.39300000000003L 702.3578776041667 215.8435719308036Q 707.4917643229167 211.20968521205359 712.6256510416666 215.8435719308036L 712.6256510416666 311.39300000000003L 701.8578776041667 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 702.3578776041667 311.39300000000003L 702.3578776041667 215.8435719308036Q 707.4917643229167 211.20968521205359 712.6256510416666 215.8435719308036L 712.6256510416666 311.39300000000003L 701.8578776041667 311.39300000000003" pathFrom="M 702.3578776041667 311.39300000000003L 702.3578776041667 311.39300000000003L 712.6256510416666 311.39300000000003L 712.6256510416666 311.39300000000003L 701.8578776041667 311.39300000000003" cy="213.5266285714286" cx="776.9763671875" j="9" val="22" barHeight="97.86637142857144" barWidth="11.2677734375"></path><path id="undefined-0" d="M 777.4763671875 311.39300000000003L 777.4763671875 180.25580050223215Q 782.61025390625 175.62191378348214 787.744140625 180.25580050223215L 787.744140625 311.39300000000003L 776.9763671875 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 777.4763671875 311.39300000000003L 777.4763671875 180.25580050223215Q 782.61025390625 175.62191378348214 787.744140625 180.25580050223215L 787.744140625 311.39300000000003L 776.9763671875 311.39300000000003" pathFrom="M 777.4763671875 311.39300000000003L 777.4763671875 311.39300000000003L 787.744140625 311.39300000000003L 787.744140625 311.39300000000003L 776.9763671875 311.39300000000003" cy="177.93885714285716" cx="852.0948567708334" j="10" val="30" barHeight="133.45414285714287" barWidth="11.2677734375"></path><path id="undefined-0" d="M 852.5948567708334 311.39300000000003L 852.5948567708334 220.29204335937501Q 857.7287434895834 215.658156640625 862.8626302083334 220.29204335937501L 862.8626302083334 311.39300000000003L 852.0948567708334 311.39300000000003" fill="rgba(52,84,209,0.85)" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="round" stroke-width="1" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 852.5948567708334 311.39300000000003L 852.5948567708334 220.29204335937501Q 857.7287434895834 215.658156640625 862.8626302083334 220.29204335937501L 862.8626302083334 311.39300000000003L 852.0948567708334 311.39300000000003" pathFrom="M 852.5948567708334 311.39300000000003L 852.5948567708334 311.39300000000003L 862.8626302083334 311.39300000000003L 862.8626302083334 311.39300000000003L 852.0948567708334 311.39300000000003" cy="217.97510000000003" cx="927.2133463541668" j="11" val="21" barHeight="93.4179" barWidth="11.2677734375"></path><g id="SvgjsG1378" class="apexcharts-datalabels"></g></g><g id="SvgjsG1391" class="apexcharts-series" rel="2" seriesName="AwaitingxPayment" data:realIndex="2"><path id="undefined-1" d="M 37.559244791666664 311.39300000000003L 37.559244791666664 116.97720050223215Q 41.69313151041666 114.34331378348215 45.82701822916667 116.97720050223215L 45.82701822916667 311.39300000000003L 36.059244791666664 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 37.559244791666664 311.39300000000003L 37.559244791666664 116.97720050223215Q 41.69313151041666 114.34331378348215 45.82701822916667 116.97720050223215L 45.82701822916667 311.39300000000003L 36.059244791666664 311.39300000000003" pathFrom="M 37.559244791666664 311.39300000000003L 37.559244791666664 311.39300000000003L 45.82701822916667 311.39300000000003L 45.82701822916667 311.39300000000003L 36.059244791666664 311.39300000000003" cy="115.66025714285715" cx="111.17773437499999" j="0" val="44" barHeight="195.73274285714288" barWidth="11.2677734375"></path><path id="undefined-1" d="M 112.67773437499999 311.39300000000003L 112.67773437499999 68.04401478794644Q 116.81162109374999 65.41012806919643 120.94550781249998 68.04401478794644L 120.94550781249998 311.39300000000003L 111.17773437499999 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 112.67773437499999 311.39300000000003L 112.67773437499999 68.04401478794644Q 116.81162109374999 65.41012806919643 120.94550781249998 68.04401478794644L 120.94550781249998 311.39300000000003L 111.17773437499999 311.39300000000003" pathFrom="M 112.67773437499999 311.39300000000003L 112.67773437499999 311.39300000000003L 120.94550781249998 311.39300000000003L 120.94550781249998 311.39300000000003L 111.17773437499999 311.39300000000003" cy="66.72707142857143" cx="186.29622395833331" j="1" val="55" barHeight="244.6659285714286" barWidth="11.2677734375"></path><path id="undefined-1" d="M 187.79622395833331 311.39300000000003L 187.79622395833331 130.32261478794643Q 191.93011067708332 127.68872806919643 196.06399739583333 130.32261478794643L 196.06399739583333 311.39300000000003L 186.29622395833331 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 187.79622395833331 311.39300000000003L 187.79622395833331 130.32261478794643Q 191.93011067708332 127.68872806919643 196.06399739583333 130.32261478794643L 196.06399739583333 311.39300000000003L 186.29622395833331 311.39300000000003" pathFrom="M 187.79622395833331 311.39300000000003L 187.79622395833331 311.39300000000003L 196.06399739583333 311.39300000000003L 196.06399739583333 311.39300000000003L 186.29622395833331 311.39300000000003" cy="129.00567142857145" cx="261.41471354166663" j="2" val="41" barHeight="182.38732857142858" barWidth="11.2677734375"></path><path id="undefined-1" d="M 262.91471354166663 311.39300000000003L 262.91471354166663 14.662357645089298Q 267.0486002604166 12.028470926339297 271.18248697916664 14.662357645089298L 271.18248697916664 311.39300000000003L 261.41471354166663 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 262.91471354166663 311.39300000000003L 262.91471354166663 14.662357645089298Q 267.0486002604166 12.028470926339297 271.18248697916664 14.662357645089298L 271.18248697916664 311.39300000000003L 261.41471354166663 311.39300000000003" pathFrom="M 262.91471354166663 311.39300000000003L 262.91471354166663 311.39300000000003L 271.18248697916664 311.39300000000003L 271.18248697916664 311.39300000000003L 261.41471354166663 311.39300000000003" cy="13.345414285714298" cx="336.53320312499994" j="3" val="67" barHeight="298.04758571428573" barWidth="11.2677734375"></path><path id="undefined-1" d="M 338.03320312499994 311.39300000000003L 338.03320312499994 214.8435719308036Q 342.1670898437499 212.20968521205359 346.30097656249995 214.8435719308036L 346.30097656249995 311.39300000000003L 336.53320312499994 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 338.03320312499994 311.39300000000003L 338.03320312499994 214.8435719308036Q 342.1670898437499 212.20968521205359 346.30097656249995 214.8435719308036L 346.30097656249995 311.39300000000003L 336.53320312499994 311.39300000000003" pathFrom="M 338.03320312499994 311.39300000000003L 338.03320312499994 311.39300000000003L 346.30097656249995 311.39300000000003L 346.30097656249995 311.39300000000003L 336.53320312499994 311.39300000000003" cy="213.5266285714286" cx="411.65169270833326" j="4" val="22" barHeight="97.86637142857144" barWidth="11.2677734375"></path><path id="undefined-1" d="M 413.15169270833326 311.39300000000003L 413.15169270833326 121.4256719308036Q 417.28557942708323 118.7917852120536 421.41946614583327 121.4256719308036L 421.41946614583327 311.39300000000003L 411.65169270833326 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 413.15169270833326 311.39300000000003L 413.15169270833326 121.4256719308036Q 417.28557942708323 118.7917852120536 421.41946614583327 121.4256719308036L 421.41946614583327 311.39300000000003L 411.65169270833326 311.39300000000003" pathFrom="M 413.15169270833326 311.39300000000003L 413.15169270833326 311.39300000000003L 421.41946614583327 311.39300000000003L 421.41946614583327 311.39300000000003L 411.65169270833326 311.39300000000003" cy="120.1087285714286" cx="486.7701822916666" j="5" val="43" barHeight="191.28427142857143" barWidth="11.2677734375"></path><path id="undefined-1" d="M 488.2701822916666 311.39300000000003L 488.2701822916666 219.29204335937501Q 492.40406901041655 216.658156640625 496.5379557291666 219.29204335937501L 496.5379557291666 311.39300000000003L 486.7701822916666 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 488.2701822916666 311.39300000000003L 488.2701822916666 219.29204335937501Q 492.40406901041655 216.658156640625 496.5379557291666 219.29204335937501L 496.5379557291666 311.39300000000003L 486.7701822916666 311.39300000000003" pathFrom="M 488.2701822916666 311.39300000000003L 488.2701822916666 311.39300000000003L 496.5379557291666 311.39300000000003L 496.5379557291666 311.39300000000003L 486.7701822916666 311.39300000000003" cy="217.97510000000003" cx="561.8886718749999" j="6" val="21" barHeight="93.4179" barWidth="11.2677734375"></path><path id="undefined-1" d="M 563.3886718749999 311.39300000000003L 563.3886718749999 130.32261478794643Q 567.5225585937499 127.68872806919643 571.6564453124998 130.32261478794643L 571.6564453124998 311.39300000000003L 561.8886718749999 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 563.3886718749999 311.39300000000003L 563.3886718749999 130.32261478794643Q 567.5225585937499 127.68872806919643 571.6564453124998 130.32261478794643L 571.6564453124998 311.39300000000003L 561.8886718749999 311.39300000000003" pathFrom="M 563.3886718749999 311.39300000000003L 563.3886718749999 311.39300000000003L 571.6564453124998 311.39300000000003L 571.6564453124998 311.39300000000003L 561.8886718749999 311.39300000000003" cy="129.00567142857145" cx="637.0071614583333" j="7" val="41" barHeight="182.38732857142858" barWidth="11.2677734375"></path><path id="undefined-1" d="M 638.5071614583333 311.39300000000003L 638.5071614583333 63.595543359375014Q 642.6410481770832 60.961656640625016 646.7749348958332 63.595543359375014L 646.7749348958332 311.39300000000003L 637.0071614583333 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 638.5071614583333 311.39300000000003L 638.5071614583333 63.595543359375014Q 642.6410481770832 60.961656640625016 646.7749348958332 63.595543359375014L 646.7749348958332 311.39300000000003L 637.0071614583333 311.39300000000003" pathFrom="M 638.5071614583333 311.39300000000003L 638.5071614583333 311.39300000000003L 646.7749348958332 311.39300000000003L 646.7749348958332 311.39300000000003L 637.0071614583333 311.39300000000003" cy="62.27860000000001" cx="712.1256510416666" j="8" val="56" barHeight="249.11440000000002" barWidth="11.2677734375"></path><path id="undefined-1" d="M 713.6256510416666 311.39300000000003L 713.6256510416666 192.60121478794645Q 717.7595377604166 189.96732806919644 721.8934244791666 192.60121478794645L 721.8934244791666 311.39300000000003L 712.1256510416666 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 713.6256510416666 311.39300000000003L 713.6256510416666 192.60121478794645Q 717.7595377604166 189.96732806919644 721.8934244791666 192.60121478794645L 721.8934244791666 311.39300000000003L 712.1256510416666 311.39300000000003" pathFrom="M 713.6256510416666 311.39300000000003L 713.6256510416666 311.39300000000003L 721.8934244791666 311.39300000000003L 721.8934244791666 311.39300000000003L 712.1256510416666 311.39300000000003" cy="191.28427142857146" cx="787.244140625" j="9" val="27" barHeight="120.10872857142857" barWidth="11.2677734375"></path><path id="undefined-1" d="M 788.744140625 311.39300000000003L 788.744140625 121.4256719308036Q 792.87802734375 118.7917852120536 797.0119140625 121.4256719308036L 797.0119140625 311.39300000000003L 787.244140625 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 788.744140625 311.39300000000003L 788.744140625 121.4256719308036Q 792.87802734375 118.7917852120536 797.0119140625 121.4256719308036L 797.0119140625 311.39300000000003L 787.244140625 311.39300000000003" pathFrom="M 788.744140625 311.39300000000003L 788.744140625 311.39300000000003L 797.0119140625 311.39300000000003L 797.0119140625 311.39300000000003L 787.244140625 311.39300000000003" cy="120.1087285714286" cx="862.3626302083334" j="10" val="43" barHeight="191.28427142857143" barWidth="11.2677734375"></path><path id="undefined-1" d="M 863.8626302083334 311.39300000000003L 863.8626302083334 63.595543359375014Q 867.9965169270833 60.961656640625016 872.1304036458333 63.595543359375014L 872.1304036458333 311.39300000000003L 862.3626302083334 311.39300000000003" fill="rgba(225,227,234,1)" fill-opacity="1" stroke="#e1e3ea" stroke-opacity="1" stroke-linecap="round" stroke-width="3" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 863.8626302083334 311.39300000000003L 863.8626302083334 63.595543359375014Q 867.9965169270833 60.961656640625016 872.1304036458333 63.595543359375014L 872.1304036458333 311.39300000000003L 862.3626302083334 311.39300000000003" pathFrom="M 863.8626302083334 311.39300000000003L 863.8626302083334 311.39300000000003L 872.1304036458333 311.39300000000003L 872.1304036458333 311.39300000000003L 862.3626302083334 311.39300000000003" cy="62.27860000000001" cx="937.4811197916667" j="11" val="56" barHeight="249.11440000000002" barWidth="11.2677734375"></path><g id="SvgjsG1392" class="apexcharts-datalabels"></g></g></g><g id="SvgjsG1405" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1406" class="apexcharts-series" seriesName="PaymentxCompleted" data:longestSeries="true" rel="1" data:realIndex="1"><path id="undefined-0" d="M 37.559244791666664 115.66025714285715C 63.85071614583333 115.66025714285715 86.38626302083333 66.72707142857143 112.677734375 66.72707142857143C 138.96920572916667 66.72707142857143 161.50475260416664 129.00567142857145 187.79622395833331 129.00567142857145C 214.0876953125 129.00567142857145 236.62324218749995 13.345414285714298 262.91471354166663 13.345414285714298C 289.2061848958333 13.345414285714298 311.74173177083327 213.5266285714286 338.03320312499994 213.5266285714286C 364.3246744791666 213.5266285714286 386.8602213541666 120.1087285714286 413.15169270833326 120.1087285714286C 439.44316406249993 120.1087285714286 461.9787109374999 217.97510000000003 488.2701822916666 217.97510000000003C 514.5616536458332 217.97510000000003 537.0972005208332 129.00567142857145 563.3886718749999 129.00567142857145C 589.6801432291666 129.00567142857145 612.2156901041666 62.27860000000001 638.5071614583333 62.27860000000001C 664.7986328124999 62.27860000000001 687.3341796875 191.28427142857146 713.6256510416666 191.28427142857146C 739.9171223958333 191.28427142857146 762.4526692708333 120.1087285714286 788.744140625 120.1087285714286C 815.0356119791667 120.1087285714286 837.5711588541667 129.00567142857145 863.8626302083334 129.00567142857145" fill="none" fill-opacity="1" stroke="rgba(162,172,199,0.25)" stroke-opacity="1" stroke-linecap="round" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskat65rg1w)" pathTo="M 37.559244791666664 115.66025714285715C 63.85071614583333 115.66025714285715 86.38626302083333 66.72707142857143 112.677734375 66.72707142857143C 138.96920572916667 66.72707142857143 161.50475260416664 129.00567142857145 187.79622395833331 129.00567142857145C 214.0876953125 129.00567142857145 236.62324218749995 13.345414285714298 262.91471354166663 13.345414285714298C 289.2061848958333 13.345414285714298 311.74173177083327 213.5266285714286 338.03320312499994 213.5266285714286C 364.3246744791666 213.5266285714286 386.8602213541666 120.1087285714286 413.15169270833326 120.1087285714286C 439.44316406249993 120.1087285714286 461.9787109374999 217.97510000000003 488.2701822916666 217.97510000000003C 514.5616536458332 217.97510000000003 537.0972005208332 129.00567142857145 563.3886718749999 129.00567142857145C 589.6801432291666 129.00567142857145 612.2156901041666 62.27860000000001 638.5071614583333 62.27860000000001C 664.7986328124999 62.27860000000001 687.3341796875 191.28427142857146 713.6256510416666 191.28427142857146C 739.9171223958333 191.28427142857146 762.4526692708333 120.1087285714286 788.744140625 120.1087285714286C 815.0356119791667 120.1087285714286 837.5711588541667 129.00567142857145 863.8626302083334 129.00567142857145" pathFrom="M -1 311.39300000000003L -1 311.39300000000003L 112.677734375 311.39300000000003L 187.79622395833331 311.39300000000003L 262.91471354166663 311.39300000000003L 338.03320312499994 311.39300000000003L 413.15169270833326 311.39300000000003L 488.2701822916666 311.39300000000003L 563.3886718749999 311.39300000000003L 638.5071614583333 311.39300000000003L 713.6256510416666 311.39300000000003L 788.744140625 311.39300000000003L 863.8626302083334 311.39300000000003"></path><g id="SvgjsG1407" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1456" r="0" cx="0" cy="0" class="apexcharts-marker w2lodeyyv" stroke="#ffffff" fill="#a2acc7" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1408" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1451" x1="0" y1="0" x2="901.421875" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1452" x1="0" y1="0" x2="901.421875" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1453" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1454" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1455" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1371" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1436" class="apexcharts-yaxis" rel="0" transform="translate(18.578125, 0)"><g id="SvgjsG1437" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1438" font-family="Helvetica, Arial, sans-serif" x="20" y="31.7" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">70K</text><text id="SvgjsText1439" font-family="Helvetica, Arial, sans-serif" x="20" y="76.28471428571429" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">60K</text><text id="SvgjsText1440" font-family="Helvetica, Arial, sans-serif" x="20" y="120.86942857142857" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">50K</text><text id="SvgjsText1441" font-family="Helvetica, Arial, sans-serif" x="20" y="165.45414285714284" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">40K</text><text id="SvgjsText1442" font-family="Helvetica, Arial, sans-serif" x="20" y="210.03885714285713" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">30K</text><text id="SvgjsText1443" font-family="Helvetica, Arial, sans-serif" x="20" y="254.6235714285714" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">20K</text><text id="SvgjsText1444" font-family="Helvetica, Arial, sans-serif" x="20" y="299.2082857142857" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">10K</text><text id="SvgjsText1445" font-family="Helvetica, Arial, sans-serif" x="20" y="343.793" text-anchor="end" dominant-baseline="auto" font-size="11px" fill="#a0acbb" class="apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">0K</text></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-title" style="font-family: Inter; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 84, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(162, 172, 199);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(225, 227, 234);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 969px; height: 396px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="card-footer">
                                <div class="row g-4">
                                    <div class="col-lg-3">
                                        <div class="p-3 border border-dashed rounded">
                                            <div class="fs-12 text-muted mb-1">Awaiting</div>
                                            <h6 class="fw-bold text-dark">$5,486</h6>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 81%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-3 border border-dashed rounded">
                                            <div class="fs-12 text-muted mb-1">Completed</div>
                                            <h6 class="fw-bold text-dark">$9,275</h6>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 82%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-3 border border-dashed rounded">
                                            <div class="fs-12 text-muted mb-1">Rejected</div>
                                            <h6 class="fw-bold text-dark">$3,868</h6>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 68%"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="p-3 border border-dashed rounded">
                                            <div class="fs-12 text-muted mb-1">Revenue</div>
                                            <h6 class="fw-bold text-dark">$50,668</h6>
                                            <div class="progress mt-2 ht-3">
                                                <div class="progress-bar bg-dark" role="progressbar" style="width: 75%"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [Payment Records] end -->
                    <!-- [Total Sales] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full overflow-hidden">
                            <div class="bg-primary text-white" style="position: relative;">
                                <div class="p-4">
                                    <span class="badge bg-light text-primary text-dark float-end">12%</span>
                                    <div class="text-start">
                                        <h4 class="text-reset">30,569</h4>
                                        <p class="text-reset m-0">Total Sales</p>
                                    </div>
                                </div>
                                <div id="total-sales-color-graph" style="min-height: 150px;"><div id="apexchartsahige76qf" class="apexcharts-canvas apexchartsahige76qf light" style="width: 968px; height: 150px;"><svg id="SvgjsSvg1460" width="968" height="150" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1462" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1461"><clipPath id="gridRectMaskahige76qf"><rect id="SvgjsRect1466" width="971" height="153" x="-1.5" y="-1.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskahige76qf"><rect id="SvgjsRect1467" width="970" height="152" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1465" x1="0" y1="0" x2="0" y2="150" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="150" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1475" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1476" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1479" class="apexcharts-grid"><line id="SvgjsLine1481" x1="0" y1="150" x2="968" y2="150" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1480" x1="0" y1="1" x2="0" y2="150" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1469" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1470" class="apexcharts-series" seriesName="TotalxSales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="undefined-0" d="M 0 150L 0 50C 56.46666666666667 50 104.86666666666667 100 161.33333333333334 100C 217.8 100 266.20000000000005 60 322.6666666666667 60C 379.1333333333333 60 427.53333333333336 90 484 90C 540.4666666666667 90 588.8666666666667 25 645.3333333333334 25C 701.8 25 750.2 100 806.6666666666666 100C 863.1333333333333 100 911.5333333333333 50 968 50C 968 50 968 50 968 150M 968 50z" fill="rgba(147,169,255,0.4)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskahige76qf)" pathTo="M 0 150L 0 50C 56.46666666666667 50 104.86666666666667 100 161.33333333333334 100C 217.8 100 266.20000000000005 60 322.6666666666667 60C 379.1333333333333 60 427.53333333333336 90 484 90C 540.4666666666667 90 588.8666666666667 25 645.3333333333334 25C 701.8 25 750.2 100 806.6666666666666 100C 863.1333333333333 100 911.5333333333333 50 968 50C 968 50 968 50 968 150M 968 50z" pathFrom="M -1 150L -1 150L 161.33333333333334 150L 322.6666666666667 150L 484 150L 645.3333333333334 150L 806.6666666666666 150L 968 150"></path><path id="undefined-0" d="M 0 50C 56.46666666666667 50 104.86666666666667 100 161.33333333333334 100C 217.8 100 266.20000000000005 60 322.6666666666667 60C 379.1333333333333 60 427.53333333333336 90 484 90C 540.4666666666667 90 588.8666666666667 25 645.3333333333334 25C 701.8 25 750.2 100 806.6666666666666 100C 863.1333333333333 100 911.5333333333333 50 968 50" fill="none" fill-opacity="1" stroke="#93a9ff" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskahige76qf)" pathTo="M 0 50C 56.46666666666667 50 104.86666666666667 100 161.33333333333334 100C 217.8 100 266.20000000000005 60 322.6666666666667 60C 379.1333333333333 60 427.53333333333336 90 484 90C 540.4666666666667 90 588.8666666666667 25 645.3333333333334 25C 701.8 25 750.2 100 806.6666666666666 100C 863.1333333333333 100 911.5333333333333 50 968 50" pathFrom="M -1 150L -1 150L 161.33333333333334 150L 322.6666666666667 150L 484 150L 645.3333333333334 150L 806.6666666666666 150L 968 150"></path><g id="SvgjsG1471" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1487" r="0" cx="0" cy="0" class="apexcharts-marker wyoyxpladj no-pointer-events" stroke="#ffffff" fill="#93a9ff" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1472" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1482" x1="0" y1="0" x2="968" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1483" x1="0" y1="0" x2="968" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1484" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1485" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1486" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1464" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1477" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1478" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-title" style="font-family: Inter; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(147, 169, 255);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 969px; height: 253px;"></div></div><div class="contract-trigger"></div></div></div>
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image avatar-lg p-2 rounded">
                                            <img class="img-fluid" src="assets/images/brand/shopify.png" alt="">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block">Shopify eCommerce Store</a>
                                            <span class="fs-12 text-muted">Development</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">$1200</div>
                                        <div class="fs-12 text-end">6 Projects</div>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image avatar-lg p-2 rounded">
                                            <img class="img-fluid" src="assets/images/brand/app-store.png" alt="">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block">iOS Apps Development</a>
                                            <span class="fs-12 text-muted">Development</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">$1450</div>
                                        <div class="fs-12 text-end">3 Projects</div>
                                    </div>
                                </div>
                                <hr class="border-dashed my-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image avatar-lg p-2 rounded">
                                            <img class="img-fluid" src="assets/images/brand/figma.png" alt="">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);" class="d-block">Figma Dashboard Design</a>
                                            <span class="fs-12 text-muted">UI/UX Design</span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="fw-bold text-dark">$1250</div>
                                        <div class="fs-12 text-end">5 Projects</div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center py-4">Full Details</a>
                        </div>
                    </div>
                    <!-- [Total Sales] end !-->
                    <!-- [Mini] start -->
                    <div class="col-lg-4">
                        <div class="card mb-4 stretch stretch-full">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="avatar-text">
                                        <i class="feather feather-star"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Tasks Completed</div>
                                        <div class="fs-12 text-muted">22/35 completed</div>
                                    </div>
                                </div>
                                <div class="fs-4 fw-bold text-dark">22/35</div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between gap-4" style="position: relative;">
                                <div id="task-completed-area-chart" style="min-height: 100px;"><div id="apexcharts3ax4d9x8" class="apexcharts-canvas apexcharts3ax4d9x8 light" style="width: 148px; height: 100px;"><svg id="SvgjsSvg1258" width="148" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1260" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1259"><clipPath id="gridRectMask3ax4d9x8"><rect id="SvgjsRect1265" width="150" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask3ax4d9x8"><rect id="SvgjsRect1266" width="150" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1272" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1273" stop-opacity="0.2" stop-color="rgba(52,84,209,0.2)" offset="0"></stop><stop id="SvgjsStop1274" stop-opacity="0.75" stop-color="rgba(255,255,255,0.75)" offset="0.9"></stop><stop id="SvgjsStop1275" stop-opacity="0.75" stop-color="rgba(255,255,255,0.75)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1264" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1278" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1279" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1282" class="apexcharts-grid"><line id="SvgjsLine1284" x1="0" y1="100" x2="148" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1283" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1268" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1269" class="apexcharts-series" seriesName="TaskxCompleted" data:longestSeries="true" rel="1" data:realIndex="0"><path id="undefined-0" d="M 0 100L 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314C 148 58.333333333333314 148 58.333333333333314 148 100M 148 58.333333333333314z" fill="url(#SvgjsLinearGradient1272)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3ax4d9x8)" pathTo="M 0 100L 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314C 148 58.333333333333314 148 58.333333333333314 148 100M 148 58.333333333333314z" pathFrom="M -1 200L -1 200L 24.666666666666664 200L 49.33333333333333 200L 74 200L 98.66666666666666 200L 123.33333333333333 200L 148 200"></path><path id="undefined-0" d="M 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314" fill="none" fill-opacity="1" stroke="#3454d1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask3ax4d9x8)" pathTo="M 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314" pathFrom="M -1 200L -1 200L 24.666666666666664 200L 49.33333333333333 200L 74 200L 98.66666666666666 200L 123.33333333333333 200L 148 200"></path><g id="SvgjsG1270" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1290" r="0" cx="0" cy="0" class="apexcharts-marker wjwil8frh no-pointer-events" stroke="#ffffff" fill="#3454d1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1271" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1285" x1="0" y1="0" x2="148" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1286" x1="0" y1="0" x2="148" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1287" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1288" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1289" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1263" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1280" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1281" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-title" style="font-family: Inter; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 84, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="fs-12 text-muted text-nowrap">
                                    <span class="fw-semibold text-primary">28% more</span><br>
                                    <span>from last week</span>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 306px; height: 151px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 stretch stretch-full">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="avatar-text">
                                        <i class="feather feather-file-text"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">New Tasks</div>
                                        <div class="fs-12 text-muted">0/20 tasks</div>
                                    </div>
                                </div>
                                <div class="fs-4 fw-bold text-dark">5/20</div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between gap-4" style="position: relative;">
                                <div id="new-tasks-area-chart" style="min-height: 100px;"><div id="apexchartsrfj5pp68g" class="apexcharts-canvas apexchartsrfj5pp68g light" style="width: 148px; height: 100px;"><svg id="SvgjsSvg1294" width="148" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1296" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1295"><clipPath id="gridRectMaskrfj5pp68g"><rect id="SvgjsRect1301" width="150" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskrfj5pp68g"><rect id="SvgjsRect1302" width="150" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1308" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1309" stop-opacity="0.2" stop-color="rgba(37,184,101,0.2)" offset="0"></stop><stop id="SvgjsStop1310" stop-opacity="0.75" stop-color="rgba(255,255,255,0.75)" offset="0.9"></stop><stop id="SvgjsStop1311" stop-opacity="0.75" stop-color="rgba(255,255,255,0.75)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1300" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1314" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1315" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1318" class="apexcharts-grid"><line id="SvgjsLine1320" x1="0" y1="100" x2="148" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1319" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1304" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1305" class="apexcharts-series" seriesName="NewxTasks" data:longestSeries="true" rel="1" data:realIndex="0"><path id="undefined-0" d="M 0 100L 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314C 148 58.333333333333314 148 58.333333333333314 148 100M 148 58.333333333333314z" fill="url(#SvgjsLinearGradient1308)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrfj5pp68g)" pathTo="M 0 100L 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314C 148 58.333333333333314 148 58.333333333333314 148 100M 148 58.333333333333314z" pathFrom="M -1 200L -1 200L 24.666666666666664 200L 49.33333333333333 200L 74 200L 98.66666666666666 200L 123.33333333333333 200L 148 200"></path><path id="undefined-0" d="M 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314" fill="none" fill-opacity="1" stroke="#25b865" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskrfj5pp68g)" pathTo="M 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314" pathFrom="M -1 200L -1 200L 24.666666666666664 200L 49.33333333333333 200L 74 200L 98.66666666666666 200L 123.33333333333333 200L 148 200"></path><g id="SvgjsG1306" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1326" r="0" cx="0" cy="0" class="apexcharts-marker whk8cifvq no-pointer-events" stroke="#ffffff" fill="#25b865" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1307" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1321" x1="0" y1="0" x2="148" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1322" x1="0" y1="0" x2="148" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1323" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1324" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1325" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1299" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1316" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1317" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-title" style="font-family: Inter; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(37, 184, 101);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="fs-12 text-muted text-nowrap">
                                    <span class="fw-semibold text-success">34% more</span><br>
                                    <span>from last week</span>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 306px; height: 151px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card mb-4 stretch stretch-full">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="avatar-text">
                                        <i class="feather feather-airplay"></i>
                                    </div>
                                    <div>
                                        <div class="fw-semibold text-dark">Project Done</div>
                                        <div class="fs-12 text-muted">20/30 project</div>
                                    </div>
                                </div>
                                <div class="fs-4 fw-bold text-dark">20/30</div>
                            </div>
                            <div class="card-body d-flex align-items-center justify-content-between gap-4" style="position: relative;">
                                <div id="project-done-area-chart" style="min-height: 100px;"><div id="apexchartsmde2qogt" class="apexcharts-canvas apexchartsmde2qogt light" style="width: 148px; height: 100px;"><svg id="SvgjsSvg1330" width="148" height="100" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1332" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1331"><clipPath id="gridRectMaskmde2qogt"><rect id="SvgjsRect1337" width="150" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskmde2qogt"><rect id="SvgjsRect1338" width="150" height="102" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><linearGradient id="SvgjsLinearGradient1344" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1345" stop-opacity="0.2" stop-color="rgba(209,59,76,0.2)" offset="0"></stop><stop id="SvgjsStop1346" stop-opacity="0.75" stop-color="rgba(255,255,255,0.75)" offset="0.9"></stop><stop id="SvgjsStop1347" stop-opacity="0.75" stop-color="rgba(255,255,255,0.75)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1336" x1="0" y1="0" x2="0" y2="100" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="100" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1350" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1351" class="apexcharts-xaxis-texts-g" transform="translate(0, 1.875)"></g></g><g id="SvgjsG1354" class="apexcharts-grid"><line id="SvgjsLine1356" x1="0" y1="100" x2="148" y2="100" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1355" x1="0" y1="1" x2="0" y2="100" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1340" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1341" class="apexcharts-series" seriesName="ProjectxDone" data:longestSeries="true" rel="1" data:realIndex="0"><path id="undefined-0" d="M 0 100L 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314C 148 58.333333333333314 148 58.333333333333314 148 100M 148 58.333333333333314z" fill="url(#SvgjsLinearGradient1344)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmde2qogt)" pathTo="M 0 100L 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314C 148 58.333333333333314 148 58.333333333333314 148 100M 148 58.333333333333314z" pathFrom="M -1 200L -1 200L 24.666666666666664 200L 49.33333333333333 200L 74 200L 98.66666666666666 200L 123.33333333333333 200L 148 200"></path><path id="undefined-0" d="M 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314" fill="none" fill-opacity="1" stroke="#d13b4c" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskmde2qogt)" pathTo="M 0 77.77777777777777C 8.633333333333331 77.77777777777777 16.03333333333333 47.22222222222223 24.666666666666664 47.22222222222223C 33.3 47.22222222222223 40.699999999999996 86.1111111111111 49.33333333333333 86.1111111111111C 57.96666666666666 86.1111111111111 65.36666666666666 33.333333333333314 74 33.333333333333314C 82.63333333333333 33.333333333333314 90.03333333333333 55.55555555555554 98.66666666666666 55.55555555555554C 107.3 55.55555555555554 114.69999999999999 16.666666666666657 123.33333333333333 16.666666666666657C 131.96666666666667 16.666666666666657 139.36666666666667 58.333333333333314 148 58.333333333333314" pathFrom="M -1 200L -1 200L 24.666666666666664 200L 49.33333333333333 200L 74 200L 98.66666666666666 200L 123.33333333333333 200L 148 200"></path><g id="SvgjsG1342" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1362" r="0" cx="0" cy="0" class="apexcharts-marker wdx7ucr6g no-pointer-events" stroke="#ffffff" fill="#d13b4c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1343" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1357" x1="0" y1="0" x2="148" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1358" x1="0" y1="0" x2="148" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1359" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1360" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1361" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1335" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1352" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1353" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-title" style="font-family: Inter; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(209, 59, 76);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="fs-12 text-muted text-nowrap">
                                    <span class="fw-semibold text-danger">42% more</span><br>
                                    <span>from last week</span>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 306px; height: 151px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <!-- [Mini] end !-->
                    <!-- [Leads Overview] start -->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Leads Overview</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action" style="position: relative;">
                                <div id="leads-overview-donut" style="min-height: 286.39px;"><div id="apexchartshvm0fvs3" class="apexcharts-canvas apexchartshvm0fvs3 light" style="width: 328px; height: 286.39px;"><svg id="SvgjsSvg1490" width="328" height="286.39024390243907" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1492" class="apexcharts-inner apexcharts-graphical" transform="translate(29.5, 0)"><defs id="SvgjsDefs1491"><clipPath id="gridRectMaskhvm0fvs3"><rect id="SvgjsRect1493" width="271" height="293" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskhvm0fvs3"><rect id="SvgjsRect1494" width="273" height="295" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><g id="SvgjsG1496" class="apexcharts-pie" data:innerTranslateX="0" data:innerTranslateY="-25"><g id="SvgjsG1497" transform="translate(0, -5) scale(1)"><circle id="SvgjsCircle1498" r="108.9658536585366" cx="135.5" cy="135.5" fill="transparent"></circle><g id="SvgjsG1499" class="apexcharts-slices"><g id="SvgjsG1500" class="apexcharts-series apexcharts-pie-series" seriesName="New" rel="1" data:realIndex="0"><path id="SvgjsPath1501" d="M 135.5 7.304878048780466 A 128.19512195121953 128.19512195121953 0 0 1 242.09034834785803 64.27860622558464 L 226.1017960956793 74.96181529174694 A 108.9658536585366 108.9658536585366 0 0 0 135.5 26.534146341463398 L 135.5 7.304878048780466 z" fill="rgba(52,84,209,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="56.25" data:startAngle="0" data:strokeWidth="0" data:value="20" data:pathOrig="M 135.5 7.304878048780466 A 128.19512195121953 128.19512195121953 0 0 1 242.09034834785803 64.27860622558464 L 226.1017960956793 74.96181529174694 A 108.9658536585366 108.9658536585366 0 0 0 135.5 26.534146341463398 L 135.5 7.304878048780466 z"></path></g><g id="SvgjsG1502" class="apexcharts-series apexcharts-pie-series" seriesName="Contacted" rel="2" data:realIndex="1"><path id="SvgjsPath1503" d="M 242.09034834785803 64.27860622558464 A 128.19512195121953 128.19512195121953 0 0 1 262.30760332621685 154.3101310667654 L 243.2864628272843 151.48861140675058 A 108.9658536585366 108.9658536585366 0 0 0 226.1017960956793 74.96181529174694 L 242.09034834785803 64.27860622558464 z" fill="rgba(21,101,192,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="42.1875" data:startAngle="56.25" data:strokeWidth="0" data:value="15" data:pathOrig="M 242.09034834785803 64.27860622558464 A 128.19512195121953 128.19512195121953 0 0 1 262.30760332621685 154.3101310667654 L 243.2864628272843 151.48861140675058 A 108.9658536585366 108.9658536585366 0 0 0 226.1017960956793 74.96181529174694 L 242.09034834785803 64.27860622558464 z"></path></g><g id="SvgjsG1504" class="apexcharts-series apexcharts-pie-series" seriesName="Qualified" rel="3" data:realIndex="2"><path id="SvgjsPath1505" d="M 262.30760332621685 154.3101310667654 A 128.19512195121953 128.19512195121953 0 0 1 238.4672874502993 211.86574498566415 L 223.0221943327544 200.41088323781452 A 108.9658536585366 108.9658536585366 0 0 0 243.2864628272843 151.48861140675058 L 262.30760332621685 154.3101310667654 z" fill="rgba(25,118,210,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="28.125" data:startAngle="98.4375" data:strokeWidth="0" data:value="10" data:pathOrig="M 262.30760332621685 154.3101310667654 A 128.19512195121953 128.19512195121953 0 0 1 238.4672874502993 211.86574498566415 L 223.0221943327544 200.41088323781452 A 108.9658536585366 108.9658536585366 0 0 0 243.2864628272843 151.48861140675058 L 262.30760332621685 154.3101310667654 z"></path></g><g id="SvgjsG1506" class="apexcharts-series apexcharts-pie-series" seriesName="Working" rel="4" data:realIndex="3"><path id="SvgjsPath1507" d="M 238.4672874502993 211.86574498566415 A 128.19512195121953 128.19512195121953 0 0 1 141.79023649426608 263.54070531254604 L 140.84670102012618 244.33459951566414 A 108.9658536585366 108.9658536585366 0 0 0 223.0221943327544 200.41088323781452 L 238.4672874502993 211.86574498566415 z" fill="rgba(30,136,229,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-3" index="0" j="3" data:angle="50.625" data:startAngle="126.5625" data:strokeWidth="0" data:value="18" data:pathOrig="M 238.4672874502993 211.86574498566415 A 128.19512195121953 128.19512195121953 0 0 1 141.79023649426608 263.54070531254604 L 140.84670102012618 244.33459951566414 A 108.9658536585366 108.9658536585366 0 0 0 223.0221943327544 200.41088323781452 L 238.4672874502993 211.86574498566415 z"></path></g><g id="SvgjsG1508" class="apexcharts-series apexcharts-pie-series" seriesName="Customer" rel="5" data:realIndex="4"><path id="SvgjsPath1509" d="M 141.79023649426608 263.54070531254604 A 128.19512195121953 128.19512195121953 0 0 1 80.6895226568399 251.38701767455655 L 88.91109425831392 234.00396502337307 A 108.9658536585366 108.9658536585366 0 0 0 140.84670102012618 244.33459951566414 L 141.79023649426608 263.54070531254604 z" fill="rgba(33,150,243,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-4" index="0" j="4" data:angle="28.125" data:startAngle="177.1875" data:strokeWidth="0" data:value="10" data:pathOrig="M 141.79023649426608 263.54070531254604 A 128.19512195121953 128.19512195121953 0 0 1 80.6895226568399 251.38701767455655 L 88.91109425831392 234.00396502337307 A 108.9658536585366 108.9658536585366 0 0 0 140.84670102012618 244.33459951566414 L 141.79023649426608 263.54070531254604 z"></path></g><g id="SvgjsG1510" class="apexcharts-series apexcharts-pie-series" seriesName="Proposal" rel="6" data:realIndex="5"><path id="SvgjsPath1511" d="M 80.6895226568399 251.38701767455655 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147991 184.55814928075398 L 34.82867806225792 177.19942688864086 A 108.9658536585366 108.9658536585366 0 0 0 88.91109425831392 234.00396502337307 L 80.6895226568399 251.38701767455655 z" fill="rgba(66,165,245,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-5" index="0" j="5" data:angle="42.1875" data:startAngle="205.3125" data:strokeWidth="0" data:value="15" data:pathOrig="M 80.6895226568399 251.38701767455655 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147991 184.55814928075398 L 34.82867806225792 177.19942688864086 A 108.9658536585366 108.9658536585366 0 0 0 88.91109425831392 234.00396502337307 L 80.6895226568399 251.38701767455655 z"></path></g><g id="SvgjsG1512" class="apexcharts-series apexcharts-pie-series" seriesName="Leads" rel="7" data:realIndex="6"><path id="SvgjsPath1513" d="M 17.06315066147991 184.55814928075398 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147988 86.4418507192461 L 34.82867806225789 93.8005731113592 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225792 177.19942688864086 L 17.06315066147991 184.55814928075398 z" fill="rgba(100,181,246,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-6" index="0" j="6" data:angle="45" data:startAngle="247.5" data:strokeWidth="0" data:value="16" data:pathOrig="M 17.06315066147991 184.55814928075398 A 128.19512195121953 128.19512195121953 0 0 1 17.06315066147988 86.4418507192461 L 34.82867806225789 93.8005731113592 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225792 177.19942688864086 L 17.06315066147991 184.55814928075398 z"></path></g><g id="SvgjsG1514" class="apexcharts-series apexcharts-pie-series" seriesName="Prograss" rel="8" data:realIndex="7"><path id="SvgjsPath1515" d="M 17.06315066147988 86.4418507192461 A 128.19512195121953 128.19512195121953 0 0 1 75.06923783518425 22.441995965488914 L 84.13385215990662 39.40069657066559 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225789 93.8005731113592 L 17.06315066147988 86.4418507192461 z" fill="rgba(144,202,249,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-7" index="0" j="7" data:angle="39.375" data:startAngle="292.5" data:strokeWidth="0" data:value="14" data:pathOrig="M 17.06315066147988 86.4418507192461 A 128.19512195121953 128.19512195121953 0 0 1 75.06923783518425 22.441995965488914 L 84.13385215990662 39.40069657066559 A 108.9658536585366 108.9658536585366 0 0 0 34.82867806225789 93.8005731113592 L 17.06315066147988 86.4418507192461 z"></path></g><g id="SvgjsG1516" class="apexcharts-series apexcharts-pie-series" seriesName="Others" rel="9" data:realIndex="8"><path id="SvgjsPath1517" d="M 75.06923783518425 22.441995965488914 A 128.19512195121953 128.19512195121953 0 0 1 135.47762573048314 7.304880001303815 L 135.48098187091065 26.53414800110825 A 108.9658536585366 108.9658536585366 0 0 0 84.13385215990662 39.40069657066559 L 75.06923783518425 22.441995965488914 z" fill="rgba(170,214,250,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="round" stroke-width="0" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-8" index="0" j="8" data:angle="28.125" data:startAngle="331.875" data:strokeWidth="0" data:value="10" data:pathOrig="M 75.06923783518425 22.441995965488914 A 128.19512195121953 128.19512195121953 0 0 1 135.47762573048314 7.304880001303815 L 135.48098187091065 26.53414800110825 A 108.9658536585366 108.9658536585366 0 0 0 84.13385215990662 39.40069657066559 L 75.06923783518425 22.441995965488914 z"></path></g></g></g></g><line id="SvgjsLine1518" x1="0" y1="0" x2="271" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1519" x1="0" y1="0" x2="271" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 84, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(21, 101, 192);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(25, 118, 210);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(30, 136, 229);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(33, 150, 243);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(66, 165, 245);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(100, 181, 246);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(144, 202, 249);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(170, 214, 250);"></span><div class="apexcharts-tooltip-text" style="font-family: Inter; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="row g-2">
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #3454d1"></span>
                                            <span>New<span class="fs-10 text-muted ms-1">(20K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #0d519e"></span>
                                            <span>Contacted<span class="fs-10 text-muted ms-1">(15K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #1976d2"></span>
                                            <span>Qualified<span class="fs-10 text-muted ms-1">(10K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #1e88e5"></span>
                                            <span>Working<span class="fs-10 text-muted ms-1">(18K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #2196f3"></span>
                                            <span>Customer<span class="fs-10 text-muted ms-1">(10K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #42a5f5"></span>
                                            <span>Proposal<span class="fs-10 text-muted ms-1">(15K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #64b5f6"></span>
                                            <span>Leads<span class="fs-10 text-muted ms-1">(16K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #90caf9"></span>
                                            <span>Progress<span class="fs-10 text-muted ms-1">(14K)</span></span>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="javascript:void(0);" class="p-2 hstack gap-2 rounded border border-dashed border-gray-5">
                                            <span class="wd-7 ht-7 rounded-circle d-inline-block" style="background-color: #aad6fa"></span>
                                            <span>Others<span class="fs-10 text-muted ms-1">(10K)</span></span>
                                        </a>
                                    </div>
                                </div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 969px; height: 472px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div>
                    <!-- [Leads Overview] end -->
                    <!-- [Latest Leads] start -->
                    <div class="col-xxl-8">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Latest Leads</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr class="border-b">
                                                <th scope="row">Users</th>
                                                <th>Proposal</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Archie Cantones</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">arcie.tones@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Sent</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Holmes Cherryman</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">golms.chan@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">New</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-primary text-primary">In Progress </span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Malanie Hanvey</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">lanie.nveyn@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Sent</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Kenneth Hune</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">nneth.une@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Returning</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-warning text-warning">Not Interested</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar-image">
                                                            <img src="assets/images/avatar/6.png" alt="" class="img-fluid">
                                                        </div>
                                                        <a href="javascript:void(0);">
                                                            <span class="d-block">Valentine Maton</span>
                                                            <span class="fs-12 d-block fw-normal text-muted">alenine.aton@gmail.com</span>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="badge bg-gray-200 text-dark">Sent</span>
                                                </td>
                                                <td>11/06/2023 10:53</td>
                                                <td>
                                                    <span class="badge bg-soft-success text-success">Completed</span>
                                                </td>
                                                <td class="text-end">
                                                    <a href="javascript:void(0);"><i class="feather-more-vertical"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);" class="active">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                    </li>
                                    <li><a href="javascript:void(0);">8</a></li>
                                    <li><a href="javascript:void(0);">9</a></li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [Latest Leads] end -->
                    <!--! BEGIN: [Upcoming Schedule] !-->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Upcoming Schedule</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-primary text-primary lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">20</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">React Dashboard Design</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">11:30am - 12:30pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-warning text-warning lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">30</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Admin Design Concept</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">10:00am - 12:00pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-success text-success lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">17</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Standup Team Meeting</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">8:00am - 9:00am</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Michael Ksen">
                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--! BEGIN: [Events] !-->
                                <div class="p-3 border border-dashed rounded-3 mb-2">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="wd-50 ht-50 bg-soft-danger text-danger lh-1 d-flex align-items-center justify-content-center flex-column rounded-2 schedule-date">
                                                <span class="fs-18 fw-bold mb-1 d-block">25</span>
                                                <span class="fs-10 fw-semibold text-uppercase d-block">Dec</span>
                                            </div>
                                            <div class="text-dark">
                                                <a href="javascript:void(0);" class="fw-bold mb-2 text-truncate-1-line">Zoom Team Meeting</a>
                                                <span class="fs-11 fw-normal text-muted text-truncate-1-line">03:30pm - 05:30pm</span>
                                            </div>
                                        </div>
                                        <div class="img-group lh-0 ms-3 justify-content-start d-none d-sm-flex">
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Janette Dalton">
                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Socrates Itumay">
                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-image avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Marianne Audrey">
                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                            </a>
                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Explorer More">
                                                <i class="feather-more-horizontal"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center py-4">Upcomming Schedule</a>
                        </div>
                    </div>
                    <!--! END: [Upcoming Schedule] !-->
                    <!--! BEGIN: [Project Status] !-->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Project Status</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="mb-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/app-store.png" alt="laravel-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Apps Development</a>
                                                <div class="fs-11 text-muted">Applications</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 54%" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">54%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/figma.png" alt="figma-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Dashboard Design</a>
                                                <div class="fs-11 text-muted">App UI Kit</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: 86%" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">86%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/facebook.png" alt="vue-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Facebook Marketing</a>
                                                <div class="fs-11 text-muted">Marketing</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">90%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="mb-4 pb-1 d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/github.png" alt="react-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">React Dashboard Github</a>
                                                <div class="fs-11 text-muted">Dashboard</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">37%</span>
                                        </div>
                                    </div>
                                    <hr class="border-dashed my-3">
                                    <div class="d-flex">
                                        <div class="d-flex w-50 align-items-center me-3">
                                            <img src="assets/images/brand/paypal.png" alt="sketch-logo" class="me-3" width="35">
                                            <div>
                                                <a href="javascript:void(0);" class="text-truncate-1-line">Paypal Payment Gateway</a>
                                                <div class="fs-11 text-muted">Payment</div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-grow-1 align-items-center">
                                            <div class="progress w-100 me-3 ht-5">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 29%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-muted">29%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Upcomming Projects</a>
                        </div>
                    </div>
                    <!--! END: [Project Status] !-->
                    <!--! BEGIN: [Team Progress] !-->
                    <div class="col-xxl-4">
                        <div class="card stretch stretch-full">
                            <div class="card-header">
                                <h5 class="card-title">Team Progress</h5>
                                <div class="card-header-action">
                                    <div class="card-header-btn">
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger" data-bs-toggle="remove"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning" data-bs-toggle="refresh"> </a>
                                        </div>
                                        <div data-bs-toggle="tooltip" title="" data-bs-original-title="Maximize/Minimize">
                                            <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success" data-bs-toggle="expand"> </a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown" data-bs-offset="25, 25">
                                            <div data-bs-toggle="tooltip" title="" data-bs-original-title="Options">
                                                <i class="feather-more-vertical"></i>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-at-sign"></i>New</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-calendar"></i>Event</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-bell"></i>Snoozed</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2"></i>Deleted</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-settings"></i>Settings</a>
                                            <a href="javascript:void(0);" class="dropdown-item"><i class="feather-life-buoy"></i>Tips &amp; Tricks</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body custom-card-action">
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Alexandra Della</a>
                                            <div class="fs-11 text-muted">Frontend Developer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-1" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40"><svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress"><circle class="circle-progress-circle" cx="50" cy="50" r="47" fill="none" stroke="#ddd" stroke-width="8"></circle><path d="M 50 3 A 47 47 0 0 1 77.62590685774623 88.02379873562253" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em">40%</text></svg></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Archie Cantones</a>
                                            <div class="fs-11 text-muted">UI/UX Designer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-2" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="65"><svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress"><circle class="circle-progress-circle" cx="50" cy="50" r="47" fill="none" stroke="#ddd" stroke-width="8"></circle><path d="M 50 3 A 47 47 0 1 1 11.976201264377472 77.62590685774624" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em">65%</text></svg></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-3">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Malanie Hanvey</a>
                                            <div class="fs-11 text-muted">Backend Developer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-3" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="50"><svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress"><circle class="circle-progress-circle" cx="50" cy="50" r="47" fill="none" stroke="#ddd" stroke-width="8"></circle><path d="M 50 3 A 47 47 0 0 1 50 97" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em">50%</text></svg></div>
                                </div>
                                <div class="hstack justify-content-between border border-dashed rounded-3 p-3 mb-2">
                                    <div class="hstack gap-3">
                                        <div class="avatar-image">
                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0);">Kenneth Hune</a>
                                            <div class="fs-11 text-muted">Digital Marketer</div>
                                        </div>
                                    </div>
                                    <div class="team-progress-4" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="75"><svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress"><circle class="circle-progress-circle" cx="50" cy="50" r="47" fill="none" stroke="#ddd" stroke-width="8"></circle><path d="M 50 3 A 47 47 0 1 1 3 50.00000000000001" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em">75%</text></svg></div>
                                </div>
                            </div>
                            <a href="javascript:void(0);" class="card-footer fs-11 fw-bold text-uppercase text-center">Update 30 Min Ago</a>
                        </div>
                    </div>
                    <!--! END: [Team Progress] !-->
                </div>
            </div>




    
@endsection