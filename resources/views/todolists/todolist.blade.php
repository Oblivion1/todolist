@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>Items in {{$todolist->name}}</span>
                    <a class="float-right" href="{{Route('root')}}">Back to overview</a>
                </div>
                <div class="card-body">
                    <div class="float-right">
                        <a class="mr-2" href="{{Route('edittodolist')}}?u={{$todolist->uuid}}">Change todolist name</a>
                        <a class="text-danger" href="{{Route('deletetodolist')}}?u={{$todolist->uuid}}" onclick="return confirmDelete()">Delete todolist</a>
                    </div>
                    <a href="{{Route('newnote')}}?u={{$todolist->uuid}}">Add new item</a>
                    <h5 class="my-3">
                        <i class='fas fa-clock text-warning'></i> Incomplete items
                    </h5>
                    <table id="incomplete-note-table" class="table">
                        <thead>
                            <th>Title</th>
                            <th>Duration</th>
                        </thead>
                        <tbody>
                            @foreach($todolist->notes as $note)
                            @if($note->complete == false)
                            <tr class="row-redirect" data-note-uuid="{{$note->uuid}}">
                                <td>
                                    {{$note->title}}
                                </td>
                                @if($note->duration > 0)
                                <td class="duration">
                                    {{$note->duration}}
                                </td>
                                @else
                                <td>-</td>
                                @endif
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    @if($todolist->notes->contains('complete', true))
                    <div class="mt-3">
                        <div id="complete-toggle-container">
                            <div id="complete-collapse-toggle" data-toggle="collapse" data-target="#complete-notes"
                                aria-expanded="false" aria-controls="#complete-notes" class="collapsed pointer">
                                <h5 class="mb-3 d-inline-block">
                                    <i class='fas fa-check text-success'></i> Complete items
                                </h5>
                                <i class="fas fa-plus toggle-icon float-right"></i>
                            </div>
                        </div>
                        <div class="collapse" id="complete-notes">
                            <table id="complete-note-table" class="table">
                                <thead>
                                    <th>Title</th>
                                    <th>Duration</th>
                                </thead>
                                <tbody>
                                    @foreach($todolist->notes as $note)
                                    @if($note->complete == true)
                                    <tr class="row-redirect" data-note-uuid="{{$note->uuid}}">
                                        <td>
                                            {{$note->title}}
                                        </td>
                                        @if($note->duration > 0)
                                        <td class="duration">
                                            {{$note->duration}}
                                        </td>
                                        @else
                                        <td>-</td>
                                        @endif
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#complete-note-table').DataTable();

                            $("#complete-toggle-container").on('click', '*', function () {
                                if ($("#complete-collapse-toggle").hasClass('collapsed') === true) {
                                    $(this).find('.toggle-icon').removeClass('fa-plus');
                                    $(this).find('.toggle-icon').addClass('fa-minus');
                                } else {
                                    $(this).find('.toggle-icon').removeClass('fa-minus');
                                    $(this).find('.toggle-icon').addClass('fa-plus');
                                }
                            });
                        });

                    </script>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $('#incomplete-note-table').DataTable();

        $(".duration").map(function () {
            let dur = moment.duration(parseInt($(this).text()), "seconds").format();

            $(this).text(dur);
        })

        $(".row-redirect").map(function () {
            $(this).click(function () {
                window.location.href = "{{Route('note')}}?u=" + $(this).data("note-uuid");
            });
        })
    });

    function confirmDelete() {
        return confirm('Do you really wish to delete this todolist? All containing items will also be deleted.');
    }
</script>
@endsection
