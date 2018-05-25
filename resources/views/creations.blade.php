<!DOCTYPE html>
<html lang="en">
<head>
    @include('settings')
</head>

<body>
@include('navbar')

<header class="masthead bg-primary text-white text-center">
    <div class="container">
        <h1 class="text-uppercase mb-0">Creations</h1>
        <hr class="star-light">


        @if($creations->count() === 0)
            <h4 class="text-uppercase mb-0">There is no creations to show.</h4>
        @else
            @foreach ($creations as $creation)
                <img src="{{asset('storage/sauvegarde/'.$creation->id.'.png')}}" height="250">
            @endforeach
        @endif
        <br><br>
        <h2 class="font-weight-light mb-0"></h2>
        <br><br><br><br>
        <h2 class="text-uppercase mb-0">Generate PDF</h2>
        <hr class="star-light">
        <div class="text-center">
            <a href="{{route('CreatePDF')}}">
                <button class="btn btn-lg btn-secondary">Create</button>
            </a>

        </div>
    </div>
</header>


@include('footer')
</body>
</html>