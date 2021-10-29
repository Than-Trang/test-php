// Shorthand for $( document ).ready()
$(function() {

    $(".submit1").click(function(){
        var valMaHoa = $("#nhap_noi_dung_ma_hoa").val().toUpperCase();
        var KMaHoa = parseInt($(".KhoaK").val());
        var m=$.trim(valMaHoa);
        var ArrMaHoa = m.split("");
        var json1 = {'A':0,'B':1,'C':2,'D':3,'E':4,'F':5,'G':6,'H':7,'I':8,'J':9,'K':10,'L':11,'M':12,'N':13,'O':14,'P':15,'Q':16,'R':17,'S':18,'T':19,'U':20,'V':21,'W':22,'X':23,'Y':24,'Z':25};
        var json2 = swap(json1);
        var i = 0 , a = ArrMaHoa.length;
        var y='';
        for(i; i< a; i++){
            var x = (json1[ArrMaHoa[i]] + KMaHoa) % 26;
            y += (json2[x]);
        }
        $("#nhap_noi_dung_giai_ma").val(y);
        // taifnguyeen
        //Giai ma
    $(".submit2").click(function(){
        var valGiaiMa = $("#nhap_noi_dung_giai_ma").val().toUpperCase();
        var KgiaiMa = parseInt($(".khoaK-giai-ma").val());
        var m=$.trim(valGiaiMa);
        var ArrGiaiMa = m.split("");
        var json1 = {'A':0,'B':1,'C':2,'D':3,'E':4,'F':5,'G':6,'H':7,'I':8,'J':9,'K':10,'L':11,'M':12,'N':13,'O':14,'P':15,'Q':16,'R':17,'S':18,'T':19,'U':20,'V':21,'W':22,'X':23,'Y':24,'Z':25};
        var json2 = swap(json1);
        var i = 0 , a = ArrGiaiMa.length;
        var y='';
        for(i; i< a; i++){
            var x = (json1[ArrGiaiMa[i]] - KgiaiMa) % 26;
            if(x<0){
                x= x+ 26;
            }
            console.log(json1[ArrGiaiMa[i]],x,json2[x]);
            y += (json2[x]);
        }
        $("#nhap_noi_dung_ma_hoa").val(y);
    });
    // ham doi cho
    function swap(json){
        var ret = {};
        for(var key in json){
        ret[json[key]] = key;
        }
        return ret;
    }
    });

        
       
    

});