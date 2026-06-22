<html>
<head>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/86053a8dda.js" crossorigin="anonymous"></script>
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

</head>
<body style="margin:0px;">
<style>
    #embed-topbar {
			color: #FFF;
			text-align: center;
			font-size: 12px;
			line-height: 1.6;
			cursor: pointer;
			border-radius: 5px;
			width: 130px;
    }
    .slider {
        -webkit-appearance: none;
        width: 130px;
        height: 10px;
        background-color: rgb(56, 56, 51);
        outline: none;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
        bottom: 5px;
        border-radius: 48px;
		margin-top: 35px;
    }

    .slider:hover {
        opacity: 1;
    }

    .slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        height: 15px;
        width: 8px;
        border-radius: 3px;
        background: #bdbdbd;
        cursor: pointer;
        border: 1px solid #000;
        margin-top: -2px;
    }

    .slider::-moz-range-thumb {
        -webkit-appearance: none;
        height: 15px;
        width: 8px;
        border-radius: 3px;
        background: #bdbdbd;
        cursor: pointer;
        border: 1px solid #000;
    }
    #embed-topbar i{
        padding: 3px 15px;
        background-color: #5db760;
        color: #FFF;
        text-align: center;
        position: absolute;
        font-size: 12px;
        line-height: 1.6;
        cursor: pointer;
		border-radius: 5px;
		width: 103px;
    }
    #radio_stop{
        background: #e87229!important;
    }

    #radio_player{
        display: none;
    }
</style>

<div id="embed-topbar">
    <i class="fas fa-envelope" id="wunschbox" style="width: 30px; margin-left: 73px;" onClick="window.open('https://bigtimefm.de/wunschbox', 'Habbo - Clientpanel', 'width = 380, height = 580');"></i>
    <i class="fas fa-play" id="radio_play" style="display: none; width: 40px" onclick="StartRadio();"></i>
    <i class="fas fa-pause" id="radio_stop" style="width: 40px;" onclick="PauseRadio();"></i>
    <input type="range" min="0" max="1" step="0.05" value="0.1" onchange="setVolume(this.value);" oninput="setVolume(this.value);" class="slider">
</div>

<div id="radio_player">
<audio  id="radio_audio" autoplay controls="" style="width:0; height:0;opacity: 0;"  src="https://stream.bigtimefm.de/stream.mp3"></audio>
</div>

</body>
</html>
<script>
    $(document).ready(function() {
        document.getElementById('radio_audio').volume = 0.1;
    });
    function setVolume(volumee) {
        $('#radio_audio').volume = volumee;
        $('#radio_audio').prop("volume", volumee);
    }
    function StartRadio() {
        var str = $(".slider").val();
        radioplayer = 1;
        $("#radio_stop").show();
        $("#radio_play").hide();
        $("#radio_player").html('<audio  id="radio_audio" controls="" autoplay style="width:0; height:0;opacity: 0;"  src="https://stream.bigtimefm.de/stream.mp3"></audio>');
        document.getElementById('radio_audio').volume = str;
    }
    function PauseRadio() {
        radioplayer = 0;
        $("#radio_stop").hide();
        $("#radio_play").show();
        $("#radio_player").html('');
    }
</script>