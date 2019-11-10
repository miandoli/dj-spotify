function txtBox(event) {
    var key = event.keyCode;
    // 65-90: Letters
    // 8: Backspace
    return ((key >= 65 && key <= 90) || key == 8);
}

function join() {
    var code = $("#txtCode").val().toUpperCase();
    window.location = "/party/" + code;
}

function valid() {
    var text = $("#txtCode").val();
    if (text.length < 4) {
        $("#btnJoin").prop('disabled', true);
    } else {
        $("#btnJoin").prop('disabled', false);
    }
}

$(document).ready(function () {
    $("#txtCode").change(function(){
        valid()
    });
    valid();
});
