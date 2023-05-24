@extends('layouts.master')

@section('css')

@endsection

@section('title_page_1')
   <a href="">Home</a>
@endsection

@section('title_page_2')
    <a href="">Dashboard</a>
@endsection

@section('title_header')
    Contenu de salle
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <h4>Salle : {{$salle->name}}</h4>
        </div>
        
    </div>
    <br>
    <div class="card">
        <div class="card-header">
            <label class="form-label">Composition</label>
        </div>
        <div class="card-body d-flex justify-content-center">
            <div class="col-8">
                <div class="card">
                    <table class="table table-bordere">
                        <thead>
                              <tr>
                                <th>Equipment</th>
                                <th>Quantite</th>
                                <th>Acction</th>
                              </tr>
                          </thead>
                        <tbody>
                            @foreach($contents as $content)
                            <tr>
                                <td>
                                    @foreach($equipments as $equipment)
                                        @if($name_equipment = $equipment->id == $content->equipment_id)
                                            {{$equipment->name}}
                                        @endif
                                    @endforeach
                                </td>
    
                                <td>
    
                                  {{$content->quantite}}
                                
                                </td>
    
                                <td>
    
                                  <form method="POST" action="{{url('/contenu/'. $content->id)}}" accept-charset="UTF-8" >
                                      {{ method_field('DELETE') }}
                                      {{ csrf_field() }}
                                      <button type="submit" class="btn btn-danger btn-sm" title="Delete Doctor" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                  </form>
    
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>
                                    Equipment Totale : {{$contents->count()}}
                                </td>
                                <td>
    
                                </td>
                                <td>
    
                                </td>
                            </tr>
                            
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection