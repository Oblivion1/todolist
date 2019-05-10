@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Todolists</span>
                    <a class="float-right" href="{{Route('newtodolist')}}">Create todolist</a>
                </div>
                <div class="card-body">
                    <table id="todolist-table" class="table">
                        <thead>
                            <th>Name</th>
                        </thead>
                        <tbody>
                            @foreach($todolists as $todolist)
                            <tr class="row-redirect" data-todolist-uuid="{{$todolist->uuid}}">
                                <td>
                                    {{$todolist->name}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#todolist-table').DataTable();

        $(".row-redirect").map(function() {
            $(this).click(function() {
                window.location.href = "{{Route('todolist')}}?u=" + $(this).data("todolist-uuid");
            });
        })
    });
</script>
@endsection
