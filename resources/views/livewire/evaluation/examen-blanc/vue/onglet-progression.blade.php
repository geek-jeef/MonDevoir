<div class="intro-y box col-span-12 lg:col-span-12 mt-8">
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