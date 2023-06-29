function opinionValidate() {
    var isValid = true;

    var name = $("#name").val();
    var score = $("#score").val();
    var display = $("#display").val();
    var message = $("#message").val();

    if (name == "") {
        $("#name").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (score == "") {
        $("#score").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (display == "") {
        $("#display").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    if (message == "") {
        $("#message").css('border', '#fb0505 1px solid');
        isValid = false;
    }
    return isValid;
}