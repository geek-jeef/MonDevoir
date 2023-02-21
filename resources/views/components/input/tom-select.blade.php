@props([
  'options' => [],
  'items' => null
])

<div >
  <select
  x-data="{
    tomSelectInstance: null,
    options: {{ collect($options) }},
    items: [{{ $items }}],

    renderTemplate(data, escape) {
      return `
      <div class='group flex items-center hover:text-white hover:bg-primary'>
        <span class='mr-3 w-8 h-8 rounded-full bg-gray-100'>
          <i data-feather='monitor' class='w-8 h-8 rounded-full text-primary'></i>
        </span>
        <div>
          <span class='block font-medium text-gray-700 group-hover:text-white'>${escape(data.title)}</span>
          <span class='block text-gray-500 group-hover:text-white'>${escape(data.subtitle)}</span>
        </div>
      </div>`;
    },
    itemTemplate(data, escape) {
      return `<div>
        <span class='block font-medium text-gray-700 p-1 bg-slate-100'>${escape(data.title)}</span>
      </div>`;
    }
  }" 
  x-init="tomSelectInstance = new TomSelect($refs.input, {
    valueField: 'id',
    labelField: 'title',
    searchField: 'title',
    options: options,
    items: items,
    @if (! empty($items) && ! $attributes->has('multiple'))
      placeholder: undefined,
    @endif
    render: {
      option: renderTemplate,
      item: itemTemplate
    }
  });"
  x-ref="input" 
  x-cloak 
  {{ $attributes }} class="form-select"></select>
</div>
{{--
<div wire:ignore>
  <select
  x-data="{
    tomSelectInstance: null,
    options: {{ collect($options) }},
    items: [{{ $items }}],
 
    renderTemplate(data, escape) {
      return `<div class='flex items-center'>
        <span class='mr-3 w-8 h-8 rounded-full bg-gray-100'><img src='https://avatars.dicebear.com/api/initials/${escape(data.label)}.svg' class='w-8 h-8 rounded-full'/></span>
        <div><span class='block font-medium text-gray-700'>${escape(data.label)}</span>
        <span class='block text-gray-500'>${escape(data.label2)}</span></div>
      </div>`;
    },
    itemTemplate(data, escape) {
      return `<div>
        <span class='block font-medium text-gray-700'>${escape(data.label)}</span>
      </div>`;
    }
  }" 
  x-init="tomSelectInstance = new TomSelect($refs.input, {
    valueField: 'value',
    labelField: 'label',
    searchField: 'label2',
    options: options,
    items: items,
    @if (! empty($items) && ! $attributes->has('multiple'))
      placeholder: undefined,
    @endif
    @if($attributes->has('multiple'))
      persist: false,
      create: true,
      plugins: {
        dropdown_input: {},
        remove_button: {
            title: 'Remove this item'
        },
        dropdown_header: {
            title: 'Actors'
        }
      },
    @endif
    render: {
      option: renderTemplate,
      item: itemTemplate
    }
  });"
  x-ref="input" 
  x-cloak 
  {{ $attributes }}></select>
</div>
--}}