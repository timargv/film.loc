@extends('admin.layouts.app')

@section('title', 'Фильмы')

@section('content')

    <div class="box">
        <div class="box-header">

            <div class="pull-left">
                <a class="btn btn-primary btn-sm" href="{{ route('admin.films.create') }}"><i class="far fa-plus"></i></a>
                <a class="btn btn-default btn-sm" href=""><i class="far fa-download"></i></a>
            </div>

            <div class="pull-right">

            </div>
            <div class="clearfix"></div>
        </div>
        <div class=" box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>

                </thead>
                <tbody>
                <tr>
                    <th style="width: 50px;padding-left: 15px;">ID</th>
                    <th>Название</th>
                    <th>Жанры</th>

                    <th></th>
                </tr>
                @foreach($films as $film)
                    <tr>
                        <td style="padding-left: 15px;">{{ $film->id }}</td>
                        <td><a href="{{ route('admin.films.show', $film)}}">{{ $film->title }}</a></td>
                        <td>
                            @foreach($film->genres as $genre)
                                <a href="{{ route('admin.genres.show', $genre) }}"><span class="label label-info">{{ $genre->name }}</span></a>
                            @endforeach
                        </td>
                        <td width="150px">
                            <div class="form-inline">
                                <form action="{{ route('admin.films.destroy', $film) }}" class="pull-right" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Удалить?')" class="btn btn-link btn-xs"><i class="far fa-trash-alt"></i></button>
                                </form>
                                <a class="pull-right d-inline" href="{{ route('admin.films.edit', $film->id) }}" style="margin-right: 5px ">
                                    <i class="far fa-edit"></i>
                                </a>

                            </div>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="box-footer clearfix">
            {{$films->links()}}
        </div>
    </div>


@endsection