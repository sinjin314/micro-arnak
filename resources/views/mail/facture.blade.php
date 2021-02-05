<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />

    <!-- Favicon and title -->
    <link rel="icon" href="path/to/fav.png">
    <title>Starter template - Halfmoon</title>

    <!-- Halfmoon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet" />
    <!--
      Or,
      Use the following (no variables, supports IE11):
      <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon.min.css" rel="stylesheet" />
      Learn more: https://www.gethalfmoon.com/docs/customize/#notes-on-browser-compatibility
    -->
</head>
<body class="with-custom-css-scrollbars" data-set-preferred-mode-onload="true">
<!-- Modals go here -->
<!-- Reference: https://www.gethalfmoon.com/docs/modal -->

<!-- Page wrapper start -->
<div class="page-wrapper">

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <!--
          Add your page's main content here
          Examples:
          1. https://www.gethalfmoon.com/docs/content-and-cards/#building-a-page
          2. https://www.gethalfmoon.com/docs/grid-system/#building-a-dashboard
        -->
        <div>
            <td class="card">
                <h2 class="card-title">
                    Bonjour {{ Auth::user()->name }}, voici votre Facture!
                </h2>
                <br>
                <table>
                    <thead class="row m-10">
                        <th class="col-sm"><b>Game</b></th>
                        <th class="col-sm"><b>Price</b></th>
                        <th class="col-sm"><b>Activation code</b></th>
                    </thead>
                    <br>
                    <br>
                    <tbody>
                    <br>
                    @foreach ( Cart::content() as $game )

                        <tr class="row m-10">
                            <td class="col-sm">{{ $game->name }}</td>
                            <td class="col-sm">{{ $game->price }}€</td>
                            <td class="col-sm">{{ random_int(1000,9999) }}-{{ random_int(1000,9999) }}-{{ random_int(1000,9999) }}-{{ random_int(1000,9999) }}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

                </div>
                <br>
        <br>
        <br>
                <h8>
                    Merci de votre achat, au plaisir de vous revoir pour vous faire arnaquer.
                </h8>


            </div>

        </div>
    </div>
    <!-- Content wrapper end -->

</div>
<!-- Page wrapper end -->

<!-- Halfmoon JS -->
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
</body>
</html>
