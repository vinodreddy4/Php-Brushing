<!DOCTYPE html>
<html>
<h3>Welcome to my portfolio: Vinod reddy alavala</h3>
<body>
    <div>
        <div style=" background-color: beige; height: 270px; border-radius: 10px; margin: 25px; ">
            <div style="width: 50%; float:left; height:220px; margin:10px">
                <h4>Name: Vinod reddy alavala</h4>
                <h4>Profession: Full stack PHP software developer</h4>
                <h4>Experience: 3 years</h4>
                <h4>Education: Masters in data science from university of hertfordshire</h4>
                <h4>Current locaation: Watford, United Kingdom</h4>
            </div>
            <div style="width: 40%; float:left; height:220px;  margin:10px">
                <img src="Pic.png" width="200px" height="220px">
            </div>
        </div>
        <div style=" background-color: beige; border-radious: 10px; border-color: black; height: 1750px; margin: 25px; ">
            <div>
                <?php
                $filename = "files/Vinod_alavala_CV.docx";
                function kv_read_word($filename)
                {
                    $kv_strip_texts = '';
                    $kv_texts = '';
                    if (!$filename || !file_exists($filename))
                        return false;
                   $zip = zip_open($filename);
                    if (!$zip || is_numeric($zip))
                        return false;
                    while ($zip_entry = zip_read($zip)) {
                        if (zip_entry_open($zip, $zip_entry) == FALSE)
                            continue;
                        if (zip_entry_name($zip_entry) != "word/document.xml")
                            continue;
                        $kv_texts .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
                        zip_entry_close($zip_entry);
                    }
                    zip_close($zip);
                    $kv_texts = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $kv_texts);
                    $kv_texts = str_replace('</w:r></w:p>', "\r\n", $kv_texts);
                    $kv_strip_texts = nl2br(strip_tags($kv_texts));
                    return $kv_strip_texts;
                }
                $kv_texts = kv_read_word('files/Vinod_alavala_CV.docx');
                if ($kv_texts !== false) {
                    echo nl2br($kv_texts);
                } else {
                    echo 'Cannot Read that file.';
                }
                ?>
            </div>
            <div
                style=" background-color: beige; border-radious: 10px; border-color: black; height: 500px; margin: 25px; ">
                <div style="margin-left: 200px; ">
                    <h3>Please submit the following details and I will get back you soon.</h3>
                    <form name="frmContact" method="post" action="contact.php">
                    <label>Name:</label>
                    <input type="text" , name="name" />
                    <br><br />
                    <label>Surname:</label>
                    <input type="text" , name="surname" />
                    <br><br />
                    <label>Phone:</label>
                    <input type="phone" , name="phone" />
                    <br><br />
                    <label>Email:</label>
                    <input type="email" , name="email" />
                    <br><br />
                    <label>Company:</label>
                    <input type="text" , name="company" />
                    <br><br />
                    <label>Comments(optional):</label>
                    <textarea id="txtcomments", name="txtcomments"></textarea>
                    <input type="submit" name="Submit" id="Submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
</body>
</html>