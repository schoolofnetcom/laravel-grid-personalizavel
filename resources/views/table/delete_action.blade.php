<a href="{{route($action['route'],[$row->getKey()])}}" class="btn btn-primary btn-danger btn-xs"
    onclick="event.preventDefault();if(confirm('Deseja excluir este item?')){document.getElementById('form-delete-{{$row->getKey()}}').submit();}">
    <span class="glyphicon glyphicon-trash"></span> {{$action['label']}}
</a>

<form id="form-delete-{{$row->getKey()}}"
      action="{{route($action['route'],[$row->getKey()])}}"
      method="POST" style="display: none;">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
</form>