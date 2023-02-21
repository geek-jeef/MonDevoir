@if($sheet)
  @if($sheet->get('type') == 'rapport-finance' )
    <table>
      <thead >
        @if($sheet->get('total_row'))
          <tr >
            @foreach($sheet->get('total_row') as $foot)
                <th colspan="{{$foot->get('colspan')}}" >{{$foot->get('formule')}}</th>
            @endforeach
          </tr>
        @endif
        @if($sheet->get('header_row'))
          <tr >
            @foreach($sheet->get('header_row') as $head)
                <th colspan="{{$head->get('colspan')}}" >{{$head->get('value')}}</th>
            @endforeach
          </tr>
        @endif
      </thead>
      <tbody>
        @foreach($sheet->get('table') as $row)
          <tr>
            @foreach($row as $data)
              <td colspan="{{$data->get('colspan')}}" >{{$data->get('formule')}}</td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endif