@extends('layouts.app')

@section('content')
<div class="card mx-4 my-5 p-5">
@if(isset($dorm))
@include('sections.view_dorm')
@else
<h2 style="text-align:center;" class="py-4 my-4">
	My Dorms
	<hr>
</h2>
@include('sections.dorms')

@endif
</div>
@stop