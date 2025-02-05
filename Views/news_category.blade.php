@php
/*
$layout_page = news_category
**Variables:**
- $newsCategory
- $entries: paginate
Use paginate: $entries->appends(request()->except(['page','_token']))->links()
*/
@endphp

@extends($GP247TemplatePath.'.layout')

@section('block_main')
<section class="section section-xl bg-default">
  <div class="container">
    <div class="row row-30">
      @if ($entries->count())
          @foreach ($entries as $entryDetail)
          <div class="col-sm-6 col-lg-4">
          {{-- Render entry single --}}
          @include($GP247TemplatePath.'.common.entry_single', ['entry' => $entryDetail])
          {{-- //Render entry single --}}
          </div>
          @endforeach

      {{-- Render pagination --}}
      @include($GP247TemplatePath.'.common.pagination', ['items' => $entries])
      {{--// Render pagination --}}

      @else
          {!! gp247_language_render('front.no_item') !!}
      @endif
    </div>

  </div>
</section>

   {{-- Render include view --}}
   @include($GP247TemplatePath.'.common.include_view')
   {{--// Render include view --}}

@endsection


@push('scripts')
  {{-- Script here --}}
@endpush
