@extends('frontendtemplate')
@section('content')
<section class="blog_part section_padding">
<div class="container mt-5">
<div class="grid">
    <div id="quiz" class="centered grid__col--8">
        <h1>Question</h1>

        <h2 id="question" class="headline-secondary--grouped"></h2>
        <h3 id="score"></h3>

        <p id="choice0"></p>
        <button id="guess0" class="btn--default">Answer1</button>

        <p id="choice1"></p>
        <button id="guess1" class="btn--default">Answer2</button>
        <p id="choice2"></p>
        <button id="guess2" class="btn--default">Answer2</button>
        <p id="choice3"></p>
        <button id="guess3" class="btn--default">Answer2</button>
        <footer>
            <p id="progress">Question x of y</p>
            <p>Made with javascript, html5, and css! Plus love. -Jason Chan</p>
            <a href="http://referrals.trhou.se/jasonchan2">Click Here To learn Code!</a>
        </footer>
    </div>
</div>
</div>
</section>
@endsection