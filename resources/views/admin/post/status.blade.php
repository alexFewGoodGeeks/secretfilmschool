@if ($post->status == 'active')
    <span class="label label-green">@lang('messages.active')</span>
@endif

@if ($post->status == 'inactive')
    <span class="label label-red">@lang('messages.inactive')</span>
@endif

@if ($post->status == 'draft')
    <span class="label label-yellow">@lang('messages.draft')</span>
@endif
