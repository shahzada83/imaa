 @extends('user.dashboard.layout')

 @section('main_heading','Grading Form')

 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-12 alert alert-success">
             <h5>Please Note: </h5>
             <p>Step 1: Fill up the form carefully.</p>
             <p>Step 2: Upload your Photo [Image Dimension: width: 2.5 CM, Height: 3 CM], [Max Size: 100 KB].</p>
             <p>Step 3: Make UPI Payment Online through GooglePay, PhonePay, PayTM etc.</p>
             <p>Step 4: Upload Screen Shot of Payment/ Enter UPI Transaction ID.</p>
             <p>Step 5: Payment receipt will be uploaded within 72 Hours after Bank Confirmation.</p>
             <p>NOTE: Keep the screen shot of payment and visit centre, if receipt not received within 72 Hours (3 Days).</p>
         </div>

     </div>

     <div class="row">
         <div class="col-md-12">
             To,</br>
             President/ Vice-President</br>
             INTERNATIONAL MARTIAL ARTS ACADEMY</br>
             Karate - Do Fedration of India</br>
         </div>

     </div>
     <div class="row">
         <div class="col-md-12">
             <p class="text-right"><b class="badge badge-danger">IMAA Registration No. : {{-- //Pull from DB the last record +1  --}}</b></p>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12">
             <p class="text-justify"><b class="">I wish to enroll for Grading in your training centre and submit below my personal perticulars.</b></p>
         </div>
     </div>
     <!-- Form beging here -->
     <form>
    @csrf
         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">IMAA Registration No. </label>
                     <input type="text" class="form-control form-control-sm" id="inputName" name="name">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">Roll No. </label>
                     <input type="text" class="form-control form-control-sm" id="inputName" name="name">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">Batch</label>
                     <input type="text" class="form-control form-control-sm" id="inputName" name="name">

                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">1. Name</label>
                     <input type="text" class="form-control form-control-sm" id="inputName" name="name">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">2. Date of Birth</label>
                     <input type="date" id="start" class="form-control form-control-sm" id="inputName" name="trip-start" min="2018-01-01" max="1980-12-31" name="dob">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">3. Gender</label>
                     <select class="form-control form-control-sm" id="idGender" name="gender">
                         <option value="0"> Select Gender</option>
                         <option value="Male"> Male </option>
                         <option value="Female"> Female </option>
                     </select>

                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">4.0. Address</label>
                     <input type="text" class="form-control form-control-sm" id="inputName" name="name">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">4.1. Pin-code</label>
                     <input type="text" name="pin" id="pincode" class="form-control input-sm" placeholder="Pin Code"  maxlength="6"  value="">
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">4.2. Post Office</label>
                     <select class="form-control form-control-sm" id="idGender" name="gender">
                         <option value="0"> Select Gender</option>
                         <option value="Male"> Male </option>
                         <option value="Female"> Female </option>
                     </select>

                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">4.3. City</label>
                     <select class="form-control form-control-sm" id="idGender" name="gender">
                         <option value="0"> Select Gender</option>
                         <option value="Male"> Male </option>
                         <option value="Female"> Female </option>
                     </select>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">4.4. District</label>
                     <select class="form-control form-control-sm" id="idGender" name="gender">
                         <option value="0"> Select Gender</option>
                         <option value="Male"> Male </option>
                         <option value="Female"> Female </option>
                     </select>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">4.5. State</label>
                     <select class="form-control form-control-sm" id="state" name="state">
                         <option value="0"> Select Gender</option>
                         <option value="Male"> Male </option>
                         <option value="Female"> Female </option>
                     </select>

                 </div>
             </div>
         </div>

         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">5.0. Blood Group</label>
                     <select class="form-control form-control-sm" id="idGender" name="gender">
                         <option value="0"> Select Blood Group</option>
                         <option value="Male"> O+ </option>
                         <option value="Female"> O- </option>
                         <option value="Male"> A+ </option>
                         <option value="Female"> A- </option>
                         <option value="Male"> B+ </option>
                         <option value="Female"> B- </option>
                         <option value="Male"> AB+ </option>
                         <option value="Female"> AB- </option>
                     </select>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">5.1. Height</label>
                     <div class="row">
                         <div class="col-md-6">
                             <select class="form-control form-control-sm" id="idGender" name="gender">
                                 <option value="0"> Feet</option>
                                 @for($feet=2; $feet<=7; $feet++) <option value="Male"> {{ $feet." '" }} </option>
                                     @endfor
                             </select>
                         </div>
                         <div class="col-md-6">
                             <select class="form-control form-control-sm" id="idGender" name="gender">
                                 <option value="0"> Inch</option>
                                 @for($inch=1; $inch<=11; $inch++) <option value="Male"> {{ $inch.' "' }} </option>
                                     @endfor
                             </select>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">5.2. Weight</label>
                     <div class="row">
                         <div class="col-md-6">
                             <select class="form-control form-control-sm" id="idGender" name="gender">
                                 <option value="0"> Kg</option>
                                 @for($kg=10; $kg<=99; $kg++) <option value="Male"> {{ $kg }} </option>
                                     @endfor
                             </select>
                         </div>
                         <div class="col-md-6">
                             <select class="form-control form-control-sm" id="idGender" name="gender">
                                 <option value="0"> Gram</option>
                                 @for($gram=1; $gram<=999; $gram++) <option value="Male"> {{ $gram }} </option>
                                     @endfor
                             </select>
                         </div>
                     </div>

                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">6. School/ College Name</label>
                     <input type="text" class="form-control form-control-sm" id="inputName" name="name">
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">7.0. Current Belt</label>
                     <select class="form-control form-control-sm" id="CurrentBelt" name="CurrentBelt" onChange="findNextBelt(this.selectedIndex)">
                         <option value="0"> Select Current Belt</option>
                         <option value="White"> White </option>
                         <option value="Yellow"> Yellow </option>
                         <option value="Orange"> Orange </option>
                         <option value="Green"> Green </option>
                         <option value="Blue"> Blue </option>
                         <option value="Purple"> Purple </option>
                         <option value="Brown - IV"> Brown - IV </option>
                         <option value="Brown - III"> Brown - III </option>
                         <option value="Brown - II"> Brown - II </option>
                         <option value="Brown - I"> Brown - I </option>
                         <option value="BLACK"> BLACK </option>
                     </select>
                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputName">7.1. Grading For</label>
                     <select class="form-control form-control-sm" id="UpdradingToBelt" name="UpdradingToBelt" disabled>
                         <option value="0"> Select Current Belt</option>
                         <option value="White"> White </option>
                         <option value="Yellow"> Yellow </option>
                         <option value="Orange"> Orange </option>
                         <option value="Green"> Green </option>
                         <option value="Blue"> Blue </option>
                         <option value="Purple"> Purple </option>
                         <option value="Brown - IV"> Brown - IV </option>
                         <option value="Brown - III"> Brown - III </option>
                         <option value="Brown - II"> Brown - II </option>
                         <option value="Brown - I"> Brown - I </option>
                         <option value="BLACK"> BLACK </option>
                     </select>

                 </div>
             </div>
             <div class="col-md-4">
                 <div class="form-group">
                     <label for="inputDOB">7.2. Grading Fee</label>
                     <input type="text" class="form-control form-control-sm" id="GradingFee" name="GradingFee" readonly>
                 </div>
             </div>
         </div>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>


 </div>

 @endsection

 <script lang="javascript">
     function findNextBelt(currentBelt) {
         //var belts = ["White", "Yellow", "Orange", "Green", "Blue", "Purple", "Brown - IV", "Brown - III", "Brown - II", "Brown - I", "BLACK"]
         // Code to select the next belt
         document.getElementById("UpdradingToBelt").selectedIndex = (currentBelt) + 1;
         // Code to show respective belt- upgradation fee
         var fee = 0;
         switch (currentBelt) {
             case 1:
                 fee = 700;
                 break;
             case 2:
                 fee = 800;
                 break;
             case 3:
                 fee = 900;
                 break;
             case 4:
                 fee = 1000;
                 break;
             case 5:
                 fee = 1100;
                 break;
             case 6:
                 fee = 1200;
                 break;
             case 7:
                 fee = 1300;
                 break;
             case 8:
                 fee = 1400;
                 break;
             case 9:
                 fee = 1500;
                 break;
             default:
                 fee = "Contact Centre";
         }
         //alert(fee);
         document.getElementById('GradingFee').value = fee;
     }

     // This function is to get the STATE name
     
     $(document).ready(function() {
         $('select[name="pincode"]').on('keyup', function() {
             console.log('LISTENING');
         });
     });
 </script>