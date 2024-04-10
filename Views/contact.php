<div class="news-article">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Küldjün nekünk üzenetet</h3>
                        <form class="requires-validation" method="post" action="/sendcontactform" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="lastName" placeholder="Vezetéknév" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>
                            
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="firstName" placeholder="Keresztnév" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail cím" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="phone" name="phone" placeholder="Telefonszám" required>
                                 <div class="valid-feedback">Email field is valid!</div>
                                 <div class="invalid-feedback">Email field cannot be blank!</div>
                            </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="message" placeholder="Üzenet" required>
                               <div class="valid-feedback">Username field is valid!</div>
                               <div class="invalid-feedback">Username field cannot be blank!</div>
                            </div>

                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" name="invalidCheck" id="invalidCheck" required>
                          <label class="form-check-label">Megerősítem, hogy minden adat megfelel a valóságnak</label>
                         <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                        </div>
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Küldés</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>