<!-- Position it -->
<div style="position: absolute; top: 60px; right: 30px; z-index: 9999">


    <!-- Position it -->
    @if (session('status'))
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000" style="min-width: 300px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#38c172" width="100%" height="100%"></rect></svg>

                <strong class="mr-auto">Ошибка</strong>
                {{--<small class="text-muted">just now</small>--}}
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('status') }}
            </div>
        </div>
    @endif

    @if (session('success'))
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000" style="min-width: 300px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#38c172" width="100%" height="100%"></rect></svg>

                <strong class="mr-auto">Ошибка</strong>
                {{--<small class="text-muted">just now</small>--}}
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
    @endif

    @if (session('error'))
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000" style="min-width: 300px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#e3342f" width="100%" height="100%"></rect></svg>
                <strong class="mr-auto">Ошибка</strong>
                {{--<small class="text-muted">just now</small>--}}
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('error') }}
            </div>
        </div>
    @endif

    @if (session('info'))
        <div class="toast fade show" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000" style="min-width: 300px;">
            <div class="toast-header">
                <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#6cb2eb" width="100%" height="100%"></rect></svg>

                <strong class="mr-auto">Ошибка</strong>
                {{--<small class="text-muted">just now</small>--}}
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('info') }}
            </div>
        </div>
    @endif
</div>
