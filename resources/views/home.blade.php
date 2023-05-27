@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h1>Uploading a .csv file</h1>

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="csv_file">
                            <button type="submit">Upload</button>
                        </form>
{{--                        @if(Session::has('upload_progress'))--}}
{{--                            <p id="progress">Upload Progress: </p>--}}
{{--                        @endif--}}
                </div>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">Delete all reviews</button>
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Deletion confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete all reviews? This action is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form action="{{ route('reviews.delete-all') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--PROGRESS FUNCTION--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>--}}
{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        function updateProgress() {--}}
{{--            $.ajax({--}}
{{--                url: '{{ route("progress") }}',--}}
{{--                type: 'GET',--}}
{{--                dataType: 'json',--}}
{{--                success: function(response) {--}}
{{--                    // if (response.progress > 0) {--}}
{{--                    console.log(response.progress);--}}
{{--                        $('#progress').text('Progress: ' + response.progress + '%');--}}
{{--                    // }--}}
{{--                },--}}
{{--                error: function() {--}}
{{--                    console.log('Error occurred while updating progress.');--}}
{{--                }--}}
{{--            });--}}
{{--        }--}}
{{--        setInterval(updateProgress, 2000);--}}
{{--    });--}}
{{--</script>--}}

@endsection
