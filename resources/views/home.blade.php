@extends('layouts.app')

@section('content')
    @guest

        <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card loginBox login">
                <div class="card-header loginBoxHeader">
                    <img class="loginBoxLogo" src="../img/loginFronted/logo_nevermore_academy.png" alt="Nevermore Academy Logo">
                </div>

                    <div class="card-body loginBoxBody">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Outcast Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endguest

    @if(Auth::check())
        @if(Auth::check() && Auth::user()->isTeacher)
        <a href="{{ route('register') }}" class="textCreateStudentButton btn btn-primary">Register a new student</a>
        <button class="createButton">
            <a href="{{ route('createGrade') }}" style="text-decoration:none">
                <div class="textCreateButton"> NEW GRADE </div>
            </a>
        </button>
        @endif
        @foreach ($grades as $grade)

        <div class="gradeContainerShow">
                        <div class="gradeStudent">
                            <div class="studentPortrait"><img src="../{{ $grade->user->img}}" alt="portrait of {{ $grade->user->name}} {{ $grade->user->surname}}"></div>
                            <p>{{ $grade->user_id }}.{{ $grade->user->name}} {{ $grade->user->surname}}</p>
                        </div>
                        <h2>Maths</h2>
                        <div class="gradeInfoBoxShow">

                            <div class="gradeTrimestralShow">
                            <h3>First Trimester</h3>
                                <ul>
                                    <li>{{ $grade->maths1 }}</li>
                                    <li>{{ $grade->maths2 }}</li>
                                    <li>{{ $grade->maths3 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Second Trimester</h3>    
                                <ul>
                                    <li>{{ $grade->maths4 }}</li>
                                    <li>{{ $grade->maths5 }}</li>
                                    <li>{{ $grade->maths6 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Third Trimester</h3>
                                <ul>
                                    <li>{{ $grade->maths7 }}</li>
                                    <li>{{ $grade->maths8 }}</li>
                                    <li>{{ $grade->maths9 }}</li>
                                </ul>
                            </div>
                        </div>
                        <h2>History</h2>
                        <div class="gradeInfoBoxShow">
                            
                            <div class="gradeTrimestralShow">
                            <h3>First Trimester</h3>
                                <ul>
                                    <li>{{ $grade->history1 }}</li>
                                    <li>{{ $grade->history2 }}</li>
                                    <li>{{ $grade->history3 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Second Trimester</h3>    
                                <ul>
                                    <li>{{ $grade->history4 }}</li>
                                    <li>{{ $grade->history5 }}</li>
                                    <li>{{ $grade->history6 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Third Trimester</h3>
                                <ul>
                                    <li>{{ $grade->history7 }}</li>
                                    <li>{{ $grade->history8 }}</li>
                                    <li>{{ $grade->history9 }}</li>
                                </ul>
                            </div>
                        </div>

                        <h2>Geography</h2>
                        <div class="gradeInfoBoxShow">
                            
                            <div class="gradeTrimestralShow">
                            <h3>First Trimester</h3>
                                <ul>
                                    <li>{{ $grade->geography1 }}</li>
                                    <li>{{ $grade->geography2 }}</li>
                                    <li>{{ $grade->geography3 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Second Trimester</h3>    
                                <ul>
                                    <li>{{ $grade->geography4 }}</li>
                                    <li>{{ $grade->geography5 }}</li>
                                    <li>{{ $grade->geography6 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Third Trimester</h3>
                                <ul>
                                    <li>{{ $grade->geography7 }}</li>
                                    <li>{{ $grade->geography8 }}</li>
                                    <li>{{ $grade->geography9 }}</li>
                                </ul>
                            </div>
                        </div>

                        <h2>English</h2>
                        <div class="gradeInfoBoxShow">
                            
                            <div class="gradeTrimestralShow">
                            <h3>First Trimester</h3>
                                <ul>
                                    <li>{{ $grade->english1 }}</li>
                                    <li>{{ $grade->english2 }}</li>
                                    <li>{{ $grade->english3 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Second Trimester</h3>    
                                <ul>
                                    <li>{{ $grade->english4 }}</li>
                                    <li>{{ $grade->english5 }}</li>
                                    <li>{{ $grade->english6 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Third Trimester</h3>
                                <ul>
                                    <li>{{ $grade->english7 }}</li>
                                    <li>{{ $grade->english8 }}</li>
                                    <li>{{ $grade->english9 }}</li>
                                </ul>
                            </div>
                        </div>

                        <h2>Literature</h2>
                        <div class="gradeInfoBoxShow">
                            
                            <div class="gradeTrimestralShow">
                            <h3>First Trimester</h3>
                                <ul>
                                    <li>{{ $grade->literature1 }}</li>
                                    <li>{{ $grade->literature2 }}</li>
                                    <li>{{ $grade->literature3 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Second Trimester</h3>    
                                <ul>
                                    <li>{{ $grade->literature4 }}</li>
                                    <li>{{ $grade->literature5 }}</li>
                                    <li>{{ $grade->literature6 }}</li>
                                </ul>
                            </div>
                            
                            <div class="gradeTrimestralShow">
                            <h3>Third Trimester</h3>
                                <ul>
                                    <li>{{ $grade->literature7 }}</li>
                                    <li>{{ $grade->literature8 }}</li>
                                    <li>{{ $grade->literature9 }}</li>
                                </ul>
                            </div>
                        </div>

                        <form action="{{ route('deleteGrade', ['id'=> $grade->id]) }}" method="post">
                            @method('delete')
                            @csrf 
                            @if(Auth::check() && Auth::user()->isTeacher)
                            <button type="submit" class="bt-adm m-1 d-flex justify-content-center align-items-center" onclick="return confirm('Are you sure you want to delete this Grade? {{ $grade->name }} - ID {{ $grade->id }}')">Remove </button>
                            @endif
                            @if(Auth::check() && Auth::user()->isTeacher)
                            <a href="{{ route('editGrade', ['id' => $grade->id]) }}">Edit</a>
                            @endif
                            <a href="{{ route('showGrade', ['id' => $grade->id]) }}">Show</a>
                        </form>
                    </div>
        @endforeach
    @endif


@endsection
