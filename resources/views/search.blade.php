@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <div class="row">

      
        
        <div class="col-md-4 col-lg-3">

          <h6>Home > Search Results > {{$param?? ''}}</h6>

           <div class="wrap card my-3">
            <form class="form p-4" method="post" action="/search">
              {{csrf_field()}}
              {{-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label> --}}
              <select name="category" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                <option selected>Categories...</option>
                
                @foreach ($categories as $item)
        
                <option class="text-capitalize" value='{{$item->category}}'>{{$item->category}}</option>
                    
                @endforeach

              </select>
            
                          
              <button type="submit" class="btn btn-warning my-1">Search</button>
            </form>

           </div>


           <div class="wrap card p-4">

            <h6>Search by brand</h6>
              {{-- <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Preference</label> --}}
              @foreach ($brand as $item)
                  
                <a type="button" href="{{$item->brand}}" class="btn btn-warning btn-sm btn-block">{{$item->brand}}</a>
            

              @endforeach
              
                                     
           </div>

           <div class="wrap card p-4">
              <h6>Price ($)</h6>

           </div>

           <div class="wrap card p-4">
              <h6>DELIVERY</h6>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Self Pickup
                </label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Cash on Delivery
                </label>
              </div>
           </div>
              
        </div>
        <div class="col-md-8 col-lg-9">

          <h3>
            {{ count($machines) ?? 'No' }} Vehicles found</h3>

          <div class="row mb-5">

            @foreach ($machines as $item)

            <div class="col-sm-6 col-md-3 mt-2">
                <div class="card" style="">
                    <img style="object-fit: cover; height:10rem" class="card-img-top w-100" src="/images/roommate.PNG" alt="" title="">

                    <div class="card-body p-0 d-flex">
                        <h6 class="text-info font-weight-bold text-uppercase card-title mx-auto my-3">{{$item->name}}</h6>
                        
                    </div>

                </div>
            </div>
                
            @endforeach

          </div>
        
        </div>
    </div>
</div>
@endsection

