<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--  Enable Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>
</head>
<body style="overflow-x: hidden;">
    @section('title')
        THIS WEEK'S MENU!
    @endsection

    @extends('Users.Partner.layouts.app')
    
    @section('content')
    <div style="min-height: 60vh;">
        <div class="container" style="margin-top: 120px;">
            <div class="row p-3 mt-3 mb-1">
                <div class="col-12 text-center">
                    <h3 style="font-weight: var(--weight-700); font-size: var(--h2-font-size);"> 
                        <span style="color: var(--primary-color);"> MEALS </span> 
                        FOR THIS <span style="color: var(--primary-color);"> WEEK! </span> 
                    </h3>
                    <hr>
                </div>
            </div>
            <!-- Shortcut for ADD MEAL BUTTON. Only can be accessed by PARTNERS. -->
            <div class="row justify-content-end">
                <div class="col-lg-3 text-end mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: var(--accent-color); color: #474747;">
                        <b>Add a Meal Now!</b>
                    </button>
                </div>
            </div>

            <!-- MENU -->
            <div class="row" style="gap: 40px; ">
                @foreach ($menuData as $menu)
                    <div class="card mb-2 mt-2" style="width: 335px; background-color: var(--primary-color); color: white; border: 2px #344d3b solid; border-radius: 40px;">
                        <img class="card-img-top mt-2" src="{{ asset('uploads/meal/' . $menu->menu_image) }}" style="width: 100%; height: 300px; border-radius: 40px; padding-bottom: 10px;">
                        <hr style="color: white;">
                        <div class="card-body">
                            <h4 class="card-title">{{ $menu->menu_title }}</h4>
                            <div class="card-text d-flex justify-content-between">
                                <p> <i class="fas fa-user" style="color: #e4e4e4;"></i>{{ $menu->menu_description }}</p>
                                <a href="{{ route('partner#viewMenu', $menu->id) }}" class="btn btn-outline-light">View</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- MODAL -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" role="dialog" style="margin-top: 82px">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: var(--accent-color); color: rgb(31, 31, 31);">
                        <div class="modal-header align-items-center justify-content-center">
                            <h5 class="modal-title text-center" id="exampleModalLabel" style="font-size: var(--h3-font-size);font-weight: 900"><b>ADD MEAL</b></h5>
                        </div>
                        <form action="{{ route('partner#saveMenu') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <!-- FORM -->
                                <div class="was-validated">
                                    <div class="mb-3 mt-3">
                                        <label for="name" class="d-flex form-label" style="font-weight: 900;">Name:</label>
                                        <input type="text" class="form-control" placeholder="Enter meal name" name="menu_title" required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="description" class="d-flex form-label" style="font-weight: 900;">Description:</label>
                                        <input type="text" class="form-control" placeholder="Enter description" name="menu_description" required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                            
                                    {{-- <div class="mb-3">
                                        <label for="ingredients" class="d-flex form-label">Ingredients:</label>
                                        <input type="text" class="form-control" placeholder="List down the ingredients" name="ingredients" required="true" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div> --}}
    
                                    <div class="mb-3">
                                        <label class="d-flex form-label" style="font-weight: 900;">Upload Photo:</label> 
                                        <input type="file" class="form-control" name="menu_image" required="true" style="background-color: white; padding-left: 5px;" />
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Please fill out this field.</div>
                                    </div>
                                    <div>
                                        <input type="hidden" class="form-control" placeholder="Put your partner name here" name="partner" value="{{ $partnerData->id }}" required>
                                    </div>
    
                                    {{-- <div class="holder" style="height: 300px; width: 300px; margin: auto;">
                                        <img src="https://store-images.s-microsoft.com/image/apps.38456.9007199267003607.4d66cde1-46fd-42b7-93c7-e05d782f5e5d.cfdf91f5-dc2a-4178-96fa-d2c156ae62cd" alt="image preview" style="width: inherit;" />
                                    </div> --}}
                                </div>
                            </div>
                            <div class="d-flex justify-content-center pb-2">
                                <button type="submit" value="Create" class="btn btn-outline-dark" style="font-weight: 900;">Add</button>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="font-weight: 800;">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
        
    @endsection
</body>
</html>
