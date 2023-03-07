<div class="intro-y box col-span-12">
  <div class="dark:border-darkmode-400 flex items-center border-b border-slate-200/60 px-5 py-5 sm:py-3">
    <h2 class="mr-auto text-base font-medium">General Statistics</h2>
    <div class="dropdown ml-auto sm:hidden">
      <a class="dropdown-toggle block h-5 w-5" href="javascript:;" aria-expanded="false"
        data-tw-toggle="dropdown">
        <i data-feather="more-horizontal" class="h-5 w-5 text-slate-500"></i>
      </a>
      <div class="dropdown-menu w-40">
        <ul class="dropdown-content">
          <li>
            <a href="javascript:;" class="dropdown-item">
              <i data-feather="file" class="mr-2 h-4 w-4"></i> Download XML
            </a>
          </li>
        </ul>
      </div>
    </div>
    <button class="btn btn-outline-secondary hidden sm:flex">
      <i data-feather="file" class="mr-2 h-4 w-4"></i> Download XML
    </button>
  </div>
  <div class="grid grid-cols-1 gap-6 p-5 2xl:grid-cols-7">
    <div class="2xl:col-span-2">
      <div class="grid grid-cols-2 gap-6">
        <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
          <div class="font-medium">Net Worth</div>
          <div class="mt-1 flex items-center sm:mt-0">
            <div class="mr-4 flex w-20">
              USP: <span class="text-success ml-3 font-medium">+23%</span>
            </div>
            <div class="w-5/6 overflow-auto">
              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
            </div>
          </div>
        </div>
        <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
          <div class="font-medium">Sales</div>
          <div class="mt-1 flex items-center sm:mt-0">
            <div class="mr-4 flex w-20">
              USP: <span class="text-danger ml-3 font-medium">-5%</span>
            </div>
            <div class="w-5/6 overflow-auto">
              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
            </div>
          </div>
        </div>
        <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
          <div class="font-medium">Profit</div>
          <div class="mt-1 flex items-center sm:mt-0">
            <div class="mr-4 flex w-20">
              USP: <span class="text-danger ml-3 font-medium">-10%</span>
            </div>
            <div class="w-5/6 overflow-auto">
              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
            </div>
          </div>
        </div>
        <div class="box dark:bg-darkmode-500 col-span-2 p-5 sm:col-span-1 2xl:col-span-2">
          <div class="font-medium">Products</div>
          <div class="mt-1 flex items-center sm:mt-0">
            <div class="mr-4 flex w-20">
              USP: <span class="text-success ml-3 font-medium">+55%</span>
            </div>
            <div class="w-5/6 overflow-auto">
              <canvas class="simple-line-chart-1" data-random="true" height="60"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full 2xl:col-span-5">
      <div class="mt-8 flex justify-center">
        <div class="mr-5 flex items-center">
          <div class="bg-primary mr-3 h-2 w-2 rounded-full"></div>
          <span>Product Profit</span>
        </div>
        <div class="flex items-center">
          <div class="mr-3 h-2 w-2 rounded-full bg-slate-300"></div>
          <span>Author Sales</span>
        </div>
      </div>
      <div class="mt-8">
        <canvas id="stacked-bar-chart-1" height="130"></canvas>
      </div>
    </div>
  </div>
</div>