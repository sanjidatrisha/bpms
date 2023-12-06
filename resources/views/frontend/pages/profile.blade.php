@extends('frontend.master')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>


<!-- <div class="container"> -->
        <div class="row">
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="image-container">
                                    <img src="data:image/jpeg;base64,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" id="imgProfile" style="width: 150px; height: 150px" class="img-thumbnail" />
                                    <div class="middle">
                                        
                                        <a href= "{{route('profile.edit',auth()->user()->id)}}"type="button" class="btn btn-success">Edit Profile</a>
                                        <input type="file" style="display: none;" id="profilePicture" name="file" />
                                    </div>
                                </div>
                                <div class="userData ml-3">
                                    <h2 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">{{auth()->user()->name}}</a></h2>
                                    
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                   
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                                        
                                    
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Full Name</label>
                                                
                                            </div>
                                            <div class="col-md-8 col-6">{{auth()->user()->name}}
                                            
                                            </div>
                                        </div>
                                        <hr />

                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Role</label>
                                            </div>
                                            <div class="col-md-8 col-6">{{auth()->user()->role}}
                                            </div>
                                        </div>
                                        <hr />
                                        
                                        
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">{{auth()->user()->email}}
                                                
                                            </div>
                                        </div>
                                        <hr />
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Password</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                            {{auth()->user()->password}}
                                            </div>
                                        </div>
                                        <hr/> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection