
@extends('structure.layout')
@section('title')
    Home
@endsection

@section('content')

<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    Home
{{--
    {{Auth::user()}}
    <br>
   user Type    {{Auth::user()->isApplicant()}}

   <br>
   user Type    {{Auth::user()->isVendor()}}

   <br>
   user Type    {{Auth::user()->isReferent()}}

   <br>
   user Type    {{Auth::user()->isStaff()}} --}}

</div>
@endsection
