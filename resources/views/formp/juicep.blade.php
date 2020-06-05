@extends('layouts.app')
 @section('content')
 <br><br><br><br><br><br><br><br><br><br>
 <div class="section-a">
     <div class="row">
         <div class="col-md-12">
             @if(count($data)>=1)
           
              <table class="table">
                  <thead calass="thead">
                      <tr>
                          <th scope="col">Name</th>
                          <th scope="col">Location</th>
                          <th scope="col">Age</th>
                          <th scope="col">Sex</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $offender)
                      <tr>
                        
                          <th scope="row"></th>
                              <td>{{$offender->fullname}}</td>
                              <td>{{$offender->location}}</td>
                              <td>{{$offender->age}}</td>
                              <td>{{$offender->sex}}</td>
                      </tr>
                        @endforeach
                  </tbody>  
              </table>            
             @else
             <p>NO CRIMINAL</p>
             @endif
            </div>
     </div>
 </div> 
 <p><a href='/formp' class="btn btn-danger">Logout</a></p>          
 @endsection('content')
      
