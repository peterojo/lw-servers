@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
	    <div class="col-sm-3">
		   <filter-controls></filter-controls>
	    </div>
        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>LeaseWeb Server Listing</h3></div>

                <div class="panel-body">
                    <server-listing></server-listing>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
