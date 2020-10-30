@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Item</div>
                <a  class="btn btn-sm btn-success" href="{{ route('post') }}" >
                   Novo
                </a>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Qtd</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($posts as $post)
                            <tr>
                            <th >{{ $no}}</th>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->type }}</td>
                            <td>{{ $post->qtd }}</td>
                            <td>
                                <a href="" class="btn btb-sm btn-primary">Edit</a>
                                <a href="" class="btn btb-sm btn-danger">Delete</a>
                            </td>
                            </tr>
                            @endforeach
                            <?php $no++; ?>

                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->



@endsection
