 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <h3 class="text-center mb-4">Viewing Dorm {{$dorm->id}}     
        @if(Auth::user()->isAdmin() and $dorm->status == "0")
        <a href="verify/{{$dorm->id}}" class="btn btn-primary">Verify Dorm</a>
        @endif

      </h3>
      <hr> <a href="bookmark/{{$dorm->id}}" class="btn btn-primary">Bookmark</a>

    </div>
  </div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            @php 
            $src = "";
            if (!is_null($dorm->photo())) {
              $src = $dorm->photo()->get()->first()->photo;
            } else { 
            $src = "public/img/property-9.jpg"; }
            @endphp


            <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="{{asset($src)}}">
              <div class="carousel-caption">
                <h5 class="m-0">{{$dorm->name}}</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item "> <img class="d-block img-fluid w-100" src="{{asset($src)}}">
              <div class="carousel-caption">
                <h5 class="m-0">{{$dorm->name}}</h5>
                <p></p>
              </div>
            </div>
            <div class="carousel-item"> <img class="d-block img-fluid w-100" src="{{asset($src)}}">
              <div class="carousel-caption">
                <h5 class="m-0">{{$dorm->name}}</h5>
                <p></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
            <h3 class="mb-2">Address</h3>
            {{$dorm->address}}

            <iframe width="100%" height="400" src="https://maps.google.com/maps?q={{$dorm->address}}, Davao City, 8000 Davao del Sur&amp;z=14&amp;output=embed" scrolling="yes" frameborder="0"></iframe>
          </div>
          <div class="col-md-6">
            <h3 class="py-3">Attributes<br></h3>
            @php

            $udar = new \App\UserDormAttributeRating;
            $clean = $udar->getSpecificRatings($dorm->id, 1);
            $safe = $udar->getSpecificRatings($dorm->id, 2);
            $amb = $udar->getSpecificRatings($dorm->id, 3);
            $fac = $udar->getSpecificRatings($dorm->id, 4);
            $acc = $udar->getSpecificRatings($dorm->id, 5);

            @endphp

            <table class="table table-hover table-striped">
              <tr>
                <td>Cleanliness</td>
                <td>{{is_null($clean[0]["avg"])? 1 : $clean[0]["avg"]}}</td>
              </tr>
              <tr>
               <td>Safety</td>
               <td>{{is_null($safe[0]["avg"]) ? 1 : $safe[0]["avg"]}}</td>
             </tr>
             <tr>
               <td>Ambiance</td>
               <td>{{is_null($amb[0]["avg"]) ? 1 : $amb[0]["avg"]}}</td>
             </tr>
             <tr>
               <td>Facilities</td>
               <td>{{is_null($fac[0]["avg"]) ? 1 : $fac[0]["avg"]}}</td>
             </tr>
             <tr>
               <td>Access to Transport</td>
               <td>{{is_null($acc[0]["avg"]) ? 1 : $acc[0]["avg"]}}</td>
             </tr>
           </table>
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
<div class="py-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-6">
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="">Details</h3>
      </div>
    </div>
  </div>
</div>
<div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card text-center">
          <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#tabone">Basic</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#tabtwo">Filters</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" data-target="#tabthree">Landlord</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content mt-2">
              <div class="tab-pane fade show" id="tabone" role="tabpanel">
                <div class="row">
                  <div class="col-md-6">
                    <p>Name</p> 
                    <p>Address</p> 
                    <p>Business Permit</p> 
                    <p>Description</p> 
                    <p>Price</p>
                    <p>Attribute Ratings</p>
                    <p>Curfew</p> 
                    <p>Rooms</p> 
                    <p>Filters</p> 
                    <p>Genders</p> 
                    <p>Photo</p>
                    <p><img src=""></p></div>
                    <div class="col-md-6">
                     <p>{{$dorm->name}}</p>
                     <p>{{$dorm->address}}</p>
                     <p>{{$dorm->business_permit}}</p>
                     <p>{{$dorm->description}}</p>
                     <p>{{$dorm->price}}</p>
                     <p>{{$dorm->name}}</p>
                     <p>{{$dorm->curfew}}</p>
                     <p>{{$dorm->rooms}}</p>
                     <p>{{$dorm->name}}</p>
                     <p>{{$dorm->genders}}</p>
                     <p>Photo</p>
                     <p><img src=""></p>
                   </div>
                 </div>
               </div>
               <div class="tab-pane fade" id="tabtwo" role="tabpanel">

                <ul class="list-group list-group-flush">
                  @php

                  if (!is_null($dorm->dormFilter()->get()->first())) {
                  if($dorm->dormFilter()->get()->first()->count > 0) {
                  foreach($dorm->dormFilter()->get() as $filter) {
                  echo "<li class='list-group-item'><i class='fa fa-cloud text-primary mr-2'></i>$filter->name</li>";
                }
              } 
            } else {  echo "No filters."; } 

            @endphp

          </ul>
        </div>
        <div class="tab-pane fade" id="tabthree" role="tabpanel">
          <h3>
            About the Landlord
          </h3>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <img alt="landlord photo" src="{{asset($dorm->landlord()->first()->photo)}}" class="img-thumbnail" />
              </div>
              <div class="col-md-6">
              <div class="table-responsive">
                
              <table class="table">
                <tr>
                  <td><b>Name</b></td>
                  <td>{{$dorm->getLandlordName()}}</td>
                </tr>
                <tr>
                  <td><b>About</b></td>
                  <td>{{$dorm->landlord()->first()->about}}</td>
                </tr>
              </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>

<div class="pb-4">
  <div class="container">
    <div class="row py-5">
      <div class="col-md-6 mb-5">
       <h3 class="">Reviews<br></h3>

       @php
       $reviews = $dorm->review();


       foreach($reviews as $review) {
       echo $review->review;
       }

       @endphp
       
    <form role="form" method="post">
      <div class="form-group py-2">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="uid" value="{{Auth::user()->id}}">
      <input type="hidden" name="did" value="{{$dorm->id}}">
        <label for="review" name="review">
          Review
        </label>

        <input type="password" class="form-control" id="review" name="review"/>
      </div>

      <button type="submit" class="btn btn-primary">
        Submit
      </button>
    </form>
  </div>

  <div class="col-md-6">
    <h3>Rate Dorm</h3>
    <table class="table table-hover">
      <tr>
        <td> Cleanliness</td>
        <td>  <fieldset class="rating">

          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
        </fieldset></td>
      </tr>
      <tr>
        <td>Safety</td>
        <td> <fieldset class="rating">
          <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
          <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

          <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

          <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

          <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
        </fieldset></td>
      </tr>
      <tr>
        <td>Ambiance</td>
        <td> 
          <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
          </fieldset></td>
        </tr>
        <tr>
          <td>Facilities</td>
          <td> <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
          </fieldset></td>
        </tr>
        <tr>
          <td>Access to Transport</td>
          <td> <fieldset class="rating">
            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="5 stars"></label>
            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="4 stars"></label>

            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="3 stars"></label>

            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="2 stars"></label>

            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="1 star"></label>
          </fieldset></td>
        </tr>
      </table>

    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        
      </div>
    </div>
  </div>

