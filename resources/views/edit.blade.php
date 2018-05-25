<!DOCTYPE html>
<html lang="en">
<head>
    @include('settings')
</head>

<body>
@include('navbar')

<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Edit Your creation</h1>
        <hr class="star-light">
        <img src="{{ route('fusion', [$tshirt, $logo]) }}" height="550" >
        <br><br>
        <h2 class="font-weight-light mb-0"></h2>
        <br><br><br><br>
        <h2 class="text-uppercase mb-0">Editing Form</h2>
        <hr class="star-light">
        <div class="text-center">
        </div>

        <form>
            <div class="form-row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Position X">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Position Y">
                </div>
                <div class="col">
                    <input type="number" class="form-control" placeholder="Size">
                </div>
                <div class="col-auto ">
                    <button type="submit" class="btn btn-lg btn-secondary">Update</button>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-lg btn-secondary">Save Changes</button>
                </div>
            </div>
        </form>

    </div>


</header>



@include('footer')
</body>
</html>