<div>
  <label class="block text-sm font-medium leading-5 text-gray-700"> {{ $title ?? '' }} </label>
  <select wire:model="value" class="form-select mt-2 mr-2 w-full" >
    <option value="">Choisir {{ $title ?? ' Une Option' }}</option>
    @foreach($options ?? [] as $option)
      <option value="{{ $option[$option_value] }}">
        {{ $option[$option_label] }}
      </option>
    @endforeach
  </select>
</div>