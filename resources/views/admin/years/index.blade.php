@extends('admin.layouts.app')

@section('title', 'Года')

@section('content')

    <div class="box">
            <div class="box-header clearfix">
                <div class="pull-left">
                    <a class="btn btn-primary btn-sm" href="{{ route('admin.years.create') }}"><i class="fas fa-plus"></i></a>
                </div>
            </div>

            <div class=" box-body table-responsive no-padding mailbox-messages">
                <table class="table table-hover">
                    <thead>

                    </thead>
                    <tbody>
                    <tr>
                        <th style="width: 50px;padding-left: 15px;">ID</th>
                        <th>Год</th>
                        <th class="border-right"></th>
                        <th style="width: 50px;padding-left: 15px;">ID</th>
                        <th>Год</th>
                        <th class="border-right"></th>
                        <th style="width: 50px;padding-left: 15px;">ID</th>
                        <th>Год</th>
                        <th class="border-right"></th>
                        <th style="width: 50px;padding-left: 15px;">ID</th>
                        <th>Год</th>
                        <th class="border-right"></th>
                        <th style="width: 50px;padding-left: 15px;">ID</th>
                        <th>Год</th>
                        <th class="border-right"></th>
                    </tr>
                    @foreach ($years->chunk(5) as $chunk)
                        <tr>
                            @foreach($chunk as $year)

                            <td style="padding-left: 15px;">{{ $year->id }}</td>
                            <td><a href="{{ route('admin.years.show', $year)}}">{{ $year->name }}</a></td>

                            <td width="150px" class="border-right">
                                <div class="clearfix pr-3">

                                    <form action="{{ route('admin.years.destroy', $year) }}" class="pull-right" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Удалить?')" class="btn btn-link btn-xs"><i class="far fa-trash-alt text-muted"></i></button>
                                    </form>
                                    <a class="pull-right mr-3 text-muted" href="{{ route('admin.years.edit', $year) }}"><i class="far fa-edit"></i></a>

                                </div>
                            </td>
                            @endforeach
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

            <div class="box-footer clearfix">
                {{$years->links()}}
            </div>
        </div>

@endsection