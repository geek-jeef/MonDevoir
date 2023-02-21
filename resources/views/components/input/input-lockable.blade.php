@props([
  'locked' => true
])
<div x-data="{ locked: {{$locked}} }">
  <x-input {{ $attributes->merge(['class' => 'pr-12']) }} 
    x-bind:disabled="locked" x-bind:class="locked ? 'disabled form-control' : ''"
    >
    <x-slot name="append">
      <div class="absolute inset-y-0 right-0 flex items-center p-0.5" >
        <x-button
            class="h-full rounded-r-md hover:bg-primary/10"
            icon="pencil"
            primary
            flat
            squared
            x-on:click="locked = ! locked"
        />
      </div>
    </x-slot>
  </x-input>
</div>
