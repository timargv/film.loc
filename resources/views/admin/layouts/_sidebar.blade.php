<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
        <a href="{{ route('admin.home') }}">
            <i class="fal fa-tachometer" style="margin-right:5px;"></i> <span>Админ-панель</span>
        </a>
    </li>

    <li class="header">Фильмы & Сериалы</li>
    {{--<li class="{{{ (Request::is('admin/films*', 'admin/genres*', 'admin/persons*', 'admin/carers*', 'admin/years*') ? 'treeview active' : 'treeview') }}}">--}}
      {{--<a href="#">--}}
        {{--<i class="fa fa-film"></i>--}}
        {{--<span>Фильмы / Сериалы</span>--}}
        {{--<span class="pull-right-container">--}}
          {{--<i class="fa fa-angle-left pull-right"></i>--}}
        {{--</span>--}}
      {{--</a>--}}

      <ul class="treeview-menu">

      </ul>
    </li>

    <li class="{{{ (Request::is('admin/films*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('admin.films.index') }}"><i class="fa fa-play"></i> <span>Фильмы</span>
            <span class="pull-right-container">
                  <small class="label pull-right bg-green">10</small>
                </span>
        </a></li>
    <li><a href="#"><i class="fa fa-play"></i> <span>Сериалы</span></a></li>
    <li class="{{{ (Request::is('admin/genres*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('admin.genres.index') }}"><i class="fa fa-align-justify"></i> <span>Жанры</span></a></li>
    <li><a href="#"><i class="far fa-circle text-red" style="margin-right:5px;"></i> <span>Возраст ограничение</span></a></li>
    <li class="{{{ (Request::is('admin/persons*') ? 'treeview active' : 'treeview') }}}">
        <a href="{{ route('admin.persons.index') }}"><i class="fa fa-user"></i> <span>Персоны</span>
            <span class="pull-right-container">
                  <small class="label pull-right bg-green">10</small>
                </span>
        </a></li>
    <li class="{{{ (Request::is('admin/careers*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('admin.careers.index') }}"><i class="fal fa-comment-alt" style="margin-right: 5px"></i> <span>Профессии</span></a></li>

    <li class="{{{ (Request::is('admin/years*') ? 'treeview active' : 'treeview') }}}"><a href="{{ route('admin.years.index') }}"><i class="fal fa-comment-alt" style="margin-right: 5px"></i> <span>Год</span></a></li>
    <li><a href="#"><i class="fal fa-circle" style="margin-right: 5px"></i> <span>Рецензии</span></a></li>

    <li><a href="#"><i class="fal fa-comments-alt" style="margin-right: 5px"></i> <span>Комменты</span></a></li>
    <li><a href="#"><i class="fal fa-comments-alt" style="margin-right: 5px"></i> <span>Отзывы</span></a></li>

</ul>
