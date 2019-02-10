@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        @include('layouts.errors-and-messages')
        <div class="box">
            <form action="{{ route('admin.blogs.update', ['id'=>$blog->id]) }}" method="post" class="form" enctype="multipart/form-data">
                <div class="box-body">
                    <input type="hidden" name="_method" value="put">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="parent">Blog Title</label>
                            <input type="text" name="title" id="title" placeholder="Blog title" class="form-control" value="{!! $blog->title ?: old('title')  !!}">
                    </div>

                    <div class="form-group">
                        <label for="description">Description </label>
                        <textarea class="form-control ckeditor" name="description" id="description" rows="5" placeholder="Description">{!! $blog->description ?: old('description')  !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover </label>
                        <img src="{{ asset("storage/$blog->cover") }}" alt="" class="img-responsive">
                        <input type="file" name="cover" id="cover" class="form-control">
                        <small class="text-warning">Image size should be  540x560 </small>
                    </div>
                    @if(isset($category->cover))
                    <div class="form-group">
                        <img src="{{ asset("storage/$blog->cover") }}" alt="" class="img-responsive"> <br/>
                        <a onclick="return confirm('Are you sure?')" href="{{ route('admin.blogs.remove.image', ['category' => $category->id]) }}" class="btn btn-danger">Remove image?</a>
                    </div>
                    @endif

                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
