@php 
  if(basename($_SERVER['REQUEST_URI']) != 'admin') {
  $dorms = \App\Dorm::all()->where('landlord_id', Auth::user()->id);
} else {

$dorms = \App\Dorm::all()->where('status', 0);
}

@endphp

<center>

@if($dorms->count() > 0)
<!--Table-->
<div class="table-responsive">
  <table class="table table-striped table-hover">

  <!--Table head-->


  <thead>
    <tr>
      <th>ID</th>
      <th>Landlord</th>
      <th>Status</th>
      <th>Name</th>
      <th>Address</th>
      <th>Business Permit</th>
      <th>Description</th>
      <th>Price</th>
      <th>Filters</th>
      <th>Photo</th>
      <th>Created At</th>
      <th>Updated At</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
  <tbody>

   <tr>
    <?php
    foreach ($dorms as $dorm) {
      $filters = "";
      foreach ($dorm->dormFilter()->get() as $filter) {
        $filters .= $filter->name . ", " ;
      }
      $stat = $dorm->status == 1 ? "Verified" : $dorm->status == 0 ? "Unverified" : "Occupied";
      echo "
      <td><a href='". $dorm->id . "'>" . $dorm->id . "</a></td>
      <td>" . $dorm->first()->landlord->first_name . $dorm->first()->landlord->last_name  . "</td>
      <td>" .  $stat . "</td>
      <td>" . $dorm->name . "</td>
      <td>" . $dorm->address . "</td>
      <td>" . $dorm->business_permit . "</td>
      <td>" . $dorm->description . "</td>
      <td>" . $dorm->price . "</td>
      <td>" . $filters.  "</td>
      <td><img src='" . $dorm->photo . "'></td>
      <td>" . $dorm->created_at  . "</td>
      <td>" . $dorm->updated_at  . "</td>
      </tr>
      ";
    }
    ?>


  </tbody>
  <!--Table body-->
</table>
</div>

@else
No dorms to show.
@endif
<!--Table-->
</center>