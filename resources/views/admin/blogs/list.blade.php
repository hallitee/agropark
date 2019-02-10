@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($blogs)
            <div class="box">
                <div class="box-body">
                    <h2>Blogs</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="col-md-3">Name</td>
                                <td class="col-md-3">Cover</td>
                             
                                <td class="col-md-3">Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($blogs as $category)
                            <tr>
                                <td>
                                    <a href="{{ route('admin.blogs.show', $category->id) }}">{{ $category->title }}</a></td>
                                <td>
                                  
                                        <img src="{{ asset("storage/$category->cover") }}" alt="" class="img-responsive" style="width:50%;height:auto">
                               
                                </td>
                                
                                <td>
                                    <form action="{{ route('admin.blogs.destroy', $category->id) }}" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.blogs.edit', $category->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $blogs->links() }}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
