@if ($errors->count())
	<div class="row mx-auto">
		<ul>
			
		
		@foreach ($errors->all() as $e)
			<li class="text-danger">
				{{ $e }}
			</li>
		@endforeach

		</ul>
	</div>
@endif