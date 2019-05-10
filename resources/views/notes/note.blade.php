@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <span>{{$note->title}}</span>
                    <a class="float-right" href="{{Route('todolist')}}?u={{$note->todolist->uuid}}">Back to {{$note->todolist->name}}</a>
                </div>
                <div class="card-body">
                    <div class="float-right">
                        <a class="mr-2" href="{{Route('completenote')}}?u={{$note->uuid}}">@if($note->complete) Set item to incomplete @else Complete item @endif</a>
                        <a class="text-danger" href="{{Route('deletenote')}}?u={{$note->uuid}}" onclick="return confirmDelete()">Delete item</a>
                    </div>
                    @if(!$note->complete)<a href="{{Route('editnote')}}?u={{$note->uuid}}">Edit item</a>@endif
                    <div class="mt-3">
                        <b>Content:</b>
                        <p>
                            {{$note->content}}
                        </p>
                    </div>
                    @if($note->duration > 0)
                    <div class="mt-3">
                        <b>Duration:</b>
                        <p id="duration">
                            {{$note->duration}}
                        </p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    let dur = moment.duration(parseInt($('#duration').text()), "seconds").format();

    $('#duration').text(dur);

    function confirmDelete() {
        return confirm('Do you really wish to delete this item?');
    }
</script>

@endsection
