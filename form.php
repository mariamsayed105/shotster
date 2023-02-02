<div class="main">
    <div class="app">
        <link rel="stylesheet" href="form.css">
      <h2>STUDENT DETAIL FORM</h2>
      <form action="save.php" method="POST">
        <label>YOUR NAME: </label>
        <br>
        <input type="text" name="Sname" id="name" placeholder="ENTER YOUR NAME" required="required"><br><br>
        <label>YOUR EMAIL: </label>
        <br>
        <input type="email" name="email" id="name" placeholder="ENTER YOUR EMAIL" required="required"><br><br>
        <label>YOUR AGE: </label>
        <br>
        <input type="number" name="age" id="name" placeholder="ENTER YOU AGE" required="required"><br><br>
        <label>YOUR PHONE NUMBER: </label>
        <br>
        <input type="text" name="phone" id="name" placeholder="ENTER YOUR NUMBER" required="required"><br><br>
        <label>YOUR ADDRESS: </label>
        <br>
        <textarea row="4" col="15" id="name"  name="addr" placeholder="ADDRESS" required="required"></textarea><br><br>
        <label>GENDER: </label>
        <br>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" id="male">
        &nbsp;
        <span id="male">MALE</span>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" id="female">
        &nbsp;
        <span id="female">FEMALE</span>
        <br><br>
        <input type="submit" value="SUBMIT" name="submit" id="submit">
      </form>
    </div>
 </div>
</section>
    </div>
</section>