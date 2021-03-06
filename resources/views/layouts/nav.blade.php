<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark {{ $bg }} fixed-top">
    <div class="container">
        <img src="{{ asset('images/icon.svg') }}" height="36">　
        <a class="navbar-brand" href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('share') }}">課程計畫分享</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('excellent') }}">優良學校</a>
                </li>
                <li>
                    <a class="nav-link" href="https://www.youtube.com/watch?v=rGip8sNQVkA&list=PLuE6NN1e30YaOcRygenwV3ixjIJPsKMsv" target="_blank"><i class="fab fa-youtube"></i> 教學影片</a>
                </li>
                @auth
                    @if(auth()->user()->group_id < 3)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('schools.index') }}">[ 學校專區 ]</a>
                        </li>
                    @endif
                    @if(auth()->user()->group_id==3)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('specials.index') }}">[ 特教審核 ]</a>
                        </li>
                    @endif
                    @if(auth()->user()->group_id==4)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('firsts.index') }}">[ 初審作業 ]</a>
                        </li>
                    @endif
                    @if(auth()->user()->group_id==5)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('seconds.index') }}">[ 複審作業 ]</a>
                        </li>
                    @endif
                    @if(auth()->user()->group_id==9)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">[ 後台管理 ]</a>
                        </li>
                    @endif
                @endauth
                @guest
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            登入 <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('glogin') }}">
                                國中小學登入
                            </a>
                            <a class="dropdown-item" href="{{ route('login') }}">
                                系統管理登入
                            </a>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(auth()->user()->group_id !="1" and auth()->user()->group_id !="2")
                            <a class="dropdown-item" href="{{ route('reset_pwd') }}">更改密碼</a>
                            @endif
                            @impersonating
                                <a class="dropdown-item" href="{{ route('sims.impersonate_leave') }}" onclick="return confirm('確定返回原本帳琥？')">結束模擬</a>
                            @endImpersonating
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                登出
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
