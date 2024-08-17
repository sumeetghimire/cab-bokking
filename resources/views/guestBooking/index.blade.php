@extends('layouts.app')

@section('content')
@section('style')

<style>

.wrapper{
  min-height:100vh;
  background-color:rgba(0,0,0,.4);
  font-family: 'Open Sans', sans-serif;
  padding-top:40px;
}
.containers{
  max-width:400px;
  margin:0 auto;
  background-color:white;
  text-align:center;
  padding:50px 0;
  box-shadow:0 0 20px rgba(0,0,0,.4);
  border-radius:3px;
}
.social-login{
  display:block;
  width:50%;
  margin: 5px auto;
  text-decoration:none;
  padding:10px 15px;
  color:#fff;
  border-radius:3px;
  margin-bottom:10px;
  transition:all .3s ease-in-out;
}
.social-login:hover{
    box-shadow:0 10px 15px -5px rgba(0,0,0,0.4);
}
a.fb-login{
  background-color:#3B5998;
}
a.google-login{
  background-color:#db4437;
}
form{
  max-width:250px;
  margin:0 auto;
  text-align:left;
}

p.seperator{
  margin:25px;
}
div.group{
  margin-top:15px;
}
label{
  display:block;
  margin-bottom:5px;
  text
}
div.group input{
  width:100%;
  padding:10px 4px;
  outline:none;
}
a.forget-link{
  color:black;
  display:block;
  margin:10px 0;
}

input[type="submit"]{
  padding:15px 35px;
  outline:none;
  border:None;
  background-color:#20c198;
  color:white;
  transition:all .3s ease-in-out;
}
input[type="submit"]:hover{
  cursor:pointer;
  box-shadow:0 10px 15px -5px rgba(0,0,0,0.4);
}
#submit {
    background-color: #FF9800;
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

</style>
@endsection

<div class="wrapper" >
    <div class="containers">
      
      <form action="{{route('guestbooking.store')}}?seatsOpted={{$seatsOpted}}" method='post' autocomplete="off" action="">
        @csrf
        <div class="group">
            <label for="email">Name:</label>
            <input required type="name" id="email" name="name" placeholder="Full Name">
          </div>

          <div class="group">
            <label for="email">Phone Number:</label>
            <input required type="text" id="email" name="phone" placeholder="Phone Number">
          </div>

        <div class="group">
          <label for="email">Email:</label>
          <input required type="email" id="email" name="email" placeholder="Email (You will recieve Ticket here)">
        </div>
      
            <input required type="hidden" value="{{$tripId}}" id="email" name="tripId" placeholder="Trip Id">

        <br><br>
        <button style="margin-top:10px;width:100%" type="submit" id="submit">Continue to seat selection</button>

      </form>
    </div>
  </div>




@endsection