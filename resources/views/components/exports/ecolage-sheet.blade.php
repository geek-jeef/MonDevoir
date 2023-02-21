@if($sheet)
  @if($sheet->get('type') == 'aggregate' )
    <table class="table table-bordered table-striped border-[2px] border-primary text-xs">
      <thead class="text-center font-semibold whitespace-nowrap border-primary">
        @if($sheet->get('titre_row'))
          <tr class="border-primary">
            @foreach($sheet->get('titre_row') as $head)
                <th colspan="{{$head->get('colspan')}}" > {{$head->get('formule')}} </th>
            @endforeach
          </tr>
        @endif

        @if($sheet->get('description_row'))
          <tr class="border-primary">
            @foreach($sheet->get('description_row') as $head)
                <th colspan="{{$head->get('colspan')}}" > {{$head->get('formule')}} </th>
            @endforeach
          </tr>
        @endif

        @if($sheet->get('total_row'))
          <tr class="border-primary">
            @foreach($sheet->get('total_row') as $foot)
                <th colspan="{{$foot->get('colspan')}}" > {{$foot->get('formule')}} </th>
            @endforeach
          </tr>
        @endif

        @if($sheet->get('header_row'))
          <tr class="border-primary">
            @foreach($sheet->get('header_row') as $head)
                <th colspan="{{$head->get('colspan')}}" > {{$head->get('formule')}} </th>
            @endforeach
          </tr>
        @endif
      </thead>
      <tbody>
        @foreach($sheet->get('table') as $row)
          <tr>
            @foreach($row as $data)
              <td colspan="{{$data->get('colspan')}}" > {{$data->get('formule')}} </td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
  
  @if($sheet->get('type') == 'sheet' )
    <table class="table table-bordered table-striped border-[2px] border-primary text-xs">
      <thead class="text-center font-semibold whitespace-nowrap border-primary">
        @if($sheet->get('titre_row'))
          <tr class="border-primary">
            @foreach($sheet->get('titre_row') as $head)
                <th colspan="{{$head->get('colspan')}}" > {{$head->get('formule')}} </th>
            @endforeach
          </tr>
        @endif

        @if($sheet->get('description_row'))
          <tr class="border-primary">
            @foreach($sheet->get('description_row') as $head)
                <th colspan="{{$head->get('colspan')}}" > {{$head->get('formule')}} </th>
            @endforeach
          </tr>
        @endif

        @if($sheet->get('total_row'))
          <tr class="border-primary">
            @foreach($sheet->get('total_row') as $foot)
                <th colspan="{{$foot->get('colspan')}}" > {{$foot->get('formule')}} </th>
            @endforeach
          </tr>
        @endif

        @if($sheet->get('header_row'))
          <tr class="border-primary">
            @foreach($sheet->get('header_row') as $head)
                <th colspan="{{$head->get('colspan')}}" > {{$head->get('formule')}} </th>
            @endforeach
          </tr>
        @endif
      </thead>
      <tbody>
        @foreach($sheet->get('table') as $row)
          <tr>
            @foreach($row as $data)
              <td colspan="{{$data->get('colspan')}}" > {{$data->get('formule')}} </td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>          
  @endif
@endif