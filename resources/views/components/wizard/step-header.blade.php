@php
  $isStepValid = $stepInstance->isValid();
  $isFailedStep = $stepInstance->validationFails;
  $stepIsGreaterOrEqualThan = $this->stepIsGreaterOrEqualThan($stepInstance->getOrder());
@endphp

{{--
<div class="intro-x lg:text-center flex items-center {{ ($stepIsGreaterOrEqualThan && !$isFailedStep) ? 'mt-5 lg:mt-0' : '' }} lg:block flex-1 z-10">
  <button class="w-10 h-10 rounded-full btn  {{ ($stepIsGreaterOrEqualThan && !$isFailedStep) ? 'btn-primary' :'text-slate-500  bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400' }} {{($isFailedStep)? 'btn-danger' :''}} " wire:click="setStep({{ $stepInstance->getOrder() }})" >{{ $stepInstance->getOrder() }}</button>
  <div class="lg:w-32  text-base lg:mt-3 ml-3 lg:mx-auto {{ ($stepIsGreaterOrEqualThan && !$isFailedStep) ? '' :' font-medium text-slate-600 dark:text-slate-400' }} ">{{ $stepInstance->title() }}</div>
</div>

 }}
<div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
  <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
  <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Create New Account</div>
</div>
--}}
<div class="w-1/3">
  <div class="relative mb-2">
    @if(!$loop->first)
      <div class="absolute" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
        <div class="bg-gray-200 rounded flex-1">
          <div
            @class([
              'rounded py-0.5',
              'bg-primary-300' => $stepIsGreaterOrEqualThan && !$isFailedStep,
              'bg-red-300' => $isFailedStep,
              'w-full' => $isFailedStep || $stepIsGreaterOrEqualThan,
              'w-0' =>  !($isFailedStep || $stepIsGreaterOrEqualThan)
            ])
          ></div>
        </div>
      </div>
    @endif

    <div class="grid place-items-center">
      <x-button.circle class="{{($stepIsGreaterOrEqualThan && !$isFailedStep)? 'bg-primary text-white hover:text-gray-900' :'' }} {{($isFailedStep)? 'bg-danger' :'' }}"
        {{--:primary="$stepIsGreaterOrEqualThan && !$isFailedStep"
        :negative="$isFailedStep"--}}
        wire:click="setStep({{ $stepInstance->getOrder() }})"
        icon="{{ $stepInstance->icon() }}"
      />
    </div>
  </div>
  <div class="text-xs text-center md:text-base">{{ $stepInstance->title() }}</div>
</div>

            





