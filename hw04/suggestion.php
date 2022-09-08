<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>系務建言信箱表單</title>
    <link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
</head>
<?php
$name = $_POST["name"];
$identity = $_POST["identity"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$type = $_POST["type"];
$content = $_POST["content"];
$file = $_FILES['file']['name'] ;
echo "name:" . $name . "<BR>";
echo "identity:" . $identity . "<BR>";
echo "email:" . $email . "<BR>";
echo "subject:" . $subject . "<BR>";
foreach ($type as $typ) {
    echo "type:" . $typ . "<BR>";
}
echo "content:" . $content . "<BR>";
echo "file:" . $file . "<BR>";
$uploadfile = 'upload/'.$_FILES['file']['name']; echo "uploadfile: $uploadfile <BR>";
$upd_result = "$file"."--> 上傳成功. <BR>";
echo "upd_result : $upd_result";
?>
<body>
<header>
    <h1>系務建言信箱表單</h1>
</header>

<main id="contents">
    <form id="reaction" action="#" method="post" enctype="multipart/form-data">
        <p><strong><span class="require">*</span>為必填項目。</strong></p>
        <table border="1">
            <caption>系務建言信箱表單</caption>
            <tr>
                <th>建言者姓名*</th>
                <td><input type="text" name="name" value=<?php echo "$name" ?>></td>
            </tr>
            <tr>
                <th>建言者身份*</th>
                <td>
                    <input type="radio" name="identity" id="high school"
                           value="高中生" <?php if ($identity == "高中生") echo "checked" ?>>
                    <label for="high school">高中生</label>
                    <input type="radio" name="identity" id="university"
                           value="大學部" <?php if ($identity == "大學部") echo "checked" ?>>
                    <label for="university">大學部</label>
                    <input type="radio" name="identity" id="graduate"
                           value="研究所" <?php if ($identity == "研究所") echo "checked" ?>>
                    <label for="graduate">研究所</label>
                    <input type="radio" name="identity" id="parent"
                           value="家長" <?php if ($identity == "家長") echo "checked" ?>>
                    <label for="parent">家長</label>
                </td>
            </tr>
            <tr>
                <th>建言者信箱</th>
                <td>
                    <input type="email" name="email" value=<?php echo "$email"; ?>>
                </td>
            </tr>
            <tr>
                <th>建言主題*</th>
                <td>
                    <input type="text" name="subject" value=<?php echo "$subject"; ?>>
                </td>
            </tr>
            <tr>
                <th>建言類別</th>
                <td>
                    <input type="checkbox" name="type[]" id="type1" value="招生" <?php if (in_array("招生", $type)) {
                        echo "checked";
                    } ?>>
                    <label for="type1">招生</label>
                    <input type="checkbox" name="type[]" id="type2" value="課程" <?php if (in_array("課程", $type)) {
                        echo "checked";
                    } ?>>
                    <label for="type2">課程</label>
                    <input type="checkbox" name="type[]" id="type3" value="活動" <?php if (in_array("活動", $type)) {
                        echo "checked";
                    } ?>>
                    <label for="type3">活動</label>
                    <input type="checkbox" name="type[]" id="type4" value="空間" <?php if (in_array("空間", $type)) {
                        echo "checked";
                    } ?>>
                    <label for="type4">空間</label>
                    <input type="checkbox" name="type[]" id="type5" value="其他" <?php if (in_array("其他", $type)) {
                        echo "checked";
                    } ?>>
                    <label for="type5">其他</label>
            </tr>
            <tr>
                <th>建言內容</th>
                <td><textarea name="content" rows="5" cols="30"><?php echo "$content"; ?></textarea></td>
            </tr>
            <tr>
                <th>附加檔案*</th>
                <td><input type="file" name="file" > <?php echo "$file"; ?></td>
            </tr>
        </table>
        <div>
            <input type="reset" value="重置">
            <input type="submit" value="送出">
        </div>
    </form>
</main>
</body>
</html>