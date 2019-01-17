@extends('admin.layouts.app')


@section('content')

    <!-- Main content -->
    <section class="content">


        <form action="{{ route('admin.films.store') }}"  method="POST">
            @csrf
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                        <div class="box-body box-profile">
                            <div class="thumbnail" style="border: 0; padding: 0; overflow: hidden">
                                <label for="exampleInputFile">Постер</label>
                                <input type="file" id="exampleInputFile" name="image">
                            </div>

                            <div class="btn-group " role="toolbar" style="width: 100%">
                                <button  type="submit" name="action" value="save" class="btn btn-default btn-block"><i class="fas fa-save mr-2"></i><span>Сохранить картинку</span></button>
                            </div>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Актеры</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <select name="persons[]" class="form-control select2 w-100" multiple="multiple" data-placeholder="Выберите Актера">
                                    @foreach ($persons as $person)
                                        <option value="{{ $person->id }}">
                                            {{ $person->name }}
                                        </option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                    <!-- About Me Box -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Год</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <select name="years[]" class="form-control select2 w-100" multiple="multiple" data-placeholder="Выберите Год">
                                    @foreach ($years as $years)
                                        <option value="{{ $years->id }}">
                                            {{ $years->name }}
                                        </option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <div class="col-md-9">
                    <div class="box box-primary">

                        <div class="box-header with-border">
                            <div class="pull-right">
                                <button  class="btn btn-primary " data-toggle="tooltip" data-placement="top" title="Сохранить и закрыть"><i class="fas fa-save"></i></button>
                                <button  type="submit" name="action" value="saveAdd" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Сохранить и добавить"><i class="fas fa-plus"></i></button>
                                <a href="{{ route('admin.films.index') }}"  class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Закрыть"><i class="fas fa-times"></i></a>
                            </div>
                        </div>

                        <div class="box-header">

                            <div class="form-inline row mb-4">
                                <div class="form-group col-xs-6">
                                    <label>Название Фильма или Сериала</label>
                                    <div class="input-group w-100">
                                        <span class="input-group-addon" style="width: 20px;"><i class="fa fa-user"></i></span>
                                        <input name="title" type="text" class="form-control w-100" placeholder="Название Фильма или Сериала" value="{{ old('title') }}"></div>
                                </div>

                                <div class="form-group col-xs-3">
                                    <label>ID на КиноПоиске</label>
                                    <div class="input-group w-100">
                                    <input name="kp_id" type="text" class="form-control" placeholder="ID на КиноПоиске" value="{{ old('kp_id') }}"></div>
                                </div>

                                <div class="form-group col-xs-3">
                                    <label>Тип (Фильм, Сериал)</label>
                                    <div class="input-group w-100">
                                        <select name="type" class="form-control select2 w-100" data-placeholder="Тип (Фильм, Сериал)">
                                            <option value="film">Фильм</option>
                                            <option value="serial">Сериал</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Оригинальное Назание Фильма</label>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="original" type="text" class="form-control" placeholder="Оригинальное Назание Фильма" value="{{ old('original') }}"></div>
                            </div>

                        </div>



                        <div class=" box-body ">

                            <div class="form-group">
                                <label>Слоган</label>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="tagline" type="text" class="form-control" placeholder="Слоган" value="{{ old('tagline') }}"></div>
                            </div>

                            <div class="form-group">

                                <label>Бюджет</label>
                                <div class="input-group ">
                                    <input name="budget" type="text" class="form-control" placeholder="Бюджет" value="{{ old('budget') }}"></div>
                            </div>

                            <div class="form-group">
                                <label>Мировая Премьера </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right"   value="{{ old('premiere') }}" name="premiere">
                                </div>

                            </div>

                            <div class="form-group">
                                <label>Возраст</label>
                                <div class="input-group ">
                                    <input name="age_limit" type="text" class="form-control" placeholder="Возрастное ограничение" value="{{ old('age_limit') }}"></div>
                            </div>

                            <div class="form-group">
                                <label>Рейтинг</label>
                                <div class="input-group ">
                                    <input name="rating" type="text" class="form-control" placeholder="Рейтинг Фильма" value="{{ old('rating') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Рейтинг KinoPoisk</label>
                                <div class="input-group ">
                                    <input name="kp_rating" type="text" class="form-control" placeholder="Рейтинг KinoPoisk" value="{{ old('kp_rating') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Рейтинг ImDb</label>
                                <div class="input-group ">
                                    <input name="imdb_rating" type="text" class="form-control" placeholder="Рейтинг ImDb" value="{{ old('imdb_rating') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Время длительности фильма</label>
                                <div class="input-group ">
                                    <input name="runtime" type="text" class="form-control" placeholder="Время длительности фильма" value="{{ old('runtime') }}"></div>
                            </div>

                            <div class="form-group">
                                <label>Краткое описание</label>
                                <div class="input-group ">
                                    <textarea name="sh_description" rows="3" cols="80">{!! old('sh_description') !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Полное описание</label>
                                <div class="input-group ">
                                    <textarea name="description" rows="5" cols="80">{!! old('description') !!}</textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Трейлер</label>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="trailer_youtube" type="text" class="form-control" placeholder="Ссылка на видое YouTube" value="{{ old('trailer_youtube') }}"></div>
                            </div>
                            <div class="form-group">

                                <label>Фильм</label>
                                <div class="input-group ">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input name="film_video" type="text" class="form-control" placeholder="Ссылка на видое" value="{{ old('film_video') }}"></div>
                            </div>



                        </div>
                        {{--<div class="box-footer clearfix">--}}
                        {{--<a href="{{ URL::previous() }}"  class="btn btn-default" data-dismiss="modal">Закрыть</a>--}}
                        {{--<button  class="btn btn-primary">Сохранить</button>--}}
                        {{--<button  type="submit" name="action" value="saveAdd" class="btn btn-success ">Сохранить и добавить</button>--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
        </form>

    </section>
    <!-- /.content -->

@endsection