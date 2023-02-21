<div class="fixed bottom-0 left-0 box flex items-center justify-center z-50 mb-8 ml-10 bg-transparent print:hidden">
    
  <div class="cursor-pointer shadow-md shadow-white box border rounded-full w-12 h-12 flex items-center justify-center z-50 mr-5 bg-primary dark:bg-primary">
    <a href="javascript:;" onclick="history.back();" class="relative text-white">
      <x-icon name="arrow-circle-left" class=" w-6 h-6 dark:text-slate-500" />
    </a>
  </div>

  <div class="cursor-pointer shadow-md shadow-white box border rounded-full w-12 h-12 flex items-center justify-center z-50 ml-5 bg-primary dark:bg-primary">
    <a href="{{route('dashboard')}}" class="relative text-white">
      <x-icon name="home" class=" w-6 h-6 dark:text-slate-500" />
    </a>
  </div>
</div>


<div class="cursor-pointer shadow-md shadow-white fixed bottom-0 right-0 box border rounded-full w-12 h-12 flex items-center justify-center z-50 mb-8 mr-10 bg-primary dark:bg-primary print:hidden">
    <a href="javascript:;" onclick="window.print();" class="relative text-white">
      <x-icon name="printer" class=" w-6 h-6 dark:text-slate-500" />
    </a>
</div>