<!-- Add contact modal -->
<div class="modal fade" id="edit-person" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Edit person:</h5>
              <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST" action="./core/controllers/edit-contact.php">
              <input type="hidden" name="id" id="old-id">
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="first-name" class="col-form-label">First name:</label>
                        <input required type="text" name="fname" class="form-control" id="old-first-name">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="last-name" class="col-form-label">Last name:</label>
                        <input required type="text" name="lname" class="form-control" id="old-last-name">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="email-text" class="col-form-label">Email:</label>
                        <input required type="email" name="email" class="form-control" id="old-email-txt">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="adress-text" class="col-form-label">Adress:</label>
                        <input required type="text"  name="adress" class="form-control" id="old-adress-text">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="phone-text" class="col-form-label">Phone:</label>
                        <input required type="text" name="phone" class="form-control" id="old-phone-txt">
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="group-text" class="col-form-label d-block mb-1">Group:</label>
                        <input required class="shadow" type="radio" name="group" id="old-family" value="family" > <label for="family">Family</label>
                        <input required class="shadow" type="radio" name="group" id="old-friend" value="friend"> <label for="friend">Friend</label>
                        <input required class="shadow" type="radio" name="group" id="old-business" value="business"> <label for="business">Business</label>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <label for="note-text" class="col-form-label">Note:</label>
                        <textarea required class="form-control" id="old-note-text" name="note"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>