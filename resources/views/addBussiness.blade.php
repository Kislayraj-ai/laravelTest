<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body>

   <div class="conainter m-5 p-2"  style="width:25vw;">
   <h2>Add Bussiness Details</h2>
        <div class="row">
    
            <div class="col-md-8"></div>
                    <form action="{{ url('bussiness') }}" method="post" class="form-control">

        @csrf
                        <div class="row">
                        <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="Name"  />
                        </div>

                           <div class="row">
                        <label class="form-label">Address</label>
                            <input type="text" class="form-control" name="address"  />
                        </div>

                           <div class="row">
                        <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email"  />
                        </div>

                           <div class="row">
                        <label class="form-label">Website</label>
                            <input type="text" class="form-control" name="website"  />
                        </div>


                         <div class="row">
                        <label class="form-label">Contact Person</label>
                            <input type="text" class="form-control" name="contact_person"  />
                        </div>

                     <div class="row">
                        <label class="form-label">Phone No</label>
                            <input type="number" class="form-control" name="phone_no"  />
                        </div>


                         <div class="row">
                            <input type="submit" class="btn btn-primary" value="Submit"  />
                        </div>

    

                    </form>
        </div>


    </div>

</body>

</html>