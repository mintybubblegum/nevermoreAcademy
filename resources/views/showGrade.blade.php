@extends('layouts.app')

@section('content')

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
                    </div>

    <div class="buttonCancelBox">
        <a style="text-decoration:none" href="{{ route('home') }}">Cancel</a>
    </div>

@endsection