$(document).ready(function(){

        $("#changeUserImage").change(function () {
            $("#changeImageForUser").submit();
        });
    $(".monthYear span").each(function () {
        console.log($(this));
        $(this).addClass('fa fa-plus sort-down');
        $(this).css({'color':'blue'});
    });
    $.fn.restrictInputs = function(restrictPattern){
        var targets = $(this);
        var pattern = restrictPattern ||  /[\a-z+0-9]/;
        var restrictHandler = function(){
            var val = $(this).val();
            var newVal = val.replace(pattern, '');
            if (val !== newVal) {
                $(this).val(newVal);
            }
        };

        targets.on('keyup', restrictHandler);
        targets.on('paste', restrictHandler);
        targets.on('change', restrictHandler);
    };

    $('input#name,input#lastname,input#fathername').restrictInputs();
    $("#birthDay,#Issuedate,#ValidityDate,#dateStart,#dateEnd,#FinalTest,#dateClass,#DataDaily,#dateTest").persianDatepicker();
    $("#codemeli").change(function () {
        var thiss=$(this);
        var code=$(this).val();
        if(!checkCodeMeli(code))
        {
            thiss.addClass('bg-danger').removeClass('bg-success');
            thiss.val("");
            alert("کد ملی نامعتبر است");
        }
        else
        {
            thiss.removeClass('bg-danger').addClass('bg-success');
        }

    });
    // var validCode="";
    //
    // var codemeli='4190244333';
    // var countcodemeli=50;
    // for(var i=0;i<=countcodemeli;i++)
    // {
    //     if(checkCodeMeli(codemeli))
    //     {
    //         validCode=validCode+'-'+codemeli;
    //     }
    //     else
    //     {
    //         i--;
    //     }
    //     codemeli2=parseInt(codemeli)+1;
    //     codemeli=codemeli2.toString();
    // }
    // console.log(validCode);
    function checkCodeMeli(code)    {
        var L=code.length;
        if(L<8 || parseInt(code,10)==0) return false;
        code=('0000'+code).substr(L+4-10);
        if(parseInt(code.substr(3,6),10)==0) return false;
        var c=parseInt(code.substr(9,1),10);
        var s=0;
        for(var i=0;i<9;i++)
            s+=parseInt(code.substr(i,1),10)*(10-i);
        s=s%11;
        return (s<2 && c==s) || (s>=2 && c==(11-s));
    }




    var input = document.querySelector('#ImageCardMeli');
    var input2 = document.querySelector('#ImageCard');
    var preview = document.querySelector('.priview');
    var preview2 = document.querySelector('.showCard');

    input.style.opacity = 0;
    input2.style.opacity = 0;
    input.addEventListener('change', updateImageDisplay);
    input2.addEventListener('change', updateImageDisplay2);
    function updateImageDisplay()
    {
        while(preview.firstChild)
        {
            preview.removeChild(preview.firstChild);
        }
        var curFiles = input.files;
        if(curFiles.length === 0)
        {
            var para = document.createElement('p');
            para.textContent = 'تصویری برای ارسال انتخاب نشده است';
            preview.appendChild(para);
        }
        else
        {
            var list = document.createElement('ol');
            preview.appendChild(list);
            for(var i = 0; i < curFiles.length; i++)
            {
                var listItem = document.createElement('li');
                var para = document.createElement('p');
                if(validFileType(curFiles[i]))
                {
                    para.textContent = 'نام فایل: ' + curFiles[i].name + ', اندازه فایل: ' + returnFileSize(curFiles[i].size) + '.';
                    var image = document.createElement('img');
                    image.src = window.URL.createObjectURL(curFiles[i]);

                    listItem.appendChild(image);
                    listItem.appendChild(para);
                }
                else
                {
                    para.textContent = 'نام فایل: ' + curFiles[i].name + ': فایل انتخاب شده معتبر نیست لطفا فایل دیگری انتخاب کنید.';
                    listItem.appendChild(para);
                }
                list.appendChild(listItem);
            }
        }
    }
    function updateImageDisplay2()
    {
        while(preview2.firstChild)
        {
            preview2.removeChild(preview2.firstChild);
        }
        var curFiles2 = input2.files;
        if(curFiles2.length === 0)
        {
            var para2 = document.createElement('p');
            para2.textContent = 'تصویری برای ارسال انتخاب نشده است';
            preview2.appendChild(para2);
        }
        else
        {
            var list2 = document.createElement('ol');
            preview2.appendChild(list2);
            for(var i2 = 0; i2 < curFiles2.length; i2++)
            {
                var listItem2 = document.createElement('li');
                var para2 = document.createElement('p');
                if(validFileType(curFiles2[i2]))
                {
                    para2.textContent = 'نام فایل: ' + curFiles2[i2].name + ', اندازه فایل: ' + returnFileSize(curFiles2[i2].size) + '.';
                    var image2 = document.createElement('img');
                    image2.src = window.URL.createObjectURL(curFiles2[i2]);

                    listItem2.appendChild(image2);
                    listItem2.appendChild(para2);
                }
                else
                {
                    para2.textContent = 'نام فایل: ' + curFiles2[i2].name + ': فایل انتخاب شده معتبر نیست لطفا فایل دیگری انتخاب کنید.';
                    listItem2.appendChild(para2);
                }
                list2.appendChild(listItem2);
            }
        }
    }
    var fileTypes = [
        'image/jpeg',
        'image/jpeg',
        'image/png'
    ];
    function validFileType(file)
    {
        for(var i = 0; i < fileTypes.length; i++)
        {
            if(file.type === fileTypes[i])
            {
                return true;
            }
        }
        return false;
    }
    function returnFileSize(number)
    {
        if(number < 1024)
        {
            return number + 'بایت ';
        }
        else if(number > 1024 && number < 1048576)
        {
            return (number/1024).toFixed(1) + 'کیلوبایت ';
        }
        else if(number > 1048576)
        {
            return (number/1048576).toFixed(1) + 'مگابایت';
        }
    }
});
$('#refresh').click(function(){
    $.ajax({
        type:'GET',
        url:'../refreshCaptcha',
        success:function(data){
            $(".captcha span").html(data.captcha);
        }
    });
});
function PrintDiv(div) {

    $('.dataTables_filter').hide();
    var divElements = document.getElementById(div).innerHTML;
    $('.dataTables_filter').show();
    var oldPage = document.body.innerHTML;
    var oldStyle=document.body.style;
    document.body.style="background-color: white !important; width: 100%;margin-left:auto;padding:5px;margin-right: auto;margin-top: 20px;border: 1px solid black;";
    document.body.innerHTML =divElements;
    window.print();
    document.body.innerHTML = oldPage;
    document.body.style=oldStyle;
}
$(document).ready(function () {
    setTimeout(function () {
        $("#loading").hide(500);
    },1000);

});
// function PrintDiv(div) {
//     var data=document.getElementsByClassName("table").innerHTML;
//     alert(data);
//     window.frames["print_frame"].document.body.innerHTML = document.getElementById(div).innerHTML;
//     window.frames["print_frame"].window.focus();
//     window.frames["print_frame"].window.print();
// }
