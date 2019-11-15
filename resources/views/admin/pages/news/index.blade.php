@extends('admin.master')
@section('title','Admin | All News')

@section('content')
	 <h2>All News</h2>
	  <table class="table table-dark">
	    <thead>
	      <tr>
	        <th>Title</th>
	        <th>Category</th>
	        <th>Tag</th>
	        <th>Description</th>
	        <th>Image</th>
	      </tr>
	    </thead>
	    <tbody>
	       @foreach ($news as $ne)
	       	   <tr>
		        <td>{{$ne->title}}</td>
		        <td>
		        	<ul>
		        		@foreach ($ne->categories as $category)
		        		  <li>{{$category->name}}</li>			
		        		@endforeach
		        	</ul>
		        </td>
		        <td>
		        	<ul>
		        		@foreach ($ne->tags as $tag)
		        		  <li>{{$tag->name}}</li>			
		        		@endforeach
		        	</ul>
		        </td>
		        <td>{{$ne->description}}</td>
		        <td> <img src="{{ asset('images/thumbnail/') }}/{{$ne->image}}" width="50" height="50"> </td>
		      </tr>
	       @endforeach
		 
	      
	    </tbody>
	  </table>
@endsection