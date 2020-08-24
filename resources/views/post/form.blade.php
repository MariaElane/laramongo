@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('savePost') }}"  method="post">
                        @csrf
                            <div class="form-group">
                                    <label for="name">Name</label>
                                    <input  name="name" type="text" class="form-control" placeholder="Enter name">
                                </div>
                            <div class="form-group">
                                    <label for="type">type</label>
                                    <input name="type" type="text" class="form-control" placeholder="Enter type">
                                </div>
                                <div class="form-group">
                                    <label for="qtd">Name</label>
                                    <input name="qtd"  type="numeric" class="form-control" placeholder="Enter qtd">
                                </div>
                                <div class="form-group">
                                    <label for="qtd">cor</label>
                                    <input name="cor"  type="numeric" class="form-control" placeholder="Enter color">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                              
                            </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
