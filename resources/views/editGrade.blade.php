@extends('layouts.app')

@section('content')
    <div class="createFormContainer">
        <div class="containerCreate">
            <div class="titleCreateForm">
                <h1>Edit a Grade</h1>
            </div>
            <div class="createFormBox">
                <form class="justify-content-center" action="{{ route('storeGrade') }}" method="post">
                    @csrf
                        <div class="gradeContainerForm">
                            <label id="inputGroup-sizing-default"><h2>User</h2></label>
                            <div class="trimestralContainer">
                                <input type="text" name="user_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->user_id}}">
                            </div>
                        </div>

                        <div class="gradeContainerForm">
                            <label id="inputGroup-sizing-default"><h2>Maths</h2></label>
                            <h3>First Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="maths1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths1}}">
                                <input type="text" name="maths2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths2}}">
                                <input type="text" name="maths3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths3}}">
                            </div>
                            <h3>Second Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="maths4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths4}}">
                                <input type="text" name="maths5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths5}}">
                                <input type="text" name="maths6" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths6}}">
                            </div>
                            <h3>Third Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="maths7" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths7}}">
                                <input type="text" name="maths8" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths8}}">
                                <input type="text" name="maths9" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->maths9}}">
                            </div>
                        </div>

                        <div class="gradeContainerForm">
                            <label id="inputGroup-sizing-default"><h2>History</h2></label>
                            <h3>First Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="history1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history1}}">
                                <input type="text" name="history2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history2}}">
                                <input type="text" name="history3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history3}}">
                            </div>
                            <h3>Second Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="history4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history4}}">
                                <input type="text" name="history5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history5}}">
                                <input type="text" name="history6" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history6}}">
                            </div>
                            <h3>Third Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="history7" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history7}}">
                                <input type="text" name="history8" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history8}}">
                                <input type="text" name="history9" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->history9}}">
                            </div>
                        </div>
                        
                        <div class="gradeContainerForm">
                            <label id="inputGroup-sizing-default"><h2>Geography</h2></label>
                            <h3>First Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="geography1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography1}}">
                                <input type="text" name="geography2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography2}}">
                                <input type="text" name="geography3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography3}}">
                            </div>
                            <h3>Second Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="geography4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography4}}">
                                <input type="text" name="geography5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography5}}">
                                <input type="text" name="geography6" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography6}}">
                            </div>
                            <h3>Third Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="geography7" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography7}}">
                                <input type="text" name="geography8" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography8}}">
                                <input type="text" name="geography9" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->geography9}}">
                            </div>
                        </div>

                        <div class="gradeContainerForm">
                            <label id="inputGroup-sizing-default"><h2>English</h2></label>
                            <h3>First Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="english1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english1}}">
                                <input type="text" name="english2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english2}}">
                                <input type="text" name="english3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english3}}">
                            </div>
                            <h3>Second Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="english4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english4}}">
                                <input type="text" name="english5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english5}}">
                                <input type="text" name="english6" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english6}}">
                            </div>
                            <h3>Third Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="english7" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english7}}">
                                <input type="text" name="english8" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english8}}">
                                <input type="text" name="english9" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->english9}}">
                            </div>
                        </div>

                        <div class="gradeContainerForm">
                            <label id="inputGroup-sizing-default"><h2>Lenguage</h2></label>
                            <h3>First Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="lenguage1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage1}}">
                                <input type="text" name="lenguage2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage2}}">
                                <input type="text" name="lenguage3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage3}}">
                            </div>
                            <h3>Second Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="lenguage4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage4}}">
                                <input type="text" name="lenguage5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage5}}">
                                <input type="text" name="lenguage6" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage6}}">
                            </div>
                            <h3>Third Trimester</h3>
                            <div class="trimestralContainer">
                                <input type="text" name="lenguage7" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage7}}">
                                <input type="text" name="lenguage8" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage8}}">
                                <input type="text" name="lenguage9" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$grade->lenguage9}}">
                            </div>
                        </div>

                        <div class="buttonsCreateForm" style="text-decoration:none">    
                            <div class="buttonCreateBox">
                                <button type="submit" class="buttonCreateForm" style="text-decoration:none" value="Create">Save</button>
                            </div>

                            <div class="buttonCancelBox">
                                <a style="text-decoration:none" href="{{ route('home') }}">Cancel</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection