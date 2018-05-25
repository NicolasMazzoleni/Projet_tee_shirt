<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Creations</title>
    <style>
        /**
                    Set the margins of the page to 0, so the footer and the header
                    can be of the full height and width !
                 **/
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 3cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            background-color: #20c997;
            color: black;
            text-align: center;
            line-height: 1.5cm;
        }

        /** Define the footer rules **/
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;

            /** Extra personal styles **/
            background-color: #20c997;
            color: black;
            text-align: center;
            line-height: 1.5cm;
        }

        main {
            text-align: center;
        }
    </style>
</head>
<body>
<header>
    <h1>Creations - Minions Awesome</h1>
</header>
<footer>
    Copyright &copy; <?php echo date("Y");?> Minions Awesome.
</footer>

<main>
    @foreach ($creations as $creation)
        <img src="{{public_path('storage/sauvegarde/'.$creation->id.'.png')}}" height="200">
        <?php $date = $creation->created_at->format('d-m-Y');
        $time = $creation->created_at->format('H:i:s');
        ?>
        <h3>Created at: {{ $date }} Time: {{$time}}</h3>
    @endforeach
</main>
</body>
</html>