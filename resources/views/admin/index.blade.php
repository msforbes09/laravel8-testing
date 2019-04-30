@extends ('admin.layout')

@section ('content')
    <div class="box">
        <div class="box-header">
          <h3 class="box-title">Hover Data Table</h3>
        </div>

        <div class="box-body">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-hover table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($posts as $post)
                                <tr class="text-center">
                                    <td>{{ $post->id }}.</td>
                                    <td><strong>{{ $post->title }}</strong></td>
                                    <td>{{ $post->content }}</td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-5">
                    <div class="dataTables_info" role="status" aria-live="polite">
                        Showing <strong class="text-primary">{{ $posts->firstItem() }}</strong> to <strong class="text-primary">{{ $posts->lastItem() }}</strong> of <strong class="text-primary">{{ $posts->total() }}</strong> entries
                    </div>
                </div>

                <div class="col-sm-7">
                    <div class="dataTables_paginate paging_simple_numbers">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
