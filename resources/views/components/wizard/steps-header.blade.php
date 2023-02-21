  <div class="relative .before:hidden .before:lg:block .before:absolute .before:w-[69%] .before:h-[3px] .before:top-0 .before:bottom-0 .before:mt-4 .before:bg-slate-100 .before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20">
    @foreach($stepInstances as $stepInstance)
      @include('components.wizard.step-header')
    @endforeach
  </div>