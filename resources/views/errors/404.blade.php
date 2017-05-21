@extends('main')

@section('meta')
<meta name="robots" content="noindex, nofollow" />
@endsection

@section('title', 'Brandon Clothier | 404')

@section('body')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="75">
  @includeIf('components.header-error')
  @section('error', '404 - Page not found!')
  @includeIf('components.error')
  @includeIf('components.footer-error')
</body>
@endsection
