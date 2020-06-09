@extends ('layouts.app')

@section('content')
<!-- START: components/text-editor -->
<section class="card">
  <div class="card-header">
    <span class="cui-utils-title">
      <strong>Text Editor</strong>
      <a href="http://summernote.org/" target="_blank" class="btn btn-sm btn-primary ml-2"
        >Official Documentation <i class="icmn-link ml-1"><!-- --></i></a
      >
    </span>
  </div>
  <div class="card-body">
    <div class="summernote">
      <h5>William Shakespeare (26 April 1564 – 23 April 1616)</h5>
      Was an English poet, playwright, and actor, widely regarded as the greatest writer in the
      English language and the world's pre-eminent dramatist. He is often called England's national
      poet, and the "Bard of Avon". His extant works, including collaborations, consist of
      approximately 38 plays, 154 sonnets, two long narrative poems, and a few other verses, some of
      uncertain authorship. His plays have been translated into every major living language and are
      performed more often than those of any other playwright
    </div>
  </div>
</section>
<!-- END: components/text-editor -->

<!-- START: page scripts -->
<script>
  ;(function($) {
    'use strict'
    $(function() {
      $('.summernote').summernote({
        height: 350,
      })
    })
  })(jQuery)
</script>
<!-- END: page scripts -->

@endsection