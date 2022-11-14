$(function () {
    $('#phone').inputmask("(99) 999-99-99");
    $('.submitBtn').click(function () {
        var text1 = $('#firstName').val();
        var text2 = $("#email").val();
        var text3 = $("#phoneNum").val();
        var text4 = $("#description").val();
        if (text1.trim() === '' || text3.trim() === '') {
            alert('Maydonlarni to\'ldirish shart!');
        } else {
            var my_text = `Xabar : %0A <b>Ism</b>: ${text1} %0A <b>Email:</b> ${text2} %0A <b>Tel:</b> ${text3} %0A <b>Izoh:</b>  ${text4}`;
            var token = "5417997819:AAF_M6U13u0w9FXJKRHAj5q8BSKdx4gASCY";
            var chatId = -1001853276925;
            var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chatId}&text=${my_text}&parse_mode=html`;
            let api = new XMLHttpRequest();
            api.open("GET", url, true);
            api.send();
            console.clear();
            var res = JSON.parse(api.responseText);
            if (res.status === 200) {
                console.log(my_text);
                console.clear();
                // location.reload(true);
            } else {
                // console.log('failed');
            }

        }
        return false;
    });
});


let companyIndustry = document.querySelector('#companyIndustry'),
    companyMonitoring = document.querySelector('#companyMonitoring'),
    companyMonit = document.querySelector('#companyMonit'),
    companyIndustryLabel = document.querySelector('#companyIndustryLabel');


companyIndustry.addEventListener('focus', function () {
    companyIndustryLabel.style.fontSize = '12px';
    companyIndustryLabel.style.marginTop = '-15px';
})

companyMonitoring.addEventListener('focus', function () {
    companyMonit.style.fontSize = '12px';
    companyMonit.style.marginTop = '-15px';
})
