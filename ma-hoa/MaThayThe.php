<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="mathaythe.js"></script>
</head>
<body>
<div class="section-main-content"  method="POST">
        <div class="main-content1">
            <table>
                <tr><th class="tieu-de">Mã Hóa</th><th class="tieu-de">Giải mã</th></tr>
                <tr>
                    <td class="noi-dung">
                        <textarea class="nhap" id="nhap_noi_dung_ma_thay_the" name="nd-mahoa-thaythe"></textarea>
                    </td>
                    <td class="noi-dung">
                    <textarea class="giai" id="nhap_noi_dung_giai_ma_thay_the" name="nd-giaima-thay-the"></textarea>
                </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" class="khoa1 khoaKthaythe" name="keyMaHoathaythe">
                    </td>
                    <td>
                        <input type="text" class="khoa2 khoaKGiaiMathaythe" name="keyGiaiHoathaythe">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="submit1thaythe" type="submit" >submit</button>
                    </td>
                    <td>
                        <button class="submit2thaythe" type="submit">submit</button>
                    </td>
                </tr>
                
            </table>
            
        </div>
    </div>
</body>
</html>