<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>XXI</title>
</head>

<body>
    <div class="movie-container">
        <label>Film yang dipilih:</label>
        <select id="movie">
            <option value="25000">FNAF</option>
            <!-- <option value="10">Avengers: Endgame ($10)</option>
            <option value="12">Joker ($12)</option>
            <option value="8">Toy Story 4 ($8)</option>
            <option value="9">The Lion King ($9)</option> -->
        </select>
    </div>
    <div class="movie-container">
        <label>Harga: Rp. 25000</label>
    </div>

    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>

    <div class="container">
        <div class="screen">Layar</div>

        <div class="row">
            <div class="seat">A1</div>
            <div class="seat">A2</div>
            <div class="seat">A3</div>
            <div class="seat">A4</div>
            <div class="seat">A5</div>
            <div class="seat">A6</div>
            <div class="seat">A7</div>
            <div class="seat">A8</div>
        </div>
        <div class="row">
            <div class="seat">B1</div>
            <div class="seat">B2</div>
            <div class="seat">B3</div>
            <div class="seat occupied">B3</div>
            <div class="seat occupied">B4</div>
            <div class="seat">B5</div>
            <div class="seat">B6</div>
            <div class="seat">B7</div>
        </div>
        <div class="row">
            <div class="seat">C1</div>
            <div class="seat">C2</div>
            <div class="seat">C3</div>
            <div class="seat">C4</div>
            <div class="seat">C5</div>
            <div class="seat">C6</div>
            <div class="seat occupied">C7</div>
            <div class="seat occupied">C8</div>
        </div>
        <div class="row">
            <div class="seat">D1</div>
            <div class="seat">D2</div>
            <div class="seat">D3</div>
            <div class="seat">D4</div>
            <div class="seat">D5</div>
            <div class="seat">D6</div>
            <div class="seat">D7</div>
            <div class="seat">D8</div>
        </div>
        <div class="row">
            <div class="seat">E1</div>
            <div class="seat">E2</div>
            <div class="seat">E3</div>
            <div class="seat occupied">E4</div>
            <div class="seat occupied">E5</div>
            <div class="seat">E6</div>
            <div class="seat">E7</div>
            <div class="seat">E8</div>
        </div>
        <div class="row">
            <div class="seat">F1</div>
            <div class="seat">F2</div>
            <div class="seat">F3</div>
            <div class="seat occupied">F4</div>
            <div class="seat occupied">F5</div>
            <div class="seat occupied">F6</div>
            <div class="seat">F7</div>
            <div class="seat">F8</div>
        </div>
    </div>

    <p class="text">
        Anda memilih <span id="count">0</span> kursi dengan total harga sebesar Rp.<span id="total">0</span>
    </p>

    <script src="script.js"></script>

    <form action="/">
        <input type="submit" value="Bayar" />
    </form>
</body>

</html>