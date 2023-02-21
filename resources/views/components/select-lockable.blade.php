@props([
  'locked' => true,
  'optionValue' => 'id',
  'optionLabel' => 'nom'
])
<div  x-data="{ 
  locked : {{$locked}},
}" 
  class="flex gap-1 w-full">
  <x-select {{$attributes->merge(['class' => 'w-full']) }} 
    x-bind:disabled="locked" :option-value="$optionValue" :option-label="$optionLabel" x-bind:class="locked ? 'disabled form-control' : ''"
    >
  </x-select>
  <div class=" self-end ">
    <x-button
        class="px-1 hover:bg-primary/10"
        x-bind:class="locked ? ' text-red-700 ' : ''"
        icon="pencil"
        primary
        flat
        squared
        x-on:click="locked = ! locked"
    />
  </div>

</div>