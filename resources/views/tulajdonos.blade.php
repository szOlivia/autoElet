@extends('layouts.master')
@section('title','Főoldal')
@section('content')
     @include('menu')
        @include('menu')
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="bg-dark p-3 roudnded text-wite mt-3">
                            <h1>Tujaddonos</h1>
                            <table class="table table-light table-sm table-striped table-hover">
                                <tr>
                                    <th>#</th>
                                    <th>Tulajdonos neve</th>
                                    <th>Tulajdonjog kezdete</th>
                                    <th>Tulajdonjog vége</th>
                                </tr>
                               @foreach ($tulajdonosok as $egytulaj)
                                <tr>
                                    <td>{{ $egytulaj->t_id }}</td>
                                    <td>{{ $egytulaj->nev }}</td>
                                    <td>{{ $egytulaj->tulajdonjog_kezdete }}</td>
                                    <td>{{ $egytulaj->tulajdonjog_vege }}</td>
                                </tr>
                                @endforeach 
                            </table>
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
          
        @endsection