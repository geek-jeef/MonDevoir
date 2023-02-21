
<div>
  <div class="font-medium text-base">Validation</div>
  <div class="overflow-x-auto">
    <div class="intro-y ">
      <table class="table table-bordered table-hover table-striped">
        <thead class="table-primary">
          <tr>
            <th class="whitespace-nowrap">#</th>
            <th class="whitespace-nowrap">Information</th>
            <th class="whitespace-nowrap">Donnée</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Nom</td>
            <td>{{$this->state['nom']}}</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Prénoms</td>
            <td>{{$this->state['prenoms']}}</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Sexe</td>
            <td>
              <span class="{{ ($this->state['genre'] == 'Masculin')  ? 'text-blue-700 dark:text-blue-500'   : 'text-pink-700 dark:text-pink-500'}}" >{{$this->state['genre']}}</span> </td>
          </tr>
          <tr>
            <td>4</td>
            <td>Date de Naissance</td>
            <td>{{ date('d/m/Y', strtotime($this->state['date_de_naissance']))}}</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Lieu de Naissance</td>
            <td>{{ $this->state['lieu_de_naissance']}}</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Nationalité</td>
            <td>{{$this->state['nationalite']}}</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Adresse</td>
            <td>{{$this->state['adresse']}}</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Tuteurs</td>
            <td>
              @foreach($this->state['tuteurs'] as $tuteur_id)
                @php
                  $Un_tuteur = App\Models\Tuteur::find($tuteur_id);
                @endphp
                <div class="box px-5 py-3 mb-3 flex items-center zoom-in">
                  <div class="w-10 h-10 flex-none image-fit rounded-full overflow-hidden">
                    <img src="{{route('avatar',['text' => $Un_tuteur->nom])}}">
                  </div>
                  <div class="ml-4 mr-auto">
                    <div class="font-medium">{{$Un_tuteur->nom}}</div>
                    <div class="text-slate-500 text-xs mt-0.5">{{$Un_tuteur->phone_primaire}}</div>
                  </div>
                </div>
              @endforeach
            </td>
          </tr>
          <tr>
            <td>9</td>
            <td>Information Médical</td>
            <td>{{ (isset($this->state['data']['medical']) ) ? $this->state['data']['medical'] : '' }}</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Commentaires</td>
            <td>{{(isset($this->state['data']['commentaire']) ) ? $this->state['data']['commentaire'] : ''}}</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Classe</td>
            <td>
              @php
                $info = json_decode($this->state['academique'], true);
                $Cycle = App\Models\CycleAcademique::find($info['cycle_id']);
                $Classe = App\Models\Classe::find($info['classe_id']);
                $Salle = App\Models\Salle::find($info['salle_id']);
              @endphp
              <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1"> {{$Cycle->nom_cycle}} </span>
              <span class="px-3 py-2 rounded-full border text-slate-600 dark:border-darkmode-100/40 dark:text-slate-300 mr-1"> {{$Classe->nom_classe}} </span>
              <span class="px-3 py-2 rounded-full border border-success text-success dark:border-success mr-1"> {{$Salle->nom_salle}} </span>

            </td>
          </tr>
          <tr>
            <td>12</td>
            <td>Marquage</td>
            <td>
              @foreach($this->state['tags'] as $tag)
@php
$custom = Tag::find($tag) ;
@endphp
@if($custom)
              <span class="px-3 py-2 rounded-full border border-primary text-primary dark:border-primary mr-1">
                {{$custom->name}}
              </span>
@endif
              @endforeach
            </td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>            
    {{--
    <div class="intro-y col-span-12 sm:col-span-6">
      <label for="input-wizard-1" class="form-label">From</label>
      <input id="input-wizard-1" type="text" class="form-control" placeholder="example@gmail.com">
    </div>
    <div class="intro-y col-span-12 sm:col-span-6">
      <label for="input-wizard-2" class="form-label">To</label>
      <input id="input-wizard-2" type="text" class="form-control" placeholder="example@gmail.com">
    </div>
    <div class="intro-y col-span-12 sm:col-span-6">
      <label for="input-wizard-3" class="form-label">Subject</label>
      <input id="input-wizard-3" type="text" class="form-control" placeholder="Important Meeting">
    </div>
    <div class="intro-y col-span-12 sm:col-span-6">
      <label for="input-wizard-4" class="form-label">Has the Words</label>
      <input id="input-wizard-4" type="text" class="form-control" placeholder="Job, Work, Documentation">
    </div>
    <div class="intro-y col-span-12 sm:col-span-6">
      <label for="input-wizard-5" class="form-label">Doesn't Have</label>
      <input id="input-wizard-5" type="text" class="form-control" placeholder="Job, Work, Documentation">
    </div>
    <div class="intro-y col-span-12 sm:col-span-6">
      <label for="input-wizard-6" class="form-label">Size</label>
      <select id="input-wizard-6" class="form-select">
      <option>10</option>
      <option>25</option>
      <option>35</option>
      <option>50</option>
      </select>
    </div>
    --}}
</div>
