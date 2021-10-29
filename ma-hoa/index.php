
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Giai Ma</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
<?php include_once 'menu.php';?>
<script src="script.js"></script>
<div class="section-main-content"  method="POST">
    <!-- <div class="select-pp">
        <select name="giaima" id="sl_giaima">
            <option value="1">Mã dịch vòng</option>
            <option value="2">Mã thay thế</option>
            <option value="3">Affine</option>
            <option value="4">Vignere</option>
            <option value="5">Hill</option>
        </select>
    </div> -->
        <div class="main-content1">
            <table>
                <tr><th class="tieu-de">Mã Hóa</th><th class="tieu-de">Giải mã</th></tr>
                <tr>
                    <td class="noi-dung">
                        <textarea class="nhap" id="nhap_noi_dung_ma_hoa" name="nd-mahoa"></textarea>
                    </td>
                    <td class="noi-dung">
                    <textarea class="giai" id="nhap_noi_dung_giai_ma" name="nd-giaima"></textarea>
                </td>
                </tr>
                <tr>
                    <td>
                        <input type="number"  class="khoa1 khoaK" name="keyMaHoa">
                    </td>
                    <td>
                        <input type="number" class="khoa2 khoaK-giai-ma" name="keyGiaiHoa">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="submit1" type="submit" >submit</button>
                    </td>
                    <td>
                        <button class="submit2" type="submit">submit</button>
                    </td>
                </tr>
                
            </table>
            
        </div>
    </div>
</body>
</html>