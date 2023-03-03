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

                  <div class="col-span-12">
                      <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                          <h2 class="text-lg font-medium mr-auto">Tabulator</h2>
                          <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                              <button class="btn btn-primary shadow-md mr-2">Add New Product</button>
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
                                                  <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> New Category
                                              </a>
                                          </li>
                                          <li>
                                              <a href="" class="dropdown-item">
                                                  <i data-feather="users" class="w-4 h-4 mr-2"></i> New Group
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- BEGIN: HTML Table Data -->
                      <div class="intro-y box p-5 mt-5">
                          <div class="flex flex-col sm:flex-row sm:items-end xl:items-start">
                              <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto" >
                                  <div class="sm:flex items-center sm:mr-4">
                                      <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                                      <select id="tabulator-html-filter-field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                                          <option value="name">Name</option>
                                          <option value="category">Category</option>
                                          <option value="remaining_stock">Remaining Stock</option>
                                      </select>
                                  </div>
                                  <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                      <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                                      <select id="tabulator-html-filter-type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto" >
                                          <option value="like" selected>like</option>
                                          <option value="=">=</option>
                                          <option value="<">&lt;</option>
                                          <option value="<=">&lt;=</option>
                                          <option value=">">></option>
                                          <option value=">=">>=</option>
                                          <option value="!=">!=</option>
                                      </select>
                                  </div>
                                  <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                                      <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                                      <input id="tabulator-html-filter-value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"  placeholder="Search...">
                                  </div>
                                  <div class="mt-2 xl:mt-0">
                                      <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" >Go</button>
                                      <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" >Reset</button>
                                  </div>
                              </form>
                              <div class="flex mt-5 sm:mt-0">
                                  <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2">
                                      <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print
                                  </button>
                                  <div class="dropdown w-1/2 sm:w-auto">
                                      <button class="dropdown-toggle btn btn-outline-secondary w-full sm:w-auto" aria-expanded="false" data-tw-toggle="dropdown">
                                          <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export <i data-feather="chevron-down" class="w-4 h-4 ml-auto sm:ml-2"></i>
                                      </button>
                                      <div class="dropdown-menu w-40">
                                          <ul class="dropdown-content">
                                              <li>
                                                  <a id="tabulator-export-csv" href="javascript:;" class="dropdown-item">
                                                      <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export CSV
                                                  </a>
                                              </li>
                                              <li>
                                                  <a id="tabulator-export-json" href="javascript:;" class="dropdown-item">
                                                      <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export JSON
                                                  </a>
                                              </li>
                                              <li>
                                                  <a id="tabulator-export-xlsx" href="javascript:;" class="dropdown-item">
                                                      <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export XLSX
                                                  </a>
                                              </li>
                                              <li>
                                                  <a id="tabulator-export-html" href="javascript:;" class="dropdown-item">
                                                      <i data-feather="file-text" class="w-4 h-4 mr-2"></i> Export HTML
                                                  </a>
                                              </li>
                                          </ul>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="overflow-x-auto scrollbar-hidden">
                              <div id="tabulator" class="mt-5 table-report table-report--tabulator"></div>
                          </div>
                      </div>
                      <!-- END: HTML Table Data -->
                  </div>
                  

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
