@extends('base')

@section('meta')
<meta name="robots" content="noindex, nofollow" />
@endsection

@section('title', 'Brandon Clothier | 502')

@section('body')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="75">
  @includeIf('components.header-error')
  @section('error', '502 - Bad gateway!')
  @includeIf('components.error')
  @includeIf('components.footer-error')
</body>
@endsection
