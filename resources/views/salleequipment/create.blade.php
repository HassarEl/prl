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
    Ajouter Equipment au salle
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="card m-0">
            <div class="card-header">
              Contenu Salle Equipment
            </div>
            <div class="card-body">
              
                <form id="myForm" class="form" action="{{route('contenu.store')}}" method="POST">
                  @csrf
                  <div id="inputFields">
                    <div class="col-4">
                      <label for="jardin" class="form-label">Liste Jardins</label>
                      <select class="form-select" name="salle">
                        <option selected>Select Salle</option>
                        @foreach($salles as $salle)
                        <option value="{{$salle->id}}">{{$salle->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <label class="form-label">Composition</label>
                            <br>
                            <table class="table table-bordere" id="table">
                              <thead>
                                <tr>
                                  <th>Equipment</th>
                                  <th>Quantite</th>
                                  <th style="text-align: center"><button type="button" id="addInput" class="btn btn-success addRow"><i class="bi bi-plus-circle pr-2"></i>Ajouter</button></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <select class="form-select" name="equipment[]" required>
                                        <option selected>Selection La Equipment</option>
                                        @foreach($equipments as $equipment)
                                            <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                                        @endforeach
                                    </select>
                                  </td>
                                  <td>
                                    <input type="text" name="quantite[]" class="form-control" required>
                                  </td>
                                  <td style="text-align: center">
                                    <button type="button" class="btn btn-danger remove"><i class="bi bi-x-circle pr-2"></i>Remove</button>
                                  </td>
                                </tr>
  
                              </tbody>
                            </table>
                          </div>
                    </div>
  
                    <br>                       
  
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
                  </div>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>


<script type="text/javascript">
    $('.addRow').on('click', function(){
    addRow();
    });
    
    function addRow(){
    var tr = 
    '<tr>'+
    '<td>'+
      '<select class="form-select" name="equipment[]">'+
          "<option selected>Selection L'equipment </option>"+
          '@foreach($equipments as $equipment)'+
              '<option value="{{$equipment->id}}">{{$equipment->name}}</option>'+
          '@endforeach'+
      '</select>'+
    '</td>'+
    '<td>'+
      '<input type="text" name="quantite[]" class="form-control">'+
    '</td>'+
    '<td style="text-align: center">'+
      '<button type="button" id="remove" class="btn btn-danger remove"><i class="bi bi-x-circle"> Remove</i></button>'+
    '</td>'+
    '</tr>';
    $('tbody').append(tr);
    };
    $('tbody').on('click', '.remove', function(){
    $(this).parent().parent().remove();
    });
    
</script>
@endsection