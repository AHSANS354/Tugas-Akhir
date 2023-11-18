@if ($category)
    {!! $category->name !!}
    @if ($category->children)
        <span> > </span>
        @include('breadcrumb', ['category' => $category->children->first()])
    @endif
@endif