@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
	    <div class="col-md-3">
		   <filter-controls></filter-controls>
	    </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">LeaseWeb Server Listing</div>

                <div class="panel-body">
                    <server-listing></server-listing>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
