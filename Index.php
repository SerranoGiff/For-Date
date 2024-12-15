<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/style.css">
    <title>Date Planner</title>
</head>
<body>
    <div class="container">
        <div id="welcome" class="welcome">
            <h1>Do you want to have a date with me?</h1>
            <button id="yesBtn">Yes</button>
            <button id="noBtn">No</button>
        </div>

        <div id="dateType" class="hidden">
            <h2>What kind of date?</h2>
            <select id="kindOfDate">
                <option value="dinner">Dinner</option>
                <option value="movie">Movie</option>
                <option value="walk">Walk</option>
            </select>
            <button id="setDateBtn">Set Date</button>
        </div>

        <div id="dateInput" class="hidden">
            <h2>When will the date be?</h2>
            <input type="date" id="datePicker">
            <button id="submitDateBtn">Submit Date</button>
        </div>

        <div id="thankYou" class="hidden">
            <h2 class="fade-in-text">I have something for you</h2>
            <button id="openBtn">Open</button>
        </div>

        <div id="loveMessage" class="hidden">
            <h1>I love you!</h1>
            <div class="flower"></div>
        </div>
    </div>

    <script src="Assets/JS/script.js"></script>
</body>
</html>
