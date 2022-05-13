<html>
        <link rel="stylesheet" href="style.css">
    <?php
    include('phpqrcode/qrlib.php');

    $tempDir = 'qr_images/';

    $codeContents = "http://localhost/Final_project/Base_web.php";

    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = '005_file_' . md5($codeContents) . '.png';

    $pngAbsoluteFilePath = $tempDir . $fileName;
    $urlRelativeFilePath = $tempDir . $fileName;

    // generating
    if (!file_exists($pngAbsoluteFilePath)) {
        QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 10);
    }
    // displaying
    echo '<img src="' . $urlRelativeFilePath . '" />';
    ?>
    <footer>
        <img src="https://www.cifpfbmoll.eu/wp-content/uploads/2019/07/logocifp.png" width="400" height="150" >
    </footer>

</html>