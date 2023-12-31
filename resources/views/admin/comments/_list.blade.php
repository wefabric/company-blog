<table class="table table-striped table-sm table-responsive-md">
    <caption>{{ trans_choice('comments.count', $comments->total()) }}</caption>
    <thead>
        <tr>
            <th>@lang('comments.attributes.content')</th>
            <th>@lang('comments.attributes.post')</th>
            <th>@lang('comments.attributes.author')</th>
            <th>@lang('comments.attributes.posted_at')</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
            <tr>
                <td>
                    <a href="{{ route('admin.comments.edit', $comment) }}">
                        {{ Str::limit($comment->content, 50) }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.posts.edit', $comment->post) }}">
                        {{ $comment->post->title }}
                    </a>
                </td>
                <td>
                    <a href="{{ route('admin.users.edit', $comment->author) }}">
                        {{ $comment->author->fullname }}
                    </a>
                </td>
                <td>{{ humanize_date($comment->posted_at, 'd/m/Y H:i:s') }}</td>
                <td>
                    <a href="{{ route('admin.comments.edit', $comment) }}" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-pencil" aria-hidden="true"></i>
                    </a>

                    {!! Form::model($comment, ['method' => 'DELETE', 'route' => ['admin.comments.destroy', $comment], 'class' => 'form-inline', 'data-confirm' => __('forms.comments.delete')]) !!}
                        {!! Form::button('<i class="fa-solid fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'name' => 'submit', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {{ $comments->links() }}
</div>
