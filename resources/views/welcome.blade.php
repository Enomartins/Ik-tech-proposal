<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- CSS only -->
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}

        <link rel="stylesheet" href="bootstrap.min.css">

        <!-- Styles -->
        <style>
            body{
                margin: 0%;
            }
            .bg-top {
                height: 70px;
                background-image: url('/images/roommate.PNG')
            }

            .top{
                /* margin: 0 10%; */
                z-index: 5;
                background-color: white;
                position: relative;
                top: 30px;
                box-shadow: 2px;
                padding: 1rem;
                /* border-bottom: 1px black solid; */
                border-radius: 5px;
                box-shadow: 0 0 15px 0;
            }

            .top h2{
                margin: 0.6em;
            }

            .search {
                display: flex;
                /* justify-content: space-between; */
            }

            .search select, .search form {
                /* flex: 1; */
                margin: 0 0.5em;
            }

            select{
                flex: 1;
            }
            form{
                display: flex;
                /* justify-content: space-between; */
                flex: 5;
            }  

            form input{
                flex: 1;
                margin: 0 0.5em;
                padding: 0.5em 2em;
            }  
            form .search{
                flex: 4;
                /* border: none; */
            }
            form .orange {
                /* background-color: orange; */
                color: white;
                font-weight: bold;
                border: none;
                border-radius: 5px;
            }   
            .category {
                margin-top: 15%;                
            }  
            .popular {
                background-color: grey;
            } 
            .footer {
                position: fixed;
                bottom: 0vh;
            }
            
        </style>
    </head>
    <body>
        <div class="bg-top">
            <div class="top container">
                <h2>What Vehicle do you want to hire?</h2>

                <div class="search">
                    
                    <form action="/search" method="post">
                        {{csrf_field()}}
                        
                        <select name="category" id="machine-category">
                            <option value="">All Categories</option>
                            @foreach ($categories as $item)
        
                            <option value='{{$item->category}}'>{{$item->category}}</option>
                                
                            @endforeach
                        </select>

                        <input class="search" type="text" name="searchtext" id="" placeholder="Search for Vehicle">
                        <input class="bg-warning orange" type="submit" value="Find Vehicle">
                    </form>
                </div>
            </div>
            
        </div>

        <div class="container">

            <div class="wrap mx-5">


                <div class="category">
                    <h2>Categories</h2>
                </div>
                    
                <div class="row mt-5">
                
                        @foreach ($categories as $item)
        
                            {{-- <option value='{{$item->category}}'>{{$item->category}}</option> --}}
    
                            <div class="col-sm-6 col-md-4 col-lg-3 my-3">
                                <a href="/search/{{$item->category}}">

                                    <div class="card" style="">
                                        <img style="object-fit: cover; height:10rem" class="p-5 card-img-top w-100" src="/images/categories/{{$item->category}}.PNG" alt="" title="">
        
                                        <div class="card-body p-0 d-flex">
                                            <h6 class="text-warning font-weight-bold text-uppercase card-title mx-auto my-3">{{$item->category}}</h6>
                                            
                                        </div>
        
                                    </div>
                                
                                </a>
                            </div>
                                
                        @endforeach
                </div>

                

            </div>
        </div>

        <div class="popular my-4 py-5">

            <div class="container">

                <div class="head">
                    <h2 class="py-3 text-white">Popular</h2>
                </div>

                <div class="row mb-5">

                    @foreach ($popular as $item)

                    <div class="col-sm-6 col-md-3 mt-2">
                        <div class="card" style="">
                            <img style="object-fit: cover; height:10rem" class="card-img-top w-100" src="/images/roommate.PNG" alt="" title="">

                            <div class="card-body p-0 d-flex">
                                <h6 class="text-dark font-weight-bold text-uppercase card-title mx-auto my-3">{{$item->name}}</h6>
                                
                            </div>

                        </div>
                    </div>
                        
                    @endforeach

                    

                </div>

            </div>
        </div>

        <div class="footer d-flex bg-dark w-100">

            <p class="font-weight-bold pt-3 mx-auto text-warning">copyright&copy; 2021 - IK tech</p>

        </div>

        <!-- JavaScript Bundle with Popper -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}
        {{-- <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
    </body>
</html>
