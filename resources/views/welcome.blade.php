@extends('layouts.app')

@section('content')
    <div class="container" id="gorditos">
        <br><br>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="http://elmeme.me/static/uploads/images/2015/03/81079/81079_main_full.png" alt="" class="img-responsive center-block">
            </div>
        </div>
        <h1 class="text-center">Gordita Pishi Party</h1>
        <br><br>
        <h1 class="text-center">@{{contador}}</h1>
        <br><br>
        <img src="http://memeschistosos.net/wp-content/uploads/2015/10/memesdefelicitaciones7.jpg" alt="" class="img-responsive center-block">
        <br><br>
    </div>
@endsection

@section('scripts')
<script src="http://albert-gonzalez.github.io/easytimer.js/dist/easytimer.min.js"></script>
<script>
    var timer = new Timer();
    var vm = new Vue({
        el: "#gorditos",
        data: {
            contador: ''
        },
        ready: function(){
            var that = this;

            var date1 = new Date();
            var date2 = new Date("09/12/2016");
            var timeDiff = Math.abs(date2.getTime() - date1.getTime());
            var diffHours = timeDiff / (1000 * 3600 * 24) * 24;
            var hours = Math.floor(diffHours);
            var minutesDecimal = (diffHours % 1) * 60;
            var minutes = Math.floor(minutesDecimal);
            var seconds = Math.floor((minutesDecimal % 1) * 60);
            timer.start({countdown: true, startValues: {hours: hours, minutes: minutes, seconds: seconds}});
            timer.addEventListener('secondsUpdated', function (e) {
                that.contador =  timer.getTimeValues().toString(['hours', 'minutes', 'seconds']);
            });
        }
    })
</script>
@endsection