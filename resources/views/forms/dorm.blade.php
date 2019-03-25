<form id="dormForm" class="form-horizontal" enctype="multipart/form-data" method="POST">
  <fieldset>

    <!-- Form Name -->
    <legend>Add a Dorm</legend>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="name">Name</label>  
      <div class="col-md-4">
        <input id="name" name="name" type="text" placeholder="name" class="form-control input-md" required="">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
      </div>
    </div>
    <input id="landlord_id" name="landlord_id" type="text" value="{{Auth::user()->id}}" hidden>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="address">Address</label>  
      <div class="col-md-4">
        <input id="address" name="address" type="text" placeholder="123" class="form-control input-md" required="">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-md-4 control-label" id="label-map">Specifically Mark your Dormitory Location:</label>  
      <div id="map-canvas"></div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="business_permit">Business Permit</label>  
      <div class="col-md-4">
        <input id="business_permit" name="business_permit" type="text" placeholder="Business Permit" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Description</label>  
      <div class="col-md-4">
        <input id="description" name="description" type="text" placeholder="desc" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="price">Price</label>  
      <div class="col-md-4">
        <input id="price" name="price" type="text" placeholder="price" class="form-control input-md" required="">
      </div>
    </div>

    <!-- Text input-->
    <div class="form-group ">
       <label class="col-md-4 control-label" for="price">Attributes</label>  
        <div class="m-auto w-50 col-md-4 text-dark">
          @include('forms.attributes') 
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="curfew">Curfew</label>  
      <div class="col-md-4">
        <input id="curfew" name="curfew" type="text" placeholder="curfew" class="form-control input-md" required="">
        
      </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Rooms</label>
      <div class="col-md-4">
        <select id="selectbasic" name="rooms" class="form-control">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3+">3+</option>
        </select>
      </div>
    </div>

    <!-- Multiple Checkboxes (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="filters">Filters</label>
      <div class="col-md-4">
        <label class="checkbox-inline" for="filters-0">
          <input type="checkbox" name="filters[]" id="filters-0" value="1">
          Roommates
        </label>
        <label class="checkbox-inline" for="filters-1">
          <input type="checkbox" name="filters[]" id="filters-1" value="2">
          Guests Allowed
        </label>
        <label class="checkbox-inline" for="filters-2">
          <input type="checkbox" name="filters[]" id="filters-2" value="3">
          Pets
        </label>
        <label class="checkbox-inline" for="filters-3">
          <input type="checkbox" name="filters[]" id="filters-3" value="4">
          Kitchen
        </label>
        <label class="checkbox-inline" for="filters-4">
          <input type="checkbox" name="filters[]" id="filters-4" value="5">
          Electric Fan
        </label>
        <label class="checkbox-inline" for="filters-5">
          <input type="checkbox" name="filters[]" id="filters-5" value="6">
          Air-con
        </label>
        <label class="checkbox-inline" for="filters-6">
          <input type="checkbox" name="filters[]" id="filters-6" value="7">
          Laundromat
        </label>
        <label class="checkbox-inline" for="filters-7">
          <input type="checkbox" name="filters[]" id="filters-7" value="8">
          Internet
        </label>
        <label class="checkbox-inline" for="filters-8">
          <input type="checkbox" name="filters[]" id="filters-8" value="9">
          TV
        </label>
        <label class="checkbox-inline" for="filters-9">
          <input type="checkbox" name="filters[]" id="filters-9" value="10">
          Closet
        </label>
        <label class="checkbox-inline" for="filters-10">
          <input type="checkbox" name="filters[]" id="filters-10" value="11">
          Parking
        </label>
        <label class="checkbox-inline" for="filters-11">
          <input type="checkbox" name="filters[]" id="filters-11" value="12">
          Elevator
        </label>
        <label class="checkbox-inline" for="filters-12">
          <input type="checkbox" name="filters[]" id="filters-12" value="bathtub">
          Wi-Fi
        </label>
        <label class="checkbox-inline" for="filters-13">
          <input type="checkbox" name="filters[]" id="filters-13" value="14">
          Bathroom
        </label>
      </div>
    </div>

    <!-- Multiple Radios (inline) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="gender">Genders</label>
      <div class="col-md-4"> 
        <label class="radio-inline" for="gender-0">
          <input type="radio" name="gender" id="gender-0" value="male" checked="checked">
          Male
        </label> 
        <label class="radio-inline" for="gender-1">
          <input type="radio" name="gender" id="gender-1" value="female">
          Female
        </label> 
        <label class="radio-inline" for="gender-2">
          <input type="radio" name="gender" id="gender-2" value="mixed">
          Mixed
        </label>
      </div>
    </div>

    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="photo">Photo</label>
      <div class="col-md-4">
        <input id="photo" name="photo" class="input-file" type="file">
        <input type="hidden" class="form-control" name="lat" id="lat">
        <input type="hidden" class="form-control" name="lng" id="lng">
      </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button id="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </fieldset>
</form>