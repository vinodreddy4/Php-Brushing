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
        <div style=" background-color: beige; border-radious: 10px; border-color: black; height: 500px; margin: 25px; ">
            <div>
              <?php
              $kv_texts = kv_read_word('files/Vinod_alavala_CV.docx');
              if($kv_texts !== false) {		
                  echo nl2br($kv_texts);	
              }
              else {
                  echo 'Cant Read that file.';
              }
              ?>
</div>

            
            <div
                style=" background-color: beige; border-radious: 10px; border-color: black; height: 500px; margin: 25px; ">
                <div style="margin-left: 200px; ">
                    <h3>Please submit the following details and I will get back you soon.</h3>
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
                    <textarea></textarea>
                </div>
            </div>
        </div>
</body>

</html>