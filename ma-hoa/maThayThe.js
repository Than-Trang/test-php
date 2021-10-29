$(function(){
	$(".submit1thaythe").click(function(){
		var valMaHoa = $("#nhap_noi_dung_ma_thay_the").val().toUpperCase();
        var KMaHoa =$(".khoaKthaythe").val().toUpperCase();
        var m=$.trim(valMaHoa);
        var ArrMaHoa = m.split("");
		var arrBCC =["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
		var arrKMaHoa = KMaHoa.split('');
		var json1 = {};
		for(var i=0;i<arrBCC.length;i++){
			json1[arrBCC[i]] = arrKMaHoa[i];
		}
		var a='';
		for(var i=0;i<ArrMaHoa.length;i++){
			a+=json1[ArrMaHoa[i]];
		}
		$("#nhap_noi_dung_giai_ma_thay_the").val(a);
	})
	$(".submit2thaythe").click(function(){
		var valGiaiMa = $("#nhap_noi_dung_giai_ma_thay_the").val().toUpperCase();
        var khoaKGiaiMathaythe = parseInt($(".khoaK-giai-mathaythe").val());
        var m=$.trim(valGiaiMa);
        var ArrGiaiMa = m.split("");
		var arrBCC =["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
		var json1 = {};
		for(var i=0;i<arrBCC.length;i++){
			json1[arrBCC[i]] = ArrGiaiMa[i];
		}
		console.log(json1);
		var json2 = swap(json1);
		console.log(json2);
	});
	function swap(json){
        var ret = {};
        for(var key in json){
        ret[json[key]] = key;
        }
        return ret;
    }
});