<div>
  <div class="print:hidden">
    <x-input wire:change="save"  wire:model.debounce.700ms="note.note" placeholder="Entrer la note"  type="number"  min="0" max="20" required right-icon="pencil"/>
  </div>
  <div class="hidden print:block">
    {{$note->note}}
  </div>
</div>
