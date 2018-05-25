<!DOCTYPE html>
<html lang="en">
<head>
    @include('settings')
</head>

<body>
@include('navbar')

<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Your creation</h1>
        <hr class="star-light">
        <img src="{{route('fusion', [$tshirt, $logo])}}" height="550" >
        <br><br>
        <h2 class="font-weight-light mb-0"></h2>
        <br><br><br><br>
        <h2 class="text-uppercase mb-0">4 - Next Step</h2>
        <hr class="star-light">
        <div class="text-center">
            <a href="{{route('EditCreation', [$tshirt, $logo]) }}">
                <button class="btn btn-lg btn-secondary">Edit</button>
            </a>
            <a href="{{ route('deleteUpload', [$logo]) }}">
                <button class="btn btn-lg btn-secondary">Don't save</button>
            </a><br><br>
            <a>
            <form action=" {{ route('saveResultat', [$tshirt, $logo]) }}" method="post">
                {{ csrf_field() }}
                <button class="btn btn-lg btn-secondary">Save</button>
            </form>
            </a>
        </div>
    </div>
</header>

@include('footer')
</body>
</html>

