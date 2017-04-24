@extends('layouts.master')

@section('title')			<!-- title of the page -->
@endsection

@section('styles')			<!-- css written here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('content')			<!-- content section of the page -->

<!--  =================== Filter Checking : Start =================== -->

	@if(!empty(Request::segment(1))) 	<!-- checking url's first section if not empty -->
		<section class="filter-bar">
			A filter has been set! <a href="{{ route('index') }}">Show all quotes</a>
		</section>				<!-- back button set to see all quote again -->
	@endif

<!--  =================== Filter Checking : End =================== -->

<!--  =================== O/P Validation Error Messages: Start =================== -->

@if(count($errors) > 0)
	<section class="info-box fail">
			@foreach($errors->all() as $error)

				{{ $error }}

			@endforeach
	</section>
@endif   <!-- Quote Controller line 39 passing success as object --> 



<!--  =================== O/P Validation Error Messages: Stop =================== -->

<!--  =============== O/P Validation Success Messages: Start =============== -->

@if(Session::has('success'))
	<section class="info-box success">
		{{ Session:: get('success') }}
	</section>	
@endif

<!--  =============== O/P Validation Success Messages: Stop =============== -->

	<section class="quotes">
		<h1>Latest Quotes</h1>

		<!-- <article class="quote">
			<div class="delete"><a href="#">x</a></div>
			Quote text
		
			<div class="info">Created by <a href="#">Amir Mustafa</a> on ...</div>
		</article> -->
		
		@for($i = 0; $i<count($quotes); $i++)
			{{-- <article class="quote{{ $i % 3 === 0 ? 'first-in-line' : (($i + 1)%3 === 0 ? 'last-in-line' : '') }}"> --}}

			<article class="quote">				<!-- delete route -->
				<div class="delete"><a href="{{ route('delete', ['quote_id' => $quotes[$i]->id] ) }}">x</a></div>
				{{ $quotes[$i]->quote }}   <!-- o/p value using blade syntax -->

				<div class="info">Created by <a href="{{ route('index', ['author' => $quotes[$i]->author->name]) }}">{{ $quotes[$i]->author->name }}</a> on {{ $quotes[$i]->created_at }}</div>								<!-- seeing author name -->        <!-- filter route in name  -->
			</article>
		@endfor
	<!-- ====================== Pagination Div: Start ======================  -->
		<div class="pagination">  <!-- In Quote Controller line 19 and 25 pagination is called -->
			@if($quotes->currentPage() !== 1)   <!-- That is not last page case -->
				<a href="{{ $quotes->previousPageUrl() }}"><span class="fa fa-caret-left"></span></a>
			@endif
						<!-- Last Page Case: i.e. has last page and has many pages  -->
			@if($quotes->currentPage() !== $quotes->lastPage() && $quotes->hasPages())
			<a href="{{ $quotes->nextPageUrl() }}"><span class="fa fa-caret-right"></span></a>
			@endif
		</div>
	<!-- ====================== Pagination Div: End ======================  -->
	</section>

	<section class="edit-quote">
		<h1>Add a Quote</h1>

		<form method="post" action="{{ route('create') }}">
			<div class="input-group">
				<label for="author">Your Name</label>
				<input type="text" name="author" id="author" placeholder="Your Name">
			</div>

			<div class="input-group">
				<label for="author">Your E-mail</label>
				<input type="text" name="email" id="email" placeholder="Your E-mail">
			</div>

			<div class="input-group">
				<label for="quote">Your Quotation</label>
				<textarea name="quote" id="quote" rows="5" placeholder="Quote"></textarea>
			</div>

			<button type="submit" class="btn">Submit Quote</button>
			<input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</section>

@endsection