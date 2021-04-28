<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
    <h1 class="text-center mt-3">Contact Us Page</h1>

    <div class="container">
      <form action="{{ route('contact') }}" method="post" >
        @csrf
        <div class="form-group">
          <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Skill</label>
          <select class="form-control" name="skill" id="exampleFormControlSelect1">
            <option>PHP</option>
            <option>LARAVEL</option>
            <option>C++</option>
          </select>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="check[]" value="checkbox 1">
          <label class="form-check-label" for="defaultCheck1">
            checkbox 1
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="check[]" value="checkbox 2">
          <label class="form-check-label" for="defaultCheck2">
            checkbox 2
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" value="m" checked>
          <label class="form-check-label" for="exampleRadios1">
            Men
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" value="f">
          <label class="form-check-label" for="exampleRadios1">
            Women
          </label>
        </div>

        <input type="submit" value="save" class="btn btn-primary">

    </form>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>