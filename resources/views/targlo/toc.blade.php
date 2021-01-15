@extends('targlo.main')
@extends('targlo.report')

@section('toc')

  <div id="tab2" role="tabpanel" class="tab-pane panel-collapse collapse" aria-labelledby="heading2">
                            <p class="toc" >
                              {!! $reports->Table_of_Content !!}
                               </p>
                        </div>
@endsection
