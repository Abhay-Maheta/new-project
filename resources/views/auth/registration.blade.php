<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

</head>

<body>
    
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>
                                <hr>                                

                                <form  action="{{ route('register-user') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                      <label for="name">Full Name</label>
                                      <input type="text" name="name" id="" class="form-control" placeholder="Enter the full name" value="" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">*Requerd</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" name="email" id="" class="form-control" placeholder="Create a New Email" value="" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">*Requerd</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="password">Password</label>
                                      <input type="password" name="password" id="" class="form-control" placeholder="Create new Password" value="" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">*Requerd</small>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"  name="registration" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a
                                            href="login" class="fw-bold text-body"><u>Already user Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>