@extends('layouts.app')

@section('content')
    <form action="">
        <input type="hidden" class="user_id" value="{{ auth()->user()->id }}">
        <input type="hidden" class="post_id" value="{{ $comments->post_id }}">
        <label for="">Description for comment</label>
        <input type="text" class="desc">
        <button class="add_comment">Submit</button>
    </form>
@endsection


@section('scripts')

    <script>

        $(document).ready(function () {

            $(document).on('click', '.add_comment', function (e) {
                e.preventDefault();
                // console.log('hello man');

                var data = {
                    'desc' : $('.desc').val(),
                    'post_id': $('.post_id').val(),
                    'user_id': $('.user_id').val(),
                }

                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/comments",
                    data: data,
                    dataType: "json",
                    success: function(response){
                        console.log(response);
                    }
                });
            });

        });

    </script>

@endsection


