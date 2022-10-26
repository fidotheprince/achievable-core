@extends('shopify-app::layouts.default')

@section('content')
    <!-- You are: (shop domain name) -->
    <p>You are: {{ $shopDomain ?? Auth::user()->name }}</p>
    <div id="root"></div>
@endsection

@section('scripts')
    @parent
    <!--below is what routes react into this blade file-->
    <script src="{{asset('js/app.js')}}"></script>
    <script>
        actions.TitleBar.create(app, { title: 'Howdy' });
    </script>
@endsection