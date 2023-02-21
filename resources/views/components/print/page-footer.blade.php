<div id="footer_for_print" class="hidden print:flex justify-between print:py-2">
  <div class="p-2 font-bold text-xs hidden print:block"> {{ \Hp::annee()->nom_annee }} </div>
  <div class="p-2 font-bold text-xs hidden print:block"> {{ $parametres_generaux->nom_ecole }} </div>
  <div class="p-2 font-bold text-xs hidden print:block"> {{ now() }} </div>
</div>