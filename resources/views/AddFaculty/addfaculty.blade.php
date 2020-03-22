<form class="" action="/faculty/add" method="post">
  @csrf
  <div class="form-group mx-sm-3 mb-2">
      <input style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text" id="name" name="name" placeholder="Name" required>
      <input style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="department" name="department" placeholder="department" required>
      <input style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="courses" name="courses" placeholder="courses" required>
      <input style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="area of expertise" name="areaofexpertise" placeholder="area of expertise" required>
      <input style="box-shadow: 1px 1px 4px #ccc; margin-top: 14px" class="form-control" type="text" id="professional interest" name="professionalInterest" placeholder="professional interest" required>
      <input class="btn btn-primary mb-2" style="margin-top: 14px" type="submit" name="submit-faculty" value="send faculty">
  </div>
</form>
