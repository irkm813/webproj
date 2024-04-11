<div class="news-article">
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Küldjün nekünk üzenetet</h3>
                        <form name="contacts-form" class="requires-validation" onsubmit="return validateContactsForm()" method="post" action="/sendcontactform" >

                            <div class="col-md-12" id="last_name_container">
                               <input class="form-control" type="text" name="last_name" placeholder="Vezetéknév">
                            </div>
                            
                            <div class="col-md-12" id="first_name_container">
                               <input class="form-control" type="text" name="first_name" placeholder="Keresztnév">
                            </div>

                            <div class="col-md-12" id="email_container">
                                <input class="form-control" type="text" name="email" placeholder="E-mail cím">
                            </div>

                            <div class="col-md-12" id="phone_container">
                                <input class="form-control" type="text" name="phone" placeholder="Telefonszám (formátum: +36XXXXXXXXX)">
                            </div>

                            <div class="col-md-12" id="message_container">
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