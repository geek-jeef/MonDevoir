<section>
    <section>
      <div class="grid grid-cols-12 gap-6" style="background-color : pink; border : 2px solid red;">
          <div class="col-span-12 2xl:col-span-12">
              <div class="grid grid-cols-12 gap-6">
                  <!-- BEGIN: General Report -->
                  <div class="col-span-12 mt-8">
                      <div class="intro-y flex items-center h-10">
                          <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                          <a href="" class="ml-auto flex items-center text-primary">
                              <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                          </a>
                      </div>
                      <div class="grid grid-cols-12 gap-6 mt-5">
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="shopping-cart" class="report-box__icon text-primary"></i>
                                          <div class="ml-auto">
                                              <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                                                  33% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                      <div class="text-base text-slate-500 mt-1">Item Sales</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="credit-card" class="report-box__icon text-pending"></i>
                                          <div class="ml-auto">
                                              <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                  2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                      <div class="text-base text-slate-500 mt-1">New Orders</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="monitor" class="report-box__icon text-warning"></i>
                                          <div class="ml-auto">
                                              <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                  12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                      <div class="text-base text-slate-500 mt-1">Total Products</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                              <div class="report-box zoom-in">
                                  <div class="box p-5">
                                      <div class="flex">
                                          <i data-feather="user" class="report-box__icon text-success"></i>
                                          <div class="ml-auto">
                                              <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                  22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                      <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: General Report -->


                  <!-- BEGIN: Work In Progress -->
                  <div class="intro-y box col-span-12 lg:col-span-6 mt-8">
                      <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                          <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                          <div class="dropdown ml-auto sm:hidden">
                              <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                  <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                              </a>
                              <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                  <ul class="dropdown-content">
                                      <li>
                                          <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                      </li>
                                      <li>
                                          <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <ul
                              class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                              role="tablist"
                          >
                              <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                  <a
                                      href="javascript:;"
                                      class="nav-link py-5 active"
                                      data-tw-target="#work-in-progress-new"
                                      aria-controls="work-in-progress-new"
                                      aria-selected="true"
                                      role="tab"
                                  >
                                      New
                                  </a>
                              </li>
                              <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                  <a
                                      href="javascript:;"
                                      class="nav-link py-5"
                                      data-tw-target="#work-in-progress-last-week"
                                      aria-controls="work-in-progress-last-week"
                                      aria-selected="false"
                                      role="tab"
                                  >
                                      Last Week
                                  </a>
                              </li>
                          </ul>
                      </div>
                      <div class="p-5">
                          <div class="tab-content">
                              <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                  <div>
                                      <div class="flex">
                                          <div class="mr-auto">Pending Tasks</div>
                                          <div>20%</div>
                                      </div>
                                      <div class="progress h-1 mt-2">
                                          <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                                  <div class="mt-5">
                                      <div class="flex">
                                          <div class="mr-auto">Completed Tasks</div>
                                          <div>2 / 20</div>
                                      </div>
                                      <div class="progress h-1 mt-2">
                                          <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                                  <div class="mt-5">
                                      <div class="flex">
                                          <div class="mr-auto">Tasks In Progress</div>
                                          <div>42</div>
                                      </div>
                                      <div class="progress h-1 mt-2">
                                          <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                  </div>
                                  <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: Work In Progress -->

                  
                  <!-- BEGIN: Weekly Top Seller -->
                  <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                      <div class="intro-y flex items-center h-10">
                          <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                          <a href="" class="ml-auto text-primary truncate">Show More</a>
                      </div>
                      <div class="intro-y box p-5 mt-5">
                          <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                          <div class="mt-8">
                              <div class="flex items-center">
                                  <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                  <span class="truncate">17 - 30 Years old</span>
                                  <span class="font-medium xl:ml-auto">62%</span>
                              </div>
                              <div class="flex items-center mt-4">
                                  <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                  <span class="truncate">31 - 50 Years old</span>
                                  <span class="font-medium xl:ml-auto">33%</span>
                              </div>
                              <div class="flex items-center mt-4">
                                  <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                  <span class="truncate">>= 50 Years old</span>
                                  <span class="font-medium xl:ml-auto">10%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: Weekly Top Seller -->
                  <!-- BEGIN: Weekly Top Seller -->
                  <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                      <div class="intro-y flex items-center h-10">
                          <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                          <a href="" class="ml-auto text-primary truncate">Show More</a>
                      </div>
                      <div class="intro-y box p-5 mt-5">
                          <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                          <div class="mt-8">
                              <div class="flex items-center">
                                  <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                  <span class="truncate">17 - 30 Years old</span>
                                  <span class="font-medium xl:ml-auto">62%</span>
                              </div>
                              <div class="flex items-center mt-4">
                                  <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                  <span class="truncate">31 - 50 Years old</span>
                                  <span class="font-medium xl:ml-auto">33%</span>
                              </div>
                              <div class="flex items-center mt-4">
                                  <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                  <span class="truncate">>= 50 Years old</span>
                                  <span class="font-medium xl:ml-auto">10%</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: Weekly Top Seller -->


                  
                  <!-- BEGIN: General Report -->
                  <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex items-center">
                                  <div class="w-2/4 flex-none">
                                      <div class="text-lg font-medium truncate">Target Sales</div>
                                      <div class="text-slate-500 mt-1">300 Sales</div>
                                  </div>
                                  <div class="flex-none ml-auto relative">
                                      <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                      <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex">
                                  <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                  <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                              </div>
                              <div class="mt-4">
                                  <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                              </div>
                          </div>
                      </div>
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex items-center">
                                  <div class="w-2/4 flex-none">
                                      <div class="text-lg font-medium truncate">New Products</div>
                                      <div class="text-slate-500 mt-1">1450 Products</div>
                                  </div>
                                  <div class="flex-none ml-auto relative">
                                      <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                      <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                          <div class="box p-5 zoom-in">
                              <div class="flex">
                                  <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                  <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                              </div>
                              <div class="mt-4">
                                  <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- END: General Report -->

                <!-- BEGIN: General Statistic -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">General Statistics</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download XML
                        </button>
                    </div>
                    <div class="grid grid-cols-1 2xl:grid-cols-7 gap-6 p-5">
                        <div class="2xl:col-span-2">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Net Worth</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-success">+23%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Sales</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-danger">-5%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Profit</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-danger">-10%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-span-2 sm:col-span-1 2xl:col-span-2 box dark:bg-darkmode-500 p-5">
                                    <div class="font-medium">Products</div>
                                    <div class="flex items-center mt-1 sm:mt-0">
                                        <div class="mr-4 w-20 flex">
                                            USP: <span class="ml-3 font-medium text-success">+55%</span>
                                        </div>
                                        <div class="w-5/6 overflow-auto">
                                            <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="2xl:col-span-5 w-full">
                            <div class="flex justify-center mt-8">
                                <div class="flex items-center mr-5">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-slate-300 rounded-full mr-3"></div>
                                    <span>Author Sales</span>
                                </div>
                            </div>
                            <div class="mt-8">
                                <canvas id="stacked-bar-chart-1" height="130"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Statistic -->

                  
              </div>
          </div>
      </div>

    </section>


    <section>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Notification -->
                <div class="col-span-12 mt-6 -mb-6 intro-y">
                    <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                        <span>Introducing new dashboard! Download now at <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">themeforest.net</a>.</span>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
                            <i data-feather="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
                <!-- BEGIN: Notification -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 lg:col-span-8 xl:col-span-6 mt-2">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <select class="sm:ml-auto mt-3 sm:mt-0 sm:w-auto form-select box">
                            <option value="daily">Daily</option>
                            <option value="weekly">Weekly</option>
                            <option value="monthly">Monthly</option>
                            <option value="yearly">Yearly</option>
                            <option value="custom-date">Custom Date</option>
                        </select>
                    </div>
                    <div class="report-box-2 intro-y mt-12 sm:mt-5">
                        <div class="box sm:flex">
                            <div class="px-8 py-12 flex flex-col justify-center flex-1">
                                <i data-feather="shopping-bag" class="w-10 h-10 text-warning"></i>
                                <div class="relative text-3xl font-medium mt-12 pl-4 ml-0.5">
                                    <span class="absolute text-2xl font-medium top-0 left-0 -ml-0.5">$</span> 54.143
                                </div>
                                <div class="report-box-2__indicator bg-success tooltip cursor-pointer" title="47% Higher than last month">
                                    47% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                </div>
                                <div class="mt-4 text-slate-500">Sales earnings this month after associated author fees, & before taxes.</div>
                                <button class="btn btn-outline-secondary relative justify-start rounded-full mt-12">
                                    Download Reports
                                    <span class="w-8 h-8 absolute flex justify-center items-center bg-primary text-white rounded-full right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                        <i data-feather="arrow-right" class="w-4 h-4"></i>
                                    </span>
                                </button>
                            </div>
                            <div class="px-8 py-12 flex flex-col justify-center flex-1 border-t sm:border-t-0 sm:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
                                <div class="text-slate-500 text-xs">TOTAL TRANSACTION</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">4.501</div>
                                    <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="2% Lower than last month">
                                        2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-slate-500 text-xs mt-5">CANCELATION CASE</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">2</div>
                                    <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="0.1% Lower than last month">
                                        0.1% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-slate-500 text-xs mt-5">GROSS RENTAL VALUE</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">$72.000</div>
                                    <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                        49% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-slate-500 text-xs mt-5">GROSS RENTAL PROFIT</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">$54.000</div>
                                    <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month">
                                        52% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                                <div class="text-slate-500 text-xs mt-5">NEW USERS</div>
                                <div class="mt-1.5 flex items-center">
                                    <div class="text-base">2.500</div>
                                    <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="52% Higher than last month">
                                        52% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Visitors -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Visitors</h2>
                        <a href="" class="ml-auto text-primary truncate">View on Map</a>
                    </div>
                    <div class="report-box-2 intro-y mt-5">
                        <div class="box p-5">
                            <div class="flex items-center">
                                Realtime active users
                                <div class="dropdown ml-auto">
                                    <a class="dropdown-toggle w-5 h-5 block -mr-2" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                        <i data-feather="more-vertical" class="w-5 h-5 text-slate-500"></i>
                                    </a>
                                    <div class="dropdown-menu w-40">
                                        <ul class="dropdown-content">
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="text-2xl font-medium mt-2">214</div>
                            <div class="border-b border-slate-200 flex pb-2 mt-4">
                                <div class="text-slate-500 text-xs">Page views per second</div>
                                <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-auto" title="49% Lower than last month">
                                    49% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                            <div class="mt-2 border-b broder-slate-200">
                                <div class="-mb-1.5 -ml-2.5">
                                    <canvas id="report-bar-chart" height="111"></canvas>
                                </div>
                            </div>
                            <div class="text-slate-500 text-xs border-b border-slate-200 flex mb-2 pb-2 mt-4">
                                <div>Top Active Pages</div>
                                <div class="ml-auto">Active Users</div>
                            </div>
                            <div class="flex">
                                <div>/letz-lara…review/2653</div>
                                <div class="ml-auto">472</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>/icewall…review/1674</div>
                                <div class="ml-auto">294</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>/profile…review/46789</div>
                                <div class="ml-auto">83</div>
                            </div>
                            <div class="flex mt-1.5">
                                <div>/profile…review/24357</div>
                                <div class="ml-auto">21</div>
                            </div>
                            <button class="btn btn-outline-secondary border-dashed w-full py-1 px-2 mt-4">Real-Time Report</button>
                        </div>
                    </div>
                </div>
                <!-- END: Visitors -->
                <!-- BEGIN: Users By Age -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-4 xl:col-span-3 mt-2 lg:mt-6 xl:mt-2">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Users By Age</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="report-box-2 intro-y mt-5">
                        <div class="box p-5">
                            <ul
                                class="
                                    nav
                                    nav-pills
                                    w-4/5
                                    bg-slate-100
                                    dark:bg-black/20
                                    rounded-md
                                    mx-auto
                                "
                                role="tablist"
                            >
                                <li id="active-users-tab" class="nav-item flex-1" role="presentation">
                                    <button
                                        class="nav-link w-full py-1.5 px-2 active"
                                        data-tw-toggle="pill"
                                        data-tw-target="#active-users"
                                        type="button"
                                        role="tab"
                                        aria-controls="active-users"
                                        aria-selected="true"
                                    >
                                        Active
                                    </button>
                                </li>
                                <li id="inactive-users-tab" class="nav-item flex-1" role="presentation">
                                    <button
                                        class="nav-link w-full py-1.5 px-2"
                                        data-tw-toggle="pill"
                                        data-tw-target="#inactive-users"
                                        type="button"
                                        role="tab"
                                        aria-controls="inactive-users"
                                        aria-selected="false"
                                    >
                                        Inactive
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content mt-6">
                                <div class="tab-pane active" id="active-users" role="tabpanel" aria-labelledby="active-users-tab">
                                    <div class="relative">
                                        <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                                        <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                            <div class="text-2xl font-medium">2.501</div>
                                            <div class="text-slate-500 mt-0.5">Active Users</div>
                                        </div>
                                    </div>
                                    <div class="mt-5">
                                        <div class="flex items-center">
                                            <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                            <span class="truncate">17 - 30 Years old</span>
                                            <span class="font-medium xl:ml-auto">62%</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                            <span class="truncate">31 - 50 Years old</span>
                                            <span class="font-medium xl:ml-auto">33%</span>
                                        </div>
                                        <div class="flex items-center mt-4">
                                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                            <span class="truncate">>= 50 Years old</span>
                                            <span class="font-medium xl:ml-auto">10%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Users By Age -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 lg:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Ads 1 -->
                <div class="col-span-12 lg:col-span-6 mt-6">
                    <div class="box p-8 relative overflow-hidden bg-primary intro-y">
                        <div class="leading-[2.15rem] w-full sm:w-72 text-white text-xl -mt-3">Transact safely with Lender’s Fund Account (RDL)</div>
                        <div class="w-full sm:w-72 leading-relaxed text-white/70 dark:text-slate-500 mt-3">Apply now, quick registration.</div>
                        <button class="btn w-32 bg-white dark:bg-darkmode-800 dark:text-white mt-6 sm:mt-10">Start Now</button>
                        <img class="hidden sm:block absolute top-0 right-0 w-2/5 -mt-3 mr-2" alt="" src="{{ asset('dist/images/woman-illustration.svg') }}">
                    </div>
                </div>
                <!-- END: Ads 1 -->
                <!-- BEGIN: Ads 2 -->
                <div class="col-span-12 lg:col-span-6 mt-6">
                    <div class="box p-8 relative overflow-hidden intro-y">
                        <div class="leading-[2.15rem] w-full sm:w-52 text-primary dark:text-white text-xl -mt-3">Invite friends to get <span class="font-medium">FREE</span> bonuses!</div>
                        <div class="w-full sm:w-60 leading-relaxed text-slate-500 mt-2">Get a IDR 100,000 voucher by inviting your friends to fund #BecomeMember</div>
                        <div class="w-48 relative mt-6 cursor-pointer tooltip" title="Copy referral link">
                            <input type="text" class="form-control" value="https://dashboard.in">
                            <i data-feather="copy" class="absolute right-0 top-0 bottom-0 my-auto mr-4 w-4 h-4"></i>
                        </div>
                        <img class="hidden sm:block absolute top-0 right-0 w-1/2 mt-1 -mr-12" alt="" src="{{ asset('dist/images/phone-illustration.svg') }}">
                    </div>
                </div>
                <!-- END: Ads 2 -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-danger" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-feather="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-feather="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="shopping-cart" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                    <div class="text-base text-slate-500 mt-1">Item Sales</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="credit-card" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                    <div class="text-base text-slate-500 mt-1">New Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                    <div class="text-base text-slate-500 mt-1">Total Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                    <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col xl:flex-row xl:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000</div>
                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                </div>
                                <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                                <div>
                                    <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                </div>
                            </div>
                            <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li><a href="" class="dropdown-item">PC & Laptop</a></li>
                                        <li><a href="" class="dropdown-item">Smartphone</a></li>
                                        <li><a href="" class="dropdown-item">Electronic</a></li>
                                        <li><a href="" class="dropdown-item">Photography</a></li>
                                        <li><a href="" class="dropdown-item">Sport</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">Target Sales</div>
                                    <div class="text-slate-500 mt-1">300 Sales</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">New Products</div>
                                    <div class="text-slate-500 mt-1">1450 Products</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-danger" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-feather="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-feather="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>
    <div class="relative">
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 xl:col-span-9 2xl:col-span-9 z-10">
                <div class="mt-6 -mb-6 intro-y">
                    <div class="alert alert-dismissible show box bg-primary text-white flex items-center mb-6" role="alert">
                        <span>
                            Introducing new dashboard! Download now at <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">themeforest.net</a>.
                            <button class="rounded-md bg-white bg-opacity-20 dark:bg-darkmode-300 hover:bg-opacity-30 py-0.5 px-2 -my-3 ml-2">Live Preview</button>
                        </span>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close">
                            <i data-feather="x" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
                <div class="mt-14 mb-3 grid grid-cols-12 sm:gap-10 intro-y">
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 py-6 sm:pl-5 md:pl-0 lg:pl-5 relative text-center sm:text-left">
                        <div class="absolute pt-0.5 2xl:pt-0 mt-5 2xl:mt-6 top-0 right-0 dropdown">
                            <a class="dropdown-toggle block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-vertical" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Monthly Report
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Annual Report
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="text-sm 2xl:text-base font-medium -mb-1">
                            Hi Angelina, <span class="text-slate-600 dark:text-slate-300 font-normal">welcome back!</span>
                        </div>
                        <div class="text-base 2xl:text-lg justify-center sm:justify-start flex items-center text-slate-600 dark:text-slate-300 leading-3 mt-14 2xl:mt-24">
                            My Total Assets
                            <i data-feather="alert-circle" class="tooltip w-5 h-5 ml-1.5 mt-0.5" title="Total value of your sales: $158.409.416"></i>
                        </div>
                        <div class="2xl:flex mt-5 mb-3">
                            <div class="flex items-center justify-center sm:justify-start">
                                <div class="relative text-2xl 2xl:text-3xl font-medium leading-6 pl-3 2xl:pl-4">
                                    <span class="absolute text-xl 2xl:text-2xl top-0 left-0 -mt-1 2xl:mt-0">$</span> 142,402,210
                                </div>
                                <a class="text-slate-500 ml-4 2xl:ml-16" href="">
                                    <i data-feather="refresh-ccw" class="w-4 h-4"></i>
                                </a>
                            </div>
                            <div class="mt-5 2xl:flex 2xl:justify-center 2xl:mt-0 2xl:-ml-20 2xl:w-14 2xl:flex-none 2xl:pl-2.5">
                                <div class="font-medium inline-flex bg-success text-white rounded-full px-2 py-1 text-xs 2xl:text-sm 2xl:p-0 2xl:text-success 2xl:bg-transparent 2xl:flex items-center tooltip cursor-pointer 2xl:justify-center" title="49% Higher than last month">
                                    49% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                </div>
                            </div>
                        </div>
                        <div class="text-slate-500">Last updated 1 hour ago</div>
                        <div class="2xl:text-base text-slate-600 dark:text-slate-300 mt-6 -mb-1">
                            Total net margin <a href="" class="underline decoration-dotted underline-offset-4 text-primary dark:text-slate-400">$12,921,050</a>
                        </div>
                        <div class="mt-14 2xl:mt-24 dropdown">
                            <button class="dropdown-toggle btn btn-rounded-primary w-44 2xl:w-52 px-4 relative justify-start" aria-expanded="false" data-tw-toggle="dropdown">
                                Download Reports
                                <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-1">
                                    <i data-feather="chevron-down" class="w-4 h-4"></i>
                                </span>
                            </button>
                            <div class="dropdown-menu w-44 2xl:w-52">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Monthly Report
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Annual Report
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row-start-2 md:row-start-auto col-span-12 md:col-span-4 py-6 border-black border-opacity-10 border-t md:border-t-0 md:border-l md:border-r border-dashed px-10 sm:px-28 md:px-5 -mx-5">
                        <div class="flex flex-wrap items-center">
                            <div class="flex items-center w-full sm:w-auto justify-center sm:justify-start mr-auto mb-5 2xl:mb-0">
                                <div class="w-2 h-2 bg-primary rounded-full -mt-4"></div>
                                <div class="ml-3.5">
                                    <div class="relative text-xl 2xl:text-2xl font-medium leading-6 2xl:leading-5 pl-3.5 2xl:pl-4">
                                        <span class="absolute text-base 2xl:text-xl top-0 left-0 2xl:-mt-1.5">$</span> 47,578.77
                                    </div>
                                    <div class="text-slate-500 mt-2">Yearly budget</div>
                                </div>
                            </div>
                            <select class="form-select bg-transparent border-black border-opacity-10 dark:border-darkmode-400 dark:bg-transparent mx-auto sm:mx-0 py-1.5 px-3 w-auto -mt-2">
                                <option value="daily">Daily</option>
                                <option value="weekly">Weekly</option>
                                <option value="monthly">Monthly</option>
                                <option value="yearly">Yearly</option>
                                <option value="custom-date">Custom Date</option>
                            </select>
                        </div>
                        <div class="mt-10 text-slate-600 dark:text-slate-300">You have spent about 35% of your annual budget.</div>
                        <canvas class="mt-6" id="report-bar-chart-1" height="267"></canvas>
                    </div>
                    <div class="col-span-12 sm:col-span-6 md:col-span-4 py-6 border-black border-opacity-10 border-t sm:border-t-0 border-l md:border-l-0 border-dashed -ml-4 pl-4 md:ml-0 md:pl-0">
                        <ul
                            class="
                                nav
                                nav-pills
                                w-3/4
                                2xl:w-4/6
                                bg-slate-200
                                dark:bg-black/10
                                rounded-md
                                mx-auto
                                p-1
                            "
                            role="tablist"
                        >
                            <li id="active-users-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-1.5 px-2 active"
                                    data-tw-toggle="pill"
                                    data-tw-target="#active-users"
                                    type="button"
                                    role="tab"
                                    aria-controls="active-users"
                                    aria-selected="true"
                                >
                                    Active
                                </button>
                            </li>
                            <li id="inactive-users-tab" class="nav-item flex-1" role="presentation">
                                <button
                                    class="nav-link w-full py-1.5 px-2"
                                    data-tw-toggle="pill"
                                    data-tw-target="#inactive-users"
                                    type="button"
                                    role="tab"
                                    aria-controls="inactive-users"
                                    aria-selected="false"
                                >
                                    Inactive
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content mt-6">
                            <div class="tab-pane active" id="active-users" role="tabpanel" aria-labelledby="active-users-tab">
                                <div class="relative">
                                    <canvas class="mt-8" id="report-donut-chart-3" height="190"></canvas>
                                    <div class="flex flex-col justify-center items-center absolute w-full h-full top-0 left-0">
                                        <div class="text-xl 2xl:text-2xl font-medium">2.501</div>
                                        <div class="text-slate-500 mt-0.5">Active Users</div>
                                    </div>
                                </div>
                                <div class="mx-auto w-10/12 2xl:w-2/3 mt-8">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">17 - 30 Years old</span>
                                        <span class="font-medium xl:ml-auto">62%</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">31 - 50 Years old</span>
                                        <span class="font-medium xl:ml-auto">33%</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">>= 50 Years old</span>
                                        <span class="font-medium xl:ml-auto">10%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="report-box-3 px-5 pt-8 pb-14 col-span-12 z-10">
                <div class="grid grid-cols-12 gap-6 relative intro-y">
                    <div class="col-span-12 sm:col-span-4 xl:col-span-3 px-0 lg:px-6 xl:px-0 2xl:px-6">
                        <div class="flex items-center flex-wrap lg:flex-nowrap gap-3">
                            <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Summary Report</div>
                            <div class="py-1 px-2.5 rounded-full text-xs bg-slate-300/50 dark:bg-darkmode-400 text-slate-600 dark:text-slate-300 cursor-pointer truncate">180 Campaign</div>
                        </div>
                        <div class="px-10 sm:px-0">
                            <canvas class="simple-line-chart-3 mt-8" height="110"></canvas>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xl:col-span-3 px-0 lg:px-6 xl:px-0 2xl:px-6">
                        <div class="flex items-center flex-wrap lg:flex-nowrap gap-3">
                            <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Social Media</div>
                            <a href="" class="flex items-center text-primary">
                                <div class="truncate 2xl:mr-auto">View Details</div>
                                <i data-feather="arrow-right" class="w-4 h-4 ml-3"></i>
                            </a>
                        </div>
                        <div class="flex items-center justify-center mt-10">
                            <div class="text-right">
                                <div class="text-3xl font-medium">149</div>
                                <div class="truncate mt-1 text-slate-500">Active Lenders</div>
                            </div>
                            <div class="w-px h-16 border border-r border-dashed border-slate-300 dark:border-darkmode-400 mx-4 xl:mx-6"></div>
                            <div>
                                <div class="text-3xl font-medium">135</div>
                                <div class="truncate mt-1 text-slate-500">Total Lenders</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-4 xl:col-span-3 px-0 lg:px-6 xl:px-0 2xl:px-6">
                        <div class="flex items-center flex-wrap lg:flex-nowrap gap-3">
                            <div class="sm:w-full lg:w-auto text-lg font-medium truncate mr-auto">Posted Ads</div>
                            <div class="py-1 px-2.5 rounded-full text-xs bg-slate-300/50 dark:bg-darkmode-400 text-slate-600 dark:text-slate-300 cursor-pointer truncate">320 Followers</div>
                        </div>
                        <div class="px-10 sm:px-0">
                            <canvas class="simple-line-chart-4 mt-8" height="110"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="report-box-4 w-full h-full grid grid-cols-12 gap-6 xl:absolute -mt-8 xl:mt-0 pb-6 xl:pb-0 top-0 right-0 z-30 xl:z-auto">
            <div class="col-span-12 xl:col-span-3 xl:col-start-10 xl:pb-16 z-30">
                <div class="h-full flex flex-col">
                    <div class="box p-5 mt-6 bg-primary intro-x">
                        <div class="flex flex-wrap gap-3">
                            <div class="mr-auto">
                                <div class="text-white text-opacity-70 dark:text-slate-300 flex items-center leading-3">
                                    AVAILABLE FUNDS
                                    <i data-feather="alert-circle" class="tooltip w-4 h-4 ml-1.5" title="Total value of your sales: $158.409.416"></i>
                                </div>
                                <div class="text-white relative text-2xl font-medium leading-5 pl-4 mt-3.5">
                                    <span class="absolute text-xl top-0 left-0 -mt-1.5">$</span> 479,578.77
                                </div>
                            </div>
                            <a class="flex items-center justify-center w-12 h-12 rounded-full bg-white dark:bg-darkmode-300 bg-opacity-20 hover:bg-opacity-30 text-white" href="">
                                <i data-feather="plus" class="w-6 h-6"></i>
                            </a>
                        </div>
                    </div>
                    <div class="report-box-4__content xl:min-h-0 intro-x">
                        <div class="max-h-full xl:overflow-y-auto box mt-5">
                            <div class="xl:sticky top-0 px-5 pt-5 pb-6">
                                <div class="flex items-center">
                                    <div class="text-lg font-medium truncate mr-5">Summary Report</div>
                                    <a href="" class="ml-auto flex items-center text-primary">
                                        <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Refresh
                                    </a>
                                </div>
                                <ul
                                    class="
                                        nav
                                        nav-pills
                                        border
                                        border-slate-300
                                        dark:border-darkmode-300
                                        border-dashed
                                        rounded-md
                                        mx-auto
                                        p-1
                                        mt-5
                                    "
                                    role="tablist"
                                >
                                    <li id="weekly-report-tab" class="nav-item flex-1" role="presentation">
                                        <button
                                            class="nav-link w-full py-1.5 px-2 active"
                                            data-tw-toggle="pill"
                                            data-tw-target="#weekly-report"
                                            type="button"
                                            role="tab"
                                            aria-controls="weekly-report"
                                            aria-selected="true"
                                        >
                                            Weekly
                                        </button>
                                    </li>
                                    <li id="monthly-report-tab" class="nav-item flex-1" role="presentation">
                                        <button
                                            class="nav-link w-full py-1.5 px-2"
                                            data-tw-toggle="pill"
                                            data-tw-target="#monthly-report"
                                            type="button"
                                            role="tab"
                                            aria-controls="monthly-report"
                                            aria-selected="false"
                                        >
                                            Monthly
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content px-5 pb-5">
                                <div class="tab-pane active grid grid-cols-12 gap-y-6" id="weekly-report" role="tabpanel" aria-labelledby="weekly-report-tab">
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-slate-500">Unpaid Loan</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-lg">$155.430.000</div>
                                            <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="2% Lower than last month">
                                                2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-slate-500">Active Funding Partner</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-lg">52 Partner</div>
                                            <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="0.1% Lower than last month">
                                                49% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-slate-500">Paid Installment</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-lg">$75.430.000</div>
                                            <div class="text-success flex text-xs font-medium tooltip cursor-pointer ml-2" title="49% Higher than last month">
                                                36% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-slate-500">Success Payment</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-lg">100%</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-slate-500">Waiting For Disbursement</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-lg">0</div>
                                        </div>
                                    </div>
                                    <div class="col-span-12 sm:col-span-6 md:col-span-4 xl:col-span-12">
                                        <div class="text-slate-500">Unpaid Loan</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-lg">$21.430.000</div>
                                            <div class="text-danger flex text-xs font-medium tooltip cursor-pointer ml-2" title="2% Lower than last month">
                                                23% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-outline-secondary col-span-12 border-slate-300 dark:border-darkmode-300 border-dashed relative justify-start mb-2">
                                        <div class="truncate mr-5">My Portfolio Details</div>
                                        <span class="w-8 h-8 absolute flex justify-center items-center right-0 top-0 bottom-0 my-auto ml-auto mr-0.5">
                                            <i data-feather="arrow-right" class="w-4 h-4"></i>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="report-box-3 report-box-3--content grid grid-cols-12 gap-6 xl:-mt-5 2xl:-mt-8 -mb-10 z-40 2xl:z-10">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-danger" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3 relative z-10">
            <div class="2xl:border-l pb-10 intro-y">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12 mt-3 2xl:mt-6">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">Inbox</h2>
            <!-- BEGIN: Inbox Menu -->
            <div class="intro-y box bg-primary p-5 mt-6">
                <button type="button" class="btn text-slate-600 dark:text-slate-300 w-full bg-white dark:bg-darkmode-300 dark:border-darkmode-300 mt-1">
                    <i class="w-4 h-4 mr-2" data-feather="edit-3"></i> Compose
                </button>
                <div class="border-t border-white/10 dark:border-darkmode-400 mt-6 pt-6 text-white">
                    <a href="" class="flex items-center px-3 py-2 rounded-md bg-white/10 dark:bg-darkmode-700 font-medium">
                        <i class="w-4 h-4 mr-2" data-feather="mail"></i> Inbox
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="star"></i> Marked
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="inbox"></i> Draft
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="send"></i> Sent
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="trash"></i> Trash
                    </a>
                </div>
                <div class="border-t border-white/10 dark:border-darkmode-400 mt-4 pt-4 text-white">
                    <a href="" class="flex items-center px-3 py-2 truncate">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Custom Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-success rounded-full mr-3"></div> Important Meetings
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div> Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Design
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <div class="w-2 h-2 bg-danger rounded-full mr-3"></div> Next Week
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md truncate">
                        <i class="w-4 h-4 mr-2" data-feather="plus"></i> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: Inbox Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: Inbox Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" data-feather="search"></i>
                    <input type="text" class="form-control w-full sm:w-64 box px-10" placeholder="Search mail">
                    <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                        <i class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" data-feather="chevron-down"></i>
                        <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                            <div class="dropdown-content">
                                <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                                    <div class="col-span-6">
                                        <label for="input-filter-1" class="form-label text-xs">From</label>
                                        <input id="input-filter-1" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-2" class="form-label text-xs">To</label>
                                        <input id="input-filter-2" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-3" class="form-label text-xs">Subject</label>
                                        <input id="input-filter-3" type="text" class="form-control flex-1" placeholder="Important Meeting">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-4" class="form-label text-xs">Has the Words</label>
                                        <input id="input-filter-4" type="text" class="form-control flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-5" class="form-label text-xs">Doesn't Have</label>
                                        <input id="input-filter-5" type="text" class="form-control flex-1" placeholder="Job, Work, Documentation">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-6" class="form-label text-xs">Size</label>
                                        <select id="input-filter-6" class="form-select flex-1">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 flex items-center mt-3">
                                        <button class="btn btn-secondary w-32 ml-auto">Create Filter</button>
                                        <button class="btn btn-primary w-32 ml-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="btn btn-primary shadow-md mr-2">Start a Video Call</button>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i class="w-4 h-4" data-feather="plus"></i>
                            </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="user" class="w-4 h-4 mr-2"></i> Contacts
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Inbox Filter -->
            <!-- BEGIN: Inbox Content -->
            <div class="intro-y inbox box mt-5">
                <div class="p-5 flex flex-col-reverse sm:flex-row text-slate-500 border-b border-slate-200/60">
                    <div class="flex items-center mt-3 sm:mt-0 border-t sm:border-0 border-slate-200/60 pt-5 sm:pt-0 mt-5 sm:mt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                        <input class="form-check-input" type="checkbox">
                        <div class="dropdown ml-1" data-tw-placement="bottom-start">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="chevron-down" class="w-5 h-5"></i>
                            </a>
                            <div class="dropdown-menu w-32">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">All</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">None</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Read</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Unread</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Starred</a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">Unstarred</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="refresh-cw"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="more-horizontal"></i>
                        </a>
                    </div>
                    <div class="flex items-center sm:ml-auto">
                        <div class="">1 - 50 of 5,238</div>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="chevron-left"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="chevron-right"></i>
                        </a>
                        <a href="javascript:;" class="w-5 h-5 ml-5 flex items-center justify-center">
                            <i class="w-4 h-4" data-feather="settings"></i>
                        </a>
                    </div>
                </div>
                <div class="overflow-x-auto sm:overflow-x-visible">
                    @foreach ($fakers as $faker)
                        <div class="intro-y">
                            <div class="inbox__item{{ $faker['true_false'][0] ? ' inbox__item--active' : '' }} inline-block sm:block text-slate-600 dark:text-slate-500 bg-slate-100 dark:bg-darkmode-400/70 border-b border-slate-200/60 dark:border-darkmode-400">
                                <div class="flex px-5 py-3">
                                    <div class="w-72 flex-none flex items-center mr-5">
                                        <input class="form-check-input flex-none" type="checkbox" {{ !$faker['true_false'][0] ? 'checked' : '' }}>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-4 flex items-center justify-center text-slate-400">
                                            <i class="w-4 h-4" data-feather="star"></i>
                                        </a>
                                        <a href="javascript:;" class="w-5 h-5 flex-none ml-2 flex items-center justify-center text-slate-400">
                                            <i class="w-4 h-4" data-feather="bookmark"></i>
                                        </a>
                                        <div class="w-6 h-6 flex-none image-fit relative ml-5">
                                            <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="inbox__item--sender truncate ml-3">{{ $faker['users'][0]['name'] }}</div>
                                    </div>
                                    <div class="w-64 sm:w-auto truncate">
                                        <span class="inbox__item--highlight">{{ $faker['news'][0]['super_short_content'] }}</span> {{ $faker['news'][0]['short_content'] }}
                                    </div>
                                    <div class="inbox__item--time whitespace-nowrap ml-auto pl-10">{{ $faker['times'][0] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="p-5 flex flex-col sm:flex-row items-center text-center sm:text-left text-slate-500">
                    <div>4.41 GB (25%) of 17 GB used Manage</div>
                    <div class="sm:ml-auto mt-2 sm:mt-0">Last account activity: 36 minutes ago</div>
                </div>
            </div>
            <!-- END: Inbox Content -->
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-8">
        <div class="col-span-12 lg:col-span-3 2xl:col-span-2">
            <h2 class="intro-y text-lg font-medium mr-auto mt-2">File Manager</h2>
            <!-- BEGIN: File Manager Menu -->
            <div class="intro-y box p-5 mt-6">
                <div class="mt-1">
                    <a href="" class="flex items-center px-3 py-2 rounded-md bg-primary text-white font-medium">
                        <i class="w-4 h-4 mr-2" data-feather="image"></i> Images
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="video"></i> Videos
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="file"></i> Documents
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="users"></i> Shared
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="trash"></i> Trash
                    </a>
                </div>
                <div class="border-t border-slate-200 dark:border-darkmode-400 mt-4 pt-4">
                    <a href="" class="flex items-center px-3 py-2 rounded-md">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Custom Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-success rounded-full mr-3"></div> Important Meetings
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div> Work
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div> Design
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <div class="w-2 h-2 bg-danger rounded-full mr-3"></div> Next Week
                    </a>
                    <a href="" class="flex items-center px-3 py-2 mt-2 rounded-md">
                        <i class="w-4 h-4 mr-2" data-feather="plus"></i> Add New Label
                    </a>
                </div>
            </div>
            <!-- END: File Manager Menu -->
        </div>
        <div class="col-span-12 lg:col-span-9 2xl:col-span-10">
            <!-- BEGIN: File Manager Filter -->
            <div class="intro-y flex flex-col-reverse sm:flex-row items-center">
                <div class="w-full sm:w-auto relative mr-auto mt-3 sm:mt-0">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 ml-3 left-0 z-10 text-slate-500" data-feather="search"></i>
                    <input type="text" class="form-control w-full sm:w-64 box px-10" placeholder="Search files">
                    <div class="inbox-filter dropdown absolute inset-y-0 mr-3 right-0 flex items-center" data-tw-placement="bottom-start">
                        <i class="dropdown-toggle w-4 h-4 cursor-pointer text-slate-500" role="button" aria-expanded="false" data-tw-toggle="dropdown" data-feather="chevron-down"></i>
                        <div class="inbox-filter__dropdown-menu dropdown-menu pt-2">
                            <div class="dropdown-content">
                                <div class="grid grid-cols-12 gap-4 gap-y-3 p-3">
                                    <div class="col-span-6">
                                        <label for="input-filter-1" class="form-label text-xs">File Name</label>
                                        <input id="input-filter-1" type="text" class="form-control flex-1" placeholder="Type the file name">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-2" class="form-label text-xs">Shared With</label>
                                        <input id="input-filter-2" type="text" class="form-control flex-1" placeholder="example@gmail.com">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-3" class="form-label text-xs">Created At</label>
                                        <input id="input-filter-3" type="text" class="form-control flex-1" placeholder="Important Meeting">
                                    </div>
                                    <div class="col-span-6">
                                        <label for="input-filter-4" class="form-label text-xs">Size</label>
                                        <select id="input-filter-4" class="form-select flex-1">
                                            <option>10</option>
                                            <option>25</option>
                                            <option>35</option>
                                            <option>50</option>
                                        </select>
                                    </div>
                                    <div class="col-span-12 flex items-center mt-3">
                                        <button class="btn btn-secondary w-32 ml-auto">Create Filter</button>
                                        <button class="btn btn-primary w-32 ml-2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-auto flex">
                    <button class="btn btn-primary shadow-md mr-2">Upload New Files</button>
                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                            <span class="w-5 h-5 flex items-center justify-center">
                                <i class="w-4 h-4" data-feather="plus"></i>
                            </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <ul class="dropdown-content">
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="file" class="w-4 h-4 mr-2"></i> Share Files
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: File Manager Filter -->
            <!-- BEGIN: Directory & Files -->
            <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                @foreach ($fakers as $faker)
                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <div class="absolute left-0 top-0 mt-3 ml-3">
                                <input class="form-check-input border border-slate-500" type="checkbox" {{ $faker['true_false'][0] ? '' : 'checked' }}>
                            </div>
                            @if ($faker['files'][0]['type'] == 'Empty Folder')
                                <a href="" class="w-3/5 file__icon file__icon--empty-directory mx-auto"></a>
                            @elseif ($faker['files'][0]['type'] == 'Folder')
                                <a href="" class="w-3/5 file__icon file__icon--directory mx-auto"></a>
                            @elseif ($faker['files'][0]['type'] == 'Image')
                                <a href="" class="w-3/5 file__icon file__icon--image mx-auto">
                                    <div class="file__icon--image__preview image-fit">
                                        <img alt="" src="{{ asset('dist/images/' . strtolower($faker['files'][0]['file_name'])) }}">
                                    </div>
                                </a>
                            @else
                                <a href="" class="w-3/5 file__icon file__icon--file mx-auto">
                                    <div class="file__icon__file-name">{{ $faker['files'][0]['type'] }}</div>
                                </a>
                            @endif
                            <a href="" class="block font-medium mt-4 text-center truncate">{{ $faker['files'][0]['file_name'] }}</a>
                            <div class="text-slate-500 text-xs text-center mt-0.5">{{ $faker['files'][0]['size'] }}</div>
                            <div class="absolute top-0 right-0 mr-2 mt-3 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END: Directory & Files -->
            <!-- BEGIN: Pagination -->
            <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-6">
                <nav class="w-full sm:w-auto sm:mr-auto">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-feather="chevrons-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-feather="chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">...</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-feather="chevron-right"></i>
                            </a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                <i class="w-4 h-4" data-feather="chevrons-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <select class="w-20 form-select box mt-3 sm:mt-0">
                    <option>10</option>
                    <option>25</option>
                    <option>35</option>
                    <option>50</option>
                </select>
            </div>
            <!-- END: Pagination -->
        </div>
    </div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Point of Sale</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#new-order-modal" class="btn btn-primary shadow-md mr-2">New Order</a>
            <div class="pos-dropdown dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="chevron-down"></i>
                    </span>
                </button>
                <div class="pos-dropdown__dropdown-menu dropdown-menu">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206020 - {{ $fakers[3]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206022 - {{ $fakers[4]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                                <span class="truncate">INV-0206021 - {{ $fakers[5]['users'][0]['name'] }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Item List -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <div class="lg:flex intro-y">
                <div class="relative">
                    <input type="text" class="form-control py-3 px-4 w-full lg:w-64 box pr-10" placeholder="Search item...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0 text-slate-500" data-feather="search"></i>
                </div>
                <select class="form-select py-3 px-4 box w-full lg:w-auto mt-3 lg:mt-0 ml-auto">
                    <option>Sort By</option>
                    <option>A to Z</option>
                    <option>Z to A</option>
                    <option>Lowest Price</option>
                    <option>Highest Price</option>
                </select>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5">
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Soup</div>
                    <div class="text-slate-500">5 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box bg-primary p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base text-white">Pancake & Toast</div>
                    <div class="text-white text-opacity-80 dark:text-slate-500">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Pasta</div>
                    <div class="text-slate-500">4 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Waffle</div>
                    <div class="text-slate-500">3 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Snacks</div>
                    <div class="text-slate-500">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Deserts</div>
                    <div class="text-slate-500">8 Items</div>
                </div>
                <div class="col-span-12 sm:col-span-4 2xl:col-span-3 box p-5 cursor-pointer zoom-in">
                    <div class="font-medium text-base">Beverage</div>
                    <div class="text-slate-500">9 Items</div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-5 mt-5 pt-5 border-t">
                @foreach (array_slice($fakers, 0, 8) as $faker)
                    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="intro-y block col-span-12 sm:col-span-4 2xl:col-span-3">
                        <div class="box rounded-md p-3 relative zoom-in">
                            <div class="flex-none relative block before:block before:w-full before:pt-[100%]">
                                <div class="absolute top-0 left-0 w-full h-full image-fit">
                                    <img alt="" class="rounded-md" src="{{ asset('dist/images/' . $faker['foods'][0]['image']) }}">
                                </div>
                            </div>
                            <div class="block font-medium text-center truncate mt-3">{{ $faker['foods'][0]['name'] }}</div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <!-- END: Item List -->
        <!-- BEGIN: Ticket -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <ul class="nav nav-pills" role="tablist">
                        <li id="ticket-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2 active"
                                data-tw-toggle="pill"
                                data-tw-target="#ticket"
                                type="button"
                                role="tab"
                                aria-controls="ticket"
                                aria-selected="true"
                            >
                                Ticket
                            </button>
                        </li>
                        <li id="details-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2"
                                data-tw-toggle="pill"
                                data-tw-target="#details"
                                type="button"
                                role="tab"
                                aria-controls="details"
                                aria-selected="false"
                            >
                                Details
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="ticket" class="tab-pane active" role="tabpanel" aria-labelledby="ticket-tab">
                    <div class="box p-2 mt-5">
                        @foreach (array_slice($fakers, 0, 5) as $key => $faker)
                            <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#add-item-modal" class="flex items-center p-3 cursor-pointer transition duration-300 ease-in-out bg-white dark:bg-darkmode-600 hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md">
                                <div class="max-w-[50%] truncate mr-1">{{ $faker['foods'][0]['name'] }}</div>
                                <div class="text-slate-500">x 1</div>
                                <i data-feather="edit" class="w-4 h-4 text-slate-500 ml-2"></i>
                                <div class="ml-auto font-medium">${{ $faker['totals'][0] }}</div>
                            </a>
                        @endforeach
                    </div>
                    <div class="box flex p-5 mt-5">
                        <input type="text" class="form-control py-3 px-4 w-full bg-slate-100 border-slate-200/60 pr-10" placeholder="Use coupon code...">
                        <button class="btn btn-primary ml-2">Apply</button>
                    </div>
                    <div class="box p-5 mt-5">
                        <div class="flex">
                            <div class="mr-auto">Subtotal</div>
                            <div class="font-medium">$250</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Discount</div>
                            <div class="font-medium text-danger">-$20</div>
                        </div>
                        <div class="flex mt-4">
                            <div class="mr-auto">Tax</div>
                            <div class="font-medium">15%</div>
                        </div>
                        <div class="flex mt-4 pt-4 border-t border-slate-200/60 dark:border-darkmode-400">
                            <div class="mr-auto font-medium text-base">Total Charge</div>
                            <div class="font-medium text-base">$220</div>
                        </div>
                    </div>
                    <div class="flex mt-5">
                        <button class="btn w-32 border-slate-300 dark:border-darkmode-400 text-slate-500">Clear Items</button>
                        <button class="btn btn-primary w-32 shadow-md ml-auto">Charge</button>
                    </div>
                </div>
                <div id="details" class="tab-pane" role="tabpanel" aria-labelledby="details-tab">
                    <div class="box p-5 mt-5">
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 pb-5">
                            <div>
                                <div class="text-slate-500">Time</div>
                                <div class="mt-1">02/06/20 02:10 PM</div>
                            </div>
                            <i data-feather="clock" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 py-5">
                            <div>
                                <div class="text-slate-500">Customer</div>
                                <div class="mt-1">{{ $fakers[0]['users'][0]['name'] }}</div>
                            </div>
                            <i data-feather="user" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center border-b border-slate-200 dark:border-darkmode-400 py-5">
                            <div>
                                <div class="text-slate-500">People</div>
                                <div class="mt-1">3</div>
                            </div>
                            <i data-feather="users" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                        <div class="flex items-center pt-5">
                            <div>
                                <div class="text-slate-500">Table</div>
                                <div class="mt-1">21</div>
                            </div>
                            <i data-feather="mic" class="w-4 h-4 text-slate-500 ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Ticket -->
    </div>
    <!-- BEGIN: New Order Modal -->
    <div id="new-order-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">New Order</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-1" class="form-label">Name</label>
                        <input id="pos-form-1" type="text" class="form-control flex-1" placeholder="Customer name">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-2" class="form-label">Table</label>
                        <input id="pos-form-2" type="text" class="form-control flex-1" placeholder="Customer table">
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-3" class="form-label">Number of People</label>
                        <input id="pos-form-3" type="text" class="form-control flex-1" placeholder="People">
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-32 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-32">Create Ticket</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: New Order Modal -->
    <!-- BEGIN: Add Item Modal -->
    <div id="add-item-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">{{ $fakers[0]['foods'][0]['name'] }}</h2>
                </div>
                <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                    <div class="col-span-12">
                        <label for="pos-form-4" class="form-label">Quantity</label>
                        <div class="flex mt-2 flex-1">
                            <button type="button" class="btn w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 mr-1">-</button>
                            <input id="pos-form-4" type="text" class="form-control w-24 text-center" placeholder="Item quantity" value="2">
                            <button type="button" class="btn w-12 border-slate-200 bg-slate-100 dark:bg-darkmode-700 dark:border-darkmode-500 text-slate-500 ml-1">+</button>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <label for="pos-form-5" class="form-label">Notes</label>
                        <textarea id="pos-form-5" class="form-control w-full mt-2" placeholder="Item notes"></textarea>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                    <button type="button" class="btn btn-primary w-24">Add Item</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Add Item Modal -->
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Chat</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Start New Chat</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Create Group
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Chat Side Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
            <div class="intro-y pr-1">
                <div class="box p-2">
                    <ul class="nav nav-pills" role="tablist">
                        <li id="chats-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2 active"
                                data-tw-toggle="pill"
                                data-tw-target="#chats"
                                type="button"
                                role="tab"
                                aria-controls="chats"
                                aria-selected="true"
                            >
                                Chats
                            </button>
                        </li>
                        <li id="friends-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2"
                                data-tw-toggle="pill"
                                data-tw-target="#friends"
                                type="button"
                                role="tab"
                                aria-controls="friends"
                                aria-selected="false"
                            >
                                Friends
                            </button>
                        </li>
                        <li id="profile-tab" class="nav-item flex-1" role="presentation">
                            <button
                                class="nav-link w-full py-2"
                                data-tw-toggle="pill"
                                data-tw-target="#profile"
                                type="button"
                                role="tab"
                                aria-controls="profile"
                                aria-selected="false"
                            >
                                Profile
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="chats" class="tab-pane active" role="tabpanel" aria-labelledby="chats-tab">
                    <div class="pr-1">
                        <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">
                            <div class="relative text-slate-500">
                                <input type="text" class="form-control py-3 px-4 border-transparent bg-slate-100 pr-10" placeholder="Search for messages or users...">
                                <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                            </div>
                            <div class="overflow-x-auto scrollbar-hidden">
                                <div class="flex mt-5">
                                    @foreach (array_slice($fakers, 0, 10) as $faker)
                                        <a href="" class="w-10 mr-4 cursor-pointer">
                                            <div class="w-10 h-10 flex-none image-fit rounded-full">
                                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                            </div>
                                            <div class="text-xs text-slate-500 truncate text-center mt-2">{{ $faker['users'][0]['name'] }}</div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4">
                        @foreach (array_slice($fakers, 0, 10) as $key => $faker)
                            <div class="intro-x cursor-pointer box relative flex items-center p-5 {{ $key ? 'mt-5' : '' }}">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium">{{ $faker['users'][0]['name'] }}</a>
                                        <div class="text-xs text-slate-400 ml-auto">{{ $faker['times'][0] }}</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">{{ $faker['news'][0]['short_content'] }}</div>
                                </div>
                                @if ($faker['true_false'][0])
                                    <div class="w-5 h-5 flex items-center justify-center absolute top-0 right-0 text-xs text-white rounded-full bg-primary font-medium -mt-1 -mr-1">{{ $faker['notification_count'] }}</div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                <div id="friends" class="tab-pane" role="tabpanel" aria-labelledby="friends-tab">
                    <div class="pr-1">
                        <div class="box p-5 mt-5">
                            <div class="relative text-slate-500">
                                <input type="text" class="form-control py-3 px-4 border-transparent bg-slate-100 pr-10" placeholder="Search for messages or users...">
                                <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                            </div>
                            <button type="button" class="btn btn-primary w-full mt-3">Invite Friends</button>
                        </div>
                    </div>
                    <div class="chat__user-list overflow-y-auto scrollbar-hidden pr-1 pt-1">
                        <div class="mt-4 text-slate-500">A</div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 text-slate-500">B</div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[3]['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="" class="font-medium">{{ $fakers[3]['users'][0]['name'] }}</a>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="cursor-pointer box relative flex items-center p-5 mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[4]['photos'][0]) }}">
                                <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600"></div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="" class="font-medium">{{ $fakers[4]['users'][0]['name'] }}</a>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Last seen 2 hours ago</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="copy" class="w-4 h-4 mr-2"></i> Copy Contact
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profile" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="pr-1">
                        <div class="box px-5 py-10 mt-5">
                            <div class="w-20 h-20 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                <img alt="" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="text-center mt-3">
                                <div class="font-medium text-lg">{{ $fakers[0]['users'][0]['name'] }}</div>
                                <div class="text-slate-500 mt-1">Tailwind HTML Admin Template</div>
                            </div>
                        </div>
                        <div class="box p-5 mt-5">
                            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5">
                                <div>
                                    <div class="text-slate-500">Country</div>
                                    <div class="mt-1">New York City, USA</div>
                                </div>
                                <i data-feather="globe" class="w-4 h-4 text-slate-500 ml-auto"></i>
                            </div>
                            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 py-5">
                                <div>
                                    <div class="text-slate-500">Phone</div>
                                    <div class="mt-1">+32 19 23 62 24 34</div>
                                </div>
                                <i data-feather="mic" class="w-4 h-4 text-slate-500 ml-auto"></i>
                            </div>
                            <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 py-5">
                                <div>
                                    <div class="text-slate-500">Email</div>
                                    <div class="mt-1">{{ $fakers[0]['users'][0]['email'] }}</div>
                                </div>
                                <i data-feather="mail" class="w-4 h-4 text-slate-500 ml-auto"></i>
                            </div>
                            <div class="flex items-center pt-5">
                                <div>
                                    <div class="text-slate-500">Joined Date</div>
                                    <div class="mt-1">{{ $fakers[0]['dates'][0] }}</div>
                                </div>
                                <i data-feather="clock" class="w-4 h-4 text-slate-500 ml-auto"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Chat Side Menu -->
        <!-- BEGIN: Chat Content -->
        <div class="intro-y col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="chat__box box">
                <!-- BEGIN: Chat Active -->
                <div class="hidden h-full flex flex-col">
                    <div class="flex flex-col sm:flex-row border-b border-slate-200/60 dark:border-darkmode-400 px-5 py-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit relative">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-3 mr-auto">
                                <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                                <div class="text-slate-500 text-xs sm:text-sm">Hey, I am using chat <span class="mx-1">•</span> Online</div>
                            </div>
                        </div>
                        <div class="flex items-center sm:ml-auto mt-5 sm:mt-0 border-t sm:border-0 border-slate-200/60 pt-3 sm:pt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                            <a href="javascript:;" class="w-5 h-5 text-slate-500">
                                <i data-feather="search" class="w-5 h-5"></i>
                            </a>
                            <a href="javascript:;" class="w-5 h-5 text-slate-500 ml-5">
                                <i data-feather="user-plus" class="w-5 h-5"></i>
                            </a>
                            <div class="dropdown ml-auto sm:ml-3">
                                <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-5 h-5"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share Contact
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="overflow-y-scroll scrollbar-hidden px-5 pt-5 flex-1">
                        <div class="chat__box__text-box flex items-end float-left mb-4">
                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="bg-slate-100 dark:bg-darkmode-400 px-4 py-3 text-slate-500 rounded-r-md rounded-t-md">
                                Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                <div class="mt-1 text-xs text-slate-500">2 mins ago</div>
                            </div>
                            <div class="hidden sm:block dropdown ml-3 my-auto">
                                <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-4 h-4"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                        <div class="chat__box__text-box flex items-end float-right mb-4">
                            <div class="hidden sm:block dropdown mr-3 my-auto">
                                <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-4 h-4"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-primary px-4 py-3 text-white rounded-l-md rounded-t-md">
                                Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                <div class="mt-1 text-xs text-white text-opacity-80">1 mins ago</div>
                            </div>
                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                        </div>
                        <div class="clear-both"></div>
                        <div class="chat__box__text-box flex items-end float-right mb-4">
                            <div class="hidden sm:block dropdown mr-3 my-auto">
                                <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-4 h-4"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-primary px-4 py-3 text-white rounded-l-md rounded-t-md">
                                Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                <div class="mt-1 text-xs text-white text-opacity-80">59 secs ago</div>
                            </div>
                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                        </div>
                        <div class="clear-both"></div>
                        <div class="text-slate-400 dark:text-slate-500 text-xs text-center mb-10 mt-5">12 June 2020</div>
                        <div class="chat__box__text-box flex items-end float-left mb-4">
                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="bg-slate-100 dark:bg-darkmode-400 px-4 py-3 text-slate-500 rounded-r-md rounded-t-md">
                                Lorem ipsum sit amen dolor, lorem ipsum sit amen dolor
                                <div class="mt-1 text-xs text-slate-500">10 secs ago</div>
                            </div>
                            <div class="hidden sm:block dropdown ml-3 my-auto">
                                <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-4 h-4"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear-both"></div>
                        <div class="chat__box__text-box flex items-end float-right mb-4">
                            <div class="hidden sm:block dropdown mr-3 my-auto">
                                <a href="javascript:;" class="dropdown-toggle w-4 h-4 text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-vertical" class="w-4 h-4"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="corner-up-left" class="w-4 h-4 mr-2"></i> Reply
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="bg-primary px-4 py-3 text-white rounded-l-md rounded-t-md">
                                Lorem ipsum
                                <div class="mt-1 text-xs text-white text-opacity-80">1 secs ago</div>
                            </div>
                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                        </div>
                        <div class="clear-both"></div>
                        <div class="chat__box__text-box flex items-end float-left mb-4">
                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="bg-slate-100 dark:bg-darkmode-400 px-4 py-3 text-slate-500 rounded-r-md rounded-t-md">
                                {{ $fakers[0]['users'][0]['name'] }} is typing
                                <span class="typing-dots ml-1">
                                    <span>.</span>
                                    <span>.</span>
                                    <span>.</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 pb-10 sm:py-4 flex items-center border-t border-slate-200/60 dark:border-darkmode-400">
                        <textarea class="chat__box__input form-control dark:bg-darkmode-600 h-16 resize-none border-transparent px-5 py-3 shadow-none focus:border-transparent focus:ring-0" rows="1" placeholder="Type your message..."></textarea>
                        <div class="flex absolute sm:static left-0 bottom-0 ml-5 sm:ml-0 mb-5 sm:mb-0">
                            <div class="dropdown mr-3 sm:mr-5">
                                <a href="javascript:;" class="dropdown-toggle w-4 h-4 sm:w-5 sm:h-5 block text-slate-500" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="smile" class="w-full h-full"></i>
                                </a>
                                <div class="chat-dropdown dropdown-menu">
                                    <div class="dropdown-content">
                                        <div class="chat-dropdown__box flex flex-col">
                                            <div class="px-1 pt-1">
                                                <div class="relative text-slate-500">
                                                    <input type="text" class="form-control border-transparent bg-slate-100 pr-10" placeholder="Search emojis...">
                                                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-feather="search"></i>
                                                </div>
                                            </div>
                                            <ul class="chat-dropdown__box__tabs nav nav-pills px-1 mt-5" role="tablist">
                                                <li id="history-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#history" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="history" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="smile-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#smile" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400 active" role="tab" aria-controls="smile" aria-selected="true">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 448c-110.3 0-200-89.7-200-200S137.7 56 248 56s200 89.7 200 200-89.7 200-200 200zm-80-216c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm160 0c17.7 0 32-14.3 32-32s-14.3-32-32-32-32 14.3-32 32 14.3 32 32 32zm4 72.6c-20.8 25-51.5 39.4-84 39.4s-63.2-14.3-84-39.4c-8.5-10.2-23.7-11.5-33.8-3.1-10.2 8.5-11.5 23.6-3.1 33.8 30 36 74.1 56.6 120.9 56.6s90.9-20.6 120.9-56.6c8.5-10.2 7.1-25.3-3.1-33.8-10.1-8.4-25.3-7.1-33.8 3.1z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="cat-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#cat" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="cat" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M290.59 192c-20.18 0-106.82 1.98-162.59 85.95V192c0-52.94-43.06-96-96-96-17.67 0-32 14.33-32 32s14.33 32 32 32c17.64 0 32 14.36 32 32v256c0 35.3 28.7 64 64 64h176c8.84 0 16-7.16 16-16v-16c0-17.67-14.33-32-32-32h-32l128-96v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V289.86c-10.29 2.67-20.89 4.54-32 4.54-61.81 0-113.52-44.05-125.41-102.4zM448 96h-64l-64-64v134.4c0 53.02 42.98 96 96 96s96-42.98 96-96V32l-64 64zm-72 80c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16zm80 0c-8.84 0-16-7.16-16-16s7.16-16 16-16 16 7.16 16 16-7.16 16-16 16z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="coffee-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#coffee" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="coffee" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M192 384h192c53 0 96-43 96-96h32c70.6 0 128-57.4 128-128S582.6 32 512 32H120c-13.3 0-24 10.7-24 24v232c0 53 43 96 96 96zM512 96c35.3 0 64 28.7 64 64s-28.7 64-64 64h-32V96h32zm47.7 384H48.3c-47.6 0-61-64-36-64h583.3c25 0 11.8 64-35.9 64z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="futbol-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#futbol" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="futbol" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zm-48 0l-.003-.282-26.064 22.741-62.679-58.5 16.454-84.355 34.303 3.072c-24.889-34.216-60.004-60.089-100.709-73.141l13.651 31.939L256 139l-74.953-41.525 13.651-31.939c-40.631 13.028-75.78 38.87-100.709 73.141l34.565-3.073 16.192 84.355-62.678 58.5-26.064-22.741-.003.282c0 43.015 13.497 83.952 38.472 117.991l7.704-33.897 85.138 10.447 36.301 77.826-29.902 17.786c40.202 13.122 84.29 13.148 124.572 0l-29.902-17.786 36.301-77.826 85.138-10.447 7.704 33.897C442.503 339.952 456 299.015 456 256zm-248.102 69.571l-29.894-91.312L256 177.732l77.996 56.527-29.622 91.312h-96.476z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="building-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#building" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="building" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M128 148v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12zm140 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-128 96h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm128 0h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm-76 84v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm76 12h40c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12zm180 124v36H0v-36c0-6.6 5.4-12 12-12h19.5V24c0-13.3 10.7-24 24-24h337c13.3 0 24 10.7 24 24v440H436c6.6 0 12 5.4 12 12zM79.5 463H192v-67c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v67h112.5V49L80 48l-.5 415z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="lightbulb-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#lightbulb" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="lightbulb" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M176 80c-52.94 0-96 43.06-96 96 0 8.84 7.16 16 16 16s16-7.16 16-16c0-35.3 28.72-64 64-64 8.84 0 16-7.16 16-16s-7.16-16-16-16zM96.06 459.17c0 3.15.93 6.22 2.68 8.84l24.51 36.84c2.97 4.46 7.97 7.14 13.32 7.14h78.85c5.36 0 10.36-2.68 13.32-7.14l24.51-36.84c1.74-2.62 2.67-5.7 2.68-8.84l.05-43.18H96.02l.04 43.18zM176 0C73.72 0 0 82.97 0 176c0 44.37 16.45 84.85 43.56 115.78 16.64 18.99 42.74 58.8 52.42 92.16v.06h48v-.12c-.01-4.77-.72-9.51-2.15-14.07-5.59-17.81-22.82-64.77-62.17-109.67-20.54-23.43-31.52-53.15-31.61-84.14-.2-73.64 59.67-128 127.95-128 70.58 0 128 57.42 128 128 0 30.97-11.24 60.85-31.65 84.14-39.11 44.61-56.42 91.47-62.1 109.46a47.507 47.507 0 0 0-2.22 14.3v.1h48v-.05c9.68-33.37 35.78-73.18 52.42-92.16C335.55 260.85 352 220.37 352 176 352 78.8 273.2 0 176 0z"></path></svg>
                                                    </button>
                                                </li>
                                                <li id="music-tab" class="nav-item flex-1" role="presentation">
                                                    <button data-tw-toggle="tab" data-tw-target="#music" class="nav-link border-0 w-full px-0 py-2 hover:bg-slate-100 dark:hover:bg-darkmode-400" role="tab" aria-controls="music" aria-selected="false">
                                                        <svg class="w-4 h-4 mx-auto" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M511.99 32.01c0-21.71-21.1-37.01-41.6-30.51L150.4 96c-13.3 4.2-22.4 16.5-22.4 30.5v261.42c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64V214.31l256-75.02v184.63c-10.05-2.38-20.72-3.92-32-3.92-53.02 0-96 28.65-96 64s42.98 64 96 64 96-28.65 96-64l-.01-351.99z"></path></svg>
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content overflow-hidden mt-5">
                                                <div id="history" class="h-full tab-pane" role="tabpanel" aria-labelledby="history-tab">
                                                    <div class="font-medium px-1">Recent Emojis</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😂</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="smile" class="h-full tab-pane active" role="tabpanel" aria-labelledby="smile-tab">
                                                    <div class="font-medium px-1">Smileys & People</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☺️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☹️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☠️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">😾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;⚕️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;⚕️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🎓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🎓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🏫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🏫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;⚖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;⚖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🌾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🌾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🍳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🍳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🔧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🔧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🏭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🏭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;💼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;💼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🔬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🔬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;💻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;💻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🎤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🎤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🎨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🎨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;✈️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;✈️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🚀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🚀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;🚒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;🚒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👮&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👮&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕵️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕵️&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕵️&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💂&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💂&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👷&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👷&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👳&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👳&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👱&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👱&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧙&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧙&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧚&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧚&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧛&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧛&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧜&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧜&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧝&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧝&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧞&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧞&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧟&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧟&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙍&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙍&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙎&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙎&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙅&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙅&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙆&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙆&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💁&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💁&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙋&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙋&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙇&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙇&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤦&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤦&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤷&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤷&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💆&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💆&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💇&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💇&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚶&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚶&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏃&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏃&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👯&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👯&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧖&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧖&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧗&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧗&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧘&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧘&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕴️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗣️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛷️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏌️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏌️&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏌️&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏄&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏄&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚣&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚣&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏊&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏊&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛹️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛹️&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛹️&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏋️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏋️&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏋️&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚴&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚴&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚵&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚵&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏎️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏍️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤸&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤸&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤼&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤼&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤽&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤽&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤾&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤾&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤹&zwj;♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤹&zwj;♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;❤️&zwj;💋&zwj;👨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;❤️&zwj;💋&zwj;👨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;❤️&zwj;💋&zwj;👩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;❤️&zwj;👨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;❤️&zwj;👨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;❤️&zwj;👩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👩&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👩&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👩&zwj;👧&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👩&zwj;👦&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👩&zwj;👧&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👨&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👨&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👨&zwj;👧&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👨&zwj;👦&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👨&zwj;👧&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👩&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👩&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👩&zwj;👧&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👩&zwj;👦&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👩&zwj;👧&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👦&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👧&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👨&zwj;👧&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👦&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👧&zwj;👦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👩&zwj;👧&zwj;👧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☝️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✌️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖐️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✍️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🙏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🤝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👁️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👁️&zwj;🗨️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❤️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❣️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗨️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗯️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕳️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕶️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛍️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">👒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛑️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💎</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="cat" class="h-full tab-pane" role="tabpanel" aria-labelledby="cat-tab">
                                                    <div class="font-medium px-1">Animals & Nature</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐿️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕊️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🐞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕷️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕸️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🦂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏵️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☘️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍃</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="coffee" class="h-full tab-pane" role="tabpanel" aria-labelledby="coffee-tab">
                                                    <div class="font-medium px-1">Food & Drink</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌶️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🧀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍽️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🍴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏺</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="futbol" class="h-full tab-pane" role="tabpanel" aria-labelledby="futbol-tab">
                                                    <div class="font-medium px-1">Activities</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎗️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎟️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛸️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕹️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♠️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♥️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♦️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♣️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🃏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🀄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎴</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="building" class="h-full tab-pane" role="tabpanel" aria-labelledby="building-tab">
                                                    <div class="font-medium px-1">Travel & Places</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗺️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏔️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛰️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏕️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏜️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏝️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏞️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏟️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏛️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏗️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏘️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏙️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏚️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛩️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♨️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖼️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛣️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛤️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛳️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛴️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛥️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✈️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛩️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛰️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛎️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛏️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛋️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⌛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⌚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏱️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏲️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕰️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌡️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⭐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☁️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛈️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌤️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌥️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌦️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌧️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌨️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌩️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌪️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌫️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌬️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛱️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❄️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☃️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☄️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🌊</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="lightbulb" class="h-full tab-pane" role="tabpanel" aria-labelledby="lightbulb-tab">
                                                    <div class="font-medium px-1">Objects</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎙️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎚️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎛️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🥁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☎️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖥️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖨️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⌨️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖱️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖲️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎞️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📽️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕯️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗞️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏷️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✉️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📥</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗳️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✏️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✒️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖋️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖊️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖌️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖍️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗒️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗓️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📇</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🖇️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗃️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗄️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗑️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗝️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔨</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛏️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚒️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛠️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗡️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚔️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛡️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚙️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗜️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚗️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛓️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚰️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚱️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🗿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛢️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛒</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="music" class="h-full tab-pane" role="tabpanel" aria-labelledby="music-tab">
                                                    <div class="font-medium px-1">Symbols</div>
                                                    <div class="h-full pb-10 overflow-y-auto scrollbar-hidden mt-2">
                                                        <div class="grid grid-cols-8 text-2xl">
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🏧</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚮</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚠️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚭</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🚷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔞</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☢️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☣️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⬆️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↗️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">➡️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↘️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⬇️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↙️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⬅️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↕️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↔️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↩️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">↪️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⤴️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⤵️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔃</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔄</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔝</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🛐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚛️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕉️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✡️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☸️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☯️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✝️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☦️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☪️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☮️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🕎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♈</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♉</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♊</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♋</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♍</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♏</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⛎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔀</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔂</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">▶️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏩</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏭️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏯️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">◀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏮️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔼</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏬</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏸️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏹️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏺️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⏏️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🎦</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔆</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♀️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚕️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">♻️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚜️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔱</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">📛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⭕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✅</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">☑️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✔️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✖️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❌</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">➕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">➖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">➗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">➰</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">➿</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">〽️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✳️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">✴️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❇️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">‼️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⁉️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">❗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">〰️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">©️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">®️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">™️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">#️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">*️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">0️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">1️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">2️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">3️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">4️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">5️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">6️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">7️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">8️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">9️⃣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔟</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔡</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔢</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔣</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔤</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🅰️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆎</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🅱️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆒</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆓</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">ℹ️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆔</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">Ⓜ️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆕</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆖</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🅾️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆗</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🅿️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆙</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🆚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈁</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈂️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈷️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈯</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🉐</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈚</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🉑</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">㊗️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">㊙️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🈵</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">▪️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">▫️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">◻️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">◼️</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">◽</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">◾</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⬛</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⬜</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔶</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔷</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔸</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔹</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔺</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔻</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">💠</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔘</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔲</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔳</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚪</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">⚫</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔴</button>
                                                            <button class="rounded focus:outline-none hover:bg-slate-100 dark:hover:bg-darkmode-400">🔵</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-4 h-4 sm:w-5 sm:h-5 relative text-slate-500 mr-3 sm:mr-5">
                                <i data-feather="paperclip" class="w-full h-full"></i>
                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                            </div>
                        </div>
                        <a href="javascript:;" class="w-8 h-8 sm:w-10 sm:h-10 block bg-primary text-white rounded-full flex-none flex items-center justify-center mr-5">
                            <i data-feather="send" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
                <!-- END: Chat Active -->
                <!-- BEGIN: Chat Default -->
                <div class="h-full flex items-center">
                    <div class="mx-auto text-center">
                        <div class="w-16 h-16 flex-none image-fit rounded-full overflow-hidden mx-auto">
                            <img alt="" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                        </div>
                        <div class="mt-3">
                            <div class="font-medium">Hey, {{ $fakers[0]['users'][0]['name'] }}!</div>
                            <div class="text-slate-500 mt-1">Please select a chat to start messaging.</div>
                        </div>
                    </div>
                </div>
                <!-- END: Chat Default -->
            </div>
        </div>
        <!-- END: Chat Content -->
    </div>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Calendar</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print Schedule</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="share-2" class="w-4 h-4 mr-2"></i> Share
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Calendar Side Menu -->
        <div class="col-span-12 xl:col-span-4 2xl:col-span-3">
            <div class="box p-5 intro-y">
                <button type="button" class="btn btn-primary w-full mt-2">
                    <i class="w-4 h-4 mr-2" data-feather="edit-3"></i> Add New Schedule
                </button>
                <div class="border-t border-b border-slate-200/60 dark:border-darkmode-400 mt-6 mb-5 py-3" id="calendar-events">
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">VueJS Amsterdam</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span class="event__days">2</span> Days <span class="mx-1">•</span> 10:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-feather="edit" class="w-4 h-4 text-slate-500"></i>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Vue Fes Japan 2019</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span class="event__days">3</span> Days <span class="mx-1">•</span> 07:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-feather="edit" class="w-4 h-4 text-slate-500"></i>
                        </a>
                    </div>
                    <div class="relative">
                        <div class="event p-3 -mx-3 cursor-pointer transition duration-300 ease-in-out hover:bg-slate-100 dark:hover:bg-darkmode-400 rounded-md flex items-center">
                            <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                            <div class="pr-10">
                                <div class="event__title truncate">Laracon 2021</div>
                                <div class="text-slate-500 text-xs mt-0.5">
                                    <span class="event__days">4</span> Days <span class="mx-1">•</span> 11:00 AM
                                </div>
                            </div>
                        </div>
                        <a class="flex items-center absolute top-0 bottom-0 my-auto right-0" href="">
                            <i data-feather="edit" class="w-4 h-4 text-slate-500"></i>
                        </a>
                    </div>
                    <div class="text-slate-500 p-3 text-center hidden" id="calendar-no-events">No events yet</div>
                </div>
                <div class="form-check form-switch flex">
                    <label class="form-check-label" for="checkbox-events">Remove after drop</label>
                    <input class="show-code form-check-input ml-auto" type="checkbox" id="checkbox-events">
                </div>
            </div>
            <div class="box p-5 intro-y mt-5">
                <div class="flex">
                    <i data-feather="chevron-left" class="w-5 h-5 text-slate-500"></i>
                    <div class="font-medium text-base mx-auto">April</div>
                    <i data-feather="chevron-right" class="w-5 h-5 text-slate-500"></i>
                </div>
                <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                    <div class="font-medium">Su</div>
                    <div class="font-medium">Mo</div>
                    <div class="font-medium">Tu</div>
                    <div class="font-medium">We</div>
                    <div class="font-medium">Th</div>
                    <div class="font-medium">Fr</div>
                    <div class="font-medium">Sa</div>
                    <div class="py-0.5 rounded relative text-slate-500">29</div>
                    <div class="py-0.5 rounded relative text-slate-500">30</div>
                    <div class="py-0.5 rounded relative text-slate-500">31</div>
                    <div class="py-0.5 rounded relative">1</div>
                    <div class="py-0.5 rounded relative">2</div>
                    <div class="py-0.5 rounded relative">3</div>
                    <div class="py-0.5 rounded relative">4</div>
                    <div class="py-0.5 rounded relative">5</div>
                    <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                    <div class="py-0.5 rounded relative">7</div>
                    <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                    <div class="py-0.5 rounded relative">9</div>
                    <div class="py-0.5 rounded relative">10</div>
                    <div class="py-0.5 rounded relative">11</div>
                    <div class="py-0.5 rounded relative">12</div>
                    <div class="py-0.5 rounded relative">13</div>
                    <div class="py-0.5 rounded relative">14</div>
                    <div class="py-0.5 rounded relative">15</div>
                    <div class="py-0.5 rounded relative">16</div>
                    <div class="py-0.5 rounded relative">17</div>
                    <div class="py-0.5 rounded relative">18</div>
                    <div class="py-0.5 rounded relative">19</div>
                    <div class="py-0.5 rounded relative">20</div>
                    <div class="py-0.5 rounded relative">21</div>
                    <div class="py-0.5 rounded relative">22</div>
                    <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                    <div class="py-0.5 rounded relative">24</div>
                    <div class="py-0.5 rounded relative">25</div>
                    <div class="py-0.5 rounded relative">26</div>
                    <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                    <div class="py-0.5 rounded relative">28</div>
                    <div class="py-0.5 rounded relative">29</div>
                    <div class="py-0.5 rounded relative">30</div>
                    <div class="py-0.5 rounded relative text-slate-500">1</div>
                    <div class="py-0.5 rounded relative text-slate-500">2</div>
                    <div class="py-0.5 rounded relative text-slate-500">3</div>
                    <div class="py-0.5 rounded relative text-slate-500">4</div>
                    <div class="py-0.5 rounded relative text-slate-500">5</div>
                    <div class="py-0.5 rounded relative text-slate-500">6</div>
                    <div class="py-0.5 rounded relative text-slate-500">7</div>
                    <div class="py-0.5 rounded relative text-slate-500">8</div>
                    <div class="py-0.5 rounded relative text-slate-500">9</div>
                </div>
                <div class="border-t border-slate-200/60 dark:border-darkmode-400 pt-5 mt-5">
                    <div class="flex items-center">
                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                        <span class="truncate">Independence Day</span>
                        <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">23th</span>
                    </div>
                    <div class="flex items-center mt-4">
                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                        <span class="truncate">Memorial Day</span>
                        <div class="h-px flex-1 border border-r border-dashed border-slate-200 mx-3 xl:hidden"></div>
                        <span class="font-medium xl:ml-auto">10th</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Calendar Side Menu -->
        <!-- BEGIN: Calendar Content -->
        <div class="col-span-12 xl:col-span-8 2xl:col-span-9">
            <div class="box p-5">
                <div class="full-calendar" id="calendar"></div>
            </div>
        </div>
        <!-- END: Calendar Content -->
    </div>
</section>

    <div class="intro-y tab-content mt-5">
        <div id="dashboard" class="tab-pane active" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Top Categories -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Top Categories</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="plus" class="w-4 h-4 mr-2"></i> Add Category
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Wordpress Template</a>
                                <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">6.5k</div>
                                    <div class="bg-success/20 text-success rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Bootstrap HTML Template</a>
                                <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">2.5k</div>
                                    <div class="bg-pending/10 text-pending rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row mt-5">
                            <div class="mr-auto">
                                <a href="" class="font-medium">Tailwind HTML Template</a>
                                <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                            </div>
                            <div class="flex">
                                <div class="w-32 -ml-2 sm:ml-0 mt-5 mr-auto sm:mr-5">
                                    <canvas class="simple-line-chart-1" data-random="true" height="50"></canvas>
                                </div>
                                <div class="text-center">
                                    <div class="font-medium">3.4k</div>
                                    <div class="bg-primary/10 text-primary rounded px-2 mt-1.5">+150</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Categories -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-controls="work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-controls="latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                
            </div>
        </div>
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <!-- BEGIN: Profile Info -->
    <div class="intro-y box px-5 pt-5 mt-5">
        <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
            <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                </div>
                <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">{{ $fakers[0]['users'][0]['name'] }}</div>
                    <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                <div class="font-medium text-center lg:text-left lg:mt-3">Contact Details</div>
                <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                        <i data-feather="mail" class="w-4 h-4 mr-2"></i> {{ $fakers[0]['users'][0]['email'] }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-feather="instagram" class="w-4 h-4 mr-2"></i> Instagram {{ $fakers[0]['users'][0]['name'] }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                        <i data-feather="twitter" class="w-4 h-4 mr-2"></i> Twitter {{ $fakers[0]['users'][0]['name'] }}
                    </div>
                </div>
            </div>
            <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">201</div>
                    <div class="text-slate-500">Orders</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">1k</div>
                    <div class="text-slate-500">Purchases</div>
                </div>
                <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">492</div>
                    <div class="text-slate-500">Reviews</div>
                </div>
            </div>
        </div>
        <ul
            class="nav nav-link-tabs flex-col sm:flex-row justify-center lg:justify-start text-center"
            role="tablist"
        >
            <li id="profile-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center active"
                    data-tw-target="#profile"
                    aria-controls="profile"
                    aria-selected="true"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="user"></i> Profile
                </a>
            </li>
            <li id="account-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#account"
                    aria-controls="account"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="shield"></i> Account
                </a>
            </li>
            <li id="change-password-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#change-password"
                    aria-controls="change-password"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="lock"></i> Change Password
                </a>
            </li>
            <li id="settings-tab" class="nav-item" role="presentation">
                <a
                    href="javascript:;"
                    class="nav-link py-4 flex items-center"
                    data-tw-target="#settings"
                    aria-controls="settings"
                    aria-selected="false"
                    role="tab"
                >
                    <i class="w-4 h-4 mr-2" data-feather="settings"></i> Settings
                </a>
            </li>
        </ul>
    </div>
    <!-- END: Profile Info -->
    <div class="tab-content mt-5">
        <div id="profile" class="tab-pane active" role="tabpanel" aria-labelledby="profile-tab">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Latest Uploads -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Uploads</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">All Files</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">All Files</button>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Documentation</a>
                                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--file">
                                    <div class="file__icon__file-name text-xs">MP3</div>
                                </a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Celine Dion - Ashes</a>
                                <div class="text-slate-500 text-xs mt-0.5">40 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="file">
                                <a href="" class="w-12 file__icon file__icon--empty-directory"></a>
                            </div>
                            <div class="ml-4">
                                <a class="font-medium" href="">Resources</a>
                                <div class="text-slate-500 text-xs mt-0.5">0 KB</div>
                            </div>
                            <div class="dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                    <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                                </a>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="users" class="w-4 h-4 mr-2"></i> Share File
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">
                                                <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Uploads -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-controls="work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-controls="latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: New Products -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">New Products</h2>
                        <button data-carousel="new-products" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-products" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div id="new-products" class="tiny-slider py-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['news'][0]['short_content'] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                                            <div class="text-slate-500">Orders</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][1] }}k</div>
                                            <div class="text-slate-500">Purchases</div>
                                        </div>
                                        <div class="text-center rounded-md w-20 py-3">
                                            <div class="font-medium text-primary text-xl">{{ $faker['totals'][0] }}</div>
                                            <div class="text-slate-500">Reviews</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-slate-500">Date of Release</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="btn btn-secondary w-20 ml-auto">Preview</button>
                                        <button class="btn btn-secondary w-20 ml-2">Details</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Products -->
                <!-- BEGIN: New Authors -->
                <div class="intro-y box col-span-12">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">New Authors</h2>
                        <button data-carousel="new-authors" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="new-authors" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div id="new-authors" class="tiny-slider py-5">
                        @foreach (array_slice($fakers, 0, 5) as $faker)
                            <div class="px-5">
                                <div class="flex flex-col lg:flex-row items-center pb-5">
                                    <div class="flex-1 flex flex-col sm:flex-row items-center pr-5 lg:border-r border-slate-200/60 dark:border-darkmode-400">
                                        <div class="sm:mr-5">
                                            <div class="w-20 h-20 image-fit">
                                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                            </div>
                                        </div>
                                        <div class="mr-auto text-center sm:text-left mt-3 sm:mt-0">
                                            <a href="" class="font-medium text-lg">{{ $faker['users'][0]['name'] }}</a>
                                            <div class="text-slate-500 mt-1 sm:mt-0">{{ $faker['jobs'][0] }}</div>
                                        </div>
                                    </div>
                                    <div class="w-full lg:w-auto mt-6 lg:mt-0 pt-4 lg:pt-0 flex-1 flex flex-col justify-center items-center lg:items-start px-5 border-t lg:border-t-0 border-slate-200/60 dark:border-darkmode-400">
                                        <div class="flex items-center">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                                                <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                                            </a>
                                            {{ $faker['users'][0]['email'] }}
                                        </div>
                                        <div class="flex items-center mt-2">
                                            <a href="" class="w-8 h-8 rounded-full flex items-center justify-center border mr-2 text-slate-400">
                                                <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                                            </a>
                                            {{ $faker['users'][0]['name'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center border-t border-slate-200/60 dark:border-darkmode-400 pt-5">
                                    <div class="w-full sm:w-auto flex justify-center sm:justify-start items-center border-b sm:border-b-0 border-slate-200/60 dark:border-darkmode-400 pb-5 sm:pb-0">
                                        <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium mr-3">{{ $faker['dates'][0] }}</div>
                                        <div class="text-slate-500">Joined Date</div>
                                    </div>
                                    <div class="flex sm:ml-auto mt-5 sm:mt-0">
                                        <button class="btn btn-secondary w-20 ml-auto">Message</button>
                                        <button class="btn btn-secondary w-20 ml-2">Profile</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END: New Authors -->
            </div>
        </div>
    </div>
    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Profile Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5 lg:mt-0">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">Export Options</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                                        Indonesia
                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="layout" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
            <div class="intro-y box p-5 bg-primary text-white mt-5">
                <div class="flex items-center">
                    <div class="font-medium text-lg">Important Update</div>
                    <div class="text-xs bg-white dark:bg-primary dark:text-white text-slate-700 px-1 rounded-md ml-auto">New</div>
                </div>
                <div class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                <div class="font-medium flex mt-5">
                    <button type="button" class="btn py-1 px-2 border-white text-white dark:text-slate-300 dark:bg-darkmode-400 dark:border-darkmode-400">Take Action</button>
                    <button type="button" class="btn py-1 px-2 border-transparent text-white dark:border-transparent ml-auto">Dismiss</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: Daily Sales -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Daily Sales</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="javascript:;" class="dropdown-item">
                                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <button class="btn btn-outline-secondary hidden sm:flex">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Excel
                        </button>
                    </div>
                    <div class="p-5">
                        <div class="relative flex items-center">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Bootstrap 4 HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$19</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[1]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[1]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Tailwind HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$25</div>
                        </div>
                        <div class="relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit">
                                <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[2]['photos'][0]) }}">
                            </div>
                            <div class="ml-4 mr-auto">
                                <a href="" class="font-medium">{{ $fakers[2]['users'][0]['name'] }}</a>
                                <div class="text-slate-500 mr-5 sm:mr-5">Vuejs HTML Admin Template</div>
                            </div>
                            <div class="font-medium text-slate-600 dark:text-slate-500">+$21</div>
                        </div>
                    </div>
                </div>
                <!-- END: Daily Sales -->
                <!-- BEGIN: Announcement -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Announcement</h2>
                        <button data-carousel="announcement" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="announcement" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="announcement">
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever. <br><br> Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s.</div>
                            <div class="flex items-center mt-5">
                                <div class="px-3 py-2 text-primary bg-primary/10 dark:bg-darkmode-400 dark:text-slate-300 rounded font-medium">02 June 2021</div>
                                <button class="btn btn-secondary ml-auto">View Details</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Announcement -->
                <!-- BEGIN: Projects -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Projects</h2>
                        <button data-carousel="projects" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="projects" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="projects">
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="px-5">
                            <div class="font-medium text-lg">Icewall Admin Template</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                            <div class="mt-5">
                                <div class="flex text-slate-500">
                                    <div class="mr-auto">Pending Tasks</div>
                                    <div>20%</div>
                                </div>
                                <div class="progress h-1 mt-2">
                                    <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Projects -->
                <!-- BEGIN: Today Schedules -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Today Schedules</h2>
                        <button data-carousel="today-schedule" data-target="prev" class="tiny-slider-navigator btn btn-outline-secondary px-2 mr-2">
                            <i data-feather="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button data-carousel="today-schedule" data-target="next" class="tiny-slider-navigator btn btn-outline-secondary px-2">
                            <i data-feather="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="tiny-slider py-5" id="today-schedule">
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                        <div class="px-5 text-center sm:text-left">
                            <div class="font-medium text-lg">Developing rest API with Laravel 7</div>
                            <div class="text-slate-600 dark:text-slate-500 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry</div>
                            <div class="mt-2">11:15AM - 12:30PM</div>
                            <div class="flex flex-col sm:flex-row items-center mt-5">
                                <div class="flex items-center text-slate-500">
                                    <i data-feather="map-pin" class="hidden sm:block w-4 h-4 mr-2"></i> 1396 Pooh Bear Lane, New Market
                                </div>
                                <button class="btn btn-secondary py-1 px-2 sm:ml-auto mt-3 sm:mt-0sm:ml-auto mt-3 sm:mt-0">View On Map</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Today Schedules -->
                <!-- BEGIN: Top Products -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Top Products</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="edit-2" class="w-4 h-4 mr-2"></i> New Chat
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="trash" class="w-4 h-4 mr-2"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <ul class="nav nav-boxed-tabs justify-center flex-col sm:flex-row" role="tablist">
                            <li id="top-products-laravel-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0 active"
                                    data-tw-target="#top-products-laravel"
                                    aria-controls="top-products-laravel"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    <i data-feather="box" class="block w-6 h-6 mb-2 mx-auto"></i> Laravel
                                </a>
                            </li>
                            <li id="top-products-symfony-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0"
                                    data-tw-target="#top-products-symfony"
                                    aria-controls="top-products-symfony"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    <i data-feather="inbox" class="block w-6 h-6 mb-2 mx-auto"></i> Symfony
                                </a>
                            </li>
                            <li id="top-products-bootstrap-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link text-center w-full sm:w-20 mb-2 sm:mb-0 sm:mx-2 py-2 px-0"
                                    data-tw-target="#top-products-bootstrap"
                                    aria-controls="top-products-bootstrap"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    <i data-feather="activity" class="block w-6 h-6 mb-2 mx-auto"></i> Bootstrap
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mt-8">
                            <div id="top-products-laravel" class="tab-pane active" role="tabpanel" aria-labelledby="top-products-laravel-tab">
                                <div class="flex flex-col sm:flex-row items-center">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Wordpress Template</a>
                                        <div class="text-slate-500 mt-1">HTML, PHP, Mysql</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+20%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center mt-5">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Laravel Template</a>
                                        <div class="text-slate-500 mt-1">PHP, Mysql</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+55%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-2/3 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col sm:flex-row items-center mt-5">
                                    <div class="mr-auto">
                                        <a href="" class="font-medium">Tailwind HTML Template</a>
                                        <div class="text-slate-500 mt-1">HTML, CSS, JS</div>
                                    </div>
                                    <div class="w-full sm:w-auto flex items-center mt-3 sm:mt-0">
                                        <div class="bg-success/20 text-success rounded px-2 mr-5">+40%</div>
                                        <div class="progress h-1 mt-2 sm:w-40">
                                            <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Top Products -->
                <!-- BEGIN: Work In Progress -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Work In Progress</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="work-in-progress-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-new" class="dropdown-item" role="tab" aria-controls="work-in-progress-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="work-in-progress-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#work-in-progress-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="work-in-progress-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#work-in-progress-new"
                                    aria-controls="work-in-progress-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="work-in-progress-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#work-in-progress-last-week"
                                    aria-controls="work-in-progress-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="work-in-progress-new" class="tab-pane active" role="tabpanel" aria-labelledby="work-in-progress-new-tab">
                                <div>
                                    <div class="flex">
                                        <div class="mr-auto">Pending Tasks</div>
                                        <div>20%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/2 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Completed Tasks</div>
                                        <div>2 / 20</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-1/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Progress</div>
                                        <div>42</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-3/4 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="mt-5">
                                    <div class="flex">
                                        <div class="mr-auto">Tasks In Review</div>
                                        <div>70%</div>
                                    </div>
                                    <div class="progress h-1 mt-2">
                                        <div class="progress-bar w-4/5 bg-primary" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-secondary block w-40 mx-auto mt-5">View More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Work In Progress -->
                <!-- BEGIN: Latest Tasks -->
                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-0 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">Latest Tasks</h2>
                        <div class="dropdown ml-auto sm:hidden">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <div class="nav nav-tabs dropdown-menu w-40" role="tablist">
                                <ul class="dropdown-content">
                                    <li>
                                        <a id="latest-tasks-mobile-new-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-new" class="dropdown-item" role="tab" aria-controls="latest-tasks-new" aria-selected="true">New</a>
                                    </li>
                                    <li>
                                        <a id="latest-tasks-mobile-last-week-tab" href="javascript:;" data-tw-toggle="tab" data-tw-target="#latest-tasks-last-week" class="dropdown-item" role="tab" aria-selected="false">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul
                            class="nav nav-link-tabs w-auto ml-auto hidden sm:flex"
                            role="tablist"
                        >
                            <li id="latest-tasks-new-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5 active"
                                    data-tw-target="#latest-tasks-new"
                                    aria-controls="latest-tasks-new"
                                    aria-selected="true"
                                    role="tab"
                                >
                                    New
                                </a>
                            </li>
                            <li id="latest-tasks-last-week-tab" class="nav-item" role="presentation">
                                <a
                                    href="javascript:;"
                                    class="nav-link py-5"
                                    data-tw-target="#latest-tasks-last-week"
                                    aria-controls="latest-tasks-last-week"
                                    aria-selected="false"
                                    role="tab"
                                >
                                    Last Week
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-5">
                        <div class="tab-content">
                            <div id="latest-tasks-new" class="tab-pane active" role="tabpanel" aria-labelledby="latest-tasks-new-tab">
                                <div class="flex items-center">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Campaign</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">02:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">04:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Meeting With Client</a>
                                        <div class="text-slate-500">10:00 AM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                                <div class="flex items-center mt-5">
                                    <div class="border-l-2 border-primary dark:border-primary pl-4">
                                        <a href="" class="font-medium">Create New Repository</a>
                                        <div class="text-slate-500">11:00 PM</div>
                                    </div>
                                    <div class="form-check form-switch ml-auto">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Latest Tasks -->
                <!-- BEGIN: General Statistics -->
                <div class="intro-y box col-span-12 2xl:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-slate-200/60 dark:border-darkmode-400">
                        <h2 class="font-medium text-base mr-auto">General Statistics</h2>
                        <div class="dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block sm:hidden" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                                <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                            </a>
                            <button class="dropdown-toggle btn btn-outline-secondary font-normal hidden sm:flex" aria-expanded="false" data-tw-toggle="dropdown">
                                Export <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <div class="dropdown-header">Export Tools</div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="external-link" class="w-4 h-4 mr-2"></i> Excel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="file-text" class="w-4 h-4 mr-2"></i> CSV
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item">
                                            <i data-feather="archive" class="w-4 h-4 mr-2"></i> PDF
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row items-center">
                            <div class="flex flex-wrap sm:flex-nowrap mr-auto">
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span>Author Sales</span>
                                </div>
                                <div class="flex items-center mr-5 mb-1 sm:mb-0">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span>Product Profit</span>
                                </div>
                            </div>
                            <div class="dropdown mt-3 sm:mt-0 mr-auto sm:mr-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Month <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li>
                                            <a href="" class="dropdown-item">January</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">February</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">March</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">June</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">July</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart mt-8">
                            <canvas id="report-line-chart" height="130"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END: General Statistics -->
            </div>
        </div>
    </div>

    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12 2xl:col-span-9">
            <div class="grid grid-cols-12 gap-6">
                <!-- BEGIN: General Report -->
                <div class="col-span-12 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
                        <a href="" class="ml-auto flex items-center text-primary">
                            <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data
                        </a>
                    </div>
                    <div class="grid grid-cols-12 gap-6 mt-5">
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="shopping-cart" class="report-box__icon text-primary"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="33% Higher than last month">
                                                33% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">4.710</div>
                                    <div class="text-base text-slate-500 mt-1">Item Sales</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="credit-card" class="report-box__icon text-pending"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-danger tooltip cursor-pointer" title="2% Lower than last month">
                                                2% <i data-feather="chevron-down" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">3.721</div>
                                    <div class="text-base text-slate-500 mt-1">New Orders</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="monitor" class="report-box__icon text-warning"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="12% Higher than last month">
                                                12% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">2.149</div>
                                    <div class="text-base text-slate-500 mt-1">Total Products</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                            <div class="report-box zoom-in">
                                <div class="box p-5">
                                    <div class="flex">
                                        <i data-feather="user" class="report-box__icon text-success"></i>
                                        <div class="ml-auto">
                                            <div class="report-box__indicator bg-success tooltip cursor-pointer" title="22% Higher than last month">
                                                22% <i data-feather="chevron-up" class="w-4 h-4 ml-0.5"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-3xl font-medium leading-8 mt-6">152.040</div>
                                    <div class="text-base text-slate-500 mt-1">Unique Visitor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 lg:col-span-6 mt-8">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div class="flex flex-col xl:flex-row xl:items-center">
                            <div class="flex">
                                <div>
                                    <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">$15,000</div>
                                    <div class="mt-0.5 text-slate-500">This Month</div>
                                </div>
                                <div class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5"></div>
                                <div>
                                    <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                    <div class="mt-0.5 text-slate-500">Last Month</div>
                                </div>
                            </div>
                            <div class="dropdown xl:ml-auto mt-5 xl:mt-0">
                                <button class="dropdown-toggle btn btn-outline-secondary font-normal" aria-expanded="false" data-tw-toggle="dropdown">
                                    Filter by Category <i data-feather="chevron-down" class="w-4 h-4 ml-2"></i>
                                </button>
                                <div class="dropdown-menu w-40">
                                    <ul class="dropdown-content overflow-y-auto h-32">
                                        <li><a href="" class="dropdown-item">PC & Laptop</a></li>
                                        <li><a href="" class="dropdown-item">Smartphone</a></li>
                                        <li><a href="" class="dropdown-item">Electronic</a></li>
                                        <li><a href="" class="dropdown-item">Photography</a></li>
                                        <li><a href="" class="dropdown-item">Sport</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="report-chart">
                            <canvas id="report-line-chart" height="169" class="mt-6"></canvas>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Weekly Top Seller -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Seller</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-pie-chart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Weekly Top Seller -->
                <!-- BEGIN: Sales Report -->
                <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Sales Report</h2>
                        <a href="" class="ml-auto text-primary truncate">Show More</a>
                    </div>
                    <div class="intro-y box p-5 mt-5">
                        <canvas class="mt-3" id="report-donut-chart" height="300"></canvas>
                        <div class="mt-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                <span class="truncate">17 - 30 Years old</span>
                                <span class="font-medium xl:ml-auto">62%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                <span class="truncate">31 - 50 Years old</span>
                                <span class="font-medium xl:ml-auto">33%</span>
                            </div>
                            <div class="flex items-center mt-4">
                                <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                <span class="truncate">>= 50 Years old</span>
                                <span class="font-medium xl:ml-auto">10%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Sales Report -->
                <!-- BEGIN: Official Store -->
                <div class="col-span-12 xl:col-span-8 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Official Store</h2>
                        <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                            <i data-feather="map-pin" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                            <input type="text" class="form-control sm:w-40 box pl-10" placeholder="Filter by city">
                        </div>
                    </div>
                    <div class="intro-y box p-5 mt-12 sm:mt-5">
                        <div>250 Official stores in 21 countries, click the marker to see location details.</div>
                        <div class="report-maps mt-5 bg-slate-200 rounded-md" data-center="-6.2425342, 106.8626478" data-sources="/dist/json/location.json"></div>
                    </div>
                </div>
                <!-- END: Official Store -->
                <!-- BEGIN: Weekly Best Sellers -->
                <div class="col-span-12 xl:col-span-4 mt-6">
                    <div class="intro-y flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Best Sellers</h2>
                    </div>
                    <div class="mt-5">
                        @foreach (array_slice($fakers, 0, 4) as $faker)
                            <div class="intro-y">
                                <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                                    <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                    </div>
                                    <div class="ml-4 mr-auto">
                                        <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                        <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                    </div>
                                    <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">137 Sales</div>
                                </div>
                            </div>
                        @endforeach
                        <a href="" class="intro-y w-full block text-center rounded-md py-4 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                    </div>
                </div>
                <!-- END: Weekly Best Sellers -->
                <!-- BEGIN: General Report -->
                <div class="col-span-12 grid grid-cols-12 gap-6 mt-8">
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">Target Sales</div>
                                    <div class="text-slate-500 mt-1">300 Sales</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-1" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">20%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Social Media</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">320 Followers</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex items-center">
                                <div class="w-2/4 flex-none">
                                    <div class="text-lg font-medium truncate">New Products</div>
                                    <div class="text-slate-500 mt-1">1450 Products</div>
                                </div>
                                <div class="flex-none ml-auto relative">
                                    <canvas id="report-donut-chart-2" width="90" height="90"></canvas>
                                    <div class="font-medium absolute w-full h-full flex items-center justify-center top-0 left-0">45%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 2xl:col-span-3 intro-y">
                        <div class="box p-5 zoom-in">
                            <div class="flex">
                                <div class="text-lg font-medium truncate mr-3">Posted Ads</div>
                                <div class="py-1 px-2 flex items-center rounded-full text-xs bg-slate-100 dark:bg-darkmode-400 text-slate-500 cursor-pointer ml-auto truncate">180 Campaign</div>
                            </div>
                            <div class="mt-4">
                                <canvas class="simple-line-chart-1 -ml-1" height="60"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: General Report -->
                <!-- BEGIN: Weekly Top Products -->
                <div class="col-span-12 mt-6">
                    <div class="intro-y block sm:flex items-center h-10">
                        <h2 class="text-lg font-medium truncate mr-5">Weekly Top Products</h2>
                        <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">
                            <button class="btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to Excel
                            </button>
                            <button class="ml-3 btn box flex items-center text-slate-600 dark:text-slate-300">
                                <i data-feather="file-text" class="hidden sm:block w-4 h-4 mr-2"></i> Export to PDF
                            </button>
                        </div>
                    </div>
                    <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
                        <table class="table table-report sm:mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">IMAGES</th>
                                    <th class="whitespace-nowrap">PRODUCT NAME</th>
                                    <th class="text-center whitespace-nowrap">STOCK</th>
                                    <th class="text-center whitespace-nowrap">STATUS</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (array_slice($fakers, 0, 4) as $faker)
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <div class="flex">
                                                <div class="w-10 h-10 image-fit zoom-in">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][0]) }}" title="Uploaded at {{ $faker['dates'][0] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][1]) }}" title="Uploaded at {{ $faker['dates'][1] }}">
                                                </div>
                                                <div class="w-10 h-10 image-fit zoom-in -ml-5">
                                                    <img alt="" class="tooltip rounded-full" src="{{ asset('dist/images/' . $faker['images'][2]) }}" title="Uploaded at {{ $faker['dates'][2] }}">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="" class="font-medium whitespace-nowrap">{{ $faker['products'][0]['name'] }}</a>
                                            <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $faker['products'][0]['category'] }}</div>
                                        </td>
                                        <td class="text-center">{{ $faker['stocks'][0] }}</td>
                                        <td class="w-40">
                                            <div class="flex items-center justify-center {{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">
                                                <i data-feather="check-square" class="w-4 h-4 mr-2"></i> {{ $faker['true_false'][0] ? 'Active' : 'Inactive' }}
                                            </div>
                                        </td>
                                        <td class="table-report__action w-56">
                                            <div class="flex justify-center items-center">
                                                <a class="flex items-center mr-3" href="">
                                                    <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit
                                                </a>
                                                <a class="flex items-center text-danger" href="">
                                                    <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="intro-y flex flex-wrap sm:flex-row sm:flex-nowrap items-center mt-3">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">...</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevron-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="w-4 h-4" data-feather="chevrons-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                </div>
                <!-- END: Weekly Top Products -->
            </div>
        </div>
        <div class="col-span-12 2xl:col-span-3">
            <div class="2xl:border-l -mb-10 pb-10">
                <div class="2xl:pl-6 grid grid-cols-12 gap-6">
                    <!-- BEGIN: Transactions -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3 2xl:mt-8">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Transactions</h2>
                        </div>
                        <div class="mt-5">
                            @foreach (array_slice($fakers, 0, 5) as $faker)
                                <div class="intro-x">
                                    <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                                        <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                            <img alt="" src="{{ asset('dist/images/' . $faker['photos'][0]) }}">
                                        </div>
                                        <div class="ml-4 mr-auto">
                                            <div class="font-medium">{{ $faker['users'][0]['name'] }}</div>
                                            <div class="text-slate-500 text-xs mt-0.5">{{ $faker['dates'][0] }}</div>
                                        </div>
                                        <div class="{{ $faker['true_false'][0] ? 'text-success' : 'text-danger' }}">{{ $faker['true_false'][0] ? '+' : '-' }}${{ $faker['totals'][0] }}</div>
                                    </div>
                                </div>
                            @endforeach
                            <a href="" class="intro-x w-full block text-center rounded-md py-3 border border-dotted border-slate-400 dark:border-darkmode-300 text-slate-500">View More</a>
                        </div>
                    </div>
                    <!-- END: Transactions -->
                    <!-- BEGIN: Recent Activities -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Recent Activities</h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="mt-5 relative before:block before:absolute before:w-px before:h-[85%] before:bg-slate-200 before:dark:bg-darkmode-400 before:ml-5 before:mt-5">
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[9]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[9]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has joined the team</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[8]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[8]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500">
                                        <div class="mt-1">Added 3 new photos</div>
                                        <div class="flex mt-2">
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[0]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][0]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[1]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][1]) }}">
                                            </div>
                                            <div class="tooltip w-8 h-8 image-fit mr-1 zoom-in" title="{{ $fakers[2]['products'][0]['name'] }}">
                                                <img alt="" class="rounded-md border border-white" src="{{ asset('dist/images/' . $fakers[8]['images'][2]) }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-x text-slate-500 text-xs text-center my-4">12 November</div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[7]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[7]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[7]['products'][0]['name'] }}</a> price and description</div>
                                </div>
                            </div>
                            <div class="intro-x relative flex items-center mb-3">
                                <div class="before:block before:absolute before:w-20 before:h-px before:bg-slate-200 before:dark:bg-darkmode-400 before:mt-5 before:ml-5">
                                    <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                                        <img alt="" src="{{ asset('dist/images/' . $fakers[6]['photos'][0]) }}">
                                    </div>
                                </div>
                                <div class="box px-5 py-3 ml-4 flex-1 zoom-in">
                                    <div class="flex items-center">
                                        <div class="font-medium">{{ $fakers[6]['users'][0]['name'] }}</div>
                                        <div class="text-xs text-slate-500 ml-auto">07:00 PM</div>
                                    </div>
                                    <div class="text-slate-500 mt-1">Has changed <a class="text-primary" href="">{{ $fakers[6]['products'][0]['name'] }}</a> description</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Recent Activities -->
                    <!-- BEGIN: Important Notes -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-auto">Important Notes</h2>
                            <button data-carousel="important-notes" data-target="prev" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-left" class="w-4 h-4"></i>
                            </button>
                            <button data-carousel="important-notes" data-target="next" class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2">
                                <i data-feather="chevron-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                        <div class="mt-5 intro-x">
                            <div class="box zoom-in">
                                <div class="tiny-slider" id="important-notes">
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                    <div class="p-5">
                                        <div class="text-base font-medium truncate">Lorem Ipsum is simply dummy text</div>
                                        <div class="text-slate-400 mt-1">20 Hours ago</div>
                                        <div class="text-slate-500 text-justify mt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</div>
                                        <div class="font-medium flex mt-5">
                                            <button type="button" class="btn btn-secondary py-1 px-2">View Notes</button>
                                            <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto ml-auto">Dismiss</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Important Notes -->
                    <!-- BEGIN: Schedules -->
                    <div class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3">
                        <div class="intro-x flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">Schedules</h2>
                            <a href="" class="ml-auto text-primary truncate flex items-center">
                                <i data-feather="plus" class="w-4 h-4 mr-1"></i> Add New Schedules
                            </a>
                        </div>
                        <div class="mt-5">
                            <div class="intro-x box">
                                <div class="p-5">
                                    <div class="flex">
                                        <i data-feather="chevron-left" class="w-5 h-5 text-slate-500"></i>
                                        <div class="font-medium text-base mx-auto">April</div>
                                        <i data-feather="chevron-right" class="w-5 h-5 text-slate-500"></i>
                                    </div>
                                    <div class="grid grid-cols-7 gap-4 mt-5 text-center">
                                        <div class="font-medium">Su</div>
                                        <div class="font-medium">Mo</div>
                                        <div class="font-medium">Tu</div>
                                        <div class="font-medium">We</div>
                                        <div class="font-medium">Th</div>
                                        <div class="font-medium">Fr</div>
                                        <div class="font-medium">Sa</div>
                                        <div class="py-0.5 rounded relative text-slate-500">29</div>
                                        <div class="py-0.5 rounded relative text-slate-500">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">31</div>
                                        <div class="py-0.5 rounded relative">1</div>
                                        <div class="py-0.5 rounded relative">2</div>
                                        <div class="py-0.5 rounded relative">3</div>
                                        <div class="py-0.5 rounded relative">4</div>
                                        <div class="py-0.5 rounded relative">5</div>
                                        <div class="py-0.5 bg-success/20 dark:bg-success/30 rounded relative">6</div>
                                        <div class="py-0.5 rounded relative">7</div>
                                        <div class="py-0.5 bg-primary text-white rounded relative">8</div>
                                        <div class="py-0.5 rounded relative">9</div>
                                        <div class="py-0.5 rounded relative">10</div>
                                        <div class="py-0.5 rounded relative">11</div>
                                        <div class="py-0.5 rounded relative">12</div>
                                        <div class="py-0.5 rounded relative">13</div>
                                        <div class="py-0.5 rounded relative">14</div>
                                        <div class="py-0.5 rounded relative">15</div>
                                        <div class="py-0.5 rounded relative">16</div>
                                        <div class="py-0.5 rounded relative">17</div>
                                        <div class="py-0.5 rounded relative">18</div>
                                        <div class="py-0.5 rounded relative">19</div>
                                        <div class="py-0.5 rounded relative">20</div>
                                        <div class="py-0.5 rounded relative">21</div>
                                        <div class="py-0.5 rounded relative">22</div>
                                        <div class="py-0.5 bg-pending/20 dark:bg-pending/30 rounded relative">23</div>
                                        <div class="py-0.5 rounded relative">24</div>
                                        <div class="py-0.5 rounded relative">25</div>
                                        <div class="py-0.5 rounded relative">26</div>
                                        <div class="py-0.5 bg-primary/10 dark:bg-primary/50 rounded relative">27</div>
                                        <div class="py-0.5 rounded relative">28</div>
                                        <div class="py-0.5 rounded relative">29</div>
                                        <div class="py-0.5 rounded relative">30</div>
                                        <div class="py-0.5 rounded relative text-slate-500">1</div>
                                        <div class="py-0.5 rounded relative text-slate-500">2</div>
                                        <div class="py-0.5 rounded relative text-slate-500">3</div>
                                        <div class="py-0.5 rounded relative text-slate-500">4</div>
                                        <div class="py-0.5 rounded relative text-slate-500">5</div>
                                        <div class="py-0.5 rounded relative text-slate-500">6</div>
                                        <div class="py-0.5 rounded relative text-slate-500">7</div>
                                        <div class="py-0.5 rounded relative text-slate-500">8</div>
                                        <div class="py-0.5 rounded relative text-slate-500">9</div>
                                    </div>
                                </div>
                                <div class="border-t border-slate-200/60 p-5">
                                    <div class="flex items-center">
                                        <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                        <span class="truncate">UI/UX Workshop</span>
                                        <span class="font-medium xl:ml-auto">23th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                        <span class="truncate">VueJs Frontend Development</span>
                                        <span class="font-medium xl:ml-auto">10th</span>
                                    </div>
                                    <div class="flex items-center mt-4">
                                        <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                        <span class="truncate">Laravel Rest API</span>
                                        <span class="font-medium xl:ml-auto">31th</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Schedules -->
                </div>
            </div>
        </div>
    </div>


    <div class="intro-y news xl:w-3/5 p-5 box mt-8">
        <!-- BEGIN: Blog Layout -->
        <h2 class="intro-y font-medium text-xl sm:text-2xl">{{ $fakers[0]['news'][0]['title'] }}</h2>
        <div class="intro-y text-slate-600 dark:text-slate-500 mt-3 text-xs sm:text-sm">
            {{ $fakers[0]['dates'][0] }} <span class="mx-1">•</span> <a class="text-primary" href="">{{ $fakers[0]['products'][0]['category'] }}</a> <span class="mx-1">•</span> 7 Min read
        </div>
        <div class="intro-y mt-6">
            <div class="news__preview image-fit">
                <img alt="" class="rounded-md" src="{{ asset('dist/images/' . $fakers[0]['images'][0]) }}">
            </div>
        </div>
        <div class="intro-y flex relative pt-16 sm:pt-6 items-center pb-6">
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full border border-slate-300 dark:border-darkmode-400 dark:bg-darkmode-300 dark:text-slate-300 text-slate-500 mr-2 tooltip" title="Bookmark">
                <i data-feather="bookmark" class="w-3 h-3"></i>
            </a>
            <div class="intro-x flex mr-3">
                <div class="intro-x w-8 h-8 sm:w-10 sm:h-10 image-fit">
                    <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}" title="{{ $fakers[0]['users'][0]['name'] }}">
                </div>
                <div class="intro-x w-8 h-8 sm:w-10 sm:h-10 image-fit -ml-4">
                    <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $fakers[0]['photos'][1]) }}" title="{{ $fakers[0]['users'][1]['name'] }}">
                </div>
                <div class="intro-x w-8 h-8 sm:w-10 sm:h-10 image-fit -ml-4">
                    <img alt="" class="rounded-full border border-white zoom-in tooltip" src="{{ asset('dist/images/' . $fakers[0]['photos'][2]) }}" title="{{ $fakers[0]['users'][2]['name'] }}">
                </div>
            </div>
            <div class="absolute sm:relative -mt-12 sm:mt-0 w-full flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm">
                <div class="intro-x mr-1 sm:mr-3">
                    Comments: <span class="font-medium">{{ $fakers[0]['totals'][0] }}</span>
                </div>
                <div class="intro-x mr-1 sm:mr-3">
                    Views: <span class="font-medium">{{ $fakers[0]['totals'][1] }}k</span>
                </div>
                <div class="intro-x sm:mr-3 ml-auto">
                    Likes: <span class="font-medium">{{ $fakers[0]['totals'][2] }}k</span>
                </div>
            </div>
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full text-primary bg-primary/10 dark:bg-darkmode-300 dark:text-slate-300 ml-auto sm:ml-0 tooltip" title="Share">
                <i data-feather="share-2" class="w-3 h-3"></i>
            </a>
            <a href="" class="intro-x w-8 h-8 sm:w-10 sm:h-10 flex flex-none items-center justify-center rounded-full bg-primary text-white ml-2 tooltip" title="Download PDF">
                <i data-feather="share" class="w-3 h-3"></i>
            </a>
        </div>
        <div class="intro-y text-justify leading-relaxed">
            <p class="mb-5">{{ $fakers[1]['news'][0]['content'] }}</p>
            <p class="mb-5">{{ $fakers[2]['news'][0]['content'] }}</p>
            <p>{{ $fakers[3]['news'][0]['content'] }}</p>
        </div>
        <div class="intro-y flex text-xs sm:text-sm flex-col sm:flex-row items-center mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="flex items-center">
                <div class="w-12 h-12 flex-none image-fit">
                    <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                </div>
                <div class="ml-3 mr-auto">
                    <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>, Author
                    <div class="text-slate-500">Senior Frontend Engineer</div>
                </div>
            </div>
            <div class="flex items-center text-slate-600 dark:text-slate-500 sm:ml-auto mt-5 sm:mt-0">
                Share this post:
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Facebook">
                    <i class="w-3 h-3 fill-current" data-feather="facebook"></i>
                </a>
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Twitter">
                    <i class="w-3 h-3 fill-current" data-feather="twitter"></i>
                </a>
                <a href="" class="w-8 h-8 sm:w-10 sm:h-10 rounded-full flex items-center justify-center border dark:border-darkmode-400 ml-2 text-slate-400 zoom-in tooltip" title="Linked In">
                    <i class="w-3 h-3 fill-current" data-feather="linkedin"></i>
                </a>
            </div>
        </div>
        <!-- END: Blog Layout -->
        <!-- BEGIN: Comments -->
        <div class="intro-y mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
            <div class="text-base sm:text-lg font-medium">2 Responses</div>
            <div class="news__input relative mt-5">
                <i data-feather="message-circle" class="w-5 h-5 absolute my-auto inset-y-0 ml-6 left-0 text-slate-500"></i>
                <textarea class="form-control border-transparent bg-slate-100 pl-16 py-6 resize-none" rows="1" placeholder="Post a comment..."></textarea>
            </div>
        </div>
        <div class="intro-y mt-5 pb-10">
            <div class="pt-5">
                <div class="flex">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center">
                            <a href="" class="font-medium">{{ $fakers[0]['users'][0]['name'] }}</a>
                            <a href="" class="ml-auto text-xs text-slate-500">Reply</a>
                        </div>
                        <div class="text-slate-500 text-xs sm:text-sm">{{ $fakers[0]['formatted_times'][0] }}</div>
                        <div class="mt-2">{{ $fakers[0]['news'][0]['short_content'] }}</div>
                    </div>
                </div>
            </div>
            <div class="mt-5 pt-5 border-t border-slate-200/60 dark:border-darkmode-400">
                <div class="flex">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][1]) }}">
                    </div>
                    <div class="ml-3 flex-1">
                        <div class="flex items-center">
                            <a href="" class="font-medium">{{ $fakers[0]['users'][1]['name'] }}</a>
                            <a href="" class="ml-auto text-xs text-slate-500">Reply</a>
                        </div>
                        <div class="text-slate-500 text-xs sm:text-sm">{{ $fakers[1]['formatted_times'][0] }}</div>
                        <div class="mt-2">{{ $fakers[1]['news'][0]['short_content'] }}</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Comments -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Pricing Layout</h2>
    </div>
    <!-- BEGIN: Pricing Layout -->
    <div class="intro-y box flex flex-col lg:flex-row mt-5">
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="credit-card" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Basic Plan</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 35
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y border-b border-t lg:border-b-0 lg:border-t-0 flex-1 p-5 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16">
            <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Business</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Enterprise</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
    </div>
    <!-- END: Pricing Layout -->
    <!-- BEGIN: Pricing Layout -->
    <div class="intro-y box flex flex-col lg:flex-row mt-5">
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="activity" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Basic Plan</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 35
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y border-b border-t lg:border-b-0 lg:border-t-0 flex-1 px-5 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16">
            <i data-feather="box" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Business</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
        <div class="intro-y flex-1 px-5 py-16">
            <i data-feather="send" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="text-xl font-medium text-center mt-10">Enterprise</div>
            <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
            </div>
            <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
            <div class="flex justify-center">
                <div class="relative text-5xl font-semibold mt-8 mx-auto">
                    <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                </div>
            </div>
            <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
        </div>
    </div>
    <!-- END: Pricing Layout -->

    <h2 class="intro-y text-2xl font-medium mt-10 text-center mr-auto">Best Price & Services</h2>
    <!-- BEGIN: Pricing Tab -->
    <div class="intro-y flex justify-center mt-6">
        <ul
            class="
                pricing-tabs
                nav nav-pills
                w-auto box
                rounded-full
                mx-auto
                overflow-hidden
            "
            role="tablist"
        >
            <li id="layout-1-monthly-fees-tab" class="nav-item flex-1" role="presentation">
                <button
                    class="nav-link w-32 lg:w-40 py-2 lg:py-3 active"
                    data-tw-toggle="pill"
                    data-tw-target="#layout-1-monthly-fees"
                    type="button"
                    role="tab"
                    aria-controls="layout-1-monthly-fees"
                    aria-selected="true"
                >
                    Monthly Fees
                </button>
            </li>
            <li id="layout-1-annual-fees-tab" class="nav-item flex-1" role="presentation">
                <button
                    class="nav-link w-32 lg:w-40 py-2 lg:py-3"
                    data-tw-toggle="pill"
                    data-tw-target="#layout-1-annual-fees"
                    type="button"
                    role="tab"
                    aria-controls="layout-1-annual-fees"
                    aria-selected="false"
                >
                    Annual Fees
                </button>
            </li>
        </ul>
    </div>
    <!-- END: Pricing Tab -->
    <!-- BEGIN: Pricing Content -->
    <div class="flex mt-10">
        <div class="tab-content">
            <div id="layout-1-monthly-fees" class="tab-pane flex flex-col lg:flex-row active" role="tabpanel" aria-labelledby="layout-1-monthly-fees-tab">
                <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                    <div class="font-medium text-lg">Monthly Product Pricing</div>
                    <div class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
            </div>
            <div id="layout-1-annual-fees" class="tab-pane flex flex-col lg:flex-row" role="tabpanel" aria-labelledby="layout-1-annual-fees-tab">
                <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                    <div class="font-medium text-lg">Annual Product Pricing</div>
                    <div class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                        <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    </div>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5 mb-5 lg:mb-0">
                    <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Business</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 40
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
                <div class="intro-y flex-1 box py-16 lg:ml-5">
                    <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                    <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                    <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                        1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                    </div>
                    <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                    <div class="flex justify-center">
                        <div class="relative text-5xl font-semibold mt-8 mx-auto">
                            <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 90
                        </div>
                    </div>
                    <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Pricing Content -->
    <div class="intro-y box mt-20 px-8 py-12">
        <h2 class="intro-y text-2xl font-medium text-center mr-auto">Best Price & Services</h2>
        <!-- BEGIN: Pricing Tab -->
        <div class="intro-y flex justify-center mt-6">
            <ul
                class="
                    pricing-tabs
                    nav nav-pills
                    w-auto box
                    rounded-full
                    mx-auto
                    overflow-hidden
                "
                role="tablist"
            >
                <li id="layout-2-monthly-fees-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-32 lg:w-40 py-2 lg:py-3 active"
                        data-tw-toggle="pill"
                        data-tw-target="#layout-2-monthly-fees"
                        type="button"
                        role="tab"
                        aria-controls="layout-2-monthly-fees"
                        aria-selected="true"
                    >
                        Monthly Fees
                    </button>
                </li>
                <li id="layout-2-annual-fees-tab" class="nav-item flex-1" role="presentation">
                    <button
                        class="nav-link w-32 lg:w-40 py-2 lg:py-3"
                        data-tw-toggle="pill"
                        data-tw-target="#layout-2-annual-fees"
                        type="button"
                        role="tab"
                        aria-controls="layout-2-annual-fees"
                        aria-selected="false"
                    >
                        Annual Fees
                    </button>
                </li>
            </ul>
        </div>
        <!-- END: Pricing Tab -->
        <!-- BEGIN: Pricing Content -->
        <div class="flex mt-10">
            <div class="tab-content">
                <div id="layout-2-monthly-fees" class="tab-pane flex flex-col lg:flex-row active" role="tabpanel" aria-labelledby="layout-2-monthly-fees-tab">
                    <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                        <div class="font-medium text-lg">Monthly Product Pricing</div>
                        <div class="mt-3 lg:text-justify text-slate-600 dark:text-slate-500">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="intro-y flex-1 border-t border-b lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16 lg:ml-8">
                        <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Business</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 60
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                    <div class="intro-y flex-1 py-16">
                        <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                </div>
                <div id="layout-2-annual-fees" class="tab-pane flex flex-col lg:flex-row" role="tabpanel" aria-labelledby="layout-2-annual-fees-tab">
                    <div class="intro-y flex justify-center flex-col flex-1 text-center sm:px-10 lg:px-5 pb-10 lg:pb-0">
                        <div class="font-medium text-lg">Annual Product Pricing</div>
                        <div class="mt-3 lg:text-justify text-slate-600">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p class="mt-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                        </div>
                    </div>
                    <div class="intro-y flex-1 border-t border-b lg:border-t-0 lg:border-b-0 lg:border-l lg:border-r border-slate-200/60 dark:border-darkmode-400 py-16 lg:ml-8">
                        <i data-feather="briefcase" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Business</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 120
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                    <div class="intro-y flex-1 py-16">
                        <i data-feather="shopping-bag" class="block w-12 h-12 text-primary mx-auto"></i>
                        <div class="text-xl font-medium text-center mt-10">Enterprise</div>
                        <div class="text-slate-600 dark:text-slate-500 text-center mt-5">
                            1 Domain <span class="mx-1">•</span> 10 Users <span class="mx-1">•</span> 20 Copies
                        </div>
                        <div class="text-slate-500 px-10 text-center mx-auto mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        <div class="flex justify-center">
                            <div class="relative text-5xl font-semibold mt-8 mx-auto">
                                <span class="absolute text-2xl top-0 left-0 -ml-4">$</span> 210
                            </div>
                        </div>
                        <button type="button" class="btn btn-rounded-primary py-3 px-4 block mx-auto mt-8">PURCHASE NOW</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Pricing Content -->
    </div>

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Invoice Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <ul class="dropdown-content">
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word
                            </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">
                                <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="border-b border-slate-200/60 dark:border-darkmode-400 text-center sm:text-left">
            <div class="px-5 py-10 sm:px-20 sm:py-20">
                <div class="text-primary font-semibold text-3xl">INVOICE</div>
                <div class="mt-2">
                    Receipt <span class="font-medium">#1923195</span>
                </div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
            <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                <div>
                    <div class="text-base text-slate-500">Client Details</div>
                    <div class="text-lg font-medium text-primary mt-2">Arnold Schwarzenegger</div>
                    <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                    <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
                </div>
                <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                    <div class="text-base text-slate-500">Payment to</div>
                    <div class="text-lg font-medium text-primary mt-2">Left4code</div>
                    <div class="mt-1">left4code@gmail.com</div>
                </div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Icewall HTML Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">React Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right w-32">3</td>
                            <td class="text-right w-32">$25</td>
                            <td class="text-right w-32 font-medium">$75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500">Bank Transfer</div>
                <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Total Amount</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Invoice Layout</h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <button class="btn btn-primary shadow-md mr-2">Print</button>
            <div class="dropdown ml-auto sm:ml-0">
                <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                    <span class="w-5 h-5 flex items-center justify-center">
                        <i class="w-4 h-4" data-feather="plus"></i>
                    </span>
                </button>
                <div class="dropdown-menu w-40">
                    <div class="dropdown-content">
                        <a href="" class="dropdown-item">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export Word
                        </a>
                        <a href="" class="dropdown-item">
                            <i data-feather="file" class="w-4 h-4 mr-2"></i> Export PDF
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BEGIN: Invoice -->
    <div class="intro-y box overflow-hidden mt-5">
        <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
            <div class="font-semibold text-primary text-3xl">INVOICE</div>
            <div class="mt-20 lg:mt-0 lg:ml-auto lg:text-right">
                <div class="text-xl text-primary font-medium">Left4code</div>
                <div class="mt-1">left4code@gmail.com</div>
                <div class="mt-1">8023 Amerige Street Harriman, NY 10926.</div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row border-b px-5 sm:px-20 pt-10 pb-10 sm:pb-20 text-center sm:text-left">
            <div>
                <div class="text-base text-slate-500">Client Details</div>
                <div class="text-lg font-medium text-primary mt-2">Arnold Schwarzenegger</div>
                <div class="mt-1">arnodlschwarzenegger@gmail.com</div>
                <div class="mt-1">260 W. Storm Street New York, NY 10025.</div>
            </div>
            <div class="mt-10 lg:mt-0 lg:ml-auto lg:text-right">
                <div class="text-base text-slate-500">Receipt</div>
                <div class="text-lg text-primary font-medium mt-2">#1923195</div>
                <div class="mt-1">Jan 02, 2021</div>
            </div>
        </div>
        <div class="px-5 sm:px-16 py-10 sm:py-20">
            <div class="overflow-x-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                            <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Icewall HTML Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td class="border-b dark:border-darkmode-400">
                                <div class="font-medium whitespace-nowrap">React Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                            <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                                <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                            </td>
                            <td class="text-right w-32">3</td>
                            <td class="text-right w-32">$25</td>
                            <td class="text-right w-32 font-medium">$75</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-base text-slate-500">Bank Transfer</div>
                <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                <div class="mt-1">Bank Account : 098347234832</div>
                <div class="mt-1">Code : LFT133243</div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-base text-slate-500">Total Amount</div>
                <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                <div class="mt-1">Taxes included</div>
            </div>
        </div>
    </div>
    <!-- END: Invoice -->

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <!-- BEGIN: FAQ Menu -->
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10 border-2 border-primary dark:border-primary">
            <i data-feather="shield" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Single Application</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-feather="send" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Multi Application</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <a href="" class="intro-y col-span-12 lg:col-span-4 box py-10">
            <i data-feather="trending-up" class="block w-12 h-12 text-primary mx-auto"></i>
            <div class="font-medium text-center text-base mt-3">Custom License</div>
            <div class="text-slate-500 mt-2 w-3/4 text-center mx-auto">Lorem Ipsum is simply dummy text of the printing</div>
        </a>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header" >
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro-y col-span-12 lg:col-span-6">
            <div class="box">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-3" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box mt-6">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Working with Dropplets</h2>
                </div>
                <div id="faq-accordion-4" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-13" aria-expanded="true" aria-controls="faq-accordion-collapse-13">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-13" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-14" aria-expanded="false" aria-controls="faq-accordion-collapse-14">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-15" aria-expanded="false" aria-controls="faq-accordion-collapse-15">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-16" aria-expanded="false" aria-controls="faq-accordion-collapse-16">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-4">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="p-5">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Trem of Use
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Author Fees
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Product Review
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Privacy Policy
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> About Our Products
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Related License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Single Application License
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Multi Application License
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">About Our Products</h2>
                </div>
                <div id="faq-accordion-1" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Related License</h2>
                </div>
                <div id="faq-accordion-2" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
                </div>
                <div id="faq-accordion-3" class="accordion p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>



    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">FAQ Layout</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: FAQ Menu -->
        <div class="intro-y col-span-12 lg:col-span-4 xl:col-span-3">
            <div class="box mt-5">
                <div class="px-4 pb-3 pt-5">
                    <a class="flex rounded-lg items-center px-4 py-2 bg-primary text-white font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">About Our Products</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Related License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Single Application License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Multi Application License</div>
                    </a>
                </div>
                <div class="px-4 py-3 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center px-4 py-2" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Trem of Use</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Author Fees</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Product Review</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Privacy Policy</div>
                    </a>
                </div>
                <div class="px-4 pt-3 pb-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center px-4 py-2" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">About Our Products</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Related License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Single Application License</div>
                    </a>
                    <a class="flex items-center px-4 py-2 mt-1" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i>
                        <div class="flex-1 truncate">Multi Application License</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: FAQ Menu -->
        <!-- BEGIN: FAQ Content -->
        <div class="intro-y col-span-12 lg:col-span-8 xl:col-span-9">
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">About Our Products</h2>
                </div>
                <div id="faq-accordion-1" class="accordion accordion-boxed p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-1" aria-expanded="true" aria-controls="faq-accordion-collapse-1">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-2" aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-3" aria-expanded="false" aria-controls="faq-accordion-collapse-3">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-4" aria-expanded="false" aria-controls="faq-accordion-collapse-4">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-1">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Single Application License</h2>
                </div>
                <div id="faq-accordion-2" class="accordion accordion-boxed p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-2">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Multi Application License</h2>
                </div>
                <div id="faq-accordion-3" class="accordion accordion-boxed p-5">
                    <div class="accordion-item">
                        <div id="faq-accordion-content-1" class="accordion-header">
                            <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-9" aria-expanded="true" aria-controls="faq-accordion-collapse-9">
                                OpenSSL Essentials: Working with SSL Certificates, Private Keys
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-9" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-1" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-2" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-10" aria-expanded="false" aria-controls="faq-accordion-collapse-10">
                                Understanding IP Addresses, Subnets, and CIDR Notation
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-2" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-3" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-11" aria-expanded="false" aria-controls="faq-accordion-collapse-11">
                                How To Troubleshoot Common HTTP Error Codes
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-3" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div id="faq-accordion-content-4" class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-12" aria-expanded="false" aria-controls="faq-accordion-collapse-12">
                                An Introduction to Securing your Linux VPS
                            </button>
                        </div>
                        <div id="faq-accordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-4" data-tw-parent="#faq-accordion-3">
                            <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: FAQ Content -->
    </div>

    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Change Password</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">Export Options</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                                        Indonesia
                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="layout" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Change Password -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Change Password</h2>
                </div>
                <div class="p-5">
                    <div>
                        <label for="change-password-form-1" class="form-label">Old Password</label>
                        <input id="change-password-form-1" type="password" class="form-control" placeholder="Input text">
                    </div>
                    <div class="mt-3">
                        <label for="change-password-form-2" class="form-label">New Password</label>
                        <input id="change-password-form-2" type="password" class="form-control" placeholder="Input text">
                    </div>
                    <div class="mt-3">
                        <label for="change-password-form-3" class="form-label">Confirm New Password</label>
                        <input id="change-password-form-3" type="password" class="form-control" placeholder="Input text">
                    </div>
                    <button type="button" class="btn btn-primary mt-4">Change Password</button>
                </div>
            </div>
            <!-- END: Change Password -->
        </div>
    </div>


    <div class="intro-y flex items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">Update Profile</h2>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: Profile Menu -->
        <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
            <div class="intro-y box mt-5">
                <div class="relative flex items-center p-5">
                    <div class="w-12 h-12 image-fit">
                        <img alt="" class="rounded-full" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                    </div>
                    <div class="ml-4 mr-auto">
                        <div class="font-medium text-base">{{ $fakers[0]['users'][0]['name'] }}</div>
                        <div class="text-slate-500">{{ $fakers[0]['jobs'][0] }}</div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown">
                            <i data-feather="more-horizontal" class="w-5 h-5 text-slate-500"></i>
                        </a>
                        <div class="dropdown-menu w-56">
                            <ul class="dropdown-content">
                                <li>
                                    <h6 class="dropdown-header">Export Options</h6>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="box" class="w-4 h-4 mr-2"></i>
                                        Indonesia
                                        <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="layout" class="w-4 h-4 mr-2"></i> English
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">
                                        <i data-feather="sidebar" class="w-4 h-4 mr-2"></i> Indonesia
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <div class="flex p-1">
                                        <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                        <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center text-primary font-medium" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Personal Information
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Account Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Change Password
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> User Settings
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                    <a class="flex items-center" href="">
                        <i data-feather="activity" class="w-4 h-4 mr-2"></i> Email Settings
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="lock" class="w-4 h-4 mr-2"></i> Social Networks
                    </a>
                    <a class="flex items-center mt-5" href="">
                        <i data-feather="settings" class="w-4 h-4 mr-2"></i> Tax Information
                    </a>
                </div>
                <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                    <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                    <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                </div>
            </div>
        </div>
        <!-- END: Profile Menu -->
        <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
            <!-- BEGIN: Display Information -->
            <div class="intro-y box lg:mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Display Information</h2>
                </div>
                <div class="p-5">
                    <div class="flex flex-col-reverse xl:flex-row flex-col">
                        <div class="flex-1 mt-6 xl:mt-0">
                            <div class="grid grid-cols-12 gap-x-5">
                                <div class="col-span-12 2xl:col-span-6">
                                    <div>
                                        <label for="update-profile-form-1" class="form-label">Display Name</label>
                                        <input id="update-profile-form-1" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-2" class="form-label">Nearest MRT Station</label>
                                        <select id="update-profile-form-2" data-search="true" class="tom-select w-full">
                                            <option value="1">Admiralty</option>
                                            <option value="2">Aljunied</option>
                                            <option value="3">Ang Mo Kio</option>
                                            <option value="4">Bartley</option>
                                            <option value="5">Beauty World</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-span-12 2xl:col-span-6">
                                    <div class="mt-3 2xl:mt-0">
                                        <label for="update-profile-form-3" class="form-label">Postal Code</label>
                                        <select id="update-profile-form-3" data-search="true" class="tom-select w-full">
                                            <option value="1">018906 - 1 STRAITS BOULEVARD SINGA...</option>
                                            <option value="2">018910 - 5A MARINA GARDENS DRIVE...</option>
                                            <option value="3">018915 - 100A CENTRAL BOULEVARD...</option>
                                            <option value="4">018925 - 21 PARK STREET MARINA...</option>
                                            <option value="5">018926 - 23 PARK STREET MARINA...</option>
                                        </select>
                                    </div>
                                    <div class="mt-3">
                                        <label for="update-profile-form-4" class="form-label">Phone Number</label>
                                        <input id="update-profile-form-4" type="text" class="form-control" placeholder="Input text" value="65570828">
                                    </div>
                                </div>
                                <div class="col-span-12">
                                    <div class="mt-3">
                                        <label for="update-profile-form-5" class="form-label">Address</label>
                                        <textarea id="update-profile-form-5" class="form-control" placeholder="Adress">10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="btn btn-primary w-20 mt-3">Save</button>
                        </div>
                        <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                            <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                    <img class="rounded-md" alt="" src="{{ asset('dist/images/' . $fakers[0]['photos'][0]) }}">
                                    <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2">
                                        <i data-feather="x" class="w-4 h-4"></i>
                                    </div>
                                </div>
                                <div class="mx-auto cursor-pointer relative mt-5">
                                    <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                    <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Display Information -->
            <!-- BEGIN: Personal Information -->
            <div class="intro-y box mt-5">
                <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                    <h2 class="font-medium text-base mr-auto">Personal Information</h2>
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-x-5">
                        <div class="col-span-12 xl:col-span-6">
                            <div>
                                <label for="update-profile-form-6" class="form-label">Email</label>
                                <input id="update-profile-form-6" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['email'] }}" disabled>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-7" class="form-label">Name</label>
                                <input id="update-profile-form-7" type="text" class="form-control" placeholder="Input text" value="{{ $fakers[0]['users'][0]['name'] }}" disabled>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-8" class="form-label">ID Type</label>
                                <select id="update-profile-form-8" class="form-select">
                                    <option>IC</option>
                                    <option>FIN</option>
                                    <option>Passport</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-9" class="form-label">ID Number</label>
                                <input id="update-profile-form-9" type="text" class="form-control" placeholder="Input text" value="357821204950001">
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="mt-3 xl:mt-0">
                                <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                <input id="update-profile-form-10" type="text" class="form-control" placeholder="Input text" value="65570828">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-11" class="form-label">Address</label>
                                <input id="update-profile-form-11" type="text" class="form-control" placeholder="Input text" value="10 Anson Road, International Plaza, #10-11, 079903 Singapore, Singapore">
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-12" class="form-label">Bank Name</label>
                                <select id="update-profile-form-12" data-search="true" class="tom-select w-full">
                                    <option value="1">SBI - STATE BANK OF INDIA</option>
                                    <option value="1">CITI BANK - CITI BANK</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="update-profile-form-13" class="form-label">Bank Account</label>
                                <input id="update-profile-form-13" type="text" class="form-control" placeholder="Input text" value="DBS Current 011-903573-0">
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                        <a href="" class="text-danger flex items-center">
                            <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete Account
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Personal Information -->
        </div>
    </div>

</section>
