<div class="news-article">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Küldjün nekünk üzenetet</h3>
                        <form name="contacts-form" class="requires-validation" method="post" action="/sendcontactform" onsubmit="return validateForm()">

                            <div class="col-md-12" id="lastNameContainer">
                               <input class="form-control" type="text" name="last_name" placeholder="Vezetéknév">
                            </div>
                            
                            <div class="col-md-12" id="firstNameContainer">
                               <input class="form-control" type="text" name="first_name" placeholder="Keresztnév">
                            </div>

                            <div class="col-md-12" id="emailContainer">
                                <input class="form-control" type="text" name="email" placeholder="E-mail cím">
                            </div>

                            <div class="col-md-12" id="phoneContainer">
                                <input class="form-control" type="text" name="phone" placeholder="Telefonszám (formátum: +36XXXXXXXXX)">
                            </div>

                            <div class="col-md-12" id="messageContainer">
                               <input class="form-control" type="text" name="message" placeholder="Üzenet">
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