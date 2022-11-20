@extends('layouts.master')
@section('title','Főoldal')
@section('content')
        @include('menu')
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <div class="bg-dark p-3 roudnded text-wite mt-3">
                            <h1>Autok</h1>
                            <table class="table table-light table-sm table-striped table-hover">
                                <tr>
                                    <th>#</th>
                                  <!--  <th>Rendszám</th> -->
                                    <th>Típus</th>
                                    <th>Szín</th>
                                </tr>
                                @foreach ($autok as $item)
                                <tr>
                                    <td>{{ $item->a_id}}</td>
                                    <td>{{ $item->tipusa}}</td>
                                    <td>{{ $item->szine}}</td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>    
                </div>
            </div>    
        </div>
          
        @endsection