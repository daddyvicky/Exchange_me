document.getElementById("uploadBtn1").onchange = function() {
    document.getElementById("uploadFile1").value = this.files[0].name;
    if (!checkexc(this.files[0].name)) {
        document.getElementById('uploadBtn1').value = null;
        document.getElementById('uploadFile1').value = null;
        alert("Please Provide  format.");
    }
};
document.getElementById("uploadBtn2").onchange = function() {
    document.getElementById("uploadFile2").value = this.files[0].name;
    if (!checkexc(this.files[0].name)) {
        document.getElementById('uploadBtn2').value = null;
        document.getElementById('uploadFile2').value = null;
        alert("diss format.");
    }
};
document.getElementById("uploadBtn3").onchange = function() {
    document.getElementById("uploadFile3").value = this.files[0].name;
    if (!checkexc(this.files[0].name)) {
        document.getElementById('uploadBtn3').value = null;
        document.getElementById('uploadFile3').value = null;
        alert("diss format.");
    }
};

function checkexc(fname) {
    var exc = fname.slice((Math.max(0, fname.lastIndexOf(".")) || Infinity) + 1);
    if (exc == "jpeg" || exc == "jpg" || exc == "png" || exc == "webp") {
        return true;
    } else {
        return false;
    }
}

$(".isexchange").change(function() {
    if ($('input[name="isexchange"]:checked').val() == '1') {
        $("#isexchangecontent").show();
    } else if ($('input[name="isexchange"]:checked').val() == '0') {
        $("#isexchangecontent").hide();
    }
});
$(".isold").change(function() {
    if ($('input[name="isold"]:checked').val() == '1') {
        $("#isold").show();
    } else if ($('input[name="isold"]:checked').val() == '0') {
        $("#isold").hide();
    }
});
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) {
    dd = '0' + dd
}
if (mm < 10) {
    mm = '0' + mm
}

today = yyyy + '-' + mm + '-' + dd;
document.getElementById("datefield").setAttribute("max", today);