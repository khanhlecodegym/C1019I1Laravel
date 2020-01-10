@extends('layouts.master')


@section('content')
    <h1>Page Product</h1>

        <div class="row">
            <table class="table table-dark table-hover">
                <tr>
                    <td>STT</td>
                    <td>Ten Sam Pham</td>
                    <td>Mo Ta</td>
                </tr>
                @foreach ($listProduct as $key => $item)
                    <tr>
                        <td>{{$key}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['des']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>

@endsection

