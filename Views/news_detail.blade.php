@php
/*
$layout_page = news_detail
**Variables:**
- $newsContent: colection
*/
@endphp

@extends($GP247TemplatePath.'.layout')

@section('block_main')
          <div class="row">
              <div class="col-12">
                  {!! gp247_html_render($newsContent->content) !!}
              </div>
          </div>
  {{-- Render include view --}}
  @include($GP247TemplatePath.'.common.include_view')
  {{--// Render include view --}}
@endsection


@push('scripts')
  {{-- Script here --}}
@endpush