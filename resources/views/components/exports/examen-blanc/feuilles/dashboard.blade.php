@if ($data)
  <table>
    <tbody>
      <tr></tr>      
      <tr>
        <td colspan="3" style="background-color: gray;"><b>Statistiques Générales</b></td>
        <td colspan="14" style="background-color: #ffff00;"><b>{{ $examen->nom_examen }}</b></td>
      </tr>      
      <tr></tr>      
      @foreach ($data as $row)
        @if ($loop->first)
          <tr>
            @foreach ($row as $entry)
              <td colspan="1" @if(!$loop->first) align="center"  @endif ><b>{{ $entry }}</b></td>
            @endforeach
          </tr>
        @elseif ($loop->last)
          <tr>
            @foreach ($row as $entry)
              <td colspan="1" style="background-color: gray;" @if(!$loop->first) align="center"  @endif ><b>{{ $entry }}</b></td>
            @endforeach
          </tr>
        @else
          <tr >
            @foreach ($row as $entry)
              <td colspan="1" @if(!$loop->first) align="center"  @endif>{{ $entry }}</td>
            @endforeach
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
@endif
